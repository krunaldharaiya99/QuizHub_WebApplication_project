<?php
	include("connection.php");
	$r1=$_POST['t1'];
	$r2=$_POST['t2'];
	
	if($r1=="")
	{
		echo "<script>alert('Fill all the information.');</script>";
		echo "<script>window.location='review.php';</script>";
	}
	else
	{
		$q1=mysqli_query($con,"insert into review values('','$r1','$r2');");		
		echo "<script>alert('Thank You For Your Review');</script>";
		echo "<script>window.location='index.php';</script>";	
	}
?>