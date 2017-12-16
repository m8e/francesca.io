<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| FRAMEWORK GLOBAL TEMP CONFIG VAR
|------------------------------------------------------------------------
*/


//Temp config costant define
define("fra_config", $fra_config);


//Main folder var validation and error
if(fra_config["folder"] == "") { 
	fra_template("<b>Error!</b> Wrong or missing 'folder' configuration.");
}

