<?php
include('connection.php');
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Login
	</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">

	<style>
		#body{
			background-color: olive;
		}
	#header{
			margin-top: 60px;
		}
	</style>
</head>
<body>
	
	<div id="full">
		<div id="inner_full">
			<div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: black;">Blood Bank</a></h2></div>
			<div id="body">
			<br>
		<?php
         $un=$_SESSION['un'];
         if(!$un){
         	header("Location:index.php");
         }
		?>
			<h1>Welcome Admin</h1><br><br>
			<ul>
				<li><a href="doner-reg.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="stoke-blood-list.php">Stoke Blood List</a></li>
			</ul><br><br><br><br><br>
			
	</div>
	<div id="footer">	<p align="center"><a href="logout.php" style="font-size: 25px;padding-top: 65px;"><font color="black">Logout</font></a></p></div>
	
</div>
</div>
</body>
</html>

			
