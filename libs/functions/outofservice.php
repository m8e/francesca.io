<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| OUTOFSERVICE MODE
|------------------------------------------------------------------------
*/


//Errors and default settings validator
if(is_numeric(fra_config["outofservice_mode"])) {
	if(fra_config["outofservice_mode"] == 0 || fra_config["outofservice_mode"] == 1) {
	} else {
		die("<b>Error!</b> Wrong or missing 'out of service mode' configuration.");
	}
} else {
	die("<b>Error!</b> Wrong or missing 'out of service mode' configuration.");
}
if(fra_config["outofservice_redirect"] != "") {
	if(!filter_var(fra_config["outofservice_redirect"], FILTER_VALIDATE_URL)) {
		die("<b>Error!</b> Wrong or missing 'out of service redirect' configuration.");
	}
}


//"out of service" process
if (fra_config["outofservice_mode"] == 1) {
	if(fra_config["preview_mode"] == 1 && in_array($_SERVER['REMOTE_ADDR'], fra_config["preview_ipallow"])) {
		//user is able to see the real website
	} else {
		if(fra_config["outofservice_redirect"] != "") {
			header("location: ".fra_config["outofservice_redirect"]);
			die();
		} else {
			$fra_config["controller"] 	= fra_config["outofservice_controller"];
			$fra_config["action"] 		= fra_config["outofservice_action"];
		}
	}
}

