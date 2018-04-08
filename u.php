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
 echo '<script>alert("record updated successfullu")</script>';  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  

}else{
	echo "password does not match";
}
  
mysqli_close($conn);  
?>  
