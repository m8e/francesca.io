<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|
|
|------------------------------------------------------------------------
| Cli manager - cli.php
|------------------------------------------------------------------------
| You can use php cli "special commands" to manage hostnames or create
| envs or apps into Francesca Framework.
|
*/

//CLI CHECK
if(PHP_SAPI == 'cli') {

	//FRANCESCA.IO FRAMEWORK CLI SCRIPTS INCLUDE
	require(__DIR__ ."/libs/functions/cli.php");

} else {

	//HTTP MESSAGGE
	require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/template.php");
	fra_template("<b>ERROR!</b> CLI tools are not enable by HTTP requests!");

}
