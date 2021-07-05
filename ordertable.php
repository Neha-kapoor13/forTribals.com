<?php
$link=mysqli_connect('localhost','minor','project','major');
$img=mysqli_real_escape_string($link,$_REQUEST['image']);
$name=mysqli_real_escape_string($link,$_REQUEST['name ']);
$amount=mysqli_real_escape_string($link,$_REQUEST['price ']);
$code=mysqli_real_escape_string($link,$_REQUEST['code ']);

$sql="insert into order values('$img','$name','$amount','$code')";
if(mysqli_query($link,$sql))
{
echo(" ");
}
else
{
echo(mysqli_error($link));
}
?>

