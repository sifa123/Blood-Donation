<?php
include('connection.php');
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exchange Blood Donor List
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
			<h1>Exchange Blood List</h1>
			<center><div id="form">
				<table>
					<tr>
						<td><center><b>Name</b></center></td>

						<td><center><b>Father's Name</b></center></td>

						<td><center><b>Address</b></center></td>

						<td><center><b>City</b></center></td>

						<td><center><b>Age</b></center></td>

						<td><center><b>Blood Group</b></center></td>

						<td><center><b>Mobile No</b></center></td>
						<td><center><b>E-mail</b></center></td>

						

					</tr>
					<?php
					$q=$db->query("SELECT *FROM exchange_blood_reg");
					while($r1=$q->fetch(PDO::FETCH_OBJ))
					{


					?>


					<tr>
						<td><center><?=$r1->name; ?></center></td>

						<td><center><?=$r1->fname; ?></center></td>

						<td><center><?=$r1->address; ?></center></td>

						<td><center><?=$r1->city; ?></center></td>

						<td><center><?=$r1->age; ?></center></td>

						<td><center><?=$r1->bgroup; ?></center></td>

						<td><center><?=$r1->mno; ?></center></td>
						<td><center><?=$r1->email; ?></center></td>
					</tr>
					<?php
				}
				?>
					
				</table>
				
			</div></center>
	</div>
	<div id="footer"><p align="center"><a href="logout.php" style="font-size: 25px;"><font color="black">Logout</font></a></p></div> 
	
</div>
</div>
</body>
</html>

			
