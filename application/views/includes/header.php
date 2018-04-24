<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?=$title;?></title>

	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/flexslider.css');?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/responsive.css');?>">
	
	<!-- Textext -->
	<link rel="stylesheet" href="<?=base_url();?>assets/textext/css/textext.core.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>assets/textext/css/textext.plugin.tags.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>assets/textext/css/textext.plugin.autocomplete.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>assets/textext/css/textext.plugin.prompt.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>assets/textext/css/textext.plugin.arrow.css" type="text/css" />

	<!--[if IE 9]>
		<script src="js/media.match.min.js"></script>
	<![endif]-->
</head>

<body>
<div id="main-wrapper">

	<header id="header" class="header-style-1">
		<div class="header-top-bar">
			<div class="container">


				<!-- Header Register -->
				<div class="header-register">
					<a href="#" class="btn btn-link"></a>
					<div>
						<form action="#">
							<input type="text" class="form-control" placeholder="Username">
							<input type="email" class="form-control" placeholder="Email">
							<input type="password" class="form-control" placeholder="Password">
							<input type="submit" class="btn btn-default" value="Register">
						</form>
					</div>
				</div> <!-- end .header-register -->

				<!-- Header Login -->
				<div class="header-login">
					<a href="#" class="btn btn-link"></a>
					<div>
						<form action="#">
							<input type="text" class="form-control" placeholder="Username">
							<input type="password" class="form-control" placeholder="Password">
							<input type="submit" class="btn btn-default" value="Login">
							<a href="#" class="btn btn-link"></a>
						</form>
					</div>
				</div> <!-- end .header-login -->

			</div> <!-- end .container -->
		</div> <!-- end .header-top-bar -->

		<div class="header-nav-bar">
			<div class="container">

				<!-- Logo -->
				<div class="css-table logo">
					<div class="css-table-cell">
						<a href="#">
							<img src="<?=base_url();?>assets/img/header-logo.png" alt="">							
						</a> <!-- end .logo -->
					</div>
				</div>
			</div> <!-- end .container --><!-- 

			<div id="mobile-menu-container" class="container">
				<div class="login-register"></div>
				<div class="menu"></div>
			</div> -->
		</div> <!-- end .header-nav-bar -->

		<div class="header-page-title">
			<div class="container">
				<marquee>2017/2018 SECOND SEMESTER EXAMINATION</marquee>
			</div>
		</div>
	</header> <!-- end #header -->