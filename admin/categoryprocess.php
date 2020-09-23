<?php
	include("header.php");	
	$r1=$_POST['t1'];
	$r2=$_FILES['t2']['name'];
	
	if($r1=="" ||$r2=="")
	{
		echo "<script>alert('Fill all the information.');</script>";
		echo "<script>window.location='Categorydisp.php';</script>";
	}
	else
	{
		$q1=mysqli_query($con,"insert into category(category,image) values('$r1','$r2')");
		
		echo "<script>alert('Category Inserted');</script>";
		echo "<script>window.location='Categorydisp.php';</script>";	
	}
?>

