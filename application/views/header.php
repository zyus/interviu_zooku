<!-- Template Header -->

<!DOCTYPE html>

<html>
	<head>
		<!-- character encoding of the HTML document -->
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">

		<!-- including personal style.css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">

		<!-- including personal bootstrap css files -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-theme.css.map">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css.map">
		
		<!-- including 1.9.1 jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<!-- including bootstrap.js-->
		<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>
		<!-- setting up page title -->
		<title><?php echo $page_title;?></title>
	</head>
	<body>	
		<!-- setting up page container that bootstrap crats -->	
		<div class="container">
			<!-- setting up a welcome message -->	
			<div class="row">
				<div class="span12">
					<center><h1><?php echo $welcome_message;?></h1></center>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- Creating a menu with bootstrap -->
			<div class="menu">
				<ul class="nav nav-tabs">
				  	<li class="<?php echo ($page_loaded=='register')? 'active' : '';?>">
					  	<a href="<?php echo site_url("register");?>">
					  		Register
					  	</a>
				  	</li>
				  	<li class="<?php echo ($page_loaded=='list_users')? 'active' : '';?>">
				  		<a href="<?php echo site_url('list_users');?>">
				  			List Users
				  		</a>
				  	</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="body-wraper">
