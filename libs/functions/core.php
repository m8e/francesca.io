<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CUSTOM CORE INCLUDE
|------------------------------------------------------------------------
*/


//Application libraries autoload include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/libraries/autoload.php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/libraries/autoload.php");
} else {
	fra_template("<b>Error!</b> Missing libraries autoload file into current app folder.");
}


//Application core include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/core.php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/core.php");
}

