<?php include("header.php") 
?>
<script> 
function checkForm()
{
	var name = document.getElementById("username1").value;
    var password = document.getElementById("password1").value;
	if (name == '' || password == '') 
    {
        alert("Enter Proper Username And Password");
    }

    else
    {
		document.getElementById("LoginForm").submit();
	}
}
</script>
	 <h1 align="center"><font color="#000000" style="text-shadow:2px 2px grey">Sign in to your account!!!</font></h1>
<div style="height:490px;padding-top:0px;">

<table width="100%">
	<tr>
		<td width="50%" id="loginpage" align="center">
		
		<img src="images/loginimage.jpg" Width="400px" height=400px>
		</td>
		<td width="50%"  align="center">
        <div id="login">
<form action="loginpro.php" method="post" autocomplete="off">
<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		echo "<input type='hidden' name='id' value=".$id." />";
	}
?>
    <h3>Sign In</h3>
		<table>
			<tr>
                <td>Username</td>
                <td><input type='text' name='uname' id='username1'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type='password' name='passwd' id='password1'></td>
            </tr>
            <tr>
                <td  colspan="2"><input type="submit" value="Sign In" name="submit" /></td>
            </tr>
			<tr>
                <td><a href="register.php">Register</a></td>
				<td align="center"><a href="forgot.php">Forgot Password</td>
            </tr>						
        </table>
</form>
</div>
		</td>
	</tr>
</table>

</div>
<br /><br /><br /><br />
<?php include("footer.php") ?>


