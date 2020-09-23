<?php
	include("header.php");	
	$upd = $_POST['id'];
	$r1=$_POST['t1'];
	$r2=$_POST['t2'];
	$r3=$_POST['t3'];
	$r4=$_POST['t4'];
	$r5=$_POST['t5'];
	$r6=$_POST['t6'];
	$r7=$_POST['t7'];
		$sql=mysqli_query($con,"update quiz set question = '$r1',option1 = '$r2',option2 = '$r3',option3 = '$r4',option4 = '$r5',correct_ans = '$r6',category = '$r7' where id='$upd'");		
		echo "<script>alert('Quiz Updated');</script>";
		echo "<script>window.location='quizdisp.php';</script>";	
?>