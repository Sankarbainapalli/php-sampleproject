<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'sankar';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
  $id=$_POST['ID'];  

$password=$_POST['password'] ; 
$conf=$_POST['conf'];
if ($password == $conf) {
	# code..
//$password=""
$sql = "update data set  password=\"$password\" where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo '<script>alert("record updated successfully")</script>';  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  

}else{
	echo "password does not match";
}
  
mysqli_close($conn);  
?>  

<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
</head>
<body>





<form action="update.php" method="post">
	<table>
		<tr><td>ID:</td><td><input type="text" name="ID" ></td></tr>
		
			<tr><td>password:</td><td><input type="text" name="password" ></td></tr>
		<tr><td>conf:</td><td><input type="text" name="conf"></td></tr>
	</table>

	<input type="submit" name="resubmit" value="submit">
	
</form>
<hr>
<center>
			<a href="home.php">HOME</a> | <a href="about.php">ABOUT</a> | <a href="contact.php">CONTACT US</a> 
			</center>

	<hr>
</body>
</html>