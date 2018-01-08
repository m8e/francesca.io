<!DOCTYPE html>
<html lang="en">

<h1>
<pre>

<?php



$database = Array(
				$prenotazione1 = Array(1, "2018-02-14 - 11:00", "2018-02-14 - 12:00"),
				$prenotazione2 = Array(2, "2018-02-14 - 11:00", "2018-02-14 - 12:00"),
				$prenotazione3 = Array(3, "2018-02-14 - 11:00", "2018-02-14 - 12:00")
				);

$test = $fra->date->avaibility("2018-01-01","2019-01-01",$database,34);

var_dump($test);

die();
?>


	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title></> francesca.io framework - modern and lightest PHP framework developed with love for developers</title>

	    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/bootstrap/core/3.3.7/css/bootstrap.css">
	    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/fontawesome/4.7.0/css/font-awesome.css">


		<!--[if lt IE 9]>
	      <script src="https://allyoucan.cloud/cdn/html5shiv/3.7.2/html5shiv.js"></script>
	      <script src="https://allyoucan.cloud/cdn/respond/1.4.2/respond.js"></script>
	    <![endif]-->

	    <style>
	    	body {
	    		font-family: Arial;
	    		font-size: 24px;
	    	}
	    	.under-text {
	    		font-size: 16px;
	    	}
	    	.back-link {
	    		font-family: Arial;
	    		font-size: 12px;
	    	}
	    	.spacer {
	    		height: 15px;
	    	}
	    </style>

	</head>

	<body>

		<div class="container">

			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="spacer"></div>
					<div class="spacer"></div>
					<b></> francesca.io framework</b><br>
					<span class="under-text">modern and lightest PHP framework developed with <i class="fa fa-heart" aria-hidden="true"></i> for developers</span>
					<div class="spacer"></div>
					<a class="back-link" href="https://francesca.io">https://francesca.io</a>
					<div class="spacer"></div>
				</div>
			</div>

		</div>

		<script src="https://allyoucan.cloud/cdn/jquery/core/3.1.1/jquery.js"></script>
		<script src="https://allyoucan.cloud/cdn/bootstrap/core/3.3.7/js/bootstrap.js"></script>
		<script src="https://allyoucan.cloud/cdn/noright/nrc.js"></script>

	</body>

</html>