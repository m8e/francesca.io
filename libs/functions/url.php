<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CURRENT URL VAR DEFINE
|------------------------------------------------------------------------
*/


//Current URL define
if($fra_config["ssl"]) {
	$fra_config["url"] 		= "https://".$_SERVER['SERVER_NAME'];
} else {
	$fra_config["url"]		= "http://".$_SERVER['SERVER_NAME'];
}

