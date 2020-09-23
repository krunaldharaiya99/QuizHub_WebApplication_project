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
			 <center><font face="Rockwell" color="#1595D0" size="+3" style="text-shadow:2px 2px black"><b>User's Result</b></font></center>
			 <br>
					<?php
						$res=mysqli_query($con,"SELECT * FROM result");
						if(mysqli_num_rows($res)==0)
						{
							echo "<h2 align=center><font color=blue>No Results Received</font></h2>";
						}
						else
						{
							echo "<table class=table border=1 align=center>
									<tr>
										<th class=th>ID</th>
										<th class=th>Name</th>
										<th class=th>Result</th>
										<th class=th>Category</th>
										<th class=th>Action</th>
									</tr>";
							
							while($row=mysqli_fetch_array($res))
							{
								$result1 = mysqli_query($con, "select * from category where id ='".$row['category']."' ");
								echo "<tr>
										<td class=td>".$row['id']."</td>
										<td class=td>".$row['unm']."</td>
										<td class=td>".$row['result']."</td>
										<td class=td>"; ?>
											<?php while($category=mysqli_fetch_array($result1,MYSQLI_ASSOC)){ echo $category['category']; } ?>
										<?php echo "</td>
										<td class=td><a href='resultdel.php?del=".$row['id']."' id='commonbutton'>DELETE</a> 
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