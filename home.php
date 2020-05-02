<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
if(!isset($_SESSION['user_email'])) 
{
  header("location:index.php");
}


?>
<html>
<head>
  
  <?php
  $user=$_SESSION['user_email'];
          $get_user="select*from users where user_email='$user'";
            $run_user=mysqli_query($con,$get_user);
            $row=mysqli_fetch_array($run_user);
            
            $user_name=$row['user_name'];
            $user_id=$row['user_id'];
  ?>
  <title><?php echo "$user_name"; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="style/home_style2.css">
  <style>
  #upload_image_button
{
  position:absolute;
  top:50.5%;
  right:14.2%;
  min-width:100px;
  max-width:100px;
  border-radius:4px;
  transform:translate(-50%, -60%);

}
 #content
 {
  width:70%;
 }
 #btn-post
 {
  min-width:25%;
  max-width:25%;
 }
 #insert_post
 {
  background-color:#fff;
  border:2px solid #e6e6e6;
  padding:40px 50px;

 }
 
</style>
  
</head>
<body>
  <div class="row">
    <div id="insert_post" class="col-sm-12">
      <center>
        <form action="home.php?u_id='$user_id'" method="post" id="f" enctype="multipart/form-data">
          <textarea class="form-control" id="content" rows="4" name="content" placeholder="What's in your mind?"></textarea><br>
  <label class="btn btn-warning" id="upload_image_button">Select Image<input type="file" name="upload_image" size="30"></label>
    <button id="btn-post" class="btn btn-success" name="sub">Post</button>
        </form>
        <?php
       
        insertPost();


?>
</center>
</div>
<div class="row">
  <div class="col-sm-12">
  <center><h2><strong>News Feed</strong></h2><br></center>
  <?php 
   get_posts();
   

   ?>
</div>
</div>
</body>

</html>
