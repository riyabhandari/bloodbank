<?php
	include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>BLOOD BANK MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="total">
		<div id="inside">
			<div id="header" ><h2 align="center">BLOOD BANK MANAGEMENT SYSTEM</h2></div>
			<div id="body">
				<br>
			<form action=" " method="post">	
				<table align="center">
					<tr>
						<td width="200px" height="70px"><h3><b>Enter Username</b></h3></td>
						<td width="200px" height="70px"><input type="text" name="username" placeholder="Enter Username"  
							style="width: 180px;height:30px;border-radius: 10px;"></td>
					</tr>
					<tr>
						<td width="200px" height="70px"><h3><b>Enter Password</b></h3></td>
						<td width="200px" height="70px"><input type="password" name="password" placeholder="Enter Password"  
							style="width: 180px;height:30px;border-radius: 10px"></td>
					</tr>
					<tr>
						<td width="200px" height="50px"><h3><b>Select Role</b></h3></td>
						<td width="200px" height="50px">
							<select name="role" required="required" style="width: 180px;height: 30px">
									<option>Donor</option>
									<option>Patient</option>
							</select>
						</td>	
					<tr>
						<br>
						<td><input type="submit" name="submit" value="SIGN IN" style="width: 80px;height: 40px;
						border-radius: 10px;background-color: #bb0a1e;color: white;margin:auto;display:block;margin-left: 160px;
						margin-top: 20px"></td>
					</tr>
					<tr>
						<br>
						<td colspan="5"><input type="submit" name="signup" value="Not have an account?Signup here" style="width: 230px;height: 40px;
						border-radius: 10px;background-color: #bb0a1e;color: white;margin:auto;display:block;margin-left: 80px;
						margin-top: 20px"></td>
					</tr>
					<tr>
						<br>
						<td colspan="5"><input type="submit" name="admin" value="ADMIN SIGN IN" style="width: 230px;height: 40px;
						border-radius: 10px;background-color: #bb0a1e;color: white;margin:auto;display:block;margin-left: 80px;
						margin-top: 20px"></td>
					</tr>
				</table>
			</form>	
			<?php
				if(isset($_POST['submit']))
				{	
					$role=$_POST['role'];
					$username=$_POST['username'];
			        $password=$_POST['password'];
			        if(!isset($username) || trim($username) == '' || !isset($password) || trim($password)=='') 
			          	{
			          		$message = "Please enter username and password";
  					  	 	echo "<script type='text/javascript'>alert('$message');</script>";
			          	}
			        else
			          	{
					  		$q="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
			          		$query=mysqli_query($conn,$q);
			          		if(mysqli_num_rows($query)>0)
			          		{
			          			if($role=='Donor')	
			          			{
			          				header("Location:donor-registration.php");
			          			}
			          		   else
			          			{
			          				header("Location:user-page.php");
			            		}
			          			
			          		}
			          		else
			          		{
			          			$message = "Username and Password Incorrect";
  					  	 	    echo "<script type='text/javascript'>alert('$message');</script>";

			          		}

			            	
			          	}  	
			    }
			    if(isset($_POST['signup']))
			    {
			    	header("Location:index.php");
			    }
			    if(isset($_POST['admin']))
			    {
			    	header("Location:admin-signin.php");
			    }

			?>			
			</div>
			<div id="footer"><h4 align="center">Copyright@BloodBankManagementSystem</h4></div>
		</div>
	</div>		
</body>
</html>