<html>
<head>
<script>
function f(r)
{
	document.getElementById('fb').innerHTML="<font size='+3' color='#ff0000'><b>"+r+"</b></font>";
}
</script>
<title>
</title>
</head>
<body>
<?php include("header.php");?>
	
    	<div style="height:570px;padding-top:0px;" id="review">
        <center>
    		<form action="reviewprocess.php" method="POST">
				<h3 align="center">Review</h3>
 				<br>
        		<table align="center">
            		<tr>
                		<td width="100%" align="center">
							<table width="100%">
								<tr>
									<td width="45%" align="right">
										Comments :
									</td>
									<td width="55%">
										<textarea rows="3" cols="50" name="t1" required></textarea>
									</td>
								</tr>
							</table>
                		</td>
            		</tr>           
					<tr>
						<td width="100%" align="center">
                            <br>
							<table width="100%">
								<tr align="center">
									<td align=center width="25%"><p class="fa fa-heart" style="font-size:48px;color:#1595D0"></p><br></td>
									<td align=center width="25%"><p class="fa fa-smile" style="font-size:48px;color:#1595D0"></p><br></td>
									<td align=center width="25%"><p class="fa fa-thumbs-up" style="font-size:48px;color:#1595D0"></p><br></td>
									<td align=center width="25%"><p class="fa fa-thumbs-down" style="font-size:48px;color:#1595D0"></p><br></td>
								</tr>
								<tr>
									<td align=center width="25%"><font size="+3" color="#1595D0"><input type=radio value="Good" onClick="f('Good')" name="t2" required><br>Good</font></td>
									<td align=center width="25%"><font size="+3" color="#1595D0"><input type=radio value="Best" onClick="f('Best')" name="t2" required><br>Best</font></td>
									<td align=center width="25%"><font size="+3" color="#1595D0"><input type=radio value="Excellent" onClick="f('Excellent')" name="t2" required><br>Excellent</font></td>
									<td align=center width="25%"><font size="+3" color="#1595D0"><input type=radio value="Poor" onClick="f('Poor')" name="t2" required><br>Poor</font></td>
								</tr>                       
							</table>
						</td>
					</tr>
					<tr>
						<td width="100%" align="center">
                            <br>
							<input type="submit" value="SUBMIT" >		
						</td>
					</tr>
        		</table>
            </form>
            </center>
		</div>
	
<?php include("footer.php");?>
</body>
</html>
