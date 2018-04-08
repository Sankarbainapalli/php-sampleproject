<?php
 
 $name = $_POST['name'];
  $email = $_POST['ma']; 
  $password = $_POST['pass'];
  $confpassword = $_POST['confpass'];

 if($name && $email && $password && $confpassword)
 {
 	if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
 	{
 		if (strlen($password)>4) 
 	     {
 	        if($password == $confpassword)
              {
 	            $conn=mysqli_connect("localhost","root","") or die("we couldn't connect");
 	             mysqli_select_db($conn,"sankar");
 	            $username=mysqli_query($conn,"select name from data where name= '$name' ");
 	            $count=mysqli_num_rows($username);
 	            $remail=mysqli_query($conn,"select email from data where name= '$email' ");
 	            $checkmail=mysqli_num_rows($remail);
 	         if($checkmail!=0){
 		          echo '<script>alert("emaila is already exits type another email:...")</script>';
 	               }else{


 	                     if($count!=0){
 		                     echo '<script>alert("name is already exits")</script>';
 	                          }else{
                           $sql=mysqli_query($conn,"insert into data(name,email,password) values('$name','$email','$password')");
 	//$registerd = mysqli_affected_rows($sql);
       
 	                           echo "  Registration successfully";
 	                             header("location:login.php");
 	                       }
 	                       }
 	                               }else{
 	                     echo '<script>alert("you have to do not match  passwor")</script>';
 	                     }
 	                        
 	                          



 	                           }else{
 	                           	echo '<script>alert("password does not match")</script>';
 	                           }
 	                       




 	                       }else{
 	                       	echo '<script>alert("please enter valid mail address:")</script>';
 	                       }

 	                          



 	                           } else {
 	                           	echo '<script>alert("not enetred")</script>';

}

?>