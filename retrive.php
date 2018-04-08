<?php
 $conn=mysqli_connect("localhost","root","") or die("couldn't connect");
$sql = mysqli_select_db($conn,"sankar");
$result = mysqli_query($conn,"select * from data");

while ($row = mysqli_fetch_array($result) ){

	echo $row['id']."<br />".$row['name']." <br />".$row['email']."<br /> ".$row['password']."<br />";
}
//mysqli_close($con);

?>


