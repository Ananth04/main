<?php
$pages_path = "/main";

if($use_page != "TRUE") {
	echo "Working";
	header("location: $pages_path/home.php");
}

?>
<div class="section-title">

<h2>Catagories</h2>

</div>

<div class="category-widget">

<ul>

<li><a href="category.php?category=FASHION" class="cat-1">Fashion</a></li>

<li><a href="category.php?category=FOOD" class="cat-2">Food</a></li>

<li><a href="category.php?category=TRAVEL" class="cat-4">Travel</a></li>

<li><a href="category.php?category=BEAUTY" class="cat-3">Beauty</a></li>

<li><a href="category.php?category=MUSIC" class="cat-3">Music</a></li>

<li><a href="category.php?category=FITNESS" class="cat-3">Fitness</a></li>

<li><a href="category.php?category=LIFESTYLE" class="cat-3">Lifestyle</a></li>

<li><a href="category.php?category=TECH" class="cat-3">Tech</a></li>

<li><a href="category.php?category=SPORTS" class="cat-3">Sports</a></li>

</ul>

</div>
