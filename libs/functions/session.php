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
	fra_template("<b>FATAL ERROR!</b> there was an error in PHP Session starter process!");
} else {
	unset($_SESSION["fra_session_test"]);
}

