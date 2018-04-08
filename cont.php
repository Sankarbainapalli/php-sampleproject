<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$messag=$_POST['message'];

	$mailTo = "sankar00064@gmail.com";
	$headers="From: ".$email;
	$txt="You have received an mail from" .$name."\n\n". $messag;


	mail($mailTo,$subject,$txt,$headers);

	echo "<script>alert('mail successfully sent')</script>";

}





?>


<!DOCTYPE html>
<html>
<head>
	<title>contact Form</title>
</head>
<body>
<main>
	<h1 align="center">Send mail</h1>
<form action="cont.php" method="post">

<table align="center">


<tr><td><input type="text" name="name" placeholder="fullname"></td></tr>
<tr><td><input type="text" name="email" placeholder="email"></td></tr>
<tr><td><input type="text" name="subject" placeholder="subject"></td></tr>
<tr><td><input type="text" name="message" placeholder="message"></td></tr>
<tr><td>
<input type="submit" name="submit" value="submit"></td></tr>



</table>




</form>

<hr>





	<center>
			<a href="home.php">HOME</a> | <a href="about.php">ABOUT</a> | <a href="contact.php">CONTACT US</a> 
			</center>
	
	<hr>
</main>
</body>
</html>