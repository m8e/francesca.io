<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| STATUS FORCED
|------------------------------------------------------------------------
*/


//SSL forced
if(is_numeric(fra_config["ssl_mode"])) {
	if(fra_config["ssl_mode"] == 0 || fra_config["ssl_mode"] == 1) {
		if(fra_config["ssl_mode"] == 1 && !$fra_config["ssl"]) {
			header("location: https://".$_SERVER['SERVER_NAME']."".$_SERVER['REQUEST_URI']);
			die();
		}
	} else {
		die("<b>Error!</b> Wrong or missing 'ssl mode' configuration.");
	}
} else {
	die("<b>Error!</b> Missing or missing 'ssl mode' configuration.");
}


//WWW or NO WWW forced
if(is_numeric(fra_config["www_mode"])) {
	if(fra_config["www_mode"] == 0 || fra_config["www_mode"] == 1 || fra_config["www_mode"] == 2) {
		if(fra_config["www_mode"] == 1 && substr($_SERVER['SERVER_NAME'], 0, 4) != "www.") {
			if($fra_config["ssl"]) {
				header("location: https://www.".$fra_config["domain"]."".$_SERVER['REQUEST_URI']);
			} else {
				header("location: http://www.".$fra_config["domain"]."".$_SERVER['REQUEST_URI']);
			}
		}
		if(fra_config["www_mode"] == 2 && substr($_SERVER['SERVER_NAME'], 0, 4) == "www.") {
			if($fra_config["ssl"]) {
				header("location: https://".$fra_config["domain"]."".$_SERVER['REQUEST_URI']);
			} else {
				header("location: http://".$fra_config["domain"]."".$_SERVER['REQUEST_URI']);
			}
		}
	} else {
		die("<b>Error!</b> Missing or missing 'www mode' configuration.");
	}
} else {
	die("<b>Error!</b> Missing or missing 'www mode' configuration.");
}

