<?php
 
 

?>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="r.css">

</head>
<body >

	<h2>Registration Form</h2>
	<center>

<form  action="r.php" method="post">
	<table>

<tr><td>Name</td></tr>
<tr>	<td><input type="text" name="name" maxlength="30"></td></tr>
<tr><td>Email</td></tr>
<tr>	<td><input type="text" name="ma" maxlength="30"></td></tr>
<tr><td>password</td></tr>
<tr>	<td><input type="password" name="pass" maxlength="15"></td></tr>
<tr><td>conformpassword</td></tr>
	<tr><td><input type="password" name="confpass" maxlength="15"></td></tr>

<tr><td align="center" colspan="6"><input type="submit" name="submit" value="Register" size="40%"></td></tr>

</table>
</form>
</cenetr>
<hr>
<center>
			<a href="home.php">HOME</a> | <a href="about.php">ABOUT</a> | <a href="contact.php">CONTACT US</a> 
			</center>
	
	<hr>
</body>
</html>

