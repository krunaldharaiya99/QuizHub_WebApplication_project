<html>
<head>
<style>
	#pro form
	{
		background-color:#1595D0;
		color:#123456;	
		width:430px;	
		margin:30px 10px 0 100px;
		height:260px;
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
	<table style="height:40%" align="center">
		<tr style="height:100%">
			<td style="width:85%">
							
			<div id=pro>
				<form action="menuprocess.php" method="GET">
					<table style="width:100%" align="center">
						<tr>
							<th width=100% align="Center" Colspan="2">
									<h1>Enter New Menu</h1>
							</th>
						</tr>
						<tr>
							<td width="50%" align="Right"> 
								Menu Name :: 
							</td>
							<td width="50%">
								<input type="Text" name="t1">
							</td>
						</tr>

						<tr>
							<td width="50%" align="Right"> 
								Css Class :: 
							</td>
							<td width="50%">
								<input type="Text" name="t2">
							</td>
						</tr>
						
						<tr>
							<td width="50%" align="Right"> 
								Url :: 
							</td>
							<td width="50%">
								<input type="text" name="t3">
							</td>
						</tr>
						
						<tr>
							<td width="40%" align="Right">
								Type ::
							</td>
							<td width="60%">
								<select class='filter_dropdown' id='Catagory' onchange='accfilter(this.value)' name="t4">
									<option value=''>Select Menu Type</option>
									<option value="1">Visitor</option>
									<option value="2">User</option>
									<option value="3">Admin</option>
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
