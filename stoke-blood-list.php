<?php
include('connection.php');
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Donor Registration
	</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 50px;
		}
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
			<h1>Stoke Blood List</h1>
			<center><div id="form">
				<table>
					<tr>
						<td><center><b><font>Name</font></b></center></td>

						<td><center><b><font>Quantity</font></b></center></td>
					</tr>
					<tr>

						<td><center><b>AB+</b></center></td>
						<td><center>
							<?php
							$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
							echo $row=$q->rowcount();
							?>
						</center></td>
					</tr>
					<tr>
						<td><center><b>AB-</b></center></td>
						<td><center>
							<?php
							$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
							echo $row=$q->rowcount();
							?>
						</center></td>
					</tr>
					<tr>
						<td><center><b>O+</b></center></td>
						<td><center>
							<?php
							$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
							echo $row=$q->rowcount();
							?>
						</center></td>
					</tr>
					</tr>

						
						

					</tr>
					

					
					
				</table>
				
			</div></center>
	</div>
	<div id="footer"><p align="center"><a href="logout.php" style="font-size: 25px;"><font color="black">Logout</font></a></p></div> 
	
</div>
</div>
</body>
</html>
