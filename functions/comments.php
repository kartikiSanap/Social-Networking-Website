<?php
$get_id=$_GET['post_id'];
$get_com="select *from comments where post_id='$get_id' order by 1 desc";
$run_com=mysqli_query($con,$get_com);
while($row=mysqli_fetch_array($run_com)){
	$com=$row['comment'];
	$com_name=$row['comment_author'];
	$date=$row['date'];
	echo"<div class='row'>
	<div class='col-md-6 col-md-offset-3'>
	<div class='panel panel-info'>
	<div class='panel-body'>
	<br>
	<div>
	<h4><strong>$com_name</strong>&nbsp;<i>commented</i> on $date</h4>
	<p class='text-primary' style='margin-left:5px; font-size:20px;'>$com</p>
	</div>
	</div>
	</div>
	</div>
	</div>
	";
}
?>