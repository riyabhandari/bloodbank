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
				<br><br><br><br>
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
						<br><br><br>
						<td><input type="submit" name="submit" value="SIGN IN" style="width: 80px;height: 40px;
						border-radius: 10px;background-color: #bb0a1e;color: white;margin:auto;display:block;margin-left: 160px;
						margin-top: 20px"></td>
					</tr>
				</table>
			</form>	
			<?php
			if(isset($_POST['submit']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				if(!isset($username) || trim($username) == '' || !isset($password) || trim($password)=='') 
			    {
			        $message = "Please enter username and password";
  					echo "<script type='text/javascript'>alert('$message');</script>";
			    }
				elseif($username=='Riya' && $password=='123456')
				{
					header('location:admin-page.php');
				}
				else
				{
					$message = "Username and/or Password incorrect.\\nTry again.";
  					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}
			?>
			</div>
			<div id="footer"><h4 align="center">Copyright@BloodBankManagementSystem</h4></div>
		</div>
	</div>
</div>
</body>
</html>


	