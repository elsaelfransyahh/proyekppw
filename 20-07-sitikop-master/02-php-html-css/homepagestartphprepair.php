<?php

//connect to database
$conn = mysqli_connect("localhost", "p07_isy3", "JkLEsiZooE", "p07_db");

//take a data from table daftar
$result1 = mysqli_query($conn, "SELECT * FROM coming_soon");
$result = mysqli_query($conn, "SELECT * FROM now_playing ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

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

h2{
    font-family: 'Arial';
    padding-left: 80px;
    font-weight: bold;
    color: black;
    font-size: 28px;
}

h3{
    font-family: 'Arial';
    font-weight: bold;
    color: black;
    font-size: 30px;
}

p{
    font-size: 24px;
    font-family: 'Times New Roman';
    font-weight: normal;
    color: black;
}

p2{
    font-size: 22px;
    font-family: 'Times New Roman';
    font-weight:normal;
    color: black;
    padding-left: 100px;
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
    width: 100%;
    height: 600px;
    margin: 0 auto;
    background-color: #f1f1f1;
}

.sign-up-content{
    top: 80px;
    position: relative;
    text-align: center;
    font-size: 60px;
}

.signup-wraper{
    width: 100%;
    position: relative;
    text-align: center;
    margin-top: 120px;
}

.signin-wraper{
    width: 100%;
    position: relative;
    text-align: center;
    margin-top: -60px;
}

.signin-wraper{
    position: relative;
    top: 120px;
}

.signup-desc{
    font-size: 25px;
}

.signin-desc{
    font-size: 25px;
}

.movie-section{
    width: 100%;
    height: 800px;

}



.nowplaying, .comingsoon{
    width: 100%;
    height: 50%;
}

.nowplaying{
    position: relative;
    top: 30px;
    left: 10px;
}

.nowplaying h1::after, .comingsoon h1::after{
    content: '';
    width: 180px;
    display: block;
    height: 5px;
    background-color: rgb(153, 153, 255);
}

.comingsoon{
    position: relative;
    top: 400px;
    left: 10px;
}

.nowplaying-img{
    width: 1200px;
    display: flex;
    flex-wrap: wrap;
    margin: 80px auto
}

.comingsoon-img{
    width: 1200px;
    display: flex;
    flex-wrap: wrap;
    margin: 80px auto
}

footer{
    top: 800px;
    position: relative;
    width: 100%;
    background-color: #f1f1f1;
}

.about-footer{
    width: 70%;
    height: 500px;
    margin: 0 auto;
}

.about{
    position: relative;
    top: 100px;
    text-align: center;
    margin: auto auto;
}

.about-desc{
    position: relative;
    margin: auto auto;
    text-align: center;
    width: 700px;
    top: 130px;
    font-size: 20px;
}

footer .about-footer #readmore-button{
    position: relative;
    align-items: center;
    display: inline;
    text-align: center;
    font-size: 20px;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 10px 20px;
}
</style>

<body>
    <nav id="navbar-sec" class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#" style="color: white;">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Home</a>
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
        <div class="hero-section">
            <div class="hero-img">
                <img src="Sherlock123.jpg" alt="" class="hero-opening-img">
            </div>
            <div class="hero-desc">
                <h1 class="opening">Wellcome to Pilem22.</h1>
            </div>
        </div>
    </section>
    <div class="after-hero">
        <h1 class="sign-up-content">You want a better experience, new blood?</h1>
        <div class="signup-wraper">
            <h1 class="signup-desc">please sign up</h3>        
            <div class="buttonsignup">
                <a href="signup.php"><button id="signup-button" type="button" class="btn btn-outline-dark"> Sign up</button></a>
            </div>
        </div>
        <div class="signin-wraper">
            <h1 class="signin-desc">ohh, you are not a new blood, please sign in</h2>
            <div class="buttonsignin">
                <a href="signin.php"><button id="signin-button" type="button" class="btn btn-outline-dark">Sign in</button></a>
            </div>
        </div>

    </div>

    <div class="movie-section">
        <div class="nowplaying-img">
                <?php while 
                    ($row = mysqli_fetch_assoc($result)) : ?>
                        <a href="moviedetails.php?nama=<?= $row['title']; ?>&gambar=<?= $row['Gambar']; ?>"> 
                        <img width=200px height=290px display=flex src="<?php echo $row['Gambar'];?>" alt=""> 
                        <center><h3><?php echo $row['title']?></h3></center> </a>
                <?php endwhile;?>
            </div>
        </div>
        <div class="comingsoon">
            <h1>
                Coming Soon
            </h1>
            <div class="comingsoon-img">
                <?php while					
                    ($row1 = mysqli_fetch_assoc($result1)) : ?>
                        <img width=200px height=290px display=flex src="<?php echo $row1['Gambar'];?>" alt="">
                <?php endwhile;?>
            </div>
        </div>
    </div>
    <footer>
        <div class="about-footer">
            <h1 class="about">What are we?</h1>
            <p class="about-desc">Pilem22. is a platform that facilitates you to order the latest movie tickets, 
                so you don't have to bother going to the nearest cinema just to order movie tickets.</p>
            <a href="aboutus.php"><button id="readmore-button" type="button" class="btn btn-outline-dark">Read More</button></a>
        </div>
    </footer>

</body>
</html>
