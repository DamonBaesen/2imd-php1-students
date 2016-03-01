<?php include("data.inc.php");

function canLogin($p_username, $p_password) {
	if($p_username == "damon.baesen@gmail.com" && $p_password == "secret")
	{
		return true;
	}
	else
	{
		return false;
	}
}
if (!empty($_POST))
{
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(canLogin($username, $password)){
		$_SESSION['user'] = "yes";
		header('Location: profile.php');
	}
}
?><nav>
	<form action="" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		
	</title>
	<link rel="stylesheet" href="css/ello.css">
</head>
<body class="homepage">
<style>
	body
	{
		background-color: lightskyblue;
		color: white;
	}
</style>
	<div class="users_container">
	<ul class="users">
		<li>
			<a href="profile.php?id=1">
			<img src="" alt="">
			</a>
		</li>
	</ul>
	<br class="clearfix">
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	$(document).ready(function(){

		$(".users_container").mousemove(function( event ) {
		  var x = Math.round(event.pageX/5) * -1;
		  var y = Math.round(event.pageY/5) * -1;
	  		$(".users").css("transform", "translateX("+x+"px) translateY("+y+"px)");
		});

		$("body").mousemove();

	});
	</script>

</body>
</html>