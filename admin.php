<?php
require_once ("config.php");

session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> admin login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>

  </body>
</html>
<div class="container">

  <h1 align="center">Admin sign in</h1>

<form class="" action="admin_sign_in.php" method="post">
  <label for="name" style="color:white;">Name</label><br>
 <input class="form-control" type="text" name="user_name" value="" style="color:black;  width: 100%;" placeholder="Enter Name" required>
  <label for="password" style="color:white;">password</label><br>
 <input class="form-control" type="password" name="user_password" value="" style="color:black; width: 100%;"  placeholder="Enter password" required>
<br>

 <button style="width:100%;" type="submit" class="btn btn-primary butn_position">Log in</button>


  </form>

</div>
