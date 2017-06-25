<!DOCTYPE HTML>
<html>
<head>
<title>User Error | r1models</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link href="../assets/css/style_error.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
	body
	{
		background:url('../images/err/bg.jpg') no-repeat 100%;
		background-size: 100%;
		font-family: 'open_sanslight';
		font-size: 100%;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
</style>
<body>
	<div class="wrap">
		<div class="content">
			<div class="logo">
				<h1><a href="#"><img src="../images/err/logo.png"/></a></h1>
				<span><img src="../images/err/signal.png"/>Oops!
				<?php
					if($_GET['error'] == 1)
					 	echo "No such user exists!";
					if($_GET['error'] == 2)
					 	echo "User already registered! Login to continue.";
					if($_GET['error'] == 3)
					 	echo "Incorrect Password for User!";
					if($_GET['error'] == 4)
					 	echo "Unable to register user. Try again!";
					if($_GET['error'] == 5)
					 	echo "Wrong Token Number. Please check your mail for the most recent one!";
				?>
			</span>
			</div>
			<div class="buttom">
				<div class="seach_bar">
					<p>You can visit us here <br> <span><a href="http://r1models.com">r1models</a></span></p>
				</div>
			</div>
		</div>
	<p class="copy_right">&#169; 2017 <a href="http://r1models.com" target="_blank">&nbsp;r1models</a> </p>
	</div>

</body>
</html>
