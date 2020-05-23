<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		<?php echo $pageName ?> | Wraithaven Games
	</title>

	<meta charset="utf-8" />
	<meta name="description" content="A small, freelance, indie game studio, Wraithaven Games." />
	<meta name="keywords" content="gamedev,indiedev,gaming,freelance" />
	<meta name="author" content="TheDudeFromCI" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
	<meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#161616">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

	<link rel="stylesheet" href="home/style.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="home/style.js"></script>
</head>

<body>
	<nav id="navbar-container" class="navbar navbar-expand-md bg-custom navbar-dark">
		<div id="navbar-button-container" class="container-fluid d-flex">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a href="index" id="wg-logo" class="navbar-brand text-left">Wraithaven Games</a>
		</div>

		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="community">Community</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Projects</a>
					<div class="dropdown-menu bg-custom">
						<div class="dropdown-header">Scripts and Tools</div>
						<a class="dropdown-item dark-link" href="projects/minecraft">Minecraft Plugins</a>
						<a class="dropdown-item dark-link" href="projects/unity">Unity Scripts</a>
						<a class="dropdown-item dark-link" href="projects/ai">AI Experiements</a>

						<div class="dropdown-header header-spacer">Textures and Models</div>
						<a class="dropdown-item dark-link" href="projects/3d">3D Models</a>
						<a class="dropdown-item dark-link" href="projects/textures">Texture Packs</a>

						<div class="dropdown-header header-spacer">Gallery</div>
						<a class="dropdown-item dark-link" href="projects/conceptart">Concept Art</a>

						<div class="dropdown-header header-spacer">Archived Projects</div>
						<a class="dropdown-item dark-link" href="projects/unfinished">Unfinished</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container p-0">
		<div class="d-none d-sm-block" style="height:50px"></div>

		<div id="whg-header-image" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#whg-header-image" data-slide-to="0" class="active"></li>
				<li data-target="#whg-header-image" data-slide-to="1"></li>
			</ul>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="carousel-retain-aspect" src="images/goggles.png" alt="Steampunk Goggles">
				</div>
				<div class="carousel-item">
					<img class="carousel-retain-aspect" src="images/cartoon_islands.png" alt="Stylized Islands">
				</div>
			</div>

			<a class="carousel-control-prev" href="#whg-header-image" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#whg-header-image" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>

		<div class="d-none d-sm-block" style="height:50px"></div>
	</div>