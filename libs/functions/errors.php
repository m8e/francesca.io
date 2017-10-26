<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| PHP ERRORS INI SET
|------------------------------------------------------------------------
*/


//Errors and default settings validator
if(is_numeric(fra_config["debug_mode"])) {
	if(fra_config["debug_mode"] == 0 || fra_config["debug_mode"] == 1) {
		if(empty(fra_config["debug_ipallow"] != "")) {
			die("<b>Error!</b> Wrong or missing 'debug allow ip' configuration.");
		}
	} else {
		die("<b>Error!</b> Wrong 'debug mode' configuration format");
	}
	if(fra_config["debug_inierror"] == 0 || fra_config["debug_inierror"] == 1) {
		if(empty(fra_config["debug_ipallow"] != "")) {
			die("<b>Error!</b> Wrong or missing 'debug allow ip' configuration.");
		}
	} else {
		die("<b>Error!</b> Wrong or missing 'debug php ini error' configuration.");
	}
} else {
	die("<b>Error!</b> Wrong or missing 'debug mode' configuration.");
}


//PHP ini errors view include
if (fra_config["debug_mode"] == 1 && fra_config["debug_inierror"] == 1 && in_array($_SERVER['REMOTE_ADDR'], fra_config["debug_ipallow"])) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(0);
}

