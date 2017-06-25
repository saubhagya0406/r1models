<!DOCTYPE html>
<html>
<head>
<title>Sign Up :: r1models</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="r1models, models, acting, talent, modelling, casting, hire" />
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Remodal-->
<link rel="stylesheet" href="css/remodal.css">
<link rel="stylesheet" href="css/remodal-default-theme.css">
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<?php
	session_start();
	if(isset($_SESSION['usr']))
		header('Location: profile');
?>
<!-- //web font -->
</head>
<style>
	hr {
		display: block;
		margin-top: 0.5em;
		margin-bottom: 0.5em;
		margin-left: auto;
		margin-right: auto;
		border-style: inset;
		border-width: 1px;
	}
	.inactive:hover{
		background-color: white;
		cursor: default;
		color:black;
	}
</style>
<body>
<h1>r1models</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Sign Up</h2>
			<form action="php/regusr" method="post" name="f1" autocomplete="off">
				<div class="form-sub-w3">
					<input id="usr" type="text" name="Username" placeholder="Username " required="" />
				<div class="icon-w3">
					<i class="fa fa-desktop" aria-hidden="true"></i>
				</div>
				</div><div class="form-sub-w3">
					<input id="eid" type="email" name="Email" placeholder="E-mail " required="" />
				<div class="icon-w3">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input id="pwd" type="password" name="Password" placeholder="Password" required="" minlength="8" maxlength="20"/>
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input id="cpwd" type="password" name="CPassword" placeholder="Confirm Password" required="" minlength="8" maxlength="20"/>
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div><br>
				<div class="form-sub-w3">
					<div class="g-recaptcha" data-sitekey="6LeVtiYUAAAAALFMZjh-SdON--3A83ZE5pA-XgC_"></div>
				</div>
				<div class="submit-w3l">
					<a id="su" href="#modal">Sign Up</a>
				</div>
			</form>
			<!--Form-->
			<script type="text/javascript" src="js/form.js"></script>
<!--//form-ends-here-->
</div>

<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2017 r1models . All rights reserved</p>
	</div>
	<!-- //copyright -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!--Remodal-->
	<script src="js/remodal.js"></script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>

	<!--#modal-->
	<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="font-family: 'Droid Sans', sans-serif;">
			<br><br>Please check your e-mail to verify your email id and fill in your bio!<br><br><br><br>
			<button onclick="document.f1.submit();" class="remodal-confirm">Send Mail</button>
	</div>

</body>
</html>
