<html>
<head>
	
	<style>
		.table
		{
			font-family:Arial, Helvetica, sans-serif;
			text-align:center;
			
		}
		.th
		{
			background-color:#000000;
			color:#FFFFFF;
			width:100px;
			height:60px;
			font-size:20px;
			text-decoration:none;
		}
		.td
		{
			background-color:#1595D0;
			
			color:white;
			width:100px;
			height:40px;
			font-size:17px;
		}
	</style>
</head>
<body>
<?php include("header.php");?>	
	<table style="height:100%" align="center">
		<tr style="height:100%">
			<td style="width:85%" valign="top">
			 <center><font face="Rockwell" color="#1595D0" size="+3" style="text-shadow:2px 2px black"><b>User's Registration</b></font></center>
			 <br>
					<?php
						$result=mysqli_query($con,"SELECT * FROM registration");
						if(mysqli_num_rows($result)==0)
						{
							echo "<h2 align=center><font color=Blue>No Registrations Received</font></h2>";
						}
						else
						{
							echo "<table class=table border=1 align=center>
									<tr>
										<th class=th>ID</th>
										<th class=th>Username</th>
										<th class=th>Password</th>
										<th class=th>Email</th>
										<th class=th>Contact No</th>
										<th class=th>Role</th>
										<th class=th>Action</th>
									</tr>";
							
							while($row=mysqli_fetch_array($result))
							{
								echo "<tr>
										<td class=td>".$row['id']."</td>
										<td class=td>".$row['unm']."</td>
										<td class=td>".md5($row['psw'])."</td>
										<td class=td>".$row['email']."</td>
										<td class=td>".$row['contactno']."</td>
										<td class=td>".$row['role']."</td>										
										<td class=td><a href='Registerdel.php?del=".$row['unm']."' id='commonbutton'>DELETE</a> 
										</td>
									
									</tr>";		
							}
							echo "</table>";
						}
					?>
			</td>
		</tr>
	</table>
</body>
</html>