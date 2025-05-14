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
                <center><h5><u>Add Movie</u></h5></center>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="movie_name">Movie Name:</label>
                        <input type="text" class="form-control" name="movie_name" placeholder="Movie Name">
                    </div>
                    <div class="form-group">
                        <label for="movie_desc">Movie Description:</label>
                        <textarea class="form-control" name="movie_desc" placeholder="Movie Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="movie_link">Trailor Link:</label>
                        <input type="text" class="form-control" name="link" placeholder="Trailor Link">
                    </div>
                    <div class="form-group">
                        <label for="logo">Movie logo:</label>
                        <input type="text" class="form-control" name="logo" placeholder="Movie Logo">
                    </div>
                    <div class="form-group">
                        <label for="logo">Show Time:</label>
                        <input type="text" class="form-control" name="time" placeholder="Show time">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Add Movie" name="add_movie">
                </form>
            </div>
        </div>
       
    </body>
</html>