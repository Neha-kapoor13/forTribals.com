

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>forTribals.com</title>
    <style>
      .divr{
        background-color:white;
        border:dotted 10px purple;
        width:80%;
        height:auto;
        margin:auto;
      }
      .ba
      {background-size:cover;
      }
      .boldit
      {
        font-weight:bold;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body background="bb.jpg" class="ba">
    <?php
include('nav.php');
?>
    <section>
      <div class="divr mt-5">
        <center>
          <h3 class="pt-3 boldit">Thank you for shopping with us</h3>
          <h3>Hello "<?php error_reporting(0); echo $_SESSION["username"]; ?>" 😉</h3>
          <br />
          <h2>Your order history:</h2>
          

           
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
<form method='post' >
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

         

     <?php
include('foot.php');
?>
  </body>
</html>
