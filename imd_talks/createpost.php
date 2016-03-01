<?php
session_start();
if(!isset($_SESSION['user'])){
	header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMD Talks</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/twitter.css">
	<style>

	
	</style>
	
</head>
<body>
	<nav>
		<a href="logout.php"Logout>Logout</a>
	</nav>
	
	<div id="container">	
	<section id="newpost">
		<h3><?php echo "Welcome back " . $_SESSION['user'][0] ."!"?></h3>
	</section>
	
	</div>	
	
</body>
</html>