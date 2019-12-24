<?php
	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>DETAILS PAGE</title>
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
				<h1 style="text-align: center">BLOOD DETAILS</h1>
				<br><br><br>
				<center>
				<div id="abc" style="overflow-y: scroll;">
					<table>
						<tr>
							<td><center><b><font color="black" size="3px">NAME</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">FATHER'S NAME</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">AGE</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">ADDRESS</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">CONTACT NO</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">BLOOD GROUP</font></b></center></b></td>
						</tr>
						<?php
								$q="SELECT * FROM `donor_reg`";
								$query=mysqli_query($conn,$q);
								$res=mysqli_fetch_array($query);
								if($res['bloodgroup']==bloodgroup){
						?>
						<tr>
							<td><center><?php echo $res['name'];?></center></td>
							<td><center><?php echo $res['father_name'];?></td>
							<td><center><?php echo $res['age'];?></td>
							<td><center><?php echo $res['address'];?></td>
							<td><center><?php echo $res['contactno'];?></td>
							<td><center><?php echo $res['bloodgroup'];?></td>
						</tr>
						<?php
							}
						?>
					</table>

				</div></center>
			</div>
			<div id="footer"><h4 align="center">Copyright@BloodBankManagementSystem</h4></div>
		</div>
	</div>		
</body>
</html>