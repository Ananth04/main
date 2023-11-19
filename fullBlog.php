<?php
// STARTING SESSION
session_start();

///*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//*/

// CONNECTION TO DATABASE
$conn = new mysqli('localhost', 'root', 'root123', 'haasya');

if (isset($_GET["blogId"])) {
	//echo $_GET["blogId"];
	$blog_id = $_GET["blogId"];
}
else
echo "Empty category\n";

// IF CONNECTION FAILS, PRINT THE ERROR
if ($conn->connect_error) {
	echo "Connection Unsuccessful!\n";
	echo $conn->connect_error;
	die();
}
// ELSE CONTINUE
/*
else {
	echo "";
	//echo "Connection Successful!\n";
}
*/
// ONCE THE FORM IS SUBMITTED, DO THE FOLLOWING
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
///*
	// GET THE VALUES
	$comment = mysqli_real_escape_string($conn, $_POST['comment']);
	$email = $_SESSION['email'];

	// BLOG INSERT
	$query = "INSERT INTO comments (content, email, blog_id) VALUES ('$comment', '$email', '$blog_id');";
	$result = mysqli_query($conn, $query);
	if ($result != 1) {
		echo mysqli_error($conn);
	}
	else {
		echo "Comment successfully posted!\n";
	}
//*/
/*
	// GET THE VALUES

	$inp_rating = $_POST['rating'];
	$email = $_SESSION['email'];

	// RATING INSERT
	$query = "SELECT * FROM blog WHERE id=$blog_id;";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

$rating = $row['rating'];
$rating_count = $row['rating_count'];
//echo "rating = $rating rating_count = $rating_count\n";

	$rating = ($rating*$rating_count + $inp_rating) / ($rating_count + 1);
	$rating_count = $rating_count + 1;

//echo "rating = $rating rating_count = $rating_count\n";

	$query = "UPDATE blog SET rating=$rating,rating_count=$rating_count WHERE id=$blog_id;";

	$result = mysqli_query($conn, $query);

	if ($result != 1) {

		echo mysqli_error($conn);

	}

	else {

		echo "Rating added!\n";

	}
*/

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>WebMag HTML Template</title>

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
<header id="header">

<!-- Nav -->

<div id="nav">

<!-- Main Nav -->

<div id="nav-fixed">

<div class="container">

<!-- logo -->

<div class="nav-logo">

<a href="home.php" class="logo"><img src="./img/logo.png" alt="">blogs</a>

</div>

<!-- /logo -->



<!-- nav

<ul class="nav-menu nav navbar-nav">

<li><a href="category.html">News</a></li>

<li><a href="category.html">Popular</a></li>

<li class="cat-1"><a href="category.html">Web Design</a></li>

<li class="cat-2"><a href="category.html">JavaScript</a></li>

<li class="cat-3"><a href="category.html">Css</a></li>

<li class="cat-4"><a href="category.html">Jquery</a></li>

</ul>

-->



<!-- search & aside toggle -->

<div class="nav-btns">

<button class="aside-btn"><i class="fa fa-bars"></i></button>
<!--
<button class="search-btn"><i class="fa fa-search"></i></button>

<div class="search-form">

<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">

<button class="search-close"><i class="fa fa-times"></i></button>

</div>
-->
</div>

<!-- /search & aside toggle -->

</div>

</div>

<!-- /Main Nav -->



<!-- Aside Nav -->

<div id="nav-aside">

<!-- nav -->

<div class="section-row">

<ul class="nav-aside-menu">

<li><a href="home.php">Home</a></li>

<?php if ($_SESSION['logged_in'] == TRUE) :?>
<li><a href="myBlogs.php">My Blogs/New Blog</a></li>
<?php else :?>
<li><a href="signUp.php">Login/Sign up</a></li>
<?php endif ?>
<li><a href="latest.php">Latest</a></li>

<li><a href="topRated.php">Top Rated</a></li>

<li><a href="about.php">About us</a></li>

<?php if ($_SESSION['logged_in'] == TRUE) :?>
<li><a href="logOut.php">Logout</a></li>
<?php endif ?>


</ul>

</div>

<!-- /nav -->







<!-- social links -->

<div class="section-row">

<h3>Follow us</h3>

<ul class="nav-aside-social">

<li><a href="#"><i class="fa fa-facebook"></i></a></li>

<li><a href="#"><i class="fa fa-twitter"></i></a></li>

<li><a href="#"><i class="fa fa-google-plus"></i></a></li>

<li><a href="#"><i class="fa fa-pinterest"></i></a></li>

</ul>

</div>

<!-- /social links -->







<!-- aside nav close -->

<button class="nav-aside-close"><i class="fa fa-times"></i></button>

<!-- /aside nav close -->

</div>

<!-- Aside Nav -->

</div>

<!-- /Nav -->
			
<?php
$query = "SELECT * FROM blog WHERE id=$blog_id;";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
//echo "count = $count";
$row = mysqli_fetch_assoc($result);
	//echo "<h1>".$row['title']."</h1>";
	//echo "<b>Author Email: </b>".$row['email_id']."<br>";
	//echo "<b> Category: </b>xxxxx<br>";
	//echo "<b>Blog: </b><p>".$row['content']."</p>";
	//echo "<b> Time : </b>".$row['date_and_time'];
	//echo "<hr><hr><hr>"; 
?>
			<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('back/tech.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="category.html"><?php echo $row['category_id']; ?></a>
								<span class="post-date"><?php echo $row['date_and_time']; ?></span>
							</div>
							<h1><?php echo $row['title']; ?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">

								<p><?php echo $row['content']; ?></p>
							</div>
							<!--
							<div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
							-->
						</div>

						
						
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/author.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3><?php echo $row['email_id']; ?></h3>
										</div>
									
										<ul class="author-social">
											<li><a target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li><a target="_blank" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li><a target="_blank" href="https://www.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li><a target="_blank" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->




						<!-- comments -->
						<div class="section-row">
	<?php
	$query = "SELECT * FROM comments WHERE blog_id=$blog_id ORDER BY date_and_time DESC;";
	$result = mysqli_query($conn, $query);
	$count = mysqli_num_rows($result);
	if ($count == 0) :?> 
							<div class="section-title">
								<h2>No Comments Yet</h2>
							</div>
	<?php 
	else : 


	?>
							<div class="section-title">
								<h2><?php echo $count; ?> Comment(s)</h2>
							</div>

							<div class="post-comments">
<?php

	while($row = mysqli_fetch_assoc($result)) : 
		///echo "<b>Author Email: </b>".$row['email'];
		//echo "<br><b>Comment: </b>".$row['content'];
		//echo "<br><b> Time : </b>".$row['date_and_time'];
		//echo "<hr>";
?>
						<!-- comment -->
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4><?php echo $row['email']; ?></h4>
											<span class="time"><?php echo $row['date_and_time']; ?></span>
											
										</div>
										<p><?php echo $row['content']; ?></p>

									</div>
								</div>	

						<!-- /comment -->
<?php								
	endwhile 

?>
							</div>
<?php							
endif
?>
						</div>
						<!-- /comments -->






						<!-- reply -->
						<div class="section-row">
							<div class="section-title">
								<h2>Leave a reply</h2>
								<p>your email address will not be published. required fields are marked *</p>
							</div>
<!--
							<form class="post-reply">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span>Name *</span>
											<input class="input" type="text" name="name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Email *</span>
											<input class="input" type="email" name="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Website</span>
											<input class="input" type="text" name="website">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" name="message" placeholder="Message"></textarea>
										</div>
										<button class="primary-button">Submit</button>
									</div>
								</div>
							</form>
-->
<?php if ($_SESSION['logged_in'] == TRUE) :?>
<form name = "f1" acion="fullBlog.php" method="post">
<div class="row gtr-uniform">
<textarea name="comment" rows="7" cols="62" wrap="yes" placeholder="Your comment..."> </textarea>
</div>
<br>
<div class="row gtr-uniform">
<div class="col-12">
<input type="submit" value="Post" name="SUBMIT" class="primary" />
<input type="reset" value="Reset" />
</div>
</div>

</form>
<?php else :?>
<h4> Please <a href="logIn.php"> Log In</a> to add comment</a> </h4>
<?php endif ?>
						</div>
						<!-- /reply -->
					</div>
					<!-- /Post content -->

					<!-- aside -->
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
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
