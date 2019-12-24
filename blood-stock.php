<?php
	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
	<div id="total">
		<div id="inside">
			<div id="header" ><h2 align="center">BLOOD BANK MANAGEMENT SYSTEM</h2></div>
			<div id="body"><br>
				<h1 style="text-align: center">BLOOD AVAILABILITY</h1>
				<br><br><br>
				<center>
				<div id="abc" style="overflow-y: scroll;">
					<table>
						<tr>
							<td><center><b><font color="black" size="3px">BLOOD GROUP</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">QUANTITY</font></b></center></b></td>
						</tr>
						<tr>
							<td><center>O+</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='O+'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						<tr>
							<td><center>O-</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='O-'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						<tr>
							<td><center>A+</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='A+'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						<tr>
							<td><center>A-</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='A-'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						<tr>
							<td><center>B+</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='B+'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						<tr>
							<td><center>B-</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='B-'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						<tr>
							<td><center>AB+</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='AB+'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						<tr>
							<td><center>AB-</center></td>
							<?php
								$q="SELECT * FROM `donor_reg` WHERE bloodgroup='AB-'";
								$query=mysqli_query($conn,$q);
								$num_rows = mysqli_num_rows($query);
						    ?>
							<td><center><?php echo $num_rows ?></center></td>
						</tr>
						
					</table>

				</div></center>
			</div>
			<div id="footer"><h4 align="center">Copyright@BloodBankManagementSystem</h4></div>
		</div>
	</div>		
</body>
</html>