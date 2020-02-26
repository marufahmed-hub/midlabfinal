<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<form method="POST" action="logcheck.php">
	<form>
	<fieldset>
	<legend>LOGIN</legend>
		User Id: <input type="text" name="uname" value=""> <br>
		Password: <input type="password" name="password" value=""><br>
		<input type="submit" name="Login" value="Login">
		<u><a href="reg.php">Register</a></u>
		</fieldset>
		</form>
</body>
</html>