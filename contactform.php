<?php
if(isset($_POST['submit']))
{
$name=$_POST['t1'];
$comments=$_POST['t2'];
$mailto="dubeynidhi177@gmail.com";
$headers="From: ".$mailfrom;
echo $txt="You have received an e-mail from".$name."$comments";
echo $message="Name: $name \n\nEmail: $email \n\n Comments: $comments";

mail($mailto,$txt,$headers);
header("Location: mylogin.php?mailsend");
}

?>