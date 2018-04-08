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

<!DOCTYPE html>
<html>
<head>
	<title>SERVICES</title>
	<style type="text/css">
		.JAVA{
			
			padding: 20px;
			background-color:orange;
			color: white;
			width: 290px;
			height: 300px;
			border-style: ridge; 
			float: left;
		}
		.HTML{
			
			padding: 20px;
			background-color:orange;
			color: white;
			width: 290px;
			height: 300px;
			border-style: ridge; 
			float: left;
		}
		.CSS{
			
			padding: 20px;
			background-color:orange;
			color: white;
			width: 290px;
			height: 300px;
			border-style: ridge; 
			float: left;
		}
			
	
		.hea{
			margin: 0px;
			padding: 25px;
			background-color:	 #ccccff;
			color: orange;
			width: 100%;
			height: 40px;
		}
		*{
			padding: 0px;
			margin: 0px;

		}
		h2{
			font-size: 30px;
			color: white;
		}
         td{
         	column-span: 6px;
         }
         ul {
         	font-size: 20px;
         	list-style: none;
         	text-align: center;
         }
        
		
	</style>
</head>
<body>
	<header class="hea">
		<form action="search.php" method="get">
	<input type="text" name="search">
	<input type="submit" name="submit" value="search">
	<hr>
	</form>
		<h2 ><marquee>Welcome to Shreem Information Technology</marquee></h2>

	</header>

	<table>
<tr><td><a href="https://www.javatpoint.com/java-tutorial"><div class="JAVA">
	
	<h2 align="center">JAVA</h2><hr><br>
	<ul>
		<li>What is java</li>
		<li>History of java</li>
		<li>Hello java program</li>
		<li>How to set the path</li>
		<li>JDK,JRE & JVM</li>
		<li>Internal Details of JVM</li>
		<li>Hello java program</li>
	</ul>
</div></a></td><td>
<a href="https://www.javatpoint.com/html-tutorial"><div class="HTML" >
	<h2 align="center">HTML</h2><hr><br>
	<ul>

<li>Introduction to HTML</li> 
<li>What is HTML</li>
<li>HTML tags</li>
<li>HTML Formatting</li>
<li>HTML Heading</li>
<li>HTML Paragraph</li>
<li>HTML Anchor</li>
<li>HTML Image</li>
<li>HTML Table</li>
<li>HTML Lists</li>
				

		
	</ul>
</div></a></td><td>
<a href="https://www.javatpoint.com/what-is-css"><div class="JAVA">
	<h2 align="center">CSS</h2><hr><br>
		<ul>
		
<li>Introduction to CSS</li>
 
<li> What is CSS</li>
 <li>CSS Syntax</li>
<li> CSS Selector</li>
<li> How to Add CSS</li>
<li> Inline CSS</li>
 <li>Internal CSS</li>
 <li>External CSS</li>
 <li>CSS Comments</li>
		
	</ul>
</div></a></td><td>

<a href="https://www.javatpoint.com/php-tutorial"><div class="JAVA">
	<h2 align="center">PHP</h2><hr><br>
		<ul>
	
<li>PHP Introduction</li>
<li>What is PHP</li>
<li>Install PHP </li>
<li>PHP Example</li>
<li>PHP Echo</li>
<li>PHP Print</li>
<li>PHP Variable</li>
		
	</ul>
</div></a></td></tr>



<tr><td><a href="https://www.javatpoint.com/angularjs-tutorial"><div class="JAVA">
	<h2 align="center">ANGULARJS</h2><hr><br>
		<ul>
		<li>AngularJS Filters</li>
		<li>AngularJS Tables</li>
		<li>AngularJS Select</li>
		<li>AngularJS DOM</li>
		<li>AngularJS Forms</li>
		<li>AngularJS Validation</li>
		<li>AngularJS AJAX</li>
		<li>AngularJS Animation</li>

		
	</ul>
</div></a></td><td>
<a href="https://www.javatpoint.com/mysql-tutorial"><div class="JAVA">
	<h2 align="center">MYSQL</h2><hr><br>
		<ul>
	<li>What is MySQL</li>
	<li>MySQL History</li>
	<li>MySQL Features</li>
	<li>MySQL Data Types</li>
	<li>Install MySQL</li>

		
	</ul>
</div></a></td><td>
<a href="https://www.javatpoint.com/oracle-tutorial"><div class="JAVA">
	<h2 align="center">ORACLE</h2><hr><br>
		<ul>
	<li>What is oracle</li>
		<li>Create Table</li>
		<li>Create Table As</li>
		<li>Alter TableDrop </li>
		<li>TableGlobal </li>
		<li>Temp TablesLocal </li>
		<li>Temp Tables</li>
		
		
	</ul>
</div></a></td><td>

<a href="https://www.javatpoint.com/sql-tutorial"><div class="CSS">
	<h2 align="center">SQL SERVER</h2><hr><br>
	<ul>
		
		<li>Introduction to SQL </li>
		<li>What is SQL</li>
		<li>What is RDBMSDBMS vs RDBMS</li>
		<li>SQL Syntax</li>
		<li>SQL Data Types</li>
		<li>SQL Operators</li>

	</ul>
</div></a></td></tr>


</table>
<footer class="hea">
	<center>
			<a href="home.php">HOME</a> | <a href="about.php">ABOUT</a> | <a href="contact.php">CONTACT US</a> | <a href="home.php">LOGOUT</a> | <a href="retrive.php">STUDENTS LIST</a>
			</center>
	</footer>
</body>
</html>