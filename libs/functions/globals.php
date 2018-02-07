<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| GLOBALS INCLUDE
|------------------------------------------------------------------------
*/


//Globals file include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/globals.php")) {
		require_once($_SERVER['DOCUMENT_ROOT']."/globals.php");
	} else {
		fra_template("<b>Error!</b> Globals file does not exist!");
	}

