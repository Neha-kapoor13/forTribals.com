
<?php

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

<style>
.button {
  background-color: #F68B1E;
  border: none;
  color: white;
  padding: 10px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
  float:right;
  margin-right:20px;

}
.button1 {
  background-color:#228B22;
  border: none;
  color: white;
  padding: 10px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
  float:right;
}
</style>

<link rel='stylesheet' href='style.css' type='text/css' media='all' />
<link rel='stylesheet' href='headerstyle.css' type='text/css' media='all' />


</head>
<body background="mb.jpg"   style="background-repeat: no-repeat;background-size: cover;">




<section>
<br><br><br><font style="font-size:25;color:green;font-family:Calibri;font-weight:bold"><center>CART ITEMS</center></font>
<hr>

<div style="width:800px; margin:50 auto;">
   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /></a>
</div>
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

<font style="font-size:20;color:red;font-family:Calibri;font-weight:bold">Items Added to Cart Successfully</font>

<tr>
<td></td>
<td>ITEM NAME &nbsp;&nbsp;</td>
<td>QUANTITY&nbsp;&nbsp;</td>
<td>UNIT PRICE&nbsp;&nbsp;</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="80" height="50" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
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

<br><font style="font-size:20;color:red;font-family:Calibri;"><center><a href="mylogin.php" class="button">Login to buy</a></font>	</center>
<font style="font-size:20;color:red;font-family:Calibri;"><a href="home.php" class="button1">Continue Shopping</a></font>		
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

</section></div>
<?php
include('foot.php');
?>
</body>
</html>