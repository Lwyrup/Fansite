<?php 
$active = "id='active'"; 
$currentPage = basename($_SERVER['PHP_SELF']);
?>


<h2>The Serj Tankian fan page</h2>

<a href="index.php"><p class="sect" 
<?php if($currentPage == "index.php"){echo $active;} ?>>Home</p></a>

<a href="biography.php"><p class="sect" 
<?php if($currentPage == "biography.php"){echo $active;} ?>>Biography</p></a>

<a href="music.php"><p class="sect" 
<?php if($currentPage == "music.php"){echo $active;} ?>>Musical Career</p></a>

<a href="political.php"><p class="sect" 
<?php if($currentPage == "political.php"){echo $active;} ?>>Political Presence</p></a>

<a href="external-links.php"><p class="sect" 
<?php if($currentPage == "external-links.php"){echo $active;} ?>>Links</p></a>


