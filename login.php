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
		
		<fieldset>
			<LEGEND>LOGIN</LEGEND>

				User Id<br>
				<input type="number" name="uidl"><br>
				Password<br>
				<input type="password" name="upasswordl"><br>
				______________________<br>
				
				<input type="submit" name="login" value="Login">
				<u><a href="reg.php">Register</a></u>

		</fieldset>

	</form>
</body>
</html>