<?php
session_start();
$link=mysqli_connect('localhost','minor','project','major');
$le=mysqli_real_escape_string($link,$_REQUEST['username']);
$lp=mysqli_real_escape_string($link,$_REQUEST['password']);
error_reporting(0);
$sql="SELECT * from login where email='$le' AND password='$lp';";
$r=mysqli_query($link,$sql);
if(mysqli_num_rows($r)>0)
{
$_SESSION["username"]=$le;
header('location:home.php');

}
else
{
echo("Incorrect Username or password. Try again");
 echo("<br><a href='mylogin.php' class='btn btn-primary mb-2'>Login/Signup</a>");
}

?>


