<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| FRAMEWORK SERVER SESSION START
|------------------------------------------------------------------------
*/


//Session start
ini_set("session.cookie_httponly", True);
session_start();
session_regenerate_id();


//Session testing
$_SESSION["fra_session_test"] = "ThisIsATest!";
$fra_session_test = $_SESSION["fra_session_test"];
if($fra_session_test != "ThisIsATest!") {
	die("<b>FATAL ERROR!</b> PHP session is not enable on this server or there was an error in session starter process!");
} else {
	unset($_SESSION["fra_session_test"]);
}

