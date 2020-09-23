<?php	
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	
	$con = mysqli_connect("localhost","root","","quiz_campaign");
   
	$q=mysqli_query($con,"SELECT * FROM registration WHERE unm='$t1' and email='$t2'");	
	$r=mysqli_fetch_row($q);
	if(!$r)
	{
		echo "<script>alert('Your username and email is invalid');</script>";
		echo "<script>window.location='forgot.php'</script>";	
	}
	else
	{
		echo "<script>alert('Your Password is ::$r[2]');</script>";
		echo "<script>window.location='login.php'</script>";
	}
?>
