<?php
session_start();
if ($_POST) {
	# code...

$_SESSION['name']=$_POST['username'];

$_SESSION['password']=$_POST["password"];

if ($_SESSION['name'] && $_SESSION['password']) {
	$conn=mysqli_connect("localhost","root","") or die("connection failed");
	mysqli_select_db($conn,"sankar");
	$sql=mysqli_query($conn,"select name,password from data where name ='".$_SESSION['name']."'");
	$row=mysqli_num_rows($sql);
	if($row!=0)
	{
		while ($rows=mysqli_fetch_assoc($sql)) {

			$dbname=$rows['name'];
			$dbpassword=$rows['password'];
		}

         if ($_SESSION['name']==$dbname)
          {
         	if ($_SESSION['password']==$dbpassword) {
         		echo "you are in:";
         		header("location:sa.php");

        
         	}else{
         		echo "your password incurrect";
         	}
        
         }else{
         echo "your name is wrong";
     }


 }else{
		echo "This name is not registered";
	}

 
 }else{

	echo "name and password not entered";
}

}else{
	echo "access denied";
	exit;
}
?>