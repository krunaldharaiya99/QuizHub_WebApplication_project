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
	<center>
	<a href="addmenu.php" id='addbutton'>ADD MENU +</a></center>
	<br>
	<div style="height:500px;overflow:auto;">
	<table style="height:100%" align="center">
		<tr style="height:100%">
			<td style="width:85%" valign="top">
					<?php
						$q=mysqli_query($con,"select * from menu");
						if(mysqli_num_rows($q)==0)
						{
							echo "<h2 align=center><font color=Blue>No Menus</font></h2>";
						}
						else
						{
							echo "<table align=center border=1 class=table>
									<tr>
										<th class=th>ID</th>
										<th class=th>Name</th>
										<th class=th>CssClass</th>
										<th class=th>Url</th>
										<th class=th>Type</th>
										<th class=th>Action</th>
									</tr>";
							while($r=mysqli_fetch_array($q))
							{
								echo "<tr>
										<td class=td>".$r['id']."</td>
										<td class=td>".$r['name']."</td>
										<td class=td>".$r['cssclass']."</td>
										<td class=td>".$r['url']."</td>
										<td class=td>".$r['type']."</td>
										<td class=td><a href='Menusdel.php?del=".$r['id']."' id='commonbutton'>DELETE</a></td>
									</tr>";		
							}
							echo "</table>";
						}
					?>
				</form>		
			
			</td>
		</tr>
	</table>
	</div>
</body>
</html>