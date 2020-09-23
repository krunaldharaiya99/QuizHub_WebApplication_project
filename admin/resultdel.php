<?php
include("header.php");
	$id = $_GET['del'];	
	$sql = mysqli_query($con,"DELETE FROM result WHERE id = '$id'");
	echo "<script>alert('Record Deleted');</script>";
	echo "<script>window.location='resultdisp.php';</script>";		

?>