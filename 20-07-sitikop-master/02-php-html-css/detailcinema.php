<?php

//connect to database
$conn = mysqli_connect("localhost", "p07_isy3", "JkLEsiZooE", "p07_db");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detailcinema</title>
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
                    <a class="nav-link" href="homepage-css-Perbaikan.html">Home</a>
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
        Detail Cinemas
    </h2>
    <table style="width: 100%;text-align: center; margin-left: 24px;">
        <tr>
            <td class="line">
            </td>
            <td></td>
        </tr>
    </table>
</div>
<section>
    <form>
        <center>
    <div class="container">
        <td><img src="image/Laguboti.PNG" width="400" height="310"></td>
        </div>

        <div class="movies-tick-desc">
            <table>
                <tr>
                    <tr>
                        <td id="spacing1">Id Bioskop</td>
                        <td style="width: 100px;"></td>
                        <td>0111</td>
                    </tr>
                    <tr>
                        <td>Cinema</td>
                        <td style="width: 100px;"></td>
                        <td>Cinemaxx</td>
                    </tr>
                    <tr>
                       
                        <td>Lokasi</td>
                        <td style="width: 100px;"></td>
                        <td>Laguboti</td> 
                    </tr>
                    <tr>
                        <td>Jam Buka</td>
                        <td style="width: 100px;"></td>
                        <td>Pukul 10.00 wib</td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td style="width: 100px;"></td>
                        <td>Pukul 21.00 wib</td>
                    
                    </tr>
                </tr>
                    
                </table>
            </div>
        </center>
        </form>
    </section>

<br>
   
</body>
</html>