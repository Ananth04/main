<?php
	// STARTING SESSION
	session_start();

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);


	if (isset($_GET["category"])) {
		echo $_GET["category"];
		$category_got = $_GET["category"];
	}
	else
		echo "Empty category\n";

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
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h1><?php echo $category_got; ?></h1>
								</div>
							</div>

							<!-- post -->
<?php

		$query = "SELECT id FROM categories WHERE title='$category_got';";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		$cat_id = $row['id'];
	
		if ($category_got == 'ALL') {
			$query = "SELECT * FROM blog ORDER BY date_and_time DESC;";
		}
		else {
			$query = "SELECT id FROM categories WHERE title='$category_got';";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
			$cat_id = $row['id'];
			$query = "SELECT * FROM blog WHERE category_id = '$cat_id' ORDER BY date_and_time DESC;";
		}
		$result = mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
		//echo "count = $count";
		while($row = mysqli_fetch_assoc($result)) : 
$blogId = $row['id'];
$cat_id = $row['category_id'];
	$query1 = "SELECT title FROM categories WHERE id=$cat_id;";
	$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);
	//echo "<h1>".$row['title']."</h1>";
	//echo "<b>Author Email: </b>".$row['email_id']."<br>";
	//echo "<b> Category: </b>xxxxx<br>";
	//echo "<b>Blog: </b>".$row['content']."</p>";
	//echo "<b> Time : </b>".$row['date_and_time'];
	//echo "<hr><hr><hr>"; 
	$title = strip_tags($row['title']);
	$content = strip_tags($row['content']);
?>

							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" target="_blank" href="fullBlog.php?blogId=<?php echo $blogId ?>"><img src="./img/post-6.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="category.php?category=<?php echo $row1['title']; ?>"><?php echo $row1['title']; ?></a>
											<span class="post-date"><?php echo $row['date_and_time']; ?></span>
										</div>
										<h3 class="post-title"><a target="_blank" href="fullBlog.php?blogId=<?php echo $blogId ?>"><?php echo $title; ?></a></h3>
										<div id="content"><?php echo $row['content']; ?> </div>
										<br><a target="_blank" href="fullBlog.php?blogId=<?php echo $blogId ?>"> Read More </a><br><br>
										<?php echo "<b>Author Email: </b>".$row['email_id']."<br>"; ?>
									</div>
								</div>
							</div>
							<!-- /post -->
<?php
							endwhile 

?>
							

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
