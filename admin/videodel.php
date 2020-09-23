<?php
// Inialize session
	session_start();
	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['adname'])) 
	{
		header('Location:../index.php');
	}

	include("connection.php");
	$id = $_GET['del'];
	$sql = mysqli_query($con,"DELETE FROM video WHERE id = '$id'");
	echo "<script>alert('Video Deleted');</script>";
	echo "<script>window.location='videodisp.php';</script>";	
?>					

		
	
