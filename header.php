<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
	<title>Dashboard Template (Sidebar icons animated) - Bootsnipp.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="throbber" style="display:none; min-height:120px;"></div>
	<div id="noty-holder"></div>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
				<a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
					<img src="http://placehold.it/200x50&text=LOGO" alt="LOGO">
				</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span>Config <b class="fa fa-angle-down"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
						<li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
						<li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
					</ul>
				</li>

			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li>
						<a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> MENU 1 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
						<ul id="submenu-1" class="collapse">
							<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
						</ul>
					</li>
					<li>
						<a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  MENU 2 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
						<ul id="submenu-2" class="collapse">
							<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
						</ul>
					</li>
					<li>
						<a href="investigaciones/favoritas"><i class="fa fa-fw fa-user-plus"></i>  MENU 3</a>
					</li>
					<li>
						<a href="sugerencias"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
					</li>
					<li>
						<a href="faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
