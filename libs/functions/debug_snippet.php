<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| DEBUG TOOL SNIPPET
|------------------------------------------------------------------------
*/

//FOR SECURITY REASONS THIS FILE IS NOT DIRECTLY ACCESSIBLE
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) die();
?>

<br><br><br>
<div style="font-family: Arial !important; font-size: 12px !important; background: #fff !important; padding: 30px !important; border-radius: 10px !important; border: #000 solid 2px !important; margin: 0 auto !important; margin-top: 70px !important; margin-bottom: 30px !important;">
	
	<div style="color: #337ab7 !important; text-decoration: none !important; font-size: 12px !important;">
		<a href="#db">db</a> | <a href="#all">vars</a> | <a href="#php">php info</a>
	</div>
	
	<h2>FRANCESCA FRAMEWORK DEBUG AREA</h2>           
	<h3><span style="font-size:12px !important;">Yes! you can use also < ?php? > =) enjoy it...</span></h3>
	<?php
		$devfile = file_get_contents("".$_SERVER['DOCUMENT_ROOT']."/temp/debug.dev", "r") or die("Unable to open debug file!");
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['devmode'])) {
			$myfile = file_get_contents("".$_SERVER['DOCUMENT_ROOT']."/temp/debug.dev", "w") or die("Unable to open debug file!");
			$txt = $_POST['devcode'];
				if($txt == "") { $txt = "Hello World!"; }
				fwrite($myfile, $txt);
				fclose($myfile);
		} ?>
	<form method="post" action"<?php echo $_SERVER['PHP_SELF']?>">
		<textarea rows="18" name="devcode" style="background:#424242; color:#64DD17 !important; font-family: Verdana !important; font-size: 12px !important; width:100% !important;"><?php echo fread($devfile,filesize("".$_SERVER['DOCUMENT_ROOT']."/temp/debug.dev")); ?></textarea>
	  	<input type="hidden" name="devmode" value="yes"><br>
	  	<input type="Submit" value="RUN >>>" />
	</form>
	<br><br>
	<h4>CODE OUTPUT AREA</h4><hr><br>
	<div style="background: #fff !important; width:100% !important; color: #000 !important; font-size: 12px !important; font-family: Arial; padding: 10px !important; ">
		<br><?php include($_SERVER['DOCUMENT_ROOT'].'/temp/debug.dev'); ?>
	</div>
	<br><br><hr>
	<a name='db'></a>
		<br><br>
	<h4>DB last query</h4>
		<?php
		if(fra_var["db_conn"] == 1 && !empty($fra->data->last())) {
			echo '<pre>';
			var_dump($fra->data->last());
			echo  '</pre>';
		}
		?>
		<br><br>
	<h4>DB log</h4>
		<?php
		if(fra_var["db_conn"] == 1 && !empty($fra->data->log())) {
			echo '<pre>';
			var_dump($fra->data->log());
			echo  '</pre>';
		}
		?>
	<br><br>
		<h4>DB errors</h4>
		<?php
		if(fra_var["db_conn"] == 1 && !empty($fra->data->error())) {
			echo '<pre>';
			var_dump($fra->data->error());
			echo  '</pre>';
		}
		?>
	<br><br>
	<h4>DB debug</h4>
		<?php
		if(fra_var["db_conn"] == 1 && !empty($fra->data->debug())) {
			echo '<pre>';
			var_dump($fra->data->debug());
			echo  '</pre>';
		}
		?>
	<br><br>
	<h4>DB info</h4>
		<?php
		if(fra_var["db_conn"] == 1 && !empty($fra->data->info())) {
			echo '<pre>';
			var_dump($fra->data->info());
			echo  '</pre>';
		}
		?>
	<a name='ALL'></a>
	<br><br>
	<h4>ALL DECLARED VARS data</h4> 
		<?php
		echo '<pre>';
		echo var_dump(get_defined_vars());
		echo  '</pre>';
		?>
	<a name='php'></a>
		<br><br>
	<h4>PHP info</h4>
		<?php
		echo '<pre>';
		echo '<div style=padding:15px !important;>';
		ob_start();
		phpinfo();
		$fra_app_debug_pinfo = ob_get_contents();
		ob_end_clean();
		 
		$fra_app_debug_pinfo = preg_replace( '%^.*<body>(.*)</body>.*$%ms','$1',$fra_app_debug_pinfo);
		echo $fra_app_debug_pinfo;
		echo '</div>';
		echo  '</pre>';
		?>
</div>
<br><br><br>