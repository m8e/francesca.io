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
| Tasks paage - libs/tasks.php
|------------------------------------------------------------------------
| This is the task init page that initialize the Francesca Framework cron
| including all framework functions.
|
*/


//SESSION START
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/session.php");


//GLOBAL COSTANTS
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/globals.php");


//ENVIRONMENT CONFIG
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/environment.php");


//FRAMEWORK GLOBAL TEMP CONFIG VAR
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/tempconfig.php");


//SET GLOBAL TIMEZONE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/timezone.php");


//PHP ERRORS INI SET
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/errors.php");


//CURRENT SSL STATUS
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/ssl.php");


//CURRENT URL VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/url.php");


//CURRENT URI VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/uri.php");


//CURRENT DOMAIN VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/domain.php");


//CURRENT ASSETS FOLDER VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/assets.php");


//CURRENT FILES PATH & FOLDER VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/files.php");


//FTP SERVICE CHECK AND INIT
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/ftp.php");


//CUSTOM CONFIG INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/custom.php");


//DEFINE DEFINITIVE "fra_var" GLOBAL CONSTANT
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/global.php");


//CLASSES INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/class.php");


//CUSTOM CORE INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/core.php");


//CRON ENGINE INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/cron.php");


//LOGS INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/logs.php");


//DEBUG INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/debug.php");

