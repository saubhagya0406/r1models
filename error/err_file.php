<!DOCTYPE HTML>
<html>
<head>
<title>File Error | r1models</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link href="../assets/css/style_error.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
	body
	{
		background:url('../images/err/bg3.jpg') no-repeat 100%;
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
					if($_GET['error'] == 1 )
						echo "File Format not Supported. Please follow the fle formats (.jpeg, .png, .jpg) to proceed further!" ;
					if($_GET['error'] == 2 )
						echo "File Already Exists. Please upload another file or rename the file to upload it!" ;
					if($_GET['error'] == 3 )
						echo "File Size larger than expected. (Max. file size allowed is 5MB)" ;
					if($_GET['error'] == 4 )
					{
						if($_GET['val'] == 1)
							echo "The uploaded file exceeds the upload_max_filesize directive in php.ini";
						if($_GET['val'] == 2)
							echo "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
						if($_GET['val'] == 3)
							echo "The uploaded file was only partially uploaded.";
						if($_GET['val'] == 4)
							echo "No file was uploaded.";
						if($_GET['val'] == 6)
							echo "Missing a temporary folder.";
						if($_GET['val'] == 7)
							echo "Failed to write file to disk.";
						if($_GET['val'] == 8)
							echo "A PHP extension stopped the file upload";
					}
				?></span>
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
