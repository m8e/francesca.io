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


Class File {
/*
|------------------------------------------------------------------------
| File Class
|------------------------------------------------------------------------
| The Francesca/File is a set of functions to manage files
*/
	
	public function __construct() {

	}


	function exists($file=NULL) {
	/* $fra->file->exists(FILE)
	***************************************************
	| This function verifies if a FILE exists and
	| returns a TRUE or FALSE value.
	***************************************************/
		if(file_exists(fra_var["files_path"]."".$file)) {
			return true;
		} else {
			return false;
		}
	}


	function extension($file=NULL) {
	/* $fra->file->extension(FILE)
	***************************************************
	| This function returns a FILE extension.
	***************************************************/
		$extension = strrchr($file, '.');
		$extension = strtolower($extension);
		str_replace(".", "-", $extension);
		return $extension;
	}


	function read($file=NULL) {
	/* $fra->file->read(FILE)
	***************************************************
	| This function reads a FILE and returns a string.
	***************************************************/
		$file = fra_var["files_path"]."".$file;
		if(file_exists($file)) {
			$return = file_get_contents($file);
			return $return;
		} else {
			return false;
		}
	}


	function create($file=NULL, $content=NULL) {
	/* $fra->file->create(FILE, CONTENT)
	***************************************************
	| This function creates a FILE with a CONTENT
	| and returns a string.
	***************************************************/
		$file = fra_var["files_path"]."".$file;
		if(file_exists($file)) {
			unlink($file);
		}	
		if(file_put_contents($file, $content)) {
			return true;
		} else {
			return false;
		}
	}


	function createdir($dir=NULL) {
	/* $fra->file->createdir(DIR)
	***************************************************
	| This function creates a DIR.
	***************************************************/
		if(!is_dir(fra_var["files_path"]."".$dir)) {
			if(mkdir(fra_var["files_path"]."".$dir, 0700)) {
				return true;
			} else {
				return false;
			}
		}
	}


	function delete($file=NULL) {
	/* $fra->file->delete(FILE)
	***************************************************
	| This function deletes a FILE.
	***************************************************/
		if(unlink(fra_var["files_path"]."".$file)) {
			return true;
		} else {
			return false;
		}
	}


	function deletedir($dir=NULL) {
	/* $fra->file->deletedir(DIR)
	***************************************************
	| This function deletes a DIR.
	***************************************************/
		$dir = fra_var["files_path"]."".$dir;
		if(is_dir($dir)) {
			foreach(scandir($dir) as $file) {
		    	if ('.' === $file || '..' === $file) continue;
		    	if (!is_dir($dir.'/'.$file)) {
					unlink($dir.'/'.$file);
				}
		  	}
			if(rmdir($dir)) {
				return true;
			} else {
				return $dir;
			}
		}
	}


	function list($dir=NULL) {
	/* $fra->file->list(DIR)
	***************************************************
	| This function lists the files into a DIR and
	| returns an array.
	***************************************************/
		$dir = fra_var["files_path"]."".$dir;
		$root = scandir($dir); 
		foreach($root as $value) 
		{ 
		    if($value === '.' || $value === '..') { 
		    	continue;
		    } 
		    if(is_file("$dir/$value")) { 
		    	$result[]="$value";
		    	continue;
		    } 
		    foreach(find_all_files("$dir/$value") as $value) {
		        $result[]=$value; 
		    }
		} 
		return $result; 
	}


	function upload($folder=NULL, $ext=NULL) {
	/* $fra->file->upload(DIR, EXTENSIONS)
	***************************************************
	| This function uploads all $_FILES into a DIR
	| verifing files EXTENSIONS (array) and returns
	| a TRUE or FALSE value.
	***************************************************/
		$n = 0;
		$result = Array();
		if($ext == NULL) {
			$allowed = fra_var["upload_allow"];
		} else {
			$allowed = $ext;
		}
		foreach($_FILES as $index => $file) {
			$fileName     = $file['name'];
			$fileTempName = $file['tmp_name'];
			$ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$lext = strlen($ext);
			$lext = $lext + 1;
			$fileonlyname = substr($fileName,0,-$lext);
			if(!in_array($ext,$allowed)) {
	    		return false;
			}
			if(!empty($file['error'][$index])) {
				return false;
			}
			if(!empty($fileTempName) && is_uploaded_file($fileTempName)) {
				$filenewname = $fileonlyname."_".md5("".$fileonlyname."".microtime()."").".".$ext;
				mkdir(fra_var["files_path"]."".$folder);
				move_uploaded_file($fileTempName, fra_var["files_path"]."".$folder."/".$filenewname."");
				$result[$n] = $filenewname;
			}
		$n = $n + 1;
		}
		return $filenewname;
	}




	function heading($type="custom", $custom="text/html") {
	/* $fra->file->heading(TYPE, CUSTOM)
	***************************************************
	| This function returns a custom file header
	***************************************************/
		if(!headers_sent()) {		
			switch ($type) {
				case "jpg":
					$value = "image/jpg";
					break;
				case "gif":
					$value = "image/gif";
					break;
				case "png":
					$value = "image/png";
					break;
				case "ico":
					$value = "image/ico";
					break;
				case "pdf":
					$value = "application/pdf";
					break;
				case "excel":
					$value = "application/vnd.ms-excel; charset=utf-8";
					break;
				case "json":
					$value = "application/json; charset=utf-8";
					break;
				case "html":
					$value = "text/html; charset=utf-8";
					break;
				case "custom":
					$value = $custom;
					break;
				default:
					$value = "text/html; charset=utf-8";
					break;
				}
				return header("Content-Type: ".$value);
			} else {
				return FALSE;
			}
		}



		function forcedownload($file=NULL) {
		/* $fra->file->forcedownload(FILE)
		***************************************************
		| This function forces file download
		***************************************************/
			$file = fra_var["files_path"]."".$file;
			if($file != NULL && !headers_sent()) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename='.basename($file));
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				header('Content-Length: '.filesize($file));
				ob_clean();
				flush();
				readfile($file);
				exit;
			} else {
				return FALSE;
			}
		}


		function ftpget($localfile=NULL, $remotefile=NULL) {
		/* $fra->file->ftpget(LOCALFILE, REMOTEFILE)
		***************************************************
		| This function lets you to download a remote FTP
		| file into a local file.
		***************************************************/
			if($localfile != NULL && $remotefile != NULL && ftp_get(fra_ftp, fra_var["files_path"]."".$localfile, fra_var["ftp_path"]."".$remotefile, FTP_BINARY)) {
				return true;
			} else {
				return false;
			}
		}


		function ftpput($localfile=NULL, $remotefile=NULL) {
		/* $fra->file->ftpput(LOCALFILE, REMOTEFILE)
		***************************************************
		| This function lets you to upload a local file
		| into a remote FTP file.
		***************************************************/
			if($localfile != NULL && $remotefile != NULL && ftp_put(fra_ftp, fra_var["ftp_path"]."".$remotefile, fra_var["files_path"]."".$localfile, FTP_BINARY)) {
				return true;
			} else {
				return false;
			}
		}




		function ftpdel($file=NULL) {
		/* $fra->file->ftpdel(FILE)
		***************************************************
		| This function lets you to delete a remote FPT
		| file.
		***************************************************/
			if($file != NULL && ftp_delete(fra_ftp, fra_var["ftp_path"]."".$file)) {
				return true;
			} else {
				return false;
			}
		}



		function ftpcreatedir($dir=NULL) {
		/* $fra->file->ftpcreatedir(DIR)
		***************************************************
		| This function lets you create a remote FTP dir.
		***************************************************/
			if($dir != NULL && ftp_mkdir(fra_ftp, fra_var["ftp_path"]."".$dir)) {
				return true;
			} else {
				return false;
			}
		}


		function ftpdeletedir($dir=NULL) {
		/* $fra->file->ftpdeletedir(DIR)
		***************************************************
		| This function lets you delete a remote FTP dir.
		***************************************************/
			$testtest = ftp_nlist(fra_ftp, fra_var["ftp_path"]."".$dir);
			foreach ($testtest as $ftest) {
				ftp_delete(fra_ftp, fra_var["ftp_path"]."/".$ftest);
				}
			if(ftp_rmdir(fra_ftp, fra_var["ftp_path"]."/".$dir)) {
				return true;
			} else {
				return false;
			}

		}


		function ftplist($dir=NULL) {
		/* $fra->file->ftpdeletedir(DIR)
		***************************************************
		| This function returns an FTP dir content array.
		***************************************************/
			return ftp_nlist(fra_ftp, fra_var["ftp_path"]."".$dir);
		}


}

