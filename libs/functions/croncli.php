<?php


/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CRON CLI ENGINE
|------------------------------------------------------------------------
*/

$url = $argv[1]."/cron.php";
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch);
echo "\n*** running Francesca Framework cron tasks for ".$argv[1]." host ***\n\n";
echo $output; 
echo "\n\n*** stopping Francesca Framework cron tasks for ".$argv[1]." host ***\n\n";
curl_close($ch);
