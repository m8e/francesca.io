<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| DEBUG TOOL INCLUDE
|------------------------------------------------------------------------
*/


//Errors and default settings validator
if(is_numeric(fra_var["debug_mode"])) {
	if(fra_var["debug_mode"] == 0 || fra_var["debug_mode"] == 1) {
		if(empty(fra_var["debug_ipallow"] != "")) {
			fra_template("<b>Error!</b> Wrong or missing 'debug allow ip' configuration.");
		}
	} else {
		fra_template("<b>Error!</b> Wrong or missing 'debug mode' configuration.");
	}
} else {
	die("<b>Error!</b> Wrong or missing 'debug mode' configuration.");
}


//Debug tool include
if(fra_var["debug_mode"] == 1 && in_array($_SERVER['REMOTE_ADDR'], fra_var["debug_ipallow"])) {
    require_once($_SERVER['DOCUMENT_ROOT']."/libs/debug.php");
}

