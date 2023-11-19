<?php
session_start();

$pages_path = "/main";

if($use_page != "TRUE") {
	echo "Working";
	header("location: $pages_path/home.php");
}

?>
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
