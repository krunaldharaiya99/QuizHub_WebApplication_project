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
	$sql = mysqli_query($con,"DELETE FROM quiz WHERE id = '$id'");
	echo "<script>alert('Record Deleted');</script>";
	echo "<script>window.location='quizdisp.php';</script>";	
					
?>					

		
	

				
				
					
				