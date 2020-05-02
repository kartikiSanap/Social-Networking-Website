 <html>


<head>
	<title>View Your Posts</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
 
 
</head>
<body>
	<?php
session_start();
include("includes/header.php");
if(isset($_GET['post_id'])){
	$get_id=$_GET['post_id'];
}

if(!isset($_SESSION['user_email'])) {
	header("location:index.php");
}


 echo "<center><h2><i>Likes And Comments</i></h2></center>
 <a href='likes.php?post_id=$get_id'><button class='btn btn-success' style='width:100px;height:50px;float:right;margin-right:350px'>View Likes</button></a>";
 ?>

	<div class="row">
		
		    <br>
			<div class="col-sm-12">
			<?php 
			single_post(); 
			?>
		</div>
		
		
		

	</div>
	
	
	
</body>
</html>

