<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<title>Register</title>
</head>
<body>
	<h1>Register here</h1>
	<form action="handleForm.php" method="POST">
		<div class="fields">
			<p><input type="text" placeholder="username here" class="fields" name="username"></p>
			<p><input type="password" placeholder="password here" class="fields" name="password"></p>
			<p><input type="submit" value="Register" id="submitBtn" name="regBtn"></p>
		</div>
	</form>
    <a href="index.php">Return to Log in</a>
</body>
</html>
