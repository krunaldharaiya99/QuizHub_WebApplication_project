<?php

	// Inialize session
	session_start();
	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['adname'])) 
	{
		header('Location:../index.php');
	}
	
?>

<html>
<head>
    <title>QuizHub</title>
    <link rel="stylesheet" href="css/adminmain.css">
    <link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="../fontawesome/css/all.css">
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    
	<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
</head>
<body>
	<div class="container1">
        <header><table border="0" width="100%"><tr><td width="35%"><img class="logo-img" src="../images/QuizHub.png"></td><td width="65%" align="right">
		<nav class="slidemenu">
    <?php
		include("connection.php");

		$sql    = "SELECT * FROM menu";
		$result = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$count = 1;
			if ($row['type'] == '3') { ?>
				  <label>
					<a href="<?php echo $row['url']; ?>" style="color:#FFFFFF;">
						<p class="<?php echo $row['cssclass']; ?>"></p>
						<span><?php echo $row['name']; ?></span>
					</a>
				</label>
				<?php
			}			
		}		
	?>
    
  </nav>
  </td>
  </tr>
  </table>
		 
		  </header>
    </div><br>
    
	
    
</body>

</html>
   <!-- </div>
    
	<table width="100%">
	<tr>
	<td align="center">
	<nav class="slidemenu">
    <?php
		include("connection.php");

		$sql    = "SELECT * FROM menu";
		$result = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$count = 1;
			if ($row['type'] == '3') { ?>
				  <label>
					<a href="<?php echo $row['url']; ?>" style="color:#000000;">
						<p class="<?php echo $row['cssclass']; ?>"></p>
						<span><?php echo $row['name']; ?></span>
					</a>
				</label>
				<?php
			}			
		}		
	?>
    
  </nav>
	</td>
	</tr>
	</table>
    <br>
</body>
</html>




		<table border="0" width="100%"><tr><td width="45%"><img src="images/logo5.png"></td><td width="55%" align="right">
		 -->