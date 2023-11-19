<?php
	// STARTING SESSION
	session_start();
	if ($_SESSION['logged_in'] != TRUE) {
		header("location: logIn.php");
	}

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

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
		// GET THE VALUES
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$blog = mysqli_real_escape_string($conn, $_POST['blog']);
		$cate_id = $_POST['category'];
		$email = $_SESSION['email'];
		echo "Email = $email\n";

		// BLOG INSERT
		$query = "INSERT INTO blog (title, content, email_id, category_id, rating, rating_count) VALUES ('$title', '$blog', '$email', $cate_id, 0.0, 0);";
		$result = mysqli_query($conn, $query);
		if ($result != 1) {
			echo mysqli_error($conn);
		}
		else {
			echo "Blog successfully posted!\n";
		}
		
	}

?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DBMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload" style="background:cream !important;">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->

	<?php
		$include_path = "/var/www/html/dbms";
		$use_page="TRUE";
		include("$include_path/components/header.php");
	?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
						<section>
						<h2>New Blog</h2> 
									<form name = "f1" acion="newBlog.php" method="post">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="title" id="demo-name" value="" placeholder="Title" />
											</div>
<?php
  $query = "SELECT * FROM `categories`;";
  $result = mysqli_query($conn, $query);

  if (!$result) 
    echo mysqli_error($conn);
  else
    echo "Result = \n";
?>
											<div class="col-12">
												<select name="category" id="demo-category">
													<option value="">- Category -</option>
													<option value="1">FASHION</option>
													<option value="2">FOOD</option>
													<option value="3">TRAVEL</option>
													<option value="4">BEAUTY</option>
													<option value="5">MUSIC</option>
													<option value="6">FITNESS</option>
													<option value="7">LIFESTYLE</option>
													<option value="8">TECH</option>
													<option value="9">SPORTS</option>
													<option value="10">POLITICS</option>
													<option value="11">GAMING</option>
													<option value="12">PET</option>
												</select>
											</div>
												<textarea name="blog" rows="10" cols="62" wrap="yes" placeholder="Blog"> </textarea>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Post" name="SUBMIT" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>

								</section>
					</div>
				</div>

				<!-- Footer -->

	<?php
		$include_path = "/var/www/html/dbms";
		$use_page="TRUE";
		include("$include_path/components/footer.php");
	?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
	mysqli_close($conn);
?>
