
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
	<title>r1Models</title>
	<meta name="description" content="error page,r1models">
     <!-- for response for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- -css linking-->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">
     <link rel="stylesheet" href="css/style.css">

   <!-- logo added
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
   <header class="main-header">
   	<div class="row">
   		<div class="logo">
	         <a href="index.html">r1models</a>
	      </div>
   	</div>
	</header>
   <main id="main-404-content" class="main-content-static">
   	<div class="content-wrap">
		   <div class="shadow-overlay"></div>
		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
			  			<?php
							if($_GET['e'] == 404)
						  		echo '<h1 class="kern-this">404 Error.</h1><p>Oooooops! Looks like nothing was found at this location.<br>Maybe try on of the links below, click on the top menu<br>or try a search?</p>';
							if($_GET['e'] == 403)
						  		echo '<h1 class="kern-this">403 Error.</h1><p>Access forbidden to this page!</p>';
							if($_GET['e'] == 500)
						  		echo '<h1 class="kern-this">500 Error.</h1><p>Internal Server Error.<br> The server just ran into an error. <br>Contact us for further information.</p>';
							if($_GET['e'] == 502)
						  		echo '<h1 class="kern-this">502 Error.</h1><p>Bad Gateway. The server was acting<br> as a gateway or proxy and received an invalid response from the upstream server.</p>';

						?>
			  			<div class="search">
				      	<form>
								<input type="text" id="s" name="s" class="search-field" placeholder="Type and hit enter …">
							</form>
				      </div>

			   	</div> <!-- /twelve -->
		   	</div> <!-- /row -->
		   </div> <!-- /main-content -->

		   <footer>
		   	<div class="row">

		   		<div class="col-seven tab-full social-links pull-right">     <!-- linking -->
			   		<ul>
				   		<li><a href="https://www.facebook.com/R1Models-117210612217336"><i class="fa fa-facebook"></i></a></li>
					      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
					      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
				   	</ul>
			   	</div>

		  			<div class="col-five tab-full bottom-links">
			   		<ul class="links">
				   		<li><a href="http://www.r1models.com/">Homepage</a></li>
				         <li><a href="http://www.r1models.com/">About</a></li>

				   	</ul>

				   	<div class="credits">
				   		<p>Design by <a href="http://www.r1models.com/" title="styleshout">r1Models</a></p>
				   	</div>
			   	</div>

		   	</div> <!-- /row -->
		   </footer>

		</div> <!-- /content-wrap -->

   </main> <!-- /main-404-content -->

   <div id="preloader">
    	<div id="loader"></div>
   </div>

</body>

</html>
