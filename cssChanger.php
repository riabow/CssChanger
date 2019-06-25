<?php 



//  Данный модуль открывает css ищет селектор и правило и меняет правило согласно настройке 

include "settings.php";

$Ch = new CssChanger();

 $Ch->revert($arPar, $project_path, $origin_path );
  $Ch->start($arPar, $project_path);
 //$Ch->only_copy($arPar, $project_path);

class CssChanger{

	function revert($arPar, $project_path , $origin_path){
		foreach ($arPar as $key => $ChangeSet) {
			if (isset($ChangeSet['file_name'])){
				$this->copyFile($origin_path.$ChangeSet['file_name'], $project_path.$ChangeSet['file_name']);
			}
		}	
	}


	function only_copy($arPar, $project_path ){
		foreach ($arPar as $key => $ChangeSet) {
			if (isset($ChangeSet['copy_file'])){
				$this->copyFile($ChangeSet['from'], $project_path.$ChangeSet['to']);
				continue;
			}
		}	
	}	

	function start($arPar, $project_path ){

		foreach ($arPar as $key => $ChangeSet) {
			// print_r($ChangeSet);	die;

			if (isset($ChangeSet['copy_file'])){
				$this->copyFile($ChangeSet['from'], $project_path.$ChangeSet['to']);
				continue;
			}

			 $this->change_file($ChangeSet, $project_path );
		}
	}


	function processLine($line, $out_handle ){
	    $this->CommentFlag += substr_count($line, "/*");
	    $this->CommentFlag -= substr_count($line, "*/");
		if ($this->CommentFlag) {
				$this->writeOut($out_handle, $line, $this->ln, $this->BraceFlag, $this->CommentFlag  );
				return;
		}
		$line = trim($line);
		$this->BraceFlag += substr_count($line, "{");
	    $this->BraceFlag -= substr_count($line, "}");
	    if ($this->BraceFlag==0) { //уровень селектора 
	    	$prevSelctor = $this->selector; 
	    	$this->selector = $line;
	    	$this->writeOut($out_handle,  "$line", $this->ln, $this->BraceFlag, $this->CommentFlag  );


	    	if (isset($this->insert_in_file['after_selector'])){
	    	  	if ($this->insert_in_file['after_selector']==$prevSelctor ){
	    	  		$this->writeOut($out_handle,  $this->insert_in_file['text_insert'] , $this->ln, $this->BraceFlag, $this->CommentFlag  );
	    	  		unset($this->insert_in_file);	
	    	  	}
	    	}

	    	return;
	    }
	    if ($this->BraceFlag==1) { //" Это раздел правил между фигурными скобками "
	    	$PropVal = explode(":", $line);
	    	if (sizeof($PropVal)==1){ // в строке нет двоеточия - пропускаем 
	    		$this->writeOut($out_handle, $line, $this->ln, $this->BraceFlag, $this->CommentFlag  );
	    	 	return; 
	    	} // no 
	    	$prop=$PropVal[0]; // свойство 
	    	$val = $PropVal[1]; // и его значение 

	    	$found = false ; 
	    	foreach ($this->changes as $ch_key=>$ch_value) {
	    		if  ($ch_value['selector'] == $this->selector) { // есть такой selector
		    		if ($ch_value['propoperty'] == $prop ) { // есть такое свойство 
		    			$newVal = trim($ch_value['value']);
		    			// important to have a ; at the end of $newVal! 
		    			if (substr($newVal, -1)!=";") { $newVal.=";";}
		    			
		    			$this->writeOut($out_handle,  "    $prop : $newVal /* OLdVal:$val */", $this->ln, $this->BraceFlag, $this->CommentFlag  ,1);
		    			$found=true;
		    			return;
		    		}
		    		if (isset($ch_value['add'] )) {
		    			$AddVal =$ch_value['value'];
		    			$AddProp =$ch_value['propoperty'];

		    			$this->writeOut($out_handle,  "    $AddProp : $AddVal; /* This is added value */", $this->ln, $this->BraceFlag, $this->CommentFlag  ,1);
		    			unset($this->changes[$ch_key]);
		    		}
	    		}
	    	}

	    	if (!$found) { // не нашли правило и свойство прото добавим что есть  
	    		$this->writeOut($out_handle,  "    $line", $this->ln, $this->BraceFlag, $this->CommentFlag ,1 );
	    	}
		}
	} // preccesLine 

	function change_file($aPar, $project_path ) {
		if (!isset($aPar['file_name'])) return; // файл не указан  нечего не делаем . 

		$in_file = $project_path."\\".$aPar['file_name'];
		$out_file = $in_file.".out";
		$this->changes = $aPar['changes'];
		$this->insert_in_file = $aPar['insert_in_file'];
		$this->append_file = $aPar['append_file'];

		$in_handle = fopen($in_file, "r");
		$out_handle = fopen($out_file, "w+");

		if (!$out_handle) {
			echo"\nCan`t write to $out_file \n " ;
			return;
		}

		if (!$in_handle) {
			echo "\nError opening file $in_file \n";
			return;
		}

		$this->ln=0;
		$this->BraceFlag = 0;
		$this->CommentFlag = 0;
		$this->selector ="";
	    while (($line = fgets($in_handle)) !== false) {
	    	$line=trim($line);
	    	$line = str_replace("{", "\n{\n", $line);
	    	$line = str_replace("}", "\n}\n", $line);
    		
    		$line = str_replace("/*", "\n/*\n", $line);
	    	$line = str_replace("*/", "\n*/\n", $line);
	    	$line = str_replace(";", ";\n", $line);

	    	$line = trim($line);
	    	if ($line=="") continue; //пустые строки пропустим 

	    	$aLane = explode("\n", $line);
	    	foreach ($aLane as $key => $cLine) {
	    		$this->ln++;
	    		$this->processLine($cLine, $out_handle );
	    	}
	    }
	    if (isset($aPar['append_file'])) { 
	    // Здесь будет дописываться бесконечно текст и надо это как-то решить.
	    // например если текст уже есть в файле то не нужно его дописывать ...
	    // или нужно дописывать - решил оставить так.	
	    	$this->writeOut($out_handle,  $aPar['append_file'] , $this->ln, $this->BraceFlag, $this->CommentFlag  );
	    }
		fclose($in_handle);
		fclose($out_handle);
		// составим имя бак файла  
		$bakFileName = $in_file.".bak"; 
		$Bakprefix=0;
		while (file_exists($bakFileName.$Bakprefix)) {
			 echo "Bakprefix $Bakprefix\n ";
			 $Bakprefix++;
		}
		$bakFileName.=$Bakprefix;

		if (true) { // ( rename($in_file, $bakFileName ) ) {
			 rename($out_file, $in_file ); 
		}

		$this->CorrectCurlBraces($in_file);

	}

	function CorrectCurlBraces($file){
		$f = file_get_contents($file);
		$f = str_replace("\n{\n", " {\n", $f);
		file_put_contents($file, $f); 
	}

	function copyFile($sorce, $destg){
		echo "*************\n";
		if (!file_exists($sorce)) {
			echo "\n File do NOT  exist $sorce \n";
		}
		

		if (! is_readable($sorce)) {
			echo "\n File is_NOT readable $sorce \n\n";
		}


		$matches = explode ("\\",$destg);
		$filename = $matches[sizeof($matches)-1];
		$dir = str_replace($filename, "", $destg );
		if (is_dir($dir)) {
			// echo" good dir $dir \n";
		}else {
			//echo "BAD dir $dir \n "; 
			if ( !mkdir($dir)) { 
				echo("can NOT create dir $dir ");
			};
		}

		


		$res =  copy(''.$sorce.'', ''.$destg.'');
		if ($res ) {
			echo "file copyed OK \n $sorce to $destg \n";
		} else {
			echo " Error copy file \n $sorce \n to \n $destg \n\n\n "; 
		}	
	}

	function writeOut($handle , $line,  $ln, $BraceFlag, $CommentFlag , $echo=true ){
	   fwrite($handle, $line."\n" );
	   if ($echo) print "$ln $BraceFlag $CommentFlag: $line\n\r";
	}
	
} // class 




