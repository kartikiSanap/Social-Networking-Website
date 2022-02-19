<html>
<head>
  
<?php
          include("includes/connection.php");
          session_start();
          $user=$_SESSION['user_email'];
          $get_user="select *from users where user_email='$user'";
          $run=mysqli_query($con,$get_user);
          $row=mysqli_fetch_array($run);
          $user_id=$row['user_id'];


          ?>
  <title>Forgotten Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="style/home_style2.css">
  <style>
  body{
    overflow-x:hidden;
  }
  .main-content{
    width:50%;
    height:40%;
    margin:10px auto;
    background-color:#fff;
    border: 2px solid #e6e6e6;
    padding:40px 50px;
  }
  .header{
    border:0px solid #000;
    margin-bottom:5px;
  }
  .well{
    background-color:#187FAB;

  }
  #signup{
    width:60%;
    border-radius:30px;
  }
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
   
  width:80%;
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
    <div class="col-sm-12">
      <div class="well">
        <center><h1 style="color:white;"><strong>Coding Cafe Site</strong></h1></center>
      </div>
    </div>

</div>
<div class="row">
  <div class="col-sm-12">
    <div class="main-content">
      <div class="header">
        <h3 style="text-align:center;"><strong>Change Your Password</strong></h3>
      </div>
      <div class="l_pass">
        <form action=" " method="post">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="pass" placeholder="New Password" required>
          </div><br>
          
          
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" placeholder="Re-Enter Password" name="pass1" required>
          </div><br>
          <a style="text-decoration:none;float:right;color:#187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Back to Signin?</a><br><br>
          <center><button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button></center>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
<?php
if(isset($_POST['change']))
{
   $pass=htmlentities($_POST['pass']);
   $pass1=htmlentities($_POST['pass1']);
   if($pass==$pass1)
   {
     if( strlen($pass)>=6 && strlen($pass)<=60)
     {
       $update="update users set user_pass='$pass' where user_id='$user_id'";
       $run=mysqli_query($con,$update);
       echo"<script>alert(' $pass ,Your Password is changed a moment ago')</script>";
       echo "<script>window.open('home.php','_self')</script>";

     }
     else
     {
       echo "<script>alert('Your Password Should be greater than 6 words')</script>";
       echo"<script>window.open('change_password.php','_self')</script>";

     }
   }
   else
   {
     echo"<script>alert('Your Password did not match')</script>";
     echo"<script>window.open('change_password.php','_self')</script>";

   }
}
?>