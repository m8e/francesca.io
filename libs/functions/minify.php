<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| HTML MINIFY
|------------------------------------------------------------------------
*/


//HTML minifier function
if($fra_config["minify"] == 1) {
	ob_start("fra_minify");
}

