<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styleLR.css">
</head>
<body>


    
<?php  
  session_start();
if ( @ $_SESSION['Val'] =='false') {
  $no = 'none';
  echo '<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=". $no.";">&times;</span> 
  <strong>Not Valid</strong>     User Data You Enter Not Valid
</div>
<br>
<br>
<br>
';}

if ( @ $_SESSION['Mal'] =='false') {
  $no = 'none';
  echo '<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Email !</strong>   Invalid email address
</div>
';}
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 


 ?>
<div class="container">
  <h1>Blog</h1>
  <form class="form-horizontal" method="POST" action="LoginCheck.php">
    <div class="form-group">
      <label class="control-label col-sm-12" for="email">Email:</label>
      <div class="col-sm-12">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-12" for="password">Password:</label>
      <div class="col-sm-12">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      </div>
    </div>   

    <div class="form-group">        
      <div class="col-sm-12">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
    </div>
    <div class="Register">
  <a href="Register.php">Register</a>
    </div>
</form>
</div>

</body>
</html>
