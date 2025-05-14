<html>
    <head>
       <title>About Page</title>
        <!-- Bootsrap Files -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="icon" href="images/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    </head>
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
    <body style="background-color:#A9A9A9;"><br><br>
<div class="row">
      <div class="col-md-12" style="padding:15px;margin-left:15px;margin-right:15px;">
      <div>

      <h1 class=" text-center"  style="color:black;">About Us</h1>
    <h3 class="text-center"><b>Sandesh And His Team</b></h3>
  <h2><b>THE CINEVERSE</b></h2>
<p> Welcome to <b>THE CINEVERSE</b> where we share information related to Technology. We're dedicated to providing you the very best information and knowledge of the above mentioned topics.</p>

<p>We hope you found all of the information on <b>Online Movie Ticket Booking</b> helpful, as we love to share them with you.</p>

<p>If you require any more information or have any questions about our site, please feel free to contact us by email at <a class="nav-link" href=mailto:"sandeshjamdhade48@gmail.com" style="color:white;"><b><u>sandeshjamdhade48@gmail.com</u></b></a></p>



</div>
	
      </div>
    </div>
<section class="mt-5 mb-5">

     <p class="ml-5" style="color:black;">THE CINEVERSE is an innovative solution that helps you enjoy the many offerings of the entertainment industry in the easiest and the most convenient manner.<br>
      Developed by Tenacious Techies, a company that specializes in development of multi platform mobile applications, and browser and web based solutions for businesses.<br>
       MBS is a Robust ticketing system that simplifies the job of business owners and thousands of their customers.<br>

MBS works on two parallel fronts. Firstly, we make it convenient for business owners to create, publish and sell tickets through our highly efficient platform,and in the process, <br>
watch their sales and returns register a multi-fold increase.<br>
 Secondly, our easy to use and user friendly system makes it easy for people to buy tickets online rather than going through the inconvenience of purchasing them offline.<br>

Our comprehensive platform is highly functional. One can use MBS for all sorts of ticketing purposes, be it movies or special events. Furthermore, our platform is integrated with social media, which enables you to make the most of social networking channels.<br>
 Easy mobile interface, makes it convenient for booking through smartphone. MBS also have a mobile friendly interface.</p>
 

</section>


<?php
include("footer.php");
?>
<h4> &copy;Sandesh Jamdhade All Rights Reserved </h4>