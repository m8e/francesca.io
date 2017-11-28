<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CUSTOM CONFIG INCLUDE
|------------------------------------------------------------------------
*/


//Initial and custom config vars merge
$fra_config = fra_config + $fra_config;


//Errors and default settings validator
if($fra_config["mail_from"] == "" && $fra_config["mail_status"] == 1) {
	die("<b>Error!</b> Wrong or missing 'mail' configuration.");
}
if($fra_config["mail_name"] == "" && $fra_config["mail_status"] == 1) {
	$fra_config["mail_name"] = $fra_config["mail_from"];
}
if(is_numeric($fra_config["logs"])) {
	if($fra_config["logs"] == 0 || $fra_config["logs"] == 1 || $fra_config["logs"] == 2) { 
	} else {
		die("<b>Error!</b> Wrong or missing 'logs' configuration.");
	}
} else {
	die("<b>Error!</b> Wrong or missing 'logs' configuration.");
}
if(is_numeric($fra_config["minify"])) {
	if($fra_config["minify"] == 0 || $fra_config["minify"] == 1) {
	} else {
		die("<b>Error!</b> Wrong or missing 'minify' configuration.");
	}
} else {
	die("<b>Error!</b> Wrong or missing 'minify' configuration.");
}
if(is_numeric($fra_config["preview_mode"])) {
	if($fra_config["preview_mode"] == 0 || $fra_config["preview_mode"] == 1) {
	} else {
		die("<b>Error!</b> Wrong or missing 'preview mode' configuration.");
	}
} else {
	die("<b>Error!</b> Wrong or missing 'preview mode' configuration.");
}

//Global var define
define("fra_var", $fra_config);

