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

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>Cart</title>




<link rel='stylesheet' href='headerstyle.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

<img src="headerimg.jpg" width="1536px" height="200px">

</head>
<body>


    
<br><br><br><font style="font-size:25;color:green;font-family:Calibri;font-weight:bold">ORDER CONFIRMATION</font><hr>
<div style="width:600px; margin:50 auto;">

<font style="font-size:25;color:red;font-family:Calibri"><b>Thank You</B>,your order has been placed.</font><br><br>

 
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME &nbsp;&nbsp;</td>
<td>QUANTITY &nbsp;&nbsp;</td>
<td>UNIT PRICE &nbsp;&nbsp;</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="80" height="50" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action='myorders.php'>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />


</td>


<td>
<form method='post' action='myorders.php'>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />


<?php echo $product["quantity"]; ?><br />
</td>


<td><?php echo "Rs.".$product["price"]; ?></td>
<td><?php echo "Rs.".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs.".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
 <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<div>

<a href="home.php"><input type="button" value="Continue Shopping" style="height:50;  background-color:aqua;"></a>
<a href="logout.php"><input type="button" value="Logout" style="height:50; background-color:aqua;"></a>
 
 
<a href="myorders.php"><input type='button'  value="View Orders" formaction="myorders.php" style="height:50; background-color:aqua;"/></a>
 </div>
 
</form>

</body>
</html>


