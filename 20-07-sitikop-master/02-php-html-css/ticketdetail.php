<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: signin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetailTicket</title>
    <link rel="stylesheet" href="detailticket.css">
	<link rel="stylesheet" href="bootstrap123.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#" style="color: white;">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepage-css-Perbaikan.html" style="color: white;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movie.html" style="color: white;">Movies</a>
                    <div class="line2">
                        <td class="line2">
                            </td>
                </li>
                <col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="cinema.html" style="color: white;">Cinema</a>               
                </li>
                </col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUsPage.html" style="color: white;">About Us</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;"><span class="fa fa-search" style="font-size:24px"></span></a>
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
      Buy Tickets
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
        <div class="container">
            <div class="col-lg-6">
                <img id="" src="<?= $_GET["gambar"]?>" alt="">
            </div>
            <div class="col-lg-6">
                <table>
                    <tr>
                        <td id="spacing1">Tittle</td>
                        <td style="width: 200px;"></td>
                        <td><?= $_GET["nama"];?></td>
                    </tr>
                    <tr>
                        <td>Cinema</td>
                        <td style="width: 200px;"></td>
                        <td>Pilem22</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td style="width: 200px;"></td>
                        <td>Laguboti</td> 
                    </tr>
                    <tr>
                        <td>DateTime</td>
                        <td style="width: 200px;"></td>
                        <td>Monday, 12 Okt 2020</td>
                    </tr>
                    <tr>
                        <td>Tickets</td>
                        <td style="width: 200px;"></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Prices</td>
                        <td style="width: 200px;"></td>
                        <td>Rp 35.000</td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td style="width: 200px;"></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td style="width: 200px;"></td>
                        <td>A7</td>
                    </tr>
                </table>
            </div>
            <div class="check">
                <a href="movie.php"><button type="button" class="btn btn-secondary" >Buy Ticket</button></a>
                <h1 class="movies-name"><?= $_GET["nama"];?></h1>
            </div>
            
        </div>
    </section>

<br>
   
</body>
</html>