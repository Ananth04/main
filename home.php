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

		<div id="wrapper">

				
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
											
								<h1>Catogeries</h1>
							</header>
<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="img/fashion.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=FASHION">
										<h1>FASHION</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="img/food.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=FOOD">
										<h1>FOOD</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="img/travel.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=TRAVEL">
										<h1>TRAVEL</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="img/beauty.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=BEAUTY">
										<h1>BEAUTY</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
							<article class="style5">
									<span class="image">
										<img src="img/music.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=MUSIC">
										<h1>MUSIC</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="img/fitness.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=FITNESS">
										<h1>FITNESS</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="img/lifestyle.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=LIFESTYLE">
										<h1>LIFESTYLE</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="img/tech.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=TECH">
										<h1>TECH</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="img/sports.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=SPORTS">
										<h1>SPORTS</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="img/politics.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=POLITICS">
										<h1>POLITICS</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="img/gaming.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=GAMING">
										<h1>GAMING</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="img/pet.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=PET">
										<h1>PET</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a target="_blank" href="category.php?category=ALL">
										<h1>ALL</h1>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>


			</div>
	
		</header>

	<?php
		include("$include_path/components/footer.php");
	?>
		<!-- jQuery Plugins -->
		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
