<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
		<!-- Bootsrap Files -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="icon" href="images/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    
    <style type="text/css">
      *{
        text-decoration: none;
      }
      .navbae{
        background-color:whitesmoke;font-family: calibri; padding-right: 15px;padding-left: 15px;
      }
      .navdiv{
        display: flex; align-items: center; justify-content: space-between;
      }
      .logo a{
        font-size: 35px; font-weight: 600;color:white;
      }
      li{
        list-style: none;display:inline-block
      }
      li a{
        color: white; font-size: 18px;font-weight: bold;margin: right 25px;
      }
      ::-webkit-scrollbar{
    width: 10px;
}
::-webkit-scrollbar-track{
    background-color: rgb(30, 30, 61);
}
::-webkit-scrollbar-thumb{
    background-color: black;
}
      h4 {text-align:center; font-size: 16px; background-color: whitesmoke;}
    </style>
  </head>
  <body style="overflow-x: hidden; background-color:#A9A9A9;">
    <!-- Header code starts here -->
    
    <nav class="navbar navbar-expand-md navbar-light" style="background-color:slategrey">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width:60px;"/></a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="movies.php">Movies</a>
              </li>


              <li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="admin/login.php">Admin Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
          </ul>
    </nav>    
    
<section style="min-height:450px;">

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
        <li data-target="#carouselId" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="images/poster1.jpg" alt="First slide" style="width:100%;height:600px;">
        </div>
        <div class="carousel-item">
            <img src="images/poster2.jpg" alt="Second slide" style="width:100%;height:600px;">
        </div>
        <div class="carousel-item">
            <img src="images/poster3.jpg" alt="Third slide"  style="width:100%;height:600px;">
        </div>
        <div class="carousel-item">
            <img src="images/poster4.jpg" alt="Fourth slide"  style="width:100%;height:600px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</section>
</div>
         
    
    
    
  </body>
</html>

<?php
include("footer.php");
?>
<h4> &copy;Sandesh Jamdhade All Rights Reserved</h4>