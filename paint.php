<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!--so that it adapts according to device width-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">

  <title> Pantings </title>


<style>

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 280px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  font-weight:bold;
  padding: 15px;
  text-align: center;
}
</style>
<link rel='stylesheet' href='style.css' type='text/css' media='all' />
</head>
<body background="bac.jpg">

      <?php
include('nav.php');
?>

<?php
$result = mysqli_query($con,"SELECT * FROM `products` where category='P'");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='gallery'>


			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='desc'>".$row['name']."</div>
		   	  <div class='price'>Rs.".$row['price']."</div>
			  <button type='submit' class='buy'>Add to Cart</button>
			  </form>

		   	  </div></div>";
        }
mysqli_close($con);
?>


<div style="clear:both;"></div>

<div class="message_box" style="margin:30px 0px;">
<?php echo $status; ?>
</div>


</div>
</div>
      <?php
include('foot.php');
?>

</body>
</html>
