<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'sankar';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}   
  
$name=$_POST['name'];  
$sql = "delete from data where name='$name' ";  
if(mysqli_query($conn, $sql)){  
 echo '<script>alert("Record deleted successfully")</script>';  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
<form action="" method="post">
	<table>
		<tr><td>Name:</td><td><input type="text" name="name" ></td></tr>
		
	</table>

	<input type="submit" name="resubmit" value="delete">
	
</form>
<hr>
<center>
			<a href="home.php">HOME</a> | <a href="about.php">ABOUT</a> | <a href="contact.php">CONTACT US</a> 
			</center>

	<hr>
</body>
</html>