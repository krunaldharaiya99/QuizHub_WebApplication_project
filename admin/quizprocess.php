<?php
	include("header.php");	
	$r1=$_GET['t1'];
	$r2=$_GET['t2'];
	$r3=$_GET['t3'];
	$r4=$_GET['t4'];
	$r5=$_GET['t5'];
	$r6=$_GET['t6'];
	$r7=$_GET['t7'];
	
	if($r1=="" ||$r2=="" ||$r3=="" ||$r4=="" || $r5=="" || $r6=="" || $r7=="")
	{
		echo "<script>alert('Fill all the information.');</script>";
		echo "<script>window.location='quizdisp.php';</script>";
	}
	else
	{
		$q1=mysqli_query($con,"insert into quiz values('','$r1','$r2','$r3','$r4','$r5','$r6','$r7')");
		echo "<script>alert('Quiz Inserted');</script>";
		echo "<script>window.location='quizdisp.php';</script>";	
	}
?>


