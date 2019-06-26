<?php 
$project_path = "C:\FreshDoc\Apache\sovkombank3\htdocs\\"; 
$origin_path = "c:\FreshDoc\Apache\htdocs\\"; 

// Это массив замен "селектор/свойство  => новое значение "
$arPar  = array(
		    array(
			"file_name" => "qd\modules\\1\components\doccontrol\public\default\styles\doccontrol-toolbar.css",
			"changes"   => array (
					 array (
						"selector" 	 => ".qd-app-toolbar > .DD-toolbar-flat__content",
						"propoperty" => "margin-left",
						"value" 	 => "300px;",
						// "add" 	     => "1",
					),	 
					 array (
						"selector" 	 => ".qd-app-toolbar > .DD-toolbar-flat__content",
						"propoperty" => "padding",
						"value" 	 => "1px;",
						// "add" 	     => "1",
					),	
					 array (
						"selector" 	 => ".qd-app-control-panel .DD-textedit",
						"propoperty" => "border",
						"value" 	 => "1px;",
					),	 
					 array (
						"selector" 	 => ".qd-app-control-panel .DD-textedit",
						"propoperty" => "outline",
						"value" 	 => "2px;",
					),				 
					
					
					
			),
			"insert_in_file" => array(
						//"after_selector" => ".qd-app-toolbar .DD-textedit",
						//"text_insert"    => " /* That text has been inserted by programm */ 
												/* and cooments */						
						//",

						),
			//"append_file"  => " /* this file was apended with text!!!  */ ", 

		    ),
		    //****************************************
		    array(
				"file_name" => "qd\modules\\1\components\doccontrol\public\default\styles\doccontrol-icons.css",
				"changes"   => array (), // Это изменения которые нужно сделать с существующеми параметрами 
				"insert_in_file" => array(), // Это какие втавки в файл нужно сделать после указанной секции  
				"append_file"  => "   
/*+IGOR*/
/*
.DD-button__action-target{
  background-color: white;
}


.qd-icon_logo {

  display: inline-block;
  width: 320px;
  margin: 0px;
  border:0px !important;
  
  background-image: url(/qd/templates/qd/images/skblogo250.jpg) !important;
  background-position: 0px center;

  
}

.qd-icon_logo:hover {
  background-color: yellow;

  border: 0px !important;
  top: 0px;
  bottom: 0px;
}
*/
/*-IGOR*/ ", 
			),

//**********************************

  array(
				"file_name" => "qd\public\\1\carcass\default\styles\carcass_buttons.css",
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					//.qd-carcass-download-button
					 array (
						"selector" 	 => ".qd-carcass-download-button",
						"propoperty" => "background-color",
						"value" 	 => "#EA555E; /*малиновый цвет кнопки скачать/*/",
					),	

				), 
				"insert_in_file" => array(), // Это какие вставки в файл нужно сделать после указанной секции  
				"append_file"  => "",

		), 
  array(
				"file_name" => "qd\public\\1\doccontrol\default\styles\doccontrol-toolbar.css",
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					//.qd-carcass-download-button
					 array (
						"selector" 	 => ".qd-app-toolbar > .DD-toolbar-flat__content",
						"propoperty" => "margin-left",
						"value" 	 => "300px",
						"add" 	     => "1",
					),	

				), 
				"insert_in_file" => array(), // Это какие вставки в файл нужно сделать после указанной секции  
				"append_file"  => "", // это допишет в конец файл

		),

 array(
				"file_name" => "qd\\templates\current_template\components\\foundation\css\\foundation.css",
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					//.qd-carcass-download-button
					 array (
						"selector" 	 => "button, .button",
						"propoperty" => "background-color",
						"value" 	 => "white",
						// "add" 	 => "1",
					),	

				), 
			//	"insert_in_file" => array(), // Это какие вставки в файл нужно сделать после указанной секции  
			//	"append_file"  => "",

		),


array(
				"file_name" => "qd\\templates\current_template\\themes\default\css\style.css",
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					//.qd-carcass-download-button
					 array (
						"selector" 	 => ".default-theme .document-title-row",
						"propoperty" => "font-size",
						"value" 	 => "30px;",
						// "add" 	 => "1",
					),	 
					 array (
						"selector" 	 => ".default-theme .document-title-row",
						"propoperty" => "font-family",
						"value" 	 => "'Bebas'",
						 "add" 	 => "1",
					),	

				), 
			//	"insert_in_file" => array(), // Это какие вставки в файл нужно сделать после указанной секции  
			//	"append_file"  => "",

		),
array(
				"file_name" => 'qd\modules\1\components\carcass\public\default\styles\carcass_buttons.css',
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					//.qd-carcass-download-button
					 array (
						"selector" 	 => ".qd-carcass-download-button",
						"propoperty" => "font-family",
						"value" 	 => "'Bebas'",
						 "add" 	 => "1",
					),						 
					 array (
						"selector" 	 => ".qd-carcass-download-button",
						"propoperty" => "font-size",
						"value" 	 => "200%",
						 "add" 	 => "1",
					),						 
					array (
						"selector" 	 => ".qd-carcass-download-button",
						"propoperty" => "line-height",
						"value" 	 => "10px",
						 "add" 	 => "1",
					),	 				
					array (
						"selector" 	 => ".qd-carcass-download-button",
						"propoperty" => "background-color",
						"value" 	 => "#EA555E",
						// "add" 	 => "1",
					),	 
					

				), 
			//	"insert_in_file" => array(), // Это какие вставки в файл нужно сделать после указанной секции  
			//	"append_file"  => "",

		),
array(
				"file_name" => 'qd\modules\1\components\catalog\public\default\css\catalog.css',
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					array (
						"selector" 	 => ".qd-catalog-level__title",
						"propoperty" => "color",
						"value" 	 => "#003791",
						//"add" 	     => "1",
					),				
					array (
						"selector" 	 => ".qd-catalog-level__title",
						"propoperty" => "font-family",
						"value" 	 => "'Bebas'",
						//"add" 	     => "1",
					),			
				), 
				"insert_in_file" => array(
						"after_selector" => ".qd-catalog__file",
						"text_insert"    => ' 
@font-face {
   font-family: Bebas;
   src: url("/BebasNeue Bold.ttf" );
}					
						',),

				//"append_file"  => "",

		),

array(
				"file_name" => 'qd\templates\qd\themes\default\css\style.css',
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					array (
						"selector" 	 => ".default-theme .document-title-row",
						"propoperty" => "font-family",
						"value" 	 => "'Bebas'",
						"add" 	     => "1",
					),				
					array (
						"selector" 	 => ".default-theme .document-title-row",
						"propoperty" => "font-size",
						"value" 	 => "30px;",
						//"add" 	     => "1",
					),			
				), 
				

		),



array(
				"file_name" => 'qd\modules\1\components\doccontrol\public\default\styles\doccontrol-icons.css',
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					array (
						//"selector" 	 => ".qd-catalog-level__title",
						//"propoperty" => "color",
						//"value" 	 => "#003791",
						//"add" 	     => "1",
					),				
					
				), 
				"insert_in_file" => array(
						"after_selector" => ".qd-icon_search",
						"text_insert"    => ' 
/*+IGOR*/
/*
.DD-button__action-target{
  background-color: white;
}


.qd-icon_logo {

  display: inline-block;
  width: 320px;
  margin: 0px;
  border:0px !important;
  
  background-image: url(/qd/templates/qd/images/skblogo250.jpg) !important;
  background-position: 0px center;

  
}
.qd-icon_logo:hover {
  background-color: yellow;

  border: 0px !important;
  top: 0px;
  bottom: 0px;
}
*/
/*-IGOR*/			
						',),

				//"append_file"  => "",

		),




array(
				"file_name" => '\qd\configs\syscfg.php',
			//	"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					
			//	), 
			//	"insert_in_file" => array(), // Это какие вставки в файл нужно сделать после указанной секции  
			 	"append_file"  => " \$qdconf['hide_auth_button'] = true; //IGOR  Это прячет кнопку авторизации ",

		),

array(
				"file_name" => 'qd\templates\current_template\header.php',
			//	"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					
			//	), 
			//	"insert_in_file" => array(), // Это какие вставки в файл нужно сделать после указанной секции  
			 	"append_file"  => '<?php 

define(\'SITE_TEMPLATE_PATH\', substr(QD\TEMPLATE_DIR, 0, -1));
?>

<style>
	#logoSKB{
	
	position: fixed;	 	
  	float: left;
  	width: 300px;
    margin: 5px 0px 0px 0px;
    border: 0px solid gray;
   /* text-align: center;*/
    background:  white;   
	z-index: 10000;
	}

	.fixedd {
      position: fixed;
      top: 0;
      left: 0;
      width: 280px;

    }
</style>


<div id="logoSKB">
	<img src="<?=SITE_TEMPLATE_PATH?>/images/skblogo.png " width=280 height="40" >
</div>


 ',

		),
/*


array(
				"file_name" => 'qd\templates\qd\components\foundation\css\foundation.css',
				"changes"   => array ( // Это изменения которые нужно сделать с существующеми параметрами 
					array (
						"selector" 	 => "button, .button",
						"propoperty" => "background-color",
						"value" 	 => "white",
						//"add" 	     => "1",
					),	
				), 
				

				//"append_file"  => "",

		),

*/

// копирование файлов 

   array(
   	'copy_file' => "1", 
   	'from' => "skblogo300.jpg", 
   	'to' =>'qd\templates\qd\images\skblogo300.jpg', 
   ),   
   array(
   	'copy_file' => "1", 
   	'from' => "favicon.ico" , 
   	'to'   => "favicon.ico" , 
   ),

   array(
   	'copy_file' => "1", 
   	'from' => 'BebasNeue Bold.ttf'  , 
   	'to'   => 'qd\templates\qd\fonts\sovkom\BebasNeue Bold.ttf', 
   ),   
   array(
   	'copy_file' => "1", 
   	'from' => 'BebasNeue Bold.ttf'  , 
   	'to'   => 'BebasNeue Bold.ttf', 
   ),   
   array(
   	'copy_file' => "1", 
   	'from' => 'BebasNeue Regular.ttf'  , 
   	'to'   => 'qd\templates\qd\fonts\sovkom\BebasNeue Regular.ttf', 
   ),
   array(
   	'copy_file' => "1", 
   	'from' => 'BEBAS.TTF' , 
   	'to'   => 'qd\templates\qd\fonts\BEBAS.TTF', 
   ),
   array(
   	'copy_file' => "1", 
   	'from' => 'skblogo.png' , 
   	'to'   => 'qd\templates\qd\images\skblogo.png', 
   ),
   array(
   	'copy_file' => "1", 
   	'from' => 'BEBAS_.TTF' , 
   	'to'   => 'qd\templates\qd\fonts\sovkom\BEBAS_.TTF', 
   ),
   array(
   	'copy_file' => "1", 
   	'from' => 'BebasNeue Book.ttf' , 
   	'to'   => 'qd\templates\qd\fonts\sovkom\BebasNeue Book.ttf', 
   ),
   array(
   	'copy_file' => "1", 
   	'from' => 'BebasNeue Light.ttf' , 
   	'to'   => 'qd\templates\qd\fonts\sovkom\BebasNeue Light.ttf', 
   ),  
   array(
   	'copy_file' => "1", 
   	'from' => 'BebasNeue Regular_0.otf' , 
   	'to'   => 'qd\templates\qd\fonts\sovkom\BebasNeue Regular_0.otf', 
   ),


// qd\templates\qd\fonts\sovkom 
//"c:\FreshDoc\utils\cssChanger\BebasNeue Bold.ttf" 
// "c:\FreshDoc\utils\cssChanger\BebasNeue Regular.ttf" 		 

);
