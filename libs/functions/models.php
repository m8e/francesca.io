<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| MODELS INCLUDE
|------------------------------------------------------------------------
*/


//Application models include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/models/".fra_var["controller"]."/".fra_var["action"].".php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/models/".fra_var["controller"]."/".fra_var["action"].".php");
}

