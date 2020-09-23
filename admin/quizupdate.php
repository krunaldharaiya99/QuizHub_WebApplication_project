<html>
<head>
	<style>
		#pro form
	{
		background-color:#1595D0;
		color:#123456;	
		width:430px;	
		margin:30px 10px 0 100px;
		height:330px;
		padding:10px;
		border:10;
		
	}
	#pro td
	{
		width:250px;
		height:25px;
		font-size:20px;
		
	}
	#pro td input
	{
		font-size:18px;
		text-padding:16px;
		width:250px;
		height:25px;
	}
	
	#pro td select
	{
		font-size:18px;
		text-padding:16px;
		width:250px;
		height:25px;
	}
	#pro input[type="submit"]
	{
		font-family: verdana;
		height:50px;
	  	font-weight: bold;
	  	color: #FFFFFF;
	  	font-size: 20px;
		padding: 5px 20px;
		background: #000000;
	}

	</style>
</head>
<body>
	<?php
		include("header.php");
		$id = $_GET['update'];
		$sql=mysqli_query($con,"select * from quiz WHERE id = '$id'");
		while($r=mysqli_fetch_array($sql))
					{
		?>
	<table style="height:60%" align="center">
		<tr style="height:100%">
			<td style="width:85%">
					<div id=pro>

				<form action="quizupdateprocess.php" method="POST">
				<input type='hidden' name='id' value="<?php echo $r["id"]; ?>">
					<table style="width:100%" align="center">
						<tr>
							<th width=100% align="Center" Colspan="2">
									<h1>Enter Quiz Details</h1>
							</th>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Question :: 
							</td>
							<td width="50%">
								<input type="Text" name="t1" value="<?php echo $r["question"]; ?>">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 1 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t2" value="<?php echo $r["option1"]; ?>">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 2 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t3" value="<?php echo $r["option2"]; ?>">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 3 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t4" value="<?php echo $r["option3"]; ?>">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 4 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t5" value="<?php echo $r["option4"]; ?>">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Correct Ans :: 
							</td>
							<td width="50%">
								<input type="Text" name="t6" value="<?php echo $r["correct_ans"]; ?>">
							</td>
						</tr>
						<tr>
							<td width="40%" align="Right">
								Category :: 
							</td>
							<td width="60%">
								<select class='filter_dropdown' id='Catagory' onchange='accfilter(this.value)' name="t7" >
								
									<option value=''>Select Catagory</option>
									<option value=1<?=$r['category'] == 1 ? ' selected="selected"' : '';?>>Animals</option>
									<option value=2<?=$r['category'] == 2 ? ' selected="selected"' : '';?>>Program</option>
									<option value=3<?=$r['category'] == 3 ? ' selected="selected"' : '';?>>GK</option>
									<option value=4<?=$r['category'] == 4 ? ' selected="selected"' : '';?>>Religion</option>					
									<option value=5<?=$r['category'] == 5 ? ' selected="selected"' : '';?>>Sports</option>
									<option value=6<?=$r['category'] == 6 ? ' selected="selected"' : '';?>>Geography</option>
									<option value=7<?=$r['category'] == 7 ? ' selected="selected"' : '';?>>Science</option>
									<option value=8<?=$r['category'] == 8 ? ' selected="selected"' : '';?>>History</option>
									<option value=9<?=$r['category'] == 9 ? ' selected="selected"' : '';?>>Music</option>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Submit">
							</td>
						</tr>
					</table>
				</form>	
				</div>	
			</td>
		</tr>
	</table>
	<?php
	}
	?>
</body>
</html>

