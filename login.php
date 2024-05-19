<?php 
session_start();

if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
	echo $_SESSION['welcomeMessage'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Login Lmao</title>
</head>
<body>
	<h1>Login Here first before ordering!</h1>
	<form action="handleForm.php" method="POST">
		<div class="fields">
			<p><input type="text" placeholder="username here" class="fields" name="username"></p>
			<p><input type="password" placeholder="password here" class="fields" name="password"></p>
			<p><input type="submit" value="login" id="loginBtn" name="loginBtn"></p>
		</div>
	</form>
	<a href="register.php">Register</a>
</body>
</html>
