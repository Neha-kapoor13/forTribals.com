<?php
$a=$_POST['password'];
$b=$_POST['cpassword'];
if($a==$b)
{
$link=mysqli_connect('localhost','minor','project','major');
$e=mysqli_real_escape_string($link,$_REQUEST['email']);
$p=mysqli_real_escape_string($link,$a);
$sql="insert into login values('$e','$p')";
if(mysqli_query($link,$sql))
{
header('location:home.php');
}
else
{
echo("Email id already exists");
 echo("<br><a href='login.php' class='btn btn-primary mb-2'>Login/Signup</a>");

}
}
else
{
echo("Password does not match");
}
?>

