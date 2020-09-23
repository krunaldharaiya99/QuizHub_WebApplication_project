<?php include ("header.php");?>
<h1 align="center"><font color="#000000" style="text-shadow:2px 2px grey">Videos</font></h1>
<div style="height:670px;padding-top:0px;">
<center>	  
<br />
	<table align="center" cellspacing="50">
		<?php
			$test = 0;	
			$sql="SELECT * FROM video";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				if($test%3==0)
				{
					echo "<tr><td align='center'>";
					echo "<video controls height=250px width=250px class='imagecontainer' style='box-shadow:0px 0px 30px black;border-radius:30px;padding-bottom:30px;'>";
					echo "<source src='../videos/".$row['name']."' type='video/mp4'>";
					echo "<source src='../videos/".$row['name']."' type='video/ogg'>";
					echo "Your browser does not support the video tag.</video>";
					echo "</td>";
				}
				else
				{
					echo "<td align='center'>";
					echo "<video controls height=250px width=250px class='imagecontainer' style='box-shadow:0px 0px 30px black;border-radius:30px;padding-bottom:30px;'>";
					echo "<source src='../videos/".$row['name']."' type='video/mp4'>";
//					echo "<source src='../videos/".$row['name']."' type='video/ogg'>";
					echo "Your browser does not support the video tag.</video>";
					echo "</td>";
				}
				$test++;
			}
		?>
	</table>
	</center>
	</div>
<?php include("footer.php"); ?>