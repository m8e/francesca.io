<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| ERROR MANAGER
|------------------------------------------------------------------------
*/


//Error check
if(fra_config["error_redirect"] != "") {
	if(!filter_var(fra_config["error_redirect"], FILTER_VALIDATE_URL)) {
		fra_template("<b>Error!</b> Wrong or missing 'error redirect' configuration.");
	}
}


//Error manager
if($_GET["fra_error"] != "" || (!file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/middlewares/".$fra_config["controller"]."/".$fra_config["action"].".php") && !file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/views/".$fra_config["controller"]."/".$fra_config["action"].".php"))) {
		if(fra_config["error_redirect"] != "") {
			header("location: ".fra_config["error_redirect"]);
			die();
		}
		$fra_config["controller"] 	= fra_config["error_controller"];
		$fra_config["action"] 		= fra_config["error_action"];
		if(isset($_GET["fra_error"])) {
			$fra_config["error"]	= $_GET["fra_error"];
		} else {
			$fra_config["error"]	= 404;
		}
} else {
	if($fra_config["controller"] == fra_config["error_controller"] && $fra_config["action"] == fra_config["error_action"]) {
		$fra_config["error"]		= 404;
	} else {
		$fra_config["error"]		= ""; 	//empty error var
	}
}


//Route View Safe
if(!file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/views/".$fra_config["controller"]."/".$fra_config["action"].".php") && !file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/middlewares/".$fra_config["controller"]."/".$fra_config["action"].".php")) {
	fra_template_404();
}
