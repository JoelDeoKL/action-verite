<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action vérité</title>

    <link rel="icon" type="image/png" href="public/images/logo1.png">
	<link rel="stylesheet" href="public/css/bootstrap.css">	
	<link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    <link rel="stylesheet" href="public/css/animate.css">
</head>
<body>
<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="#"></i> +243 999 539 100</li>
								<li><i class="#"></i> action-verite.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<?php
									if(isset($_SESSION["nom"])){
										?>
										<li><i class="#"></i> <a href="index.php?kay=x-game.compte">Mon compte</a></li>
										<li><i class="#"></i><li><a href="index.php?kay=x-users.deconnexion">Déconnexion (<?= $_SESSION["nom"];?>)</a></li>
										<?php
									}else{
										?>
										<li><a href="index.php?kay=x-users.inscription">Créer son compte</a></li>
										<li><a href="index.php?kay=x-users.connect">Se connecter</a></li>
										<?php
									}
								?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="public/images/logo1.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
