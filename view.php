<!DOCTYPE HTML>
<html>
	<head>
			<?php 
                    require "php/class.mod.php";
					session_start();
					$usr=$_GET['usr'];
					if(isset($_SESSION['usr']) && (strcasecmp($usr,$_SESSION['usr']) == 0))
						header('Location: http://www.r1models.com/profile.php');
		            else
						$USER=profile_fetch($pdo,$usr);
			?>
		<title><?=$USER['fname']." ".$USER['lname']?></title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Remodal-->
		<link rel="stylesheet" href="../css/remodal.css">
		<link rel="stylesheet" href="../css/remodal-default-theme.css">
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../php/gallery/resources/themes/responsive/css/style.css" />
		<link rel="stylesheet" type="text/css" href="../php/gallery/resources/themes/responsive/css/bootstrap-responsive.min.css" />
		<script type="text/javascript" src="../php/gallery/resources/themes/responsive/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../assets1/css/main.css" />
	</head>
	<style>
		hr {
			display: block;
			margin-top: 0.5em;
			margin-bottom: 0.5em;
			margin-left: auto;
			margin-right: auto;
			border-style: inset;
			width:80%;
			background-color:whitesmoke;
			opacity:0.2;
		}
	</style>

	<body>
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="<?php echo ($USER['pp'] == NULL)? 'images/avatar.jpg':'../php/'.$USER['path']."/".$USER['pp'];?>" alt="" /></span>
						<h1>&nbsp;&nbsp;<?=$USER['fname']." ".$USER['lname']?></h1>
						<ul class="icons">
							<li><a href="<?php echo (($USER['fb'] == NULL)?'#':"http://www.".$USER['fb']); ?>" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="<?php echo (($USER['tweet'] == NULL)?'#':"http://www.".$USER['tweet']); ?>" class="icon style2 fa-twitter"><span class="label">Instagram</span></a></li>
							<li><a href="<?php echo (($USER['insta'] == NULL)?'#':"http://www.".$USER['insta']); ?>" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
						<br>
						<a href="#modal"><button type="button" name="button">Bio</button></a>&nbsp;&nbsp;
						<br><br><h1><b><u>Gallery/Work</u></b></h1>
					</header>

				<!-- Main -->
					<section id="main">
					<center>
						<?php

						// Include the UberGallery class
						require "php/gallery/resources/gallery.php";

						// Initialize the UberGallery object
						$gallery = new UberGallery();

						// Initialize the gallery array
						$galpath='php/'.$USER['path'].'/images';
						$galleryArray = $gallery->readImageDirectory($galpath);
						// Define theme path
						if (!defined('THEMEPATH')) {
							define('THEMEPATH', $gallery->getThemePath());
						}

						// Set path to theme index
						$themeIndex = $gallery->getThemePath(true) . '/index.php';
						// Initialize the theme
						if (file_exists($themeIndex)) {
							include($themeIndex);

						} else {
							die('ERROR: Failed to initialize theme');
						}
					?>
					</center>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<p> © 2017 r1models . All rights reserved</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="../assets1/js/jquery.min.js"></script>
			<script src="../assets1/js/jquery.poptrox.min.js"></script>
			<script src="../assets1/js/skel.min.js"></script>
			<script src="../assets1/js/main.js"></script>
			<!--Remodal-->
			<script src="../js/remodal.js"></script>

			<!--#modal-->
			<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="font-family: 'Droid Sans', sans-serif;">
				<style scoped>
				@import "../css/remodal-default-theme.css";
				</style>
				<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
				<br><h2><b><u>Bio</u></b></h2><br>
			<div style="padding-left:60px;text-align:left;">
				E-mail id:&nbsp;&nbsp;<?=$USER['email']?><br>
				Phone no.:&nbsp;&nbsp;<?=$USER['phone']?><br>
				State:&nbsp;&nbsp;<?=$USER['state']?><br>
				City:&nbsp;&nbsp;<?=$USER['city']?><br>
				Website:&nbsp;&nbsp;<?=$USER['web']?><br>
				About:&nbsp;&nbsp;<?=$USER['about']?><br>
				<br><hr><br>
				Height:&nbsp;&nbsp;<?=$USER['h']?><br>
				Weight:&nbsp;&nbsp;<?=$USER['w']?><br>
				Age:&nbsp;&nbsp;<?=$USER['a']?><br>
			</div>
				<br><br><button data-remodal-action="cancel" class="remodal-cancel">Close</button>
			</div>

	</body>
</html>
