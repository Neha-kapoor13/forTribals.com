<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<title> forTribals.com </title>
  <!--so that it adapts according to device width-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
 
  <style>
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    .flex-container
     {display:flex;
      justify-content: center;}
    .bg-primary2
    {
      background-color: rgb(15,9,146);
    }

    .hrw {
      width: 5%;
    }

    .big:hover {
      border: 5px solid #7a5c95;
    }

    .para {
      font-size: 1.5rem;

    }

    .p2 {
      font-size: 1.25rem;
    }

    .bgimg {
      background-image: url("path.jpg");
      height: auto;
      width: 100%;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
  </style>
</head>

<body>

<link rel="stylesheet" href="login.css">
<div class="loginBox">
<h2>Sign In Here</h2>
<form action="logintable.php" method="POST">
<p>Username</p>
<input type="text" name="username"  placeholder="Email address" required autofocus><br><br>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" required><br><br>
<input type="submit" name="login" value="Sign in"><br>
<center><a><h3 style="color:red">OR</h3></a></center>
<center><a href="register.php"><h2 style="color:red" >Register here</h2></a></center>
</form>
</div>

</body>
</html>