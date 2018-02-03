<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| MIDDLEWARES INCLUDE
|------------------------------------------------------------------------
*/


//Application main middleware include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/middlewares/".fra_var["controller"].".php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/middlewares/".fra_var["controller"].".php");
}


//Application middlewares include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/middlewares/".fra_var["controller"]."/".fra_var["action"].".php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/middlewares/".fra_var["controller"]."/".fra_var["action"].".php");
}

