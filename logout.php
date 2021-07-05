
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--for favicon-->
<script>
javascript:window.history.forward(1);
</script>

<head>
  <!--so that it adapts according to device width-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>forTribals.com</title>


</head>

<body class="b" background="tribal.jpg">
<center><img src="logo.jpg" width="50%"></center>
<br>
<center>
  <form method="POST" action="mylogin.php">
 <button class="btn btn-primary mb-2" type="submit">Login/Signup</button>
</form>
<?php
include('foot.php');
session_start();
if(isset($_SESSION['username']))
{
session_unset();
session_destroy();
exit();
}
?>


</body>
</html>

