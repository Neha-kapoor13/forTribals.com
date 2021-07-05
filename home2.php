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
<script>
 function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

  <style>

#more {display: none;}

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
  height: 100%;
}

    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    .flex-container
     {display:flex;
      justify-content: center;}
    .bg-primary2
    {
      background-color: rgb(15,9,146);
    }

    .hrw {
      width: 5%;
    }

    .big:hover {
      border: 5px solid #7a5c95;
    }

    .para {
      font-size: 1.6rem;
	
    }

    .p2 {
      font-size: 1.25rem;
    }

    .bgimg {
      background-image: url("path.jpg");
      height: auto;
      width: 100%;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
.bg
{
 background-image: url("bh.jpg");
 
background-size: auto;
  }
  </style>
</head>

<body background="bbjpg">
<?php
include('nav2.php');

?>
  <!--to include bootstrap css-->
  <link rel="stylesheet" href="bootstrap.min.css">


  <!--slider-->
  <section>
    <div id="caro" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#caro" data-slide-to="0" class="active"></li>
        <li data-target="#caro" data-slide-to="1"></li>
        <li data-target="#caro" data-slide-to="2"></li>
	<li data-target="#caro" data-slide-to="3"></li>
        <li data-target="#caro" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="bg03.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="bg2.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="bg1.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="bg4.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="bg5.jpg" class="d-block w-100">
        </div>
      </div>
      <a class="carousel-control-prev" href="#caro" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#caro" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!--concept of grid-->
  <section>

<div class="bg">
    <div class="container-fluid my-3">
      <h1 class="text-center">ABOUT US</h1>
      <hr >
    </diV>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <center>
          <img src="logo.jpg" class="img-fluid" >
        </center>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
<h4>Welcome to <i><b> forTribals.com </b></i>! </h4>
        <p class="my-3 para" style="Palatino Linotype", "Book Antiqua", Palatino, serif;">


        India is the place where there are culture and custom, it very well may be seen through the dynamic quality depicted by expressions of the human experience and specialities of the area. India is the world's old human progress maturing up to 8000 years. The nation is currently separated into states and association regions, which have their own interesting social and conventional characters. <span id="dots">...</span><span id="more">Each locale has its style and workmanship known as society craftsmanship. Aside from society craftsmanship, there is a workmanship which was generally polished by the individuals of rustic and innate populaces which is known as the court workmanship. These crafts of India is basic yet charming. They tell about the extravagance of the nation's legacy.
</span> </p>
<button onclick="myFunction()" id="myBtn">Read more</button>

       
      </div>
    </div>
    <!--cards-->
    <br><br>
 </div>
   
<?php
include('foot.php');
?>
</body>

</html>
