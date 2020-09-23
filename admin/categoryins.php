<html>
<head>
	<style>
		#cat form
		{
			background-color:#1595D0;
			color:#123456;	
			width:430px;	
			margin:30px 10px 0 100px;
			height:230px;
			width:460px;
			padding:10px;
			
		}
		#cat td
		{
			width:250px;
			height:25px;
			font-size:20px;
		}
		#cat td input
		{
			font-size:18px;
			text-padding:16px;
			width:250px;
			height:25px;
		}
		
		#cat input[type="submit"]
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
							
			<div id=cat>
				<form action="Categoryprocess.php" method="POST" enctype="multipart/form-data">
					<table style="width:100%">
						<tr>
							<th width=100% align="Center" Colspan="2">
									<h1>Enter Category Details</h1>
							</th>
						</tr>
						<tr style="width:50px">
							<td width="50%" align="Right"> 
								Category :: 
							</td>
							<td width="50%">
								<input type="Text" name="t1">
							</td>
						</tr>
						<tr>
							<td width="50%" align="Right"> 	
								Upload Image ::
							</td>
							<td width="50%">
								<input type="file" name="t2" accept="image/gif" accept="image/x-png" accept="image/jpeg" accept="image/x-ms-bmp">
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