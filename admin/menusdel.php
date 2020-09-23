<?php
	include("header.php");	
	$id = $_GET['del'];
	$sql = mysqli_query($con,"DELETE FROM menu WHERE id = '$id'");
	echo "<script>alert('Menu Deleted');</script>";
	echo "<script>window.location='Menudisp.php';</script>";	
?>			
		
		
	