
<?php
if ($_REQUEST['submit']) {

	$search=$_GET['search'];
	$terms=explode(" ", $search);
	$sql=" select * from data where ";
$i=0;
	foreach ($terms as $each) {
		$i++;
		if ($i==1) {

			# code...
			$sql.="name LIKE '%$each%' ";
		}else{
			$sql.=" OR name LIKE '%$each%' ";

		}
		# code...
	}
	$conn=mysqli_connect("localhost","root","") or die("connection failed");
	mysqli_select_db($conn,"sankar") ;
	$query=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($query);


	if ($num>0 && $search!="") {
		while ($row=mysqli_fetch_assoc($query)) {
			# code...
			$id=$row['id'];
			$name=$row['name'];
			$email=$row['email'];
			$password=$row['password'];


			echo "$name<br />$email<br />";
		}
		# code...
	}else{
		echo "no result found";
	}
	mysqli_close($conn);




	# code...
}else{
	echo "please type anything..";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>serch engine</title>
</head>
<body>
<hr>
<center>
			<a href="home.php">HOME</a> | <a href="about.php">ABOUT</a> | <a href="contact.php">CONTACT US</a> 
			</center>

	<hr>



</body>
</html>