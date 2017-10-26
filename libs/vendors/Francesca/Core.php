<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
*/


namespace Francesca;


class Core {
/*
|------------------------------------------------------------------------
| Core Class
|------------------------------------------------------------------------
| The Francesca/Core Class is the main class of the framework that init
| all framework children classes with the Singleton Pattern Method.
*/
    
    //Singleton algorith
    public static function instance() {      
        static $fra_core_instance = false;      
        if( $fra_core_instance === false ) {
            $fra_core_instance = new static();
        }
        return $fra_core_instance;
    }
    private function __construct() {}
    private function __clone() {}
    private function __sleep() {}
    private function __wakeup() {}
}

