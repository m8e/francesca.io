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
| Cron Job - cron.php
|------------------------------------------------------------------------
| If you need use schelude jobs you have to config you server cron tab
| with a minute call to this page (domain.xyz/cron.php).
| All tasks istructions will be put into respective 1m.php, 1h.php or
| 1d.php files in app tasks folder.
|
*/



//FRANCESCA.IO FRAMEWORK TASKS SCRIPT INCLUDE
require_once($_SERVER['DOCUMENT_ROOT']."/libs/tasks.php");

