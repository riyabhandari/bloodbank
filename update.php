<?php
	include("connect.php");
	if(isset($_POST['submit']))
	{	
		$id=$_GET['id'];
		$name=$_POST['name'];
		$father_name=$_POST['father_name'];
		$age=$_POST['age'];
		$address=$_POST['address'];
		$contactno=$_POST['contactno'];
		$bloodgroup=$_POST['bloodgroup'];
		$q="UPDATE `donor_reg` SET name='$name',father_name='$father_name',age='$age',address='$address',contactno='$contactno',
		bloodgroup='$bloodgroup' WHERE id='$id'";
		mysqli_query($conn,$q);
		header("location:donor-list.php");
	}	

	
?>
<?php
	$id=$_GET['id'];
	$q="SELECT * FROM `donor_reg` WHERE id='$id'";
	$query=mysqli_query($conn,$q);
	while($res=mysqli_fetch_array($query))
	{
?>		
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="total">
		<div id="inside">
			<div id="header" ><h2 align="center">BLOOD BANK MANAGEMENT SYSTEM</h2></div>
			<div id="body"><br>
				<h1 style="text-align: center">UPDATE DONOR DETAILS</h1>
				<br><br><br>
				<center>
				<div id="abc">
				<form action=" " method="post">	
					<table>
						<br><br>
							<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px">		
							<input type="text" pattern="[A-Za-z]*" title="Please enter characters only" name="name" placeholder="Enter Name" 
							value="<?php echo $res['name']; ?>" required="required"></td>
							<td width="200px" height="50px">Enter Father's Name</td>
							<td width="200px" height="50px"><input type="text" pattern="[A-Za-z]*" title="Please enter characters only" name="father_name" value="<?php echo $res['father_name']; ?>" placeholder="Enter Father's Name"  required="required">
							</td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="number"  name="age" placeholder="Enter Age" 
								value="<?php echo $res['age']; ?>"required="required"></td>
							<td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name="address" placeholder="Enter Address"
							 required="required"><?php echo $res['address']; ?></textarea> </td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Contact No</td>
							<td width="200px" height="50px"><input type="text"  name="contactno" placeholder="Enter Contact No" 
								maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" 
								value="<?php echo $res['contactno']; ?>" 
								required="required"></td>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
								<select name="bloodgroup" required="required">
									<option value="O+"<?php if($res['bloodgroup']=='O+') echo 'selected="selected"';?>>O+</option>
									<option value="O-"<?php if($res['bloodgroup']=='O-') echo 'selected="selected"';?>>O-</option>
									<option value="A+"<?php if($res['bloodgroup']=='A+') echo 'selected="selected"';?>>A+</option>
									<option value="A-"<?php if($res['bloodgroup']=='A-') echo 'selected="selected"';?>>A-</option>
									<option value="B+"<?php if($res['bloodgroup']=='B+') echo 'selected="selected"';?>>B+</option>
									<option value="B-"<?php if($res['bloodgroup']=='B-') echo 'selected="selected"';?>>B-</option>
									<option value="AB+"<?php if($res['bloodgroup']=='AB+') echo 'selected="selected"';?>>AB+</option>
									<option value="AB-"<?php if($res['bloodgroup']=='AB-') echo 'selected="selected"';?>>AB-</option>
								</select>
							</td>	
						</tr>
						<tr>
							<td height="70px"><input style="background-color: #bb0a1e; width: 70px; height: 30px ;color: white;" type="submit" name="submit" value="Save">
							</td>
						</tr>	
					</table>
				</form>	
			</div></center>
			</div>
			<div id="footer"><h4 align="center">Copyright@BloodBankManagementSystem</h4></div>
		</div>
	</div>		
</body>
<?php
	}
?>
</html>