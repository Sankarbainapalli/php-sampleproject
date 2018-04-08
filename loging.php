<?php
$host="localhost";
$user="root";
$pass="";
$db="sankar";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

if(isset($_POST['username'])){


	
	$username=$_POST['username'];

$password=$_POST['password'];



$res=mysqli_query($conn,"select * from data where name='".$username."' AND password='".$password."' LIMIT 1");

if(mysqli_num_rows($res)==1){
	header("location:sa.php");
	exit();
}else{
echo '<script>alert("This name does not exits please register!")</script>';
exit();
}
}
?>