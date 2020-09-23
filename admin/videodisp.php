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
		}	</style>
</head>
<body>
	<?php include("header.php");?>	
	<center>
	<a href="videoins.php" id='addbutton'>ADD VIDEO +</a></center>
	<br>
	<table style="height:70%" align="center">
		<tr style="height:100%">
			<td style="width:85%" valign="top">
					<?php
						$q=mysqli_query($con,"select * from video");
						if(mysqli_num_rows($q)==0)
						{
							echo "<h2 align=center><font color=Blue>No Videos</font></h2>";
						}
						else
						{
							echo "<table align=center border=1 class=table>
									<tr>
										<th class=th>ID</th>
										<th class=th>Name</th>
										<th class=th>IsVisible</th>
										<th class=th>Action</th>
									</tr>";
							while($r=mysqli_fetch_array($q))
							{
								echo "<tr>
										<td class=td>".$r['id']."</td>
										<td class=td>".$r['name']."</td>
										<td class=td>".$r['isVisible']."</td>
										<td class=td><a href='videodel.php?del=".$r['id']."' id='commonbutton'>DELETE</a>
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