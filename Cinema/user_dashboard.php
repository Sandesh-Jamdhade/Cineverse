<?php 
    session_start();
    include('connection.php');
    if(isset($_POST['update'])){
      $query = "update users set name = '$_POST[name]',email = '$_POST[email]',mobile = $_POST[mobile] where email = '$_SESSION[email]'";
      $query_run = mysqli_query($connection,$query);
      if($query_run){
        echo "<script type='text/javascript'>
          alert('Profile updated successfully....');
          window.location.href = 'user_dashboard.php';  
        </script>";
      }
      else{
        echo "<script type='text/javascript'>
          alert('Error...Plz try again.');
          window.location.href = 'user_dashboard.php';
        </script>";
      }
    }

    if(isset($_POST['change_password'])){
      $query1 = "select password from users where email = '$_SESSION[email]'";
      $query_run1 = mysqli_query($connection,$query1);
      $current_password = "";
      while($row = mysqli_fetch_assoc($query_run1)){
        $current_password = $row['password'];  
      }
      if(($current_password == $_POST['newPassword1']) && ($_POST['newPassword1'] == $_POST['newPassword2'])){
        $query = "update users set password = '$_POST[newPassword]' where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
            alert('Password changed successfully....');
            window.location.href = 'user_dashboard.php';  
          </script>";
        }
        else{
          echo "<script type='text/javascript'>
            alert('Password dont match...or wrong current password!!');
            window.location.href = 'user_dashboard.php';
          </script>";
        }
      }
    }
?>
<?php 
if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
		<!-- Bootsrap Files -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="icon" href="images/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#view_profile").click(function(){
          $("#load_section").load("viewProfile.php");
        });
      });

      $(document).ready(function(){
        $("#change_password").click(function(){
          $("#load_section").load("changePassword.php");
        });
      });

      $(document).ready(function(){
        $("#book_ticket").click(function(){
          $("#load_section").load("SelectMovie.php");
        });
      });

      $(document).ready(function(){
        $("#view_ticket").click(function(){
          $("#load_section").load("viewTicket.php");
        });
      });

      $(document).ready(function(){
        $("#cancel_ticket").click(function(){
          $("#load_section").load("cancelTicket.php");
        });
      });

    </script>
  </head>
  <style>
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
  <body style="overflow-x: hidden; background-color:#A9A9A9;">
    <!-- Header code starts here -->
    <div class="row" id="header">
      <div class="col-md-4" >
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width:60px;"/></a>
      </div>
      <div class="col-md-7" style="text-align: right;">
      <span style="padding-right:75px;"><?php echo "Email:" . " " . $_SESSION['email'];?></span>
        <span><?php echo "Welcome:" . " " . $_SESSION['name'];?></span>
      </div>
    </div>
    <!-- Header code ends here -->
    <div class="row" style="margin:25px;">
      <div class="col-md-2" style="border-right:1px solid black;">
        <a class="btn btn-primary btn-block" id="view_profile">View profile</a> <br>
        <a class="btn btn-success btn-block" id="change_password">Change password</a> <br>
        <a class="btn btn-danger btn-block" id="book_ticket">Book online ticket</a> <br>
        <a class="btn btn-warning btn-block" id="view_ticket">View your ticekt</a> <br>
        <a class="btn btn-info btn-block" id="cancel_ticket">Cancel a ticket</a> <br>
        <a class="btn btn-danger btn-block" href="logout.php">Logout</a> <br>
      </div>
      <div class="col-md-8" id="load_section" style="background-color: dimgray;padding:25px;">
        <h5>Load section</h5>
        <p>
          This section is used to load all the file in this section.
        </p>
      </div>
      <div class="col-md-2"></div>
    </div>
    <h4> &copy;Sandesh Jamdhade All Rights Reserved</h4>
  </body>
</html>
<?php
}
else{
  header('location:login.php');
}
?>
