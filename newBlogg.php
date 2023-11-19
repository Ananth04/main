<?php
	// STARTING SESSION
	session_start();
	if ($_SESSION['logged_in'] == TRUE) {
		header("location: myBlogs.php");
	}
/*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
*/

	// CONNECTION TO DATABASE
	$conn = new mysqli('localhost', 'root', 'root123', 'haasya');

	// IF CONNECTION FAILS, PRINT THE ERROR
	if ($conn->connect_error) {
		echo "Connection Unsuccessful!\n";
		echo $conn->connect_error;
		die();
	}
		// ELSE CONTINUE
	else {
		echo "";
		//echo "Connection Successful!\n";
	}

	// ONCE THE FORM IS SUBMITTED, DO THE FOLLOWING
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// GET THE EMAIL ID AND PASSWORD
		$email = $_POST['email'];
		$password = $_POST['psw'];

		//echo "$email\t$password\n";

		// CHECK IF EMAIL EXISTS
		$query = "SELECT * FROM users WHERE email = '$email';";
		$result = mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
			// IF COUNT IS 1, EMAIL EXISTS. CHECK PASSWORD AND LOGIN
		if ($count == 1) {
			$row = $result->fetch_assoc();
			$db_password = $row['password'];
			if ($password == $db_password) {
				echo "Password matched!\n";
		    echo $_SESSION['logged_in'] = TRUE;
		    echo $_SESSION['email'] = $email;
				header('location: myBlogs.php');
			}
			else {
				echo "Incorrec password, please try again!\n";
			}
		}
			// EMAIL DOESN'T EXIST
		else {
			echo "Invalid email!\n";
		}
		
	}

	mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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

		
<style>
#content {
  overflow: hidden;
  height: 3.6em;
  line-height: 1.2em;
}
</style>
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
		<h3>LOG IN</h3> <br>
						<div class="row">
							
                    <form action="logIn.php" method="post">
                        <div class="form-group">
                            Email    <input type="text" class="form-control" placeholder="Your Email *" name="email"value="" />
                        </div>
                        <div class="form-group">
                            Password  <input type="password" class="form-control" placeholder="Password *" name="psw" value="" />
                        </div>
                        <div class="form-group">
                            <input class="btnSubmit" type="submit" value="Log In" name="SUBMIT" />
                        </div>
                        <div class="form-group">
                            <a href="signUp.php" class="ForgetPwd">New user?</a>
                        </div>
                    </form>
							

						</div>
					</div>

					<div class="col-md-4">
						
						
						<!-- catagories -->
						<div class="aside-widget">
						
	<?php
		$include_path = "/var/www/html/main";
		$use_page="TRUE";
		include("$include_path/components/sideCategories.php");
	?>
						</div>
						<!-- /catagories -->
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

	<?php
		include("$include_path/components/footer.php");
	?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
