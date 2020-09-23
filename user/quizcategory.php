<?php
    include("header.php");
?>
<form action="quizresult.php" method="post" name="result">
<div style="height:560px;padding-top:80px">
    <input type="hidden" name="category" value="<?php echo $_GET['id'] ?>">
<table width="100%">
    <tr>
        <td width="10%"></td>
        <td width="80%">
			<?php
			if(!isset($_GET['id']))
			{
				echo "<script>alert('Select Quiz Category from quizzes.');</script>";
				echo "<Script>window.location='index.php'</script>";
			}
			else
			{
				$id = $_GET['id'];
				$count=0;
				$res=0;
				$sql="SELECT * FROM quiz where category = $id";
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
				{		
					$count++; ?>
                    <br class="question<?php echo $count ?>" />
                    <!-- Check The Count if The Count is 1 Then Display Table other wise none -->				
					
					<table width="100%" class="question<?php echo $count ?>" style="display: <?php echo $count == 1? "table":"none" ?>;"><tr><td align="center">
					<div class="table">
						<div class="rowque">
							<div class="que">
								<?php echo $row['question'] ?>
							</div>
						</div>
						
						 <div class="row">
							<div class="cell">
                                <label>
                                    <input type="radio" data-count="<?php echo $count; ?>" class="question-option" value="<?php echo $row['correct_ans'] ?>" name="selector[<?php echo $row['id'] ?>]" ><?php echo $row['option1'] ?>
                                </label>
                            </div>
						
							<div class="cell">
								<label><input type="radio" data-count="<?php echo $count; ?>" class="question-option" value="<?php echo $row['correct_ans'] ?>" name="selector[<?php echo $row['id'] ?>]" ><?php echo $row['option2'] ?></label>
							</div>
						</div>

						<div class="row">
							<div class="cell">
								<label><input type="radio" data-count="<?php echo $count; ?>" class="question-option" value="<?php echo $row['correct_ans'] ?>" name="selector[<?php echo $row['id'] ?>]" ><?php echo $row['option3'] ?></label>
							</div>

							<div class="cell">
								<label><input type="radio" data-count="<?php echo $count; ?>" class="question-option" value="<?php echo $row['correct_ans'] ?>" name="selector[<?php echo $row['id'] ?>]" ><?php echo $row['option4'] ?></label>
							</div>
						</div>
                        <input type="hidden" name="ans[<?php echo $row['id']; ?>]" value="<?php echo $row['correct_ans'] ?>">
                    </div>

				</td></tr></table>


					<?php
				}
				}
			?>
	</td>
        <td width="10%">

        </td>
    </tr>
</table>
</div>
</form>
<?php include("footer.php"); ?>
<script src="../js/jquey.js"></script>
<script>
    window.addEventListener("load",function () {
        $(".question-option").click(function(){
            var count = parseInt($(this).data("count"));
            $(".question"+count).hide();
            if($(".question"+(count+1)).length == 0){
                document.forms[0].submit();
            }else{
                $(".question"+(count+1)).show();

            }
        });

    })
</script>
