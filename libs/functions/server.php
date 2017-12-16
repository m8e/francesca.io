<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| WEB SERVER CHECKING
|------------------------------------------------------------------------
*/



//Web Server Check
if(strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') === FALSE) {
	die("<b>FATAL ERROR!</b> Francesca Framework requires Apache Web Server and you are running on: ".$_SERVER['SERVER_SOFTWARE']);
}
