<?php include "header.php";

    if(!isset($_POST['selector'],$_POST['ans'],$_POST['category']))
	{
        header("Location: index.php");
    }
  
    $result =  0;
    $wr =  0;
	
    foreach($_POST['selector'] as $index => $userAnswers)
	{
		$_POST['ans'][$index] = strtoupper($_POST['ans'][$index]);
        if($_POST['ans'][$index] == $userAnswers)
		{
            $wr++;
        }
		else
		{
            
			$result++;	
        }
    }
    $query = mysqli_query($con,"INSERT INTO result (unm,result,category) VALUE ('$_SESSION[username]',$result,$_POST[category])");
	    $query1 = mysqli_query($con,"SELECT * from category WHERE id = $_POST[category]");


while($category=mysqli_fetch_array($query1))
							{ 
							?>
<div style="height:700px;padding-top:40px;margin-left:420px;">	

<table align="center" class="resultbox">
<tr>
<td width="30%" align="center">
	<p class="headingcategory">
		<?php echo $category['category'] ;?>
	</p>
	<br />
	<div class="imagecontainer1">
		<img src='../images/<?php echo "../images/".$category['image'] ?>' alt="<?php echo $category['category'];?>" class="mainimage1">
		<div class="imagemiddle1">
			<div class="imagetext1">Result:<?php echo $result?></div>
		</div>
	</div>
</td>
</tr>
</table>
<?php }?>

</div>
<?php include "footer.php";?>