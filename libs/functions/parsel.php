<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| URL PARSEL
|------------------------------------------------------------------------
*/


//URL paths parsel
$fra_config["url_paths"] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$fra_config["url_paths"] = preg_replace("/[^a-zA-Z0-9\/_|+-.@]/", '', $fra_config["url_paths"]); //alternative: ([^a-z0-9\/])
$fra_config["url_paths"] = preg_split("/[\/]+/", $fra_config["url_paths"]);

