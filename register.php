<?php include("header.php") ?>
<div style="height:600px;padding-top:0px;">

<center>
	 <h1 align="center"><font color="#000000" style="text-shadow:2px 2px grey">Just one More Step!!! <br>And You will Be Sign Up with QuizHub</font></h1>

<table width="100%">
	<tr>
		<td width="50%" id="regpage" align="center">
		<img src="images/registration.jpg" Width="400px" height="400px">
		</td>
		<td width="50%" align="center">
			<div id="registration">
				<form action='registerprocess.php' method='post' id="myForm" autocomplete="off">
	<h3>Fill Your Information!</h3>
		<table>
			
			
			<tr>
                <td>Username</td>
                <td><input type='text' name='username' id='username1' ></td>
				
            </tr>			
            <tr>
                <td>Password</td>
                <td><input type='password' name='password' id='password1'></td>
                
            </tr>
            <tr>
            	<td>Email</td>
                <td><input type='text' name='email' id='email1' ></td>
                
            </tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="cno" id='cno1'></td>
				
			</tr>	
            <tr>
                <td  colspan="3"><input type='submit' onclick="checkForm();" value='Submit'></td>
            </tr>			
        </table>
</form>
</div>
		</td>
	</tr>
</table>
<br><br>
</center>
</div>
<?php include("footer.php") ?>


