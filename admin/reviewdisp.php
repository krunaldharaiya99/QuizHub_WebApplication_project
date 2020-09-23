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
			 <center><font face="Rockwell" color="#1595D0" size="+3" style="text-shadow:2px 2px black"><b>User's Reviews</b></font></center>
			 <br>
				<form>
					<?php
						$q=mysqli_query($con,"SELECT * FROM review");
						if(mysqli_num_rows($q)==0)
						{
							echo "<h2 align=center><font color=Blue>No Reviews Received</font></h2>";
						}
						else
						{
							echo "<table align=center border=1 class=table>
									<tr>
										<th class=th>ID</th>
										<th class=th>Comment</th>
										<th class=th>Satisfaction</th>
										<th class=th>Action</th>
									</tr>";
							
							while($r=mysqli_fetch_array($q))
							{
								echo "<tr>
										<td class=td>".$r['id']."</td>
										<td class=td>".$r['comment']."</td>
										<td class=td>".$r['satisfaction']."</td>
										<td class=td><a href='Reviewdel.php?del=".$r[0]."' id='commonbutton'>DELETE</a>
										</td>
									  </tr>";		
							}
							echo "</table>";
						}
					?>
				</form>	
			</td>
		</tr>
	</table>
</body>
</html>

