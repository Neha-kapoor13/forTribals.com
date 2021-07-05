<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
<h2>Register Here</h2>
<form action="signtable.php" method="POST">
<p>Name</p>
<input type="text" name="name" placeholder="Enter name"><br><br>
<p>Email </p>
<input type="text" name="email" placeholder="Enter email id"><br><br>
<p>Mobile Number</p>
<input type="number" name="number" placeholder="Enter mobile number"><br><br>
<p>Address</p>
<input type="text" name="address" placeholder="Enter address"><br><br>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password"><br><br>
<p> Confirm Password</p>
<input type="password" name="cpassword" placeholder="Enter Password"><br><br>

<input type="submit" name="register" value="REGISTER"><br>

</form>
</div>

</body>
</html>