<?php
	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER PAGE</title>
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
			<div id="header" ><h2 align="center">BLOOD MANAGEMENT SYSTEM</h2></div>
			<div id="body">
				<br>
				<h1 style="text-align: center">DONOR DETAILS</h1>
				<br><br><br>
				<center>
				<div id="abc" style="overflow-y:scroll;">
				<form action=" " method="post" >	
					<table>
						<br><br>
						<tr>
							<td></td>
							<td></td>
							<td colspan="2" width="200px" height="50px">Select Blood Group To View Details</td>
							<td colspan="2" width="200px" height="50px">
								<select name="bloodgroup">
									<option>O+</option>
									<option>O-</option>
									<option>A+</option>
									<option>A-</option>
									<option>B+</option>
									<option>B-</option>
									<option>AB+</option>
									<option>AB-</option>
								</select>
							</td>	
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td height="70px"><input style="background-color: #bb0a1e; width: 70px; height: 30px ;color: white;" type="submit" name="submit" value="SEARCH">
							</td>
							<td height="70px"><input style="background-color: #bb0a1e; width: 120px; height: 30px ;color: white;" type="submit" name="signin" value="SIGN IN PAGE"></td>
							<td height="70px"><input style="background-color: #bb0a1e; width: 180px; height: 30px ;color: white;" type="submit" name="donor" value="DONOR REGISTER PAGE"></td>
						</tr>
						<tr>
							<td><center><b><font color="black" size="3px">NAME</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">FATHER'S NAME</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">AGE</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">ADDRESS</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">CONTACT NO</font></b></center></b></td>
							<td><center><b><font color="black" size="3px">BLOOD GROUP</font></b></center></b></td>
						</tr>
						<?php
							if(isset($_POST['signin']))
							{ 
								header("Location:signin.php");
							}
							if(isset($_POST['donor']))
							{
								header("Location:donor-registration.php");
							}
						 ?>
						<?php
						if(isset($_POST['submit']))
						{
								$bloodgroup=$_POST['bloodgroup'];
								$q="SELECT * FROM `donor_reg` WHERE `bloodgroup` = '$bloodgroup'";
								$query=mysqli_query($conn,$q);
								while($res=mysqli_fetch_array($query)){

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
						}
						?>
					</table>
				</form>


				</div></center>
			</div>
			<div id="footer"><h4 align="center">Copyright@BloodBankManagementSystem</h4></div>
		</div>
	</div>		
</body>
</html>