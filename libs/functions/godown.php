<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| GODOWN MODE
|------------------------------------------------------------------------
*/


//Errors and default settings validator
if(is_numeric(fra_config["godown_mode"])) {
	if(fra_config["godown_mode"] == 0 || fra_config["godown_mode"] == 1) {
	} else {
		die("<b>Error!</b> Wrong or missing 'go down mode' configuration.");
	}
	if(fra_config["godown_mode"] == 1 && !fra_datevalidation(fra_config["godown_date"])) {
		die("<b>Error!</b> Wrong or missing 'go down date' configuration.");
	}
} else {
	die("<b>Error!</b> Wrong or missing 'go down mode' configuration.");
}
if(fra_config["godown_redirect"] != "") {
	if(!filter_var(fra_config["godown_redirect"], FILTER_VALIDATE_URL)) {
		die("<b>Error!</b> Wrong or missing 'go down redirect' configuration.");
	}
}


//Date verification and "godown" process
if (fra_config["godown_mode"] == 1 && fra_config["godown_date"] < date('Y-m-d H:i:s')) {
	if(fra_config["preview_mode"] == 1 && in_array($_SERVER['REMOTE_ADDR'], fra_config["preview_ipallow"])) {
		//user is able to see the real website
	} else {
		if(fra_config["godown_redirect"] != "") {
			header("location: ".fra_config["godown_redirect"]);
			die();
		} else {
			$fra_config["controller"] 	= fra_config["godown_controller"];
			$fra_config["action"] 		= fra_config["godown_action"];
		}
	}
}

