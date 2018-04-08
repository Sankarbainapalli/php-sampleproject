<?php

$host="localhost";
$user="root";
$pass="";
$db="mydb";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

if(isset($_POST['username'])){
	$username=$_POST['username'];

$password=$_POST['password'];



$res=mysqli_query($conn,"select * from data where name='".$username."' AND password='".$password."' LIMIT 1");

if(mysqli_num_rows($res)==1){
	echo "succesully login";
	exit();
}else{
echo "invalid";
exit();
}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="lo.php" method="post">
		
username:<input type="text" name="username">
password:<input type="password" name="password">
<input type="submit" name="submit" value="submit">





	</form>

</body>
</html>