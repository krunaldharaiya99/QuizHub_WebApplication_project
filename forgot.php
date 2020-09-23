<?php include ('header.php') ?>
<div style="height:590px;padding-top:50px;">
	<table width="100%" height="40%">
		<tr>
			<td Width="38%">
			</td>
			<td width="24%">
				<center><font face="Rockwell" color="#000000" size="+3" style="text-shadow:2px 2px darkgrey"><b>Forgot Your Password!!!</b></font></center>
				
				<div id="forget">
				<form action="forgotpro.php" method="POST">
					<table style="width:100%" align="center">
						<tr style="width:100%">
							<td style="width:50%"> 
								Name
							</td>
							<td> 
								<input type="text" name="t1">
							</td>
						</tr>
						<tr style="width:100%">
							<td style="width:50%"> 
								Email
							</td>
							<td> 
								<input type="email" name="t2">
							</td>
						</tr>
						<tr>
							<td style="width:50%" colspan="2"> 
								<input type="submit" value="Get Password" name="submit" />
							</td>
						</tr>
					</table>
				</form>
				
				
			</td>
			<td Width="38%">
			</td>
		</tr>
		</table>
	</div>
<br>
<?php include ('footer.php');?>
