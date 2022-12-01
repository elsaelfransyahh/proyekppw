<?php
$conn = mysqli_connect("localhost", "p07_isy3", "JkLEsiZooE", "p07_db");

if( isset($_POST["submit"])){

    $title = $_POST["title"];
    $query1 = "DELETE FROM film WHERE title = '$title'";
    mysqli_query($conn, $query1);   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="bootstrap123.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylephp.css">
</head>
<style>
a{
    color: white;
    font-size: 22px;
}

body{
    background-color: white;
    font-family: 'Lora', serif;
}
.nav-item{
    padding-left: 48px;
}

.navbar{
    padding-top: 0;
    padding-bottom: 0;
    background-color: black;
}

.title{
    font-family: 'Times New Roman';
    font-size: 40px;
    font-weight: bold;
    padding: 0;
}

h1{
    font-family: 'Arial';
    font-weight: bold;
    color: black;
    font-size: 28px;
    padding-top: 45px;
    padding-left:70px;
}

h2{
    font-family: 'Arial';
    font-weight: bold;
    color: black;
    font-size: 28px;
    padding-top: 30px;
    padding-right:500px;
}

.line{
    background-color: black;
    width: 140px;
    height: 2px;
    margin-left: 60px;
}

.line2{
    background-color: white;
    width: 40px;
    height: 2px;
    margin-left: 10px;

}

#navbar-sec{
    position: fixed;
    width: 100%;
    z-index: 9999;
}

section{
    position: relative;
}

.hero-section{
    padding-top: 13%;
    position: relative;
}

.hero-section .hero-img .hero-opening-img{
    width: 100%;
}

.hero-desc{
    text-align: center;
    align-items: center;
}

.hero-section .hero-desc h1{
    color: rgb(255, 255, 255);
    position: absolute;
    font-size: 120px;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    align-items: center;
    justify-content: center;
}

.after-hero{
    padding-top: 7%;
    width: 100%;
    background-color: #f1f1f1;
}

.movie-section{
    padding-top: 3%;
    width: 100%;
    height: 800px;

}
.film a{
    color: black;
    padding: 0 20px;
}
</style>

<body>
    <nav id="navbar-sec" class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepagestartphprepair.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movie.php">Movies</a>
                    <div class="line2">
                        <td class="line2">
                            </td>
                </li>
                <col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="cinema.php">Cinema</a>
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
    <div class="movie-section">
        <div class="film">
            <h1>Film</h1> 
            <a href="deletefilm.php"> back </a>
            <form action="" method="post">
            <h2>
            <ul>
                <li>
                    <label for="title">Judul Film</label>
                    <input type="text" name="title">
                </li>        
                <button type="submit" class="btn btn-secondary" name="submit">Add</button>
                               
            </ul>
            </h2>       
            </form> 
        </div>

    </div>

</body>
</html>