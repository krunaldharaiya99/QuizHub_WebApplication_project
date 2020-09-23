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
	<a href="quizins.php" id='addbutton'>ADD QUIZ +</a></center>
		<div style="height:900px;overflow:auto;">

	<br>
	<center><table style="height:70%">
		<tr style="height:100%">
			<td style="width:85%" valign="top">
				<?php
				$q=mysqli_query($con,"select * from quiz");
						if(mysqli_num_rows($q)==0)
						{
							echo "<h2 align=center><font color=Blue>No Quiz</font></h2>";
						}
						else
						{	
							echo "<table align=center border=1 class=table>
									<tr>
										<th class=th>ID</th>
										<th class=th>Question</th>
										<th class=th>Option 1</th>
										<th class=th>Option 2</th>
										<th class=th>Option 3</th>
										<th class=th>Option 4</th>
										<th class=th>Correct Ans</th>
										<th class=th>Category</th>
										<th class=th>Action</th>
										<th class=th>Action</th>
									</tr>";
							while($r=mysqli_fetch_array($q))
							{
								echo "<tr>
										<td class=td>".$r['id']."</td>
										<td class=td>".$r['question']."</td>										
										<td class=td>".$r['option1']."</td>
										<td class=td>".$r['option2']."</td>
										<td class=td>".$r['option3']."</td>
										<td class=td>".$r['option4']."</td>
										<td class=td>".$r['correct_ans']."</td>
										<td class=td>".$r['category']."</td>
										<td class=td><a href='quizdel.php?del=".$r['id']."' id='commonbutton'>DELETE</a></td>
										<td class=td><a href='quizupdate.php?update=".$r['id']."' id='commonbutton'>UPDATE</a>													
										</td>
										
									</tr>";		
							}
							echo "</table>";
						}
					?>
				</form>
			</div>
			</td>
		</tr>
	</table>
	</center>
	</div>
</body>
</html>