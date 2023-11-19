<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>DBMS</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
<!-- Header -->

	<?php
		$include_path = "/var/www/html/main";
		$use_page="TRUE";
		include("$include_path/components/header.php");
	?>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							 
                    <h3>SIGN-UP</h3>
                    <form>
						<div class="form-group">
                            Name   <input type="text" class="form-control" placeholder="Your name *" name="name" value="" />
                        </div>
                        <div class="form-group">
                            Email    <input type="text" class="form-control" placeholder="Your Email *" name="email"value="" />
                        </div>
                        <div class="form-group">
                            Password  <input type="password" class="form-control" placeholder="Password *" name="psw" value="" />
                        </div>
						<div class="form-group">
                            Confirm Password  <input type="password" class="form-control" placeholder="confirm Password *" name="cpsw" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Sign up" />
                        </div>
                        <div class="form-group">
                            <a href="logIn.php" class="ForgetPwd">Already a user?</a>
                        </div>
                    </form>
				
							<!-- /post -->

							<!-- post -->
							

							
							
							
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<div>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
