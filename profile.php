<!DOCTYPE HTML>
<html>
	<head>
		<title>Your profile :: r1models</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Remodal-->
		<link rel="stylesheet" href="css/remodal.css">
		<link rel="stylesheet" href="css/remodal-default-theme.css">
		<script type="text/javascript" src="http://localhost/r1models/js/jquery-2.1.4.min.js"></script>
		<link rel="stylesheet" type="text/css" href="php/gallery/resources/themes/responsive/css/style.css" />
		<link rel="stylesheet" type="text/css" href="php/gallery/resources/themes/responsive/css/bootstrap-responsive.min.css" />
		<script type="text/javascript" src="php/gallery/resources/themes/responsive/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
			<?php
					session_start();
					if(!isset($_SESSION['usr']))
						header('ocation: http://localhost/r1models');
			?>

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
		.settings:hover{
			font-size:25px;
			color:#212121;
		}
	</style>

	<body>

		<!-- Wrapper -->
			<div id="wrapper">
				<form name="f2" class="well form-horizontal" action="php/upload.php" method="post"  id="contact_form"/ enctype="multipart/form-data">
				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="<?php echo ($_SESSION['pp'] == NULL)? 'images/avatar.jpg':'php/'.$_SESSION['path']."/".$_SESSION['pp'];?>" height="300px" width="300px" alt="" /></span>
						<h1>&nbsp;&nbsp;<?=$_SESSION['fname']." ".$_SESSION['lname']?></h1>
						<ul class="icons">
							<li><a href="<?php echo (($_SESSION['fb'] == NULL)?'#':"http://www.".$_SESSION['fb']); ?>" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="<?php echo (($_SESSION['tweet'] == NULL)?'#':"http://www.".$_SESSION['tweet']); ?>" class="icon style2 fa-twitter"><span class="label">Instagram</span></a></li>
							<li><a href="<?php echo (($_SESSION['insta'] == NULL)?'#':"http://www.".$_SESSION['insta']); ?>" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="<?php echo "http://r1models.com/view/".($_SESSION['usr']);?>" class="icon style2 fa-clipboard"><span class="label"></span></a></li>
						</ul>
						<center>
							 <div class="fileUpload button" style="color:black;background-color:#1976d2;width:50px;">
						   		<span><i class="fa fa-plus"></i></span>
						      <input id="file" name="file" type="file" class="upload" onchange="check();">
						    </div>
							<div class="fileUpload button" style="color:black;background-color:#1976d2;width:160px;">
								Add to Gallery
						      <input id="upload" name="upload" value="Upload" type="button" class="upload">
						    </div>
							<br>
							<div id="disp"></div>
							<script>
								var f=document.getElementById('file');
								document.getElementById('disp').innerHTML=f.value;
								f.onload=check;
								f.onchange=check;
								f.onkeyup=check;
								function check(){document.getElementById('disp').innerHTML=f.value;}
								$(document).ready(function(){
									$("#upload").click(function(){
										if($("#file")[0].files[0])
										{
											var ftype=$("#file")[0].files[0].type;
											if(ftype == "image/jpeg" || ftype == "image/png" || ftype == "image/jpg")
											{
												var size=$("#file")[0].files[0].size/1024;
												if(size/1024 > 3)
													$("#disp").html('The size of the image is above 3MB. Cannot be uploaded');
												else
													$("#contact_form").submit();
											}
											else
												$("#disp").html('Wrong Format (Allowed formats are .jpeg .jpg .png)');
										}
										else
											$("#disp").html("No file selected. Please click the '+' button to upload one.");
									})
								});
							</script>
						</center>
						<br>
						<a href="#modal"><button type="button" name="button">Bio</button></a>&nbsp;&nbsp;
						<a href="php/logout.php"><button type="button" name="button">Logout</button></a>
						<br><br><h1><b><u>Gallery/Work</u></b></h1>
					</header>

				<!-- Main -->
					<section id="main">
					<center>
						<?php

						// Include the UberGallery class
						include('php/gallery/resources/gallery.php');

						// Initialize the UberGallery object
						$gallery = new UberGallery();

						// Initialize the gallery array
						$galpath='php/'.$_SESSION['path'].'/images/';
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
			<!--Remodal-->
			<script src="js/remodal.js"></script>

			<!--#modal-->
			<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="font-family: 'Droid Sans', sans-serif;">
				<style scoped>
				@import "css/remodal-default-theme.css";
				</style>
				<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
				<br><h2><b><u>Bio</u></b>&nbsp;&nbsp;&nbsp; <a class="settings" href="bio.php"><span><i class="fa fa-gear"></i></a></h2><br>
			<div style="padding-left:60px;text-align:left;">
				E-mail id:&nbsp;&nbsp;<?=$_SESSION['email']?><br>
				Phone no.:&nbsp;&nbsp;<?=$_SESSION['phone']?><br>
				State:&nbsp;&nbsp;<?=$_SESSION['state']?><br>
				Website:&nbsp;&nbsp;<?=$_SESSION['web']?><br>
				About:&nbsp;&nbsp;<?=$_SESSION['about']?><br>
				<br><hr><br>
				Height:&nbsp;&nbsp;<?=$_SESSION['h']."ft."?><br>
				Weight:&nbsp;&nbsp;<?=$_SESSION['w']."kgs."?><br>
				Age:&nbsp;&nbsp;<?=$_SESSION['a']?><br>
			</div>
				<br><br><button data-remodal-action="cancel" class="remodal-cancel">Close</button>
			</div>

	</body>
</html>
