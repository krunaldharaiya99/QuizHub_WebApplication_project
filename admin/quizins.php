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
		include("header.php");?>
	<table style="height:60%" align="center">
		<tr style="height:100%">
			<td style="width:85%">
		<div id=pro>
				<form action="quizprocess.php" method="GET">
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
								<input type="Text" name="t1">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 1 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t2">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 2 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t3">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 3 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t4">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Option 4 :: 
							</td>
							<td width="50%">
								<input type="Text" name="t5">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Correct Ans :: 
							</td>
							<td width="50%">
								<input type="Text" name="t6">
							</td>
						</tr>
						<tr>
							<td width="40%" align="Right">
								Category :: 
							</td>
							<td width="60%">
								<select class='filter_dropdown' id='Catagory' onchange='accfilter(this.value)' name="t7">
									<option value=''>Select Catagory</option>
									<option value=1>Animals</option>
									<option value=2>Program</option>
									<option value=3>GK</option>
									<option value=4>Religion</option>					
									<option value=5>Sports</option>
									<option value=6>Geography</option>
									<option value=7>Science</option>
									<option value=8>History</option>
									<option value=9>Music</option>
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
</body>
</html>