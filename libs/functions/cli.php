<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CLI FUNCTIONS
|------------------------------------------------------------------------
*/


//NO ERRORS DISPLAY
error_reporting(0);
ini_set('display_errors', 0);

//CLI FUNCTIONS

//Massive copy function
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

//Empty dir function
function emptydir($dirpath, $ext) {
  $handle = opendir($dirpath);
  while (($file = readdir($handle)) !== false) {
    if (substr($file, -strlen($ext)) == $ext) {
      @unlink($dirpath . $file);
    }
  }
  closedir($handle);
}


if($argv[1] == "") {
	echo "\n#########################################\n";
	echo "##                                    ##\n";
	echo "## WELCOME IN FRANCESCA FRAMEWORK CLI ##\n";
	echo "##                                    ##\n";
	echo "## 		Digit 'php fra help'		##\n";
	echo "## 	   for fra commands list 		##\n";
	echo "##                                    ##\n";
	echo "##         Enjoy Francesca ;)         ##\n";
	echo "##                                    ##\n";
	echo "#########################################\n\n";
	die();
}



//2 ARGS CLI COMMANDS CASES
if($argv[2] != "") {

	switch ($argv[1]) {
		case "create-app":
			if(!is_dir(__DIR__ ."/../../apps/".$argv[2])){
				mkdir(__DIR__ ."/../../apps/".$argv[2]);
				xcopy(__DIR__ ."/../../libs/sources/app", __DIR__ ."/../../apps/".$argv[2]);
				echo "App '".$argv[2]."' created.\n";
			} else {
				echo "ERROR! - App '".$argv[2]."' already exists.\n";
			}
			break;
		case "create-env":
			if(!file_exists(__DIR__ ."/../../envs/".$argv[2].".php")) {
				copy(__DIR__ ."/../../libs/sources/env/environment.php", __DIR__ ."/../../envs/".$argv[2].".php");
				echo "Env '".$argv[2]."' created.\n";
			} else {
				echo "ERROR! - Env '".$argv[2]."' already exists.\n";
			}
			break;
		default:
			echo "Command not found.\n";
			break;
	}

//1 ARG CLI COMMANDS CASES
} else {

	switch ($argv[1]) {
		case "list-envs":
			$envs = scandir(__DIR__ ."/../../envs/");
			echo "\nFrancesca Framework environments list\n";
			echo "\n";
			echo "****************************";
			echo "\n\n";
			foreach ($envs as $file) {
				if($file != ".." && $file !=".") {
					include(__DIR__ ."/../../envs/".$file);
					echo "ENVIRONMENT: ".substr($file,0,-4)."\n\n";
					echo "APP FOLDER: ".$fra_config["folder"]."\n\n";
					if($fra_config["default_redirect"] == "" && $fra_config["default_controller"] == "") {
						echo "No settings for default redirect";
					} else {
						if($fra_config["default_redirect"] != "") {
							echo "Default redirect\t|\texternal\t|\t";
							echo $fra_config["default_redirect"];
						} else {
							echo "Default redirect\t|\tinternal\t|\t";
							echo $fra_config["default_controller"];
							echo "/";
							echo $fra_config["default_action"];
							echo "/";
						}
					}
					echo "\n\n";
					if($fra_config["error_redirect"] == "" && $fra_config["error_controller"] == "") {
						echo "No settings for error redirect";
					} else {
						if($fra_config["error_redirect"] != "") {
							echo "Error redirect\t\t|\texternal\t|\t";
							echo $fra_config["error_redirect"];
						} else {
							echo "Error redirect\t\t|\tinternal\t|\t";
							echo $fra_config["error_controller"];
							echo "/";
							echo $fra_config["error_action"];
							echo "/";
						}
					}
					echo "\n";
					echo "\n";
					echo "CONTROLLERS";
					echo "\n";
					$controllers = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/controllers/");
					foreach ($controllers as $file) {
						if($file != ".." && $file !=".") {
							echo "\t> ";
							if(is_dir(__DIR__ ."/../../apps/".$fra_config["folder"]."/controllers/".$file)) {
								echo $file;
								echo "\n";
								$subs = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/controllers/".$file);
								foreach ($subs as $sub) {
									if($sub != ".." && $sub !=".") {
										echo "\t - ";
										echo substr($sub,0,-4);
										echo "\n";
									}
								}
							} else {
								echo substr($file,0,-4);
							}
							echo "\n";
						}
					}
					echo "MODELS";
					echo "\n";
					$models = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/models/");
					foreach ($models as $file) {
						if($file != ".." && $file !=".") {
							echo "\t> ";
							if(is_dir(__DIR__ ."/../../apps/".$fra_config["folder"]."/models/".$file)) {
								echo $file;
								echo "\n";
								$subs = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/models/".$file);
								foreach ($subs as $sub) {
									if($sub != ".." && $sub !=".") {
										echo "\t - ";
										echo substr($sub,0,-4);
										echo "\n";
									}
								}
							} else {
								echo substr($file,0,-4);
							}
							echo "\n";
						}
					}
					echo "MIDDLEWARES";
					echo "\n";
					$middlewares = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/middlewares/");
					foreach ($middlewares as $file) {
						if($file != ".." && $file !=".") {
							echo "\t> ";
							if(is_dir(__DIR__ ."/../../apps/".$fra_config["folder"]."/middlewares/".$file)) {
								echo $file;
								echo "\n";
								$subs = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/middlewares/".$file);
								foreach ($subs as $sub) {
									if($sub != ".." && $sub !=".") {
										echo "\t - ";
										echo substr($sub,0,-4);
										echo "\n";
									}
								}
							} else {
								echo substr($file,0,-4);
							}
							echo "\n";
						}
					}
					echo "VIEWS";
					echo "\n";
					$views = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/views/");
					foreach ($views as $file) {
						if($file != ".." && $file !=".") {
							echo "\t> ";
							if(is_dir(__DIR__ ."/../../apps/".$fra_config["folder"]."/views/".$file)) {
								echo $file;
								echo "\n";
								$subs = scandir(__DIR__ ."/../../apps/".$fra_config["folder"]."/views/".$file);
								foreach ($subs as $sub) {
									if($sub != ".." && $sub !=".") {
										echo "\t - ";
										echo substr($sub,0,-4);
										echo "\n";
									}
								}
							} else {
								echo substr($file,0,-4);
							}
							echo "\n";
						}
					}
					echo "\n";
					echo "****************************";
					echo "\n";
					echo "\n";
					echo "\n";
				}
			}
			break;
		case "reset-ht":
			unlink(__DIR__ ."/../../.htaccess");
			copy(__DIR__ ."/../../libs/sources/hta/htaccess.php", __DIR__ ."/../../.htaccess");
			echo ".htaccess was restored.\n";
			break;
		case "reset-log":
			emptydir(__DIR__ ."/../../logs/", ".log");
			echo "Logs cache is now empty.\n";
			break;
		case "help":
			echo "\n#########################################\n";
			echo "## Francesca Framework CLI HELP GUIDE ##\n";
			echo "#########################################\n\n";
			echo "'php fra list-envs'\nReturns a list of environments files and their routes structure.\n\n";
			echo "'php fra reset-ht'\nLets you restore original .htaccess file.\n\n";
			echo "'php fra reset-log'\nLets you flush logs cache into logs directory.\n\n";
			echo "'php fra create-env HOSTNAME'\nLets you create an environment configuration file for a determinate HOSTNAME into envs folder.\n\n";
			echo "'php fra create-app APPNAME'\nLets you create an empty app with a custom APPNAME into apps folder.\n\n";
			echo "You can find a full Francesca Framework documentation on www.francesca.io!\n\n";
			break;	
		default:
			echo "Command not found.\n";
			break;
	}

}