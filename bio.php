<!DOCTYPE html>
<html>
<head>
    <title>R1Models | Bio Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
</head>
<?php
    session_start();
					if(!isset($_SESSION['usr']))
						header('ocation: http://localhost/r1models');
?>
<style>
    body{
        width:100%;
      	background: linear-gradient(rgba(0, 0, 0, 0),rgba(53, 94, 152, 0.9));
    }
    hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
    .card{
        height: auto;
        width: auto;
        margin-left:100px;
        margin-top: 170px;
        background-color:white;
        border-radius: 1%;
        z-index:-1;
        display: inline-block;
    }
    .pp{
        margin-top:-120px;
        opacity: 1;
    }
    .tags{
        color:#616161;
        font-size: 20px;
        opacity:1;
        margin-left: 120px;
    }
    .tags:hover,.tags:active,.tags:focus{
        color:#616161;
        text-decoration: none;
        border-bottom:firebrick solid 1mm;
    }
    .bs-login{
        margin-top: 8px;
        margin-right: 5px;
    }
            .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
}
</style>
<body>
<div class="card container">
  <div><center class="pp"><img class="img-responsive img-circle" height="200" width="200" style="margin:20px" src="<?php echo ($_SESSION['pp'] == NULL)? 'http://icons.iconarchive.com/icons/iloveicons.ru/browser-girl/256/browser-girl-chrome-icon.png':'php/'.$_SESSION['path']."/".$_SESSION['pp'];?>" alt="">
                <form action="php/pupload.php" method="POST" id="propic" enctype="multipart/form-data"/>
                  <div class="fileUpload btn btn-primary">
						   		<span><i class="fa fa-plus"></i></span>
                  <input id="file" name="file" type="file" class="upload" onchange="previewFile()"/>
                  </div>
                      <input id="upload" value="Upload your Profile Picture" name="upload" type="button" class="upload btn btn-primary">
                  <div id="disp"></div>
  							  <script>
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
													$("#propic").submit();
											}
											else
												$("#disp").html('Wrong Format (Allowed formats are .jpeg .jpg .png)');
										}
										else
											$("#disp").html("No file selected. Please click the '+' button to upload one.");
									})
								});
							</script>
              </center></div>

<div class="container">
<div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">r1models</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
                <li><a href="profile.php" >Gallery</a></li>
            </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="php/logout.php"><button type="button" class="btn btn-default bs-login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Logout </button></a>
            </ul>
        </div>
    </nav>
</div>
   <form class="well form-horizontal" action="php/updusr.php" method="post"  id="contact_form"/>
    <fieldset>
    <!-- Form Name -->

    <!-- Text input-->
    <h4><b>About</b></h4><hr><br>
    <div class="form-group">
      <label class="col-md-4 control-label">First Name</label>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="first_name" placeholder="First Name" value="<?php echo (($_SESSION['fname'] == NULL)?'':$_SESSION['fname']); ?>" class="form-control"  type="text" required/>
        </div>
      </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label" >Last Name</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="last_name" placeholder="Last Name" value="<?php echo (($_SESSION['lname'] == NULL)?'':$_SESSION['lname']); ?>" class="form-control"  type="text" required/>
        </div>
      </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">Phone</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input name="phone" placeholder="Phone" value="<?php echo (($_SESSION['phone'] == NULL)?'':$_SESSION['phone']); ?>" class="form-control" type="text" required>
        </div>
      </div>
    </div>

    <!-- Select Basic -->

    <div class="form-group">
      <label class="col-md-4 control-label">State</label>
        <div class="col-md-4 selectContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <input name="state" placeholder="State" value="<?php echo (($_SESSION['state'] == NULL)?'':$_SESSION['state']); ?>" class="form-control" type="text" required>
      </div>
    </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">City</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="city" placeholder="City" value="<?php echo (($_SESSION['city'] == NULL)?'':$_SESSION['city']); ?>" class="form-control"  type="text" required>
        </div>
      </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">Zip Code</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="zip" placeholder="Zip Code" value="<?php echo (($_SESSION['zip'] == NULL)?'':$_SESSION['zip']); ?>" class="form-control"  type="text" required>
        </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">Your website address</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input name="website" placeholder="Wesbite (Optional)" value="<?php echo (($_SESSION['web'] == NULL)?'':$_SESSION['web']); ?>" class="form-control" type="text">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">About you</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <textarea name="about" placeholder="<?php echo (($_SESSION['about'] == NULL)?'Previous work experiences (if any) and all the interesting stuff about you...':$_SESSION['about']);?>" class="form-control" type="text"></textarea>
        </div>
      </div>
    </div>

    <!-- BIO -->

    <br><br></rb><h4><b>Bio</b></h4><hr><br>

    <div class="form-group">
      <label class="col-md-4 control-label">Height</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input name="height" placeholder="Height (in ft.)" value="<?php echo (($_SESSION['h'] == NULL)?'':$_SESSION['h']);?>" class="form-control" type="number" required>

      </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Weight</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input name="weight" placeholder="Weight (in kgs.)" value="<?php echo (($_SESSION['w'] == NULL)?'':$_SESSION['w']);?>" class="form-control" type="number" required>
      </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Age</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input name="age" placeholder="Age" value="<?php echo (($_SESSION['a'] == NULL)?'':$_SESSION['a']);?>" class="form-control" type="number" required>
      </div>
      </div>
    </div>

    <br><br></rb><h4><b>Connect</b></h4><hr><br>

      <div class="form-group">
      <label class="col-md-4 control-label">Facebook URL</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input name="fb" placeholder="Facebook Profile Link(if any)" value="<?php echo (($_SESSION['fb'] == NULL)?'':$_SESSION['fb']); ?>" class="form-control" type="text">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Instagram URL</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input name="insta" placeholder="Instagram Profile Link(if any)" value="<?php echo (($_SESSION['insta'] == NULL)?'':$_SESSION['insta']); ?>" class="form-control" type="text">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Twitter URL</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input name="tweet" placeholder="Twitter Profile Link(if any)" value="<?php echo (($_SESSION['tweet'] == NULL)?'':$_SESSION['tweet']); ?>" class="form-control" type="text">
        </div>
      </div>
    </div>
    <br><br><hr>

    <!-- Button -->
    <div class="form-group">
      <div class="row">
        <div class="container">
          <div class="col-md-5"></div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-warning"> Submit <span class="glyphicon glyphicon-send"></span></button>
          </div>
          <div class="col-md-4"></div>
        </div>
        </div>
      </div>

    </fieldset>
    </form>
    </div><!-- /.container -->
    <br><br>
    </div>
    <br><br><h3><b><center>&copy;&nbsp;r1models</center></b></h3>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <script src="js/index.js"></script>
    <script>
    function previewFile()
    {
          var preview = document.querySelector('img');
          var file    = document.querySelector('input[type=file]').files[0];
          var reader  = new FileReader();
          reader.onloadend = function () {
              preview.src = reader.result;
          }
          if (file) 
              reader.readAsDataURL(file);
          else
              preview.src = "";
    }
</script>
</body>
</html>
