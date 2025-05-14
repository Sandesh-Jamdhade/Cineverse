<?php 
    session_start();
    if(isset($_SESSION['email'])){
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
                <center><h5><u>Choose your movie</u></h5></center>
                <form action="bookTicket.php" method="post">
                    <label><b>Movie: </b></label>
                    <select name="movie_name">
                        <option>-Select-</option>
                        <?php
                            include('connection.php');
                            $query = "select id,name from movies";
                            $query_run = mysqli_query($connection,$query);
                            if(mysqli_num_rows($query_run)){
                                while($row = mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <option id="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select><br><br>
                    <input type="submit" class="btn btn-danger" name="next" value="Next" id="next">
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