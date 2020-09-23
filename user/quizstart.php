<?php include("header.php"); ?>
<?php
			if(!isset($_GET['id']))
			{
				echo "<script>alert('Select Quiz Category from quizzes.');</script>";
				echo "<Script>window.location='index.php'</script>";
			}
			else
			{
			$id = $_GET['id'];
			$sql="SELECT * FROM category where id = $id";
			$result=mysqli_query($con,$sql);
			
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{?>
			<div style="height:700px;padding-top:40px;margin-left:420px;">	

				<table align="center" class="resultbox">
<tr>
<td width="30%" align="center">
					<p class="headingcategory">
						<?php echo $row['category'];?>
					</p>
					<br />
					<div class="imagecontainer1">
						<img src='../images/<?php echo "../images/".$row['image'] ?>' alt="<?php echo $row['category'];?>" class="mainimage1">
						<div class="imagemiddle1">
							<a href="quizcategory.php?id=<?php echo $row['id']?>" class="imagetext1">Start Quiz</a>
						</div>
					</div>
				</div>
				</td>
				</tr>
				</table>
				</div>
			<?php
			 }}			
			?>
		
<?php include("footer.php"); ?>