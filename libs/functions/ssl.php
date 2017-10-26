<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CURRENT SSL STATUS
|------------------------------------------------------------------------
*/


//Current SSL status verify
$fra_config["ssl"] = false;
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $fra_config["ssl"] = true;
}
elseif(!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $fra_config["ssl"] = true;
}

