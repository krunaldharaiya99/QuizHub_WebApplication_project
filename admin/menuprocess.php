<?php
	include("header.php");	
	$r1=$_GET['t1'];
	$r2=$_GET['t2'];
	$r3=$_GET['t3'];
	$r4=$_GET['t4'];
	if($r1=="" ||$r2=="" ||$r3=="" ||$r4=="" )
	{
		echo "<script>alert('Fill all the information.');</script>";
		echo "<script>window.location='Menudisp.php';</script>";
	}
	else
	{
		$q1=mysqli_query($con,"insert into menu(id,name,cssclass,url,type) values('','$r1','$r2','$r3','$r4')");
		echo "<script>alert('Menu Inserted');</script>";
		echo "<script>window.location='Menudisp.php';</script>";	
	}
?>