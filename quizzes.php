<?php include ("header.php");?>
	 <h1 align="center"><font color="#000000" style="text-shadow:2px 2px grey">Featured Quizzes</font></h1>


<div style="height:900px;padding-top:15px;">
<center>	  
<br />
	<table align="center" border="0">
		<?php
			$test = 0;	
			$sql="SELECT id,category,image FROM category";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				if ($test == 0)
				{?>
					<tr width='100%'>
				<?php } ?>
				<td width='30%'>
				<table width="100%" cellspacing="10" cellpadding="10" border="0">
				<tr align='center'>
					<td width='250' height='250' align='center'><a href='login.php?id=<?php echo $row['id']; ?>'>
						<div class="imagecontainer">
							<img src='images/<?php echo $row['image'];?>' alt="<?php echo $row['category'];?>" class="mainimage">
							<div class="imagemiddle">
								<div class="imagetext"><?php echo $row['category'];?></div>
							</div>
						</div>
						</a>
					</td>
				</tr>				
				</table>
				</td>
				<?php $test = $test + 1;
				if($test == 3)
				{?>
					</tr>
					<?php $test = 0;
				}
			}
		?>
	</table>
	</center>
	</div>
<?php include("footer.php"); ?>
