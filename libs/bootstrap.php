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
| Init Page - libs/bootstrap.php
|------------------------------------------------------------------------
| This is the init page that initialize the main Francesca Framework
| including in the right order session, classes, configs and functions.
|
*/

//DEFAULT FRAMEWORK TEMPLATE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/template.php");


//COMPOSER CHECK
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/composer.php");


//WEB SERVER CHECK
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/server.php");


//PHP VERSION CHECK
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/php.php");


//UTILITIES FUNCTIONS
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/utilities.php");


//GLOBAL CONSTANTS
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/globals.php");


//ENVIRONMENT CONFIG
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/environment.php");


//ENVIRONMENT CONFIG
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/environment.php");


//FRAMEWORK GLOBAL TEMP CONFIG VAR
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/tempconfig.php");


//HTACCESS FUNCTIONS
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/htaccess.php");


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


//STATUS FORCED
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/forced.php");


//SERVER PATH VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/path.php");


//CURRENT ASSETS FOLDER VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/assets.php");


//CURRENT FILES PATH & FOLDER VAR DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/files.php");


//URL PARSEL
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/parsel.php");


//CONTROLLER DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/controller.php");


//ACTION DEFINE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/action.php");


//FTP SERVICE CHECK AND INIT
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/ftp.php");


//OUTOFSERVICE MODE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/outofservice.php");


//GOLIVE MODE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/golive.php");


//GODOWN MODE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/godown.php");


//DEFAULT CONTROL, ACTION
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/default.php");


//ERROR MANAGER
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/error.php");


//GET VARS
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/vars.php");


//CUSTOM CONFIG INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/custom.php");


//DEFINE DEFINITIVE "fra_var" GLOBAL COSTANT
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/global.php");


//TEST DB CONNECTION
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/dbcheck.php");


//PERMISSION FUNCTIONS
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/permission.php");


//CLASSES INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/class.php");


//CUSTOM CORE INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/core.php");


//CONTROLLERS INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/controllers.php");


//MIDDLEWARES INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/middlewares.php");


//MODELS INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/models.php");


//HTML MINIFY INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/minify.php");


//LAYOUTS / VIEWS INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/views.php");


//LOGS INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/logs.php");


//DEBUG INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/functions/debug.php");

