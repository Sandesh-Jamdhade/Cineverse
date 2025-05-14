<?php 
    session_start();
    if(isset($_SESSION['email'])){
    include('connection.php');
    $query1 = "select * from users where email = '$_SESSION[email]'";
    $query_run1 = mysqli_query($connection,$query1);
    $name = "";
    $email = "";
    $mobile = "";
    while($row = mysqli_fetch_assoc($query_run1)){
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
    }
?>
<html>
    <head>
        <!-- Bootsrap Files -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="icon" href="images/logo.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    </head>
    <body>
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
        <div class="row" style="margin:25px;">
            <div class="col-md-4">
                <center><h5><u>Update your profile</u></h5></center>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Update" name="update">
                </form>
            </div>
        </div>
        
       
    </body>
</html>
<?php  
}
else{
  header('location:login.php');
}
?>