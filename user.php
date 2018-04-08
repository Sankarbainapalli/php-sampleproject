<?php
session_start();


if (!isset($_SESSION['name'])) {



	echo "access denied";
	exit;
	# code...
}else{

	echo "<b>".$_SESSION['name']."</b> sesssion <br /> <a href='logout_session.php'>Logout</a>";

}


?>