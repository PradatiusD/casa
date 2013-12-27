<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Casa Caridad &middot; Helping the indigent in Mexico</title>
    <META NAME="Description" CONTENT="We provide basic needs to the indigent in Central Mexico">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300|Signika:400,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
</head>
<body>
<header class="topBanner">
	<div class="container">
		<div class="row">
			<h6 class="language">
				<a href="index.php">English</a> <a href="index-es.php">Español</a>
			</h6>
		</div>
		<div class="row navigation">
			<div class="span4">
				<a href="index.php" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/casa-caridad-logo.png"></a>
			</div>
			<div class="span8 last" id="nav">
				<?php  wp_nav_menu(); ?>
			</div>
		</div>
	</div>
</header>
