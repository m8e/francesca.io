<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| FTP SERVICE CHECK AND CONNECTION INIT
|------------------------------------------------------------------------
*/


//FTP Check and connection init
if($fra_config["ftp_status"] == 1) {
    if($fra_config["ftp_ssl"] == 1) {
        $fra_ftp = ftp_ssl_connect($fra_config["ftp_host"], $fra_config["ftp_port"]);
    } else {
        $fra_ftp = ftp_connect($fra_config["ftp_host"], $fra_config["ftp_port"]);
    } 
    define("fra_ftp", $fra_ftp);
    if(!fra_ftp) {
        fra_template("<b>Error!</b> Wrong or missing 'FTP connection' configuration.");
    }
    $fra_ftp_login = ftp_login(fra_ftp, $fra_config["ftp_user"], $fra_config["ftp_pass"]);
    define("fra_ftp_login", $fra_ftp_login);
    if(!fra_ftp_login) {
        fra_template("<b>Error!</b> Wrong or missing 'FTP connection' username or password.");
    }
}