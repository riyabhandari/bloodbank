<?php
	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>ADMIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		td{
			width: 150px;
			height: 40px;
		}
	</style>
</head>
<body>
	<div id="total">
		<div id="inside">
			<div id="header" ><h3 align="center">BLOOD BANK MANAGEMENT SYSTEM</h3></div>
			<div id="body"><br>
				<h1 style="text-align: center">DONOR LIST</h1>
				<br><br><br>
				<center>
				<div id="abc" style="overflow-y: scroll;">
					<table>
						<tr>
							<td><center><b><font color="black" size="3px">NAME</font></b></center></td>
							<td><center><b><font color="black" size="3px">FATHER'S NAME</font></b></center></td>
							<td><center><b><font color="black" size="3px">AGE</font></b></center></td>
							<td><center><b><font color="black" size="3px">ADDRESS</font></b></center></td>
							<td><center><b><font color="black" size="3px">CONTACT NO</font></b></center></td>
							<td><center><b><font color="black" size="3px">BLOOD GROUP</font></b></center></td>
							<td><center><b><font color="black" size="3px">DELETE</font></b></center></td>
							<td><center><b><font color="black" size="3px">UPDATE</font></b></center></td>
						</tr>
						<?php
								$q="SELECT * FROM `donor_reg`";
								$query=mysqli_query($conn,$q);
								while($res=mysqli_fetch_array($query)){
						?>
						<tr class="text-center">
							<td><?php echo $res['name'];?></td>
							<td><?php echo $res['father_name'];?></td>
							<td><?php echo $res['age'];?></td>
							<td><?php echo $res['address'];?></td>
							<td><?php echo $res['contactno'];?></td>
							<td><?php echo $res['bloodgroup'];?></td>
							<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res["id"]; ?>"class="text-white">Delete</a></button></td>
							<td><button class="btn-primary btn"><a href="update.php?id=<?php echo $res["id"]; ?>"class="text-white">Update</a></button></td>	
						</tr>
						<?php
							}
						?>
					</table>

				</div></center>
			</div>
			<div id="footer"><h5 align="center">Copyright@BloodBankManagementSystem</h5></div>
		</div>
	</div>		
</body>
</html>