<?php

/*
| Francesca Framework
| https://francesca.io
| Version 0.9
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|
|
|------------------------------------------------------------------------
| Autoload Page - libs/vendors/autoload.php
|------------------------------------------------------------------------
| This page let to autoload specific classes based on Nameserver requests
|
*/


spl_autoload_register(function($className) {
/*
|------------------------------------------------------------------------
| spl_autoload_register classes
|------------------------------------------------------------------------
| This function include the required class file
*/
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    require $fileName;
});

