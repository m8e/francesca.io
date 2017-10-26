<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| DEFAULT CONTROLLER & ACTION
|------------------------------------------------------------------------
*/


//Error check
if(fra_config["default_redirect"] != "") {
	if(!filter_var(fra_config["default_redirect"], FILTER_VALIDATE_URL)) {
		die("<b>Error!</b> Wrong or missing 'default redirect' configuration.");
	}
}


//Error settings if structure controller/action is not complete
if($fra_config["controller"] != "" && $fra_config["action"] == "") {
	$fra_config["controller"] 	= fra_config["error_controller"];
	$fra_config["action"] 		= fra_config["error_action"];
	if(fra_config["default_redirect"] != "") {
		header("location: ".fra_config["error_redirect"]);
		die();
	}
}


//Default controller and action settings
if($fra_config["controller"] == "" && $fra_config["action"] == "") {
	$fra_config["controller"] 	= fra_config["default_controller"];
	$fra_config["action"] 		= fra_config["default_action"];
	if(fra_config["default_redirect"] != "") {
		header("location: ".fra_config["default_redirect"]);
		die();
	}
}

