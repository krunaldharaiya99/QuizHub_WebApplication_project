<?php	
	$con = mysqli_connect("localhost","root","","quizhub");
	
	// Inialize session
	session_start();
	
	$l1=$_POST['uname'];
	$l2=$_POST['passwd'];
	
	$q=mysqli_query($con,"select * from registration where unm='$l1' and psw='$l2'");

	$r=mysqli_fetch_row($q);
	if($r[1]==$l1 && $r[2]==$l2 && $r[5]=='user')
	{
		$_SESSION['username'] = $_POST['uname'];
		if(isset($_POST['id']))
		{
			$id=$_POST['id'];
			echo $id.$_SESSION['username'];
			echo "<Script>window.location='user/quizstart.php?id=".$id."'</script>";
		}
		else
		{
			header('Location:user/index.php');
		}
	}
	else if($r[1]=="admin" && $r[2]=="admin@123")
	{
		$_SESSION['adname'] = $_POST['uname'];
		echo "<script>window.location='admin/index.php'</script>";	
	}
	else if($r[1]!=$l1 && $r[2]!=$l2)
	{
		echo "<script>alert('User and Password could not match');</script>";
		echo "<script>window.location='login.php'</script>";	
	}
	else 
	{
		echo "<script>alert('Enter Username and Password');</script>";
		echo "<script>window.location='login.php'</script>";	
	}
?>