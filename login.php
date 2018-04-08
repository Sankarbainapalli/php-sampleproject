<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="l.css">
</head>
<body >
	<h2>Login Form</h2>
	<center>
<form action="log.php" method="post">
	<table>
<tr><td>Username</td></tr>
	<tr><td><input type="text" name = "username"></td></tr>

<tr><td>Password</td></tr>
<tr>	<td><input type="password" name = "password"></td></tr>
<tr><td colspan="6"><input type="submit" name="submit" value="Login" ><br /></td></tr>
<tr><td><a href="mailer.php">Forgot password?</a></td><td><a href="register.php">Signup?</a></td></tr>
</table>
</form>
<hr>
<center>
			<a href="home.php">HOME</a> | <a href="about.php">ABOUT</a> | <a href="contact.php">CONTACT US</a> 
			</center>
	
	<hr>
</body>
</html>