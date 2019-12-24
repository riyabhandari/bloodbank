<?php
	include("connect.php");
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
				<h1 style="text-align: center">DONOR REGISTRATION</h1>
				<br><br><br>
				<center>
				<div id="abc">
				<form action=" " method="post">	
					<table>
						<br><br>
						<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px"><input type="text" pattern="[A-Za-z]*" title="Please enter characters only" name="name" placeholder="Enter Name" required="required"></td>
							<td width="200px" height="50px">Enter Father's Name</td>
							<td width="200px" height="50px"><input type="text" pattern="[A-Za-z]*" title="Please enter characters only" name="father_name" placeholder="Enter Father's Name" required="required"></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="number"  name="age" placeholder="Enter Age" required="required"></td>
							<td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name="address" placeholder="Enter Address" required="required"></textarea> </td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Contact No</td>
							<td width="200px" height="50px"><input type="text"  name="contactno" placeholder="Enter Contact No" 
								 maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required="required"></td>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
								<select name="bloodgroup" required="required">
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
							<td height="70px"><input style="background-color: #bb0a1e; width: 70px; height: 30px ;color: white;" type="submit" name="submit" value="Save">
							</td>
						</tr>
					</table>
				</form>	
				<?php
				if(isset($_POST['submit']))
				{
					
					$name=$_POST['name'];
					$father_name=$_POST['father_name'];
					$age=$_POST['age'];
					$address=$_POST['address'];
					$contactno=$_POST['contactno'];
					$bloodgroup=$_POST['bloodgroup'];
					$q="INSERT INTO `donor_reg`(`name`, `father_name`, `age`, `address`, `contactno`, `bloodgroup`) VALUES ('$name',
								'$father_name','$age','$address','$contactno','$bloodgroup')";
					$query=mysqli_query($conn,$q);
					echo "<script>alert('Registration Done Successfully')</script>";
					header("Location:user-page.php");
				
				}
				

				?>


				</div></center>
			</div>
			<div id="footer"><h4 align="center">Copyright@BloodBankManagementSystem</h4></div>
		</div>
	</div>		
</body>
</html>