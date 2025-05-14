<?php
	session_start();
  if(isset($_POST['login'])){
    include('../connection.php');
    $query = "select * from admins where email = '$_POST[email]' AND password = '$_POST[password]'";
  	$query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
			$_SESSION['email'] = $_POST['email'];
			while($row = mysqli_fetch_assoc($query_run)){
				$_SESSION['name'] = $row['name'];
        $_SESSION['user_id'] = $row['id'];
			}
      echo "<script type='text/javascript'>
      	window.location.href = 'admin_dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      	alert('Please enter correct email and password.');
      	window.location.href = 'login.php';
      </script>";
    }
  }
?>
<html>
    <head>
       <title>Admin Login Page</title>
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
                  <a class="nav-link" href="../index.php">Home</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="../movies.php">Movies</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" href="../register.php">Register</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="../login.php">Login</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="login.php">Admin Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../about.php">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../contact.php">Contact Us</a>
              </li>
          </ul>
      </div>
    </nav>    
    <!-- Header code ends here -->
    <div class="row">
            <div class="col-md-4" id="login_form">
            <center><h3><u>Admin Login form</u></h3></center>
            <form action="" method="post">
                <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" placeholder="Your Password" required>
                </div>
                <button class="btn btn-success" type="submit" name="login">Login</button><br>
            </form>
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
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <h4> &copy;Sandesh Jamdhade All Rights Reserved</h4>
    </body>
</html>




