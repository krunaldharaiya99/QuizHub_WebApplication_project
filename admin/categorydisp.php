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
	<a href="categoryins.php" id='addbutton'>ADD CATEGORY +</a></center>
			<div style="height:500px;">

	<br>
	<table style="height:70%" align="center">
		<tr style="height:100%">
			<td style="width:85%" valign="top">
					<?php
						$q=mysqli_query($con,"select * from category");
						
						if(mysqli_num_rows($q)==0)
						{
							echo "<h2 align=center><font color=Blue>No Categories</font></h2>";
						}
						else
						{
							echo "<table align=center border=1 class=table>
									<tr>
										<th class=th>ID</th>
										<th class=th>Category</th>
										<th class=th>Image</th>
										<th class=th>Action</th>
									</tr>";
							
							while($r=mysqli_fetch_array($q))
							{
								echo "<tr>
										<td class=td>".$r['id']."</td>
										<td class=td>".$r['category']."</td>
										<td class=td>"; ?>
											<img src='../images/<?php echo $r['image'];?>' alt="<?php echo $r['category'];?>" height="100px" width="100px">
										<?php echo "</td>										
										<td class=td><a href='Categorydel.php?del=".$r['id']."' id='commonbutton'>DELETE</a>
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
	</div>
</body>
</html>