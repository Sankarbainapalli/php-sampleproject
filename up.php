<?php
 

  $password = $_POST['pass'];
  $confpassword = $_POST['confpass'];

 if( $password && $confpassword)
 {
 	
 		if (strlen($password)>4) 
 	     {
 	        if($password == $confpassword)
              {
 	            $conn=mysqli_connect("localhost","root","") or die("we couldn't connect");
 	             mysqli_select_db($conn,"sankar");
 	           
                           $sql=mysqli_query($conn, "update data set password=\"$password\" where id="1"); 
 	//$registerd = mysqli_affected_rows($sql);
       
 	                           echo "  update successfully";
 	                             header("location:login.php");
 	                       
 	                       
 	                               }else{
 	                     echo "you have to doesn't match match passwor";
 	                     }
 	                        
 	                          



 	                           }else{
 	                           	echo "your password too short";
 	                           }
 	                       




 	                     

 	                          



 	                           } else {
 	                           	echo "not enetred";

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
</head>
<body>
<form  action="up.php" method="post">
	<table>


<tr><td>password</td></tr>
<tr>	<td><input type="password" name="pass" maxlength="15"></td></tr>
<tr><td>conformpassword</td></tr>
	<tr><td><input type="password" name="confpass" maxlength="15"></td></tr>

<tr><td align="center" colspan="6"><input type="submit" name="submit" value="Register" size="40%"></td></tr>

</table>
</form>
</body>
</html>