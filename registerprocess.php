<?php	
	include('connection.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$cno=$_POST['cno'];

	if ($username == '' || $password == ''||$email == '' || $cno == '') 
    {
        echo "<script>alert('All fields are required..!!');</script>";
        echo "<script>window.location='register.php';</script>";
    }
    else
    {
    	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	    {
	    	echo "<script>alert('Please enter valid email..!!');</script>";
        	echo "<script>window.location='register.php';</script>";
	    }
	    elseif(!preg_match("/^[A-Za-z]*$/",$_POST['username']))
	    {
	    	echo "<script>alert('Name should be in String only..!!');</script>";
        	echo "<script>window.location='register.php';</script>";	
	    }
	    elseif(!preg_match("/^[0-9]*$/",$_POST['cno']))
	    {
	    	echo "<script>alert('please enter valid number or check length..!!');</script>";
        	echo "<script>window.location='register.php';</script>";	
	    }
	    else
	    {
			$q=mysqli_query($con,"select * from registration where unm = '$username'");
			$row=mysqli_num_rows($q);
			if($row!=0)
			{
				echo "<script>alert('Username already exist')</script>";
				echo "<script>window.location='register.php';</script>";
			}
			else
			{
				$q1=mysqli_query($con,"insert into registration (unm,psw,email,contactno,role) values('$username','$password','$email','$cno','user')");
				$q2=mysqli_query($con,"insert into login (unm,psw,role) values('$username','$password','2')");
				echo "<script>alert('Thank You For Your Registration');</script>";
				echo "<script>window.location='login.php';</script>";			
			}
		}

	}	
?>
