<html>
<head>
    <title>QuizHub</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body>

    <div class="container1">
        <header>
		<table border="0" width="100%"><tr><td width="45%"><img class="logo-img" src="images/QuizHub.png"></td><td width="55%" align="right">
		<nav class="slidemenu">
    <?php
		include("connection.php");

		$sql    = "SELECT * FROM menu";
		$result = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$count = 1;
			if ($row['type'] == '1') { ?>
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