<?php
$link=mysqli_connect('localhost','minor','project','major');
$un=mysqli_real_escape_string($link,$_REQUEST['t1']);
$f=mysqli_real_escape_string($link,$_REQUEST['t2']);
$sql="insert into feedback values('$un','$f')";
if(mysqli_query($link,$sql))
{
echo("FEEDBACK SUBMITTED");
}
else
{
echo(mysqli_error($link));
}
?>

