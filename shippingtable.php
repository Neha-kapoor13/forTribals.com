<?php
$link=mysqli_connect('localhost','minor','project','major');
$fn=mysqli_real_escape_string($link,$_REQUEST['fname']);
$ln=mysqli_real_escape_string($link,$_REQUEST['lname']);
$e=mysqli_real_escape_string($link,$_REQUEST['email']);
$ad=mysqli_real_escape_string($link,$_REQUEST['address']);
$c=mysqli_real_escape_string($link,$_REQUEST['city']);
$s=mysqli_real_escape_string($link,$_REQUEST['state']);
$z=mysqli_real_escape_string($link,$_REQUEST['zip']);
$sql="insert into shipping values('$fn','$ln','$e','$ad','$c','$s','$z')";
if(mysqli_query($link,$sql))
{
echo(" ");
}
else
{
echo(mysqli_error($link));
}
?>

