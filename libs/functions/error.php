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

//404 error logs
function fra_error404_log() {
	if(fra_config["logs"] != 0) {
		$fra_log_datet 		= date('Y-m-d - H:i:s');
		$fra_log_wsurl 		= "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		$fra_log_usrip 		= $_SERVER['REMOTE_ADDR'];
		$fra_log_usrag 		= $_SERVER['HTTP_USER_AGENT'];
		$fra_log_varss 		= $_SESSION;
		$fra_log_varrq 		= $_REQUEST;
		
		$fra_log_file 		= $_SERVER['DOCUMENT_ROOT']."/logs/".date('Ymd')."_".$GLOBALS["fra_config"]["domain"]."_error.log";
		if(file_exists($fra_log_file)) {
			$fra_log_current = file_get_contents($fra_log_file);
		} else {
			$fra_log_current = "";
		}
		$fra_log_current   .= "". $fra_log_datet ."\n-----------------------------------------\nURL: ". $fra_log_wsurl . "\nERROR: 404\nUSER: ".$fra_log_usrip."\n".$fra_log_usrag."\n\nREQUEST:\n".print_r($fra_log_varrq, true)."\nSESSIONS:\n".print_r($fra_log_varss,true)."\n-----------------------------------------\n\n";
		file_put_contents($fra_log_file, $fra_log_current);
	} 
}


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
			header("HTTP/1.0 ".$_GET["fra_error"]." ERROR");   
			$fra_config["error"]	= $_GET["fra_error"];
		} else {
			header("HTTP/1.0 404 FILE NOT FOUND");
			fra_error404_log();
			fra_template_404();
		}
} else {
	if($fra_config["controller"] == fra_config["error_controller"] && $fra_config["action"] == fra_config["error_action"]) {
		header("HTTP/1.0 404 FILE NOT FOUND");
		fra_error404_log();
		fra_template_404();
	} else {
		$fra_config["error"]		= ""; 	//empty error var
	}
}


//Route View Safe
if(!file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/views/".$fra_config["controller"]."/".$fra_config["action"].".php") && !file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/middlewares/".$fra_config["controller"]."/".$fra_config["action"].".php")) {
	header("HTTP/1.0 404 FILE NOT FOUND");  
	fra_error404_log();
	fra_template_404();
}

