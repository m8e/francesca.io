<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CURRENT DOMAIN VAR DEFINE
|------------------------------------------------------------------------
*/


//Current domain define
if(substr($_SERVER['SERVER_NAME'], 0, 4) != "www.") {
	$fra_config["domain"] 	= $_SERVER['SERVER_NAME'];
} else {
	$fra_config["domain"] 	= substr($_SERVER['SERVER_NAME'], 4);
}

