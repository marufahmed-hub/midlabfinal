  
<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin's home page</title>
</head>
<body>
 <?= $_COOKIE['username']?>
	<form>
	<fieldset>
	<h1>Welcome Admin</h1>
	
<u><a href="profile.php">Profile</a></u><br>
<u><a href="changpass.php">Change Password</a></u><br>
<u><a href="viewuser.php">View Users</a></u><br>
<u><a href="logout.php">Logout</a></u><br>	
		</fieldset>
		</form>
</body>
</html>