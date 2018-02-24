<?php

/*
IMPORTANT NOTICE!
DO NOT REMOVE OR EDIT THIS FILE
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

