<?php
//$conn=mysqli_connect("localhost","root","");
 	            // mysqli_select_db($conn,"sankar");
 	            // $email=$_POST['email'];
 	            //$query=mysqli_query($conn,"select * from data where email= '$email' ");
 	            //$row=mysqli_fetch_array($query);
 	          // print_r($row['password']);
  //ini_set("sendmail_from", "sankar00064@gmail.com");  
require 'PHPMailer/PHPMailerAutoload.php';
$to='sankar00064@gmail.com';
$subject='project';
$message=  "Forgot Password:http://localhost/myproject/update.php" ;
$header='From:sankar0064@gmail.com';
if ($to && $subject && $message) {
	# code...

mail($to,$subject,$message,$header);

 header("location:login.php");
//echo "sent successfully";
	
	# code...
}else{
	echo "sorry, unable to send mail...";
}


?>
