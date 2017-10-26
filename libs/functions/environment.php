<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| ENVIRONMENT CONFIG INCLUDE
|------------------------------------------------------------------------
*/


//Environment config include
if(substr($_SERVER['SERVER_NAME'], 0, 4) == "www.") {
	if(file_exists($_SERVER['DOCUMENT_ROOT']."/envs/".$_SERVER['SERVER_NAME'].".php")) {
		require_once($_SERVER['DOCUMENT_ROOT']."/envs/".$_SERVER['SERVER_NAME'].".php");
	} else {
		if(file_exists($_SERVER['DOCUMENT_ROOT']."/envs/".substr($_SERVER['SERVER_NAME'], 4).".php")) {
			require_once($_SERVER['DOCUMENT_ROOT']."/envs/".substr($_SERVER['SERVER_NAME'], 4).".php");
		} else {
			if(file_exists($_SERVER['DOCUMENT_ROOT']."/envs/default.php")) {
				require_once($_SERVER['DOCUMENT_ROOT']."/envs/default.php");
			} else {
				die("<b>FATAL ERROR!</b> Environment Configuration File Not Found!");
			}
		}
	}
} else {
	if(file_exists($_SERVER['DOCUMENT_ROOT']."/envs/".$_SERVER['SERVER_NAME'].".php")) {
		require_once($_SERVER['DOCUMENT_ROOT']."/envs/".$_SERVER['SERVER_NAME'].".php");
	} else {
		if(file_exists($_SERVER['DOCUMENT_ROOT']."/envs/default.php")) {
				require_once($_SERVER['DOCUMENT_ROOT']."/envs/default.php");
			} else {
				die("<b>FATAL ERROR!</b> Environment Configuration File Not Found!");
			}
	}
}

