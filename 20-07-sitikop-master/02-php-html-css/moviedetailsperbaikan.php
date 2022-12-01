<?php

//connect to database
$conn = mysqli_connect("localhost", "p07_isy3", "JkLEsiZooE", "p07_db");

//take a data from table daftar
$result1 = mysqli_query($conn, "SELECT * FROM coming_soon");
$result = mysqli_query($conn, "SELECT * FROM now_playing ");
$result2 = mysqli_query($conn, "SELECT * FROM film ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie's Detail</title>
    <link rel="stylesheet" href="moviedetail1.css">
    <link rel="stylesheet" href="bootstrap123.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <nav id="navbar-sec" class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#" style="color: white; font-size: 40px;">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepagestartphprepair.php" style="color: white;">Home</a>
                    <div class="line2">
                        <td class="line2">
                            </td>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movie.php" style="color: white;">Movies</a>
                </li>
                <col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="cinema.php" style="color: white;">Cinema</a>
                </li>
                </col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php" style="color: white;">About Us</a>
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

    <section>
        <div class="container-sec">
            <img src="<?= $_GET["gambar"]?>" alt="" style="width: 350px;">
            <h2 id="dsyn">Synopsis</h2>
            <p class="syn-desc">Chris Kyle's sniper precision has saved countless lives on the battlefield and that has made him a legend.
                When he returned home after four stints, Chris found that there was a "war" that he could not escape.</p>
            <div class="hero-desc">
                <h1><?= $_GET["nama"]?></h1>
                <h4 style="display: inline;">Rp. <?= $_GET["harga"]?>,00,-</h4>
                <h4 style="display: inline;">(Rp. <?php $a = 15000;              
                echo ($_GET["harga"] - $a) ?>,00,-</h4>
                <h5 style="display: inline;">*Discount only for a Member)</h5>
                <a href="ticketdetail.php?nama=<?= $_GET["nama"];?>&gambar=<?= $_GET["gambar"];?>&harga=<?= $_GET["harga"];?>"><button type="button" id="buy" class="btn btn-outline-dark">Buy Tickets</button></a>
                <button type="button" id="add" class="btn btn-outline-dark">Add to cart</button>
                <h3>Duration : 2 Hours</h3>
                <h3 id="d0">Schedule:</h3>

                <h6 id="d1">monday : 10.00 - 12.00, 12.30 - 14.30, 15.00 - 17.00, 17.30 - 19.30, 20.00 - 22.00, 22.30 - 00.30</h6>
                <h6 id="d2">tuesday : 10.00 - 12.00, 12.30 - 14.30, 15.00 - 17.00, 17.30 - 19.30, 20.00 - 22.00, 22.30 - 00.30</h6>
                <h6 id="d3">wednesday : 10.00 - 12.00, 12.30 - 14.30, 15.00 - 17.00, 17.30 - 19.30, 20.00 - 22.00, 22.30 - 00.30</h6>
                <h6 id="d4">thursday : 10.00 - 12.00, 12.30 - 14.30, 15.00 - 17.00, 17.30 - 19.30, 20.00 - 22.00, 22.30 - 00.30</h6>
                <h6 id="d5">friday : 10.00 - 12.00, 12.30 - 14.30, 15.00 - 17.00, 17.30 - 19.30, 20.00 - 22.00, 22.30 - 00.30</h6>
                <h6 id="d6">saturday : 10.00 - 12.00, 12.30 - 14.30, 15.00 - 17.00, 17.30 - 19.30, 20.00 - 22.00, 22.30 - 00.30</h6>
                <h6 id="d7">Sunday : 10.00 - 12.00, 12.30 - 14.30, 15.00 - 17.00, 17.30 - 19.30, 20.00 - 22.00, 22.30 - 00.30</h6>
            </div>
    
        </div>
    </section>
</body>
</html>