<?php

$gambar;
//connect to database
$conn = mysqli_connect("localhost", "root", "", "p07_db");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cinema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style-css/style.css">
    <link rel="stylesheet" href="style-css/movie.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepage-css-Perbaikan.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movie.php">Movies</a>
                </li>
                <col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="cinema.php">Cinema</a>   
                    <div class="line2">
                        <td class="line2">
                            </td>            
                </li>
                </col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUsPage.php">About Us</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fa fa-search" style="font-size:24px"></span></a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark" style="border-color:silver;"><span class="fa fa-bars"></span></button>
                </li>
            </ul>
        </div>
    </nav>

<br>
<div>
    <h2>
        Cinemas
    </h2>
    <table style="width: 100%;text-align: center; margin-left: 24px;">
        <tr>
            <td class="line">
            </td>
            <td></td>
        </tr>
    </table>
</div>
<div>
  <table style="width: 100%;text-align: center;">
      <tr>
          <td><img src="image/Laguboti.PNG" width="320" height="250"></td>
          <td><img src="image/Balige.png" width="320" height="250"></td>
          <td><img src="image/Siborong-borong.PNG" width="320" height="250"></td>
      </tr>
      <tr>
          <td><a href="#"><p>Laguboti</p></a></td>
          <td><a href="#"><p>Balige</p></a></td>
          <td><a href="#"><p>Siborong-borong</p></a></td>
      </tr>
      <tr>
          <td><img src="image/Medan.PNG" width="320" height="250"></td>
          <td><img src="image/Medan Tembung.PNG" width="320" height="250"></td>
          <td><img src="image/Medan Jermal.PNG" width="320" height="250"></td>
          <td></td>
      </tr>
      <tr>
          <td><a href="#"><p>Medan</p></a></td>
          <td><a href="#"><p>Medan Tembung</p></a></td>
          <td><a href="#"><p>Medan Jermal</p></a></td>
          <td><a href="#"><p></p></a></td>
      </tr>
  </table>
</div>

<br>

</body>
</html>