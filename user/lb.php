<?php include("header.php"); ?>
    <center><font face="Rockwell" color="#000000" size="+3" style="text-shadow:2px 2px darkgrey"><b>Leader Board</b></font></center>
	<br />
	<div style="height:1250px;padding-top:15px;">	
        <table align='center' width="100%">
		<?php
			$test = 0;	
			$count = 0;
			$sql="SELECT * from (SELECT * from result ORDER BY result desc limit 9) sub ORDER BY result desc";
			$result=mysqli_query($con,$sql);
			if($result = mysqli_query($con, $sql))
			{
				if(mysqli_num_rows($result) > 0)
				{
					if ($test == 0)
					{
						echo "<tr width='100%'>";
					 
					} 
				} 
				while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					$result1 = mysqli_query($con, "select * from category where id ='".$row['category']."' ");
				?>
					<td width='33%' align="center">
						<table width="100%" class="leaderboard">
							<tr align='center'>
								<td align='center' width="33%" valign="top">
									<p class="headingcategory">Rank <?php $count = $count + 1; echo $count; ?></p></br>									
									<?php while($category=mysqli_fetch_array($result1,MYSQLI_ASSOC)){ ?>
									<div class="imagecontainer2">									
									<img src='../images/<?php echo "../images/".$category['image'] ?>' alt="<?php echo $category['category'];?>" class="mainimage2">
									<div class="imagemiddle2">
										<p class="imagetext2"><?php echo $category['category']; ?></p><br />
									</div>
									<?php }?>
									<br />
									<p class="resultans"><?php echo $row['unm']; ?><br /> Score is <?php echo $row['result']; ?></p><br />
								</td>
            				</tr>
						</table>
						<br /><br />
					</td>
				<?php 
				$test = $test + 1;
				if($test == 3)
				{
					echo "</tr>";
					$test = 0;
				}
			}}
		?>
	</table>
</div>
<?php include("footer.php");?>