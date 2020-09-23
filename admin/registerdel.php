<?php
include("header.php");
$unm = $_GET['del'];
	
		$sql = mysqli_query($con,"DELETE FROM `registration` WHERE `unm` = '$unm'");
		$sql1 = mysqli_query($con,"DELETE FROM `login` WHERE `unm` = '$unm'");
		echo "<script>alert('Record Deleted');</script>";
		echo "<script>window.location='Registerdisp.php';</script>";
	
?>		
