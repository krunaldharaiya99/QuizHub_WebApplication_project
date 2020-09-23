<?php
include("header.php");
	$id = $_GET['del'];	
	$sql = mysqli_query($con,"DELETE FROM review WHERE id = '$id'");
	echo "<script>alert('Record Deleted');</script>";
	echo "<script>window.location='Reviewdisp.php';</script>";		

?>