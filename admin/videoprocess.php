<?php
	include("header.php");	
	$r1=$_POST['t1'];
	$r2=$_POST['t2'];
	$r3=$_POST['t3']['name'];
	
	if($r1=="")
	{
		echo "<script>alert('Fill all the information.');</script>";
		echo "<script>window.location='videodisp.php';</script>";
	}
	else
	{
		move_uploaded_file($_FILES["t3"]["tmp_name"],"../videos/".$_FILES["t3"]["name"]);
		$q1=mysqli_query($con,"insert into video(id,name,isVisible) values('','$r3','$r2')");
		echo "<script>alert('Video Inserted');</script>";
		echo "<script>window.location='videodisp.php';</script>";	
	}
?>

