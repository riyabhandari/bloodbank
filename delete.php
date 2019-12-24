<?php
	include("connect.php");
	$id=$_GET['id'];
	$q="DELETE FROM `donor_reg` WHERE id= '$id'";
	mysqli_query($conn,$q);
	header("Location:donor-list.php");
?>