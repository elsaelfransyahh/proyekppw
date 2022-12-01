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
  <title>Membership</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style-css/style.css">
  <link rel="stylesheet" href="style-css/membership.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-black bg-black">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <a class="navbar-brand title" href="#">22.</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="homepagestartphprepair.php">Home</a>
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
                <a class="nav-link" href="aboutus.php">About Us</a>
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
    <h2>Membership</h2>
    <tr>
    <div class="line">
    <td class="line">
    </td>
    </div>
    <td></td>
    </tr>

</div>
<br>

<center>
<br>
<div> 
    <h3>Benefits</h3>
    <tr>
        <div class="line3">
        <td class="line3">
        </td>
        </div>
        </tr>
    <p>You can get discount for every movie<br>
                and safe your money<br>
        just pay Rp. 30.000,00. ,-/ month</p>
</div>
</center>
<br>
<br>
<br>
<center>
<div>
    <h2>Payment Option</h2>
    <div class="line4">
    <td class="line4">
    </td>
    </div>
</div>
<br>
<br>
<div class= "button">
<a href="PhoneNumber.php"><button class="button" href="PhoneNumber.php" > Phone Number </button></a>
<a href="Paypal.php"><button class="button" href="Paypal.php" > Paypal </button></a>
<a href="Banking.php"><button class="button" href="Banking.php" > Banking </button></a>
<br>
</div>
</center>
</body>
</html>