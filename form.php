<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <div class="container">
        <form action="form.php" method="GET">

            FName: 
            <br>
            <input type="text" name="f_name" class="form">
            <br>
            LName: 
            <br>
            <input type="text" name="l_name" class="form">
            <br>
            Password: 
            <br>
            <input type="password" class="form">
            <br>
            <input type="submit" class="btn btn-primary" >

        </form>

    </div>
<?php
echo $_GET["f_name"];
echo $_GET["l_name"];


//the difference between GET and POST is that GET show the the name of the input in the url
/* request is a melange between GET and POST */
?>
</body>
</html>