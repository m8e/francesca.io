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

if(PHP_SAPI == 'cli') {


	function xcopy($src, $dest) {
	    foreach (scandir($src) as $file) {
	        if (!is_readable($src . '/' . $file)) continue;
	        if (is_dir($src .'/' . $file) && ($file != '.') && ($file != '..') ) {
	            mkdir($dest . '/' . $file);
	            xcopy($src . '/' . $file, $dest . '/' . $file);
	        } else {
	            copy($src . '/' . $file, $dest . '/' . $file);
	        }
	    }
	}

	xcopy(__DIR__ ."/apps/default", __DIR__ ."/test");

}
