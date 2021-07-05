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
<style>

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 30%;
}

.col-75 {
  -ms-flex: 55%; /* IE10 */
  flex: 55%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.loginBox
{
position:absolute;
top:58%;
left:50%;
transform:translate(-50%,-50%);
width:350px;
height:650px;
padding:80px 40px;
box-sizing:border-box;
background:rgba(0,0,0,0.8);
}
</style>

<body>


<link rel="stylesheet" href="pay.css">
<div class="loginBox">
<div class="row">
  <div class="col-75">
    
      <form action="placeorder2.php">

          <div class="col-50">
           <center> <h2>E-Payment</h1></center>
              <br><br>
       <p>    
<input type="radio" name="card" required> Credit Card <br>
<input type="radio" name="card" required> Debit Card
            <br> <br>
 <label for="cnum">Card Number</label>
            <input type="text" id="ccnum" name="number" placeholder="Please enter your 16 digit card number" required style="height:40;width:300;">
            
<br>
 <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="name" required style="height:40;width:300;"><br>
        
                <label for="expyear">Expiry</label>
                <input type="month" id="expm" name="exp" style="height:40;width:300;" required>
<br><br>
              
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv"  style="height:40;width:300;" placeholder="Enter your 3 digit CVV number" required>
              </div>
         
 
              </div>  
            </div>
            
   
  
       <center> <input type="submit" value="PAY NOW" class="btn">
      </form>
    </div>
  </div>
