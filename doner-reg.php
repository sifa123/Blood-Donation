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
			<h1>Donor Registration</h1>
			<center><div id="form">
				<form action="" method="post">
				<table>
					<tr>
						<td width="200px" height="50px">Enter Name</td>
						<td width="200px" height="50px"><input type="text" name="name" placeholder="ENter Name"></td>
						<td width="200px" height="50px">Enter Father's Name</td>
						<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name"></td>
					</tr>
					<tr>
					<td width="200px" height="50px">Enter Address</td>
						<td width="200px" height="50px"><textarea name="Address"></textarea></td>
						<td width="200px" height="50px">Enter City</td>
						<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Enter Age</td>
						<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
						<td width="200px" height="50px">Select Blood Group</td>
						<td width="200px" height="50px">
							<select name="bgroup">
								<option>o+</option>
								<option>AB+</option>
								<option>AB-</option>


							</select>
						</td>

					</tr>
					<tr>
						<td width="200px" height="50px">Enter E-mail</td>
						<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
						<td width="200px" height="50px">Enter Mobile No</td>
						<td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
					</tr>
					<tr>
						<td><input type="submit" name="sub" value="Save"></td>
					</tr>
				</table>
				</form>
				<?php
				if(isset($_post['sub'])){
					$name=$_post['name'];
					$fname=$_post['fname'];
					 $address=$_post['address'];
					$city=$_post['city'];
					$age=$_post['age'];
					 $bgroup=$_post['bgroup'];
					$mno=$_post['mno'];
					$email=$_post['email'];
					$q=$db->prepare("INSERT INTO donor_registration(name,fname,address,city,age,bgroup,mno,email) VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
					$q->bindValue('name',$name);
					$q->bindValue('fname',$fname);
					$q->bindValue('address',$address);
					$q->bindValue('city',$city);
					$q->bindValue('age',$age);
					$q->bindValue('bgroup',$bgroup);
					$q->bindValue('mno',$mno);
					$q->bindValue('email',$email);
					if($q->execute()){
						echo"<script>alert('Donor Registration Successfull')</script>";

					}
					else{
						echo"<script>alert('Donor Registration Fail')</script>";

					}
				}
				
				?>
				
			</div></center>
	</div>
	<div id="footer"><p align="center"><a href="logout.php"style="font-size: 25px;"><font color="black">Logout</font></a></p></div> 
	</div>
</div>
</body>
</html>

			
