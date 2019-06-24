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
				"append_file"  => "",

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
						"value" 	 => "24px",
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


// qd\templates\qd\fonts\sovkom 
//"c:\FreshDoc\utils\cssChanger\BebasNeue Bold.ttf" 
// "c:\FreshDoc\utils\cssChanger\BebasNeue Regular.ttf" 		 

);
