<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2018, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| APP ENDING INCLUDE
|------------------------------------------------------------------------
*/


//MVC common ending inclue
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/ending.php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/ending.php");
}

