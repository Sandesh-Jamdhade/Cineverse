<?php
	session_start();
    include('connection.php');
    $query = "select * from movies where id = $_GET[mid]";
    $movie_name = "";
    $movie_description = "";
    $movie_link = "";
  	$query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
       $movie_name = $row['name'];
       $movie_description = $row['description'];
       $movie_link = $row['link']; 
    }
?>
<html>
    <head>
        <title>View Movie</title>
        <!-- Bootsrap Files -->
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
    <body style="background-color:#A9A9A9;">
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
                  <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
          </ul>
    </nav>    
    <!-- Header code ends here -->
        <br><br>
        <div class="row">
            <div class="col-md-6 m-auto" id="login_form">
            <center><h3><u>Movie detail</u></h3></center>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Movie Name</th>
                        <th>Movie Description</th>
                        <th>Trailor link</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $movie_name; ?></td>
                        <td><?php echo $movie_description; ?></td>
                        <td><a href="<?php echo $movie_link; ?>" target="_blank">Watch now</a></td>
                    </tr>
                    </tbody>
                </table><br>
                <center><a href="login.php" class="btn btn-danger btn-sm">Book ticket</a></center>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

        <h4> &copy;Sandesh Jamdhade All Rights Reserved</h4>
    </body>
</html>

