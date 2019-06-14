<?php 
$project_path = "C:\FreshDoc\Apache\sovkombank3\htdocs"; 
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
					 array (
						"selector" 	 => ".qd-app-control-panel .DD-textedit",
						"propoperty" => "NewPoperty",
						"value" 	 => "new Value;",
						"add" 	     => "1",
					),			 
					 array (
						"selector" 	 => ".qd-complex-button .DD-button__icon + .DD-button__caption",
						"propoperty" => "NewPoperty",
						"value" 	 => "new Value;",
						"add" 	     => "1",
					),
					 array (
						"selector" 	 => ".qd-app-toolbar .qd-button_auth:not(.DD-minified) .DD-button__icon",
						"propoperty" => "NewPoperty3",
						"value" 	 => "new Value3;",
						"add" 	     => "1",
					),
			),
			"insert_in_file" => array(
						"after_selector" => ".qd-app-toolbar .DD-textedit",
						"text_insert"    => " /* That text has been inserted by programm */ 
												/* and cooments */						
						",

						),
			"append_file"  => " /* this file was apended with text!!!  */ ", 

		    ),
		    array(
				"file_name" => "qd\modules\\1\components\doccontrol\public\default\styles\doccontrol-icons.css",
				//"file_name" => "qd\modules\\1\components\doccontrol\public\default\styles\doccontrol-toolbar.css",

				"changes"   => array (),
				"insert_in_file" => array(),
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
		 

);
