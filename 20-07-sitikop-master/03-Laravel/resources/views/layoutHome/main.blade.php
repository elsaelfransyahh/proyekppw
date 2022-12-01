
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="bootstrap123.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

/*navbar*/

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

/*end of navbar*/

/*section*/
section{
    width: 100%;
}

.hero-section{
    background-image: url(Sherlock123.jpg);
    width: 100%;
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}

.opening{
    position: absolute;
    color: white;
    z-index: 2;
    font-size: 6rem;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

@media (max-width: 1700px){
    .opening{
       font-size: 3rem;
       text-align: center;
    }

    .nav-link{
        font-size: .8rem;
        margin-right: 2rem;
    }

}


/*end of section*/

/*after - hero*/

.container-fluid{
    text-align: center;
    padding: 7% 6%;
    background-color: #f1f1f1;
}

.after-hero h1, .after-hero a{
    padding-bottom: 1rem;
    padding-top: 0.5rem;
}

.after-hero .signin-desc, .after-hero .signup-desc{
    font-size: 2rem;
}

.nowplaying .row .col-lg-3{
    text-align: center;
    padding-bottom: 1rem;
    margin-top: 4rem;
}

.nowplaying .row .col-lg-3 img{
    padding-bottom: 1rem;
}

.comingsoon .row .col-lg-3{
    text-align: center;
    padding-bottom: 1rem;
    margin-top: 4rem;
}

.comingsoon .row, .nowplaying .row{
    padding: 4rem 10rem;
}

.comingsoon, .nowplaying{
    padding: 3% 6%;
}

.nowplaying h1::after, .comingsoon h1::after{
    content: '';
    width: 180px;
    display: block;
    height: 5px;
    background-color: rgb(153, 153, 255);
}
/*end of .after-hero*/

/*footer*/
#footer{
    padding: 2rem 15%;
    text-align: center;
    background-color: black;
 }

 .social-icon{
   margin: 20px 10px;
   color: white;
 }

 footer .container-fluid h1,  footer .container-fluid p,  footer .container-fluid a{
     padding-bottom: 2rem;
 }

 footer .container-fluid p{
     width: 50%;
     text-align: center;
     margin: 0 auto;
 }

 @media (min-width: 600px){
    
    footer .container-fluid p{
        width: 50%;
        text-align: center;
        margin: 0 auto;
    }
 }

 #footer p{
     color: white;
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
            <h1 class="opening">Wellcome to Pilem22.</h1>
        </div>
    </section>
    <div class="container-fluid">
        <div class="after-hero">
            <h1 class="sign-up-content">You want a better experience, new blood?</h1>
            <h1 class="signup-desc">please sign up</h3>        
            <a href="signup.php"><button id="signup-button" type="button" class="btn btn-outline-dark"> Sign up</button></a>
            <h1 class="signin-desc">ohh, you are not a new blood, please sign in</h2>
            <a href="signin.php"><button id="signin-button" type="button" class="btn btn-outline-dark">Sign in</button></a>
        </div>
    </div>
    <div class="movie-section">
        <div class="nowplaying">
            <div class="nowplaying-sec">
            <h1>
                Now Playing
            </h1>
            </div>
            <form action="">
            <div class="row">
            @foreach( $film as $i)
                    <div class="col-lg-3">
                        <a href="moviedetails.php?nama=<?= $row['title']; ?>&gambar=<?= $row['Gambar']; ?>&harga=<?= $row["harga"]; ?>"> <img width=200px height=290px display=flex src="{{ $i->Gambar }}" alt=""> </a>
                        <p>{{ &i->title }}</p>
                    </div>
            @endforeach
            </div>
            </form>
        </div>
        <div class="comingsoon">
            <h1>
                Coming Soon
            </h1>
            <div class="row">
            
                <?php while                
                    ($row1 = mysqli_fetch_assoc($result1)) : ?>
                    <div class="col-lg-3">
                        <a href="moviedetails.php?nama=<?= $row1['title']; ?>&gambar=<?= $row1['Gambar']; ?>"><img width=200px height=290px display=flex src="<?php echo $row1['Gambar'];?>" alt=""></a>
                    </div>
                    <?php endwhile;?>
            
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <h1 class="about">What are we?</h1>
            <p class="about-desc">Pilem22. is a platform that facilitates you to order the latest movie tickets, 
                so you don't have to bother going to the nearest cinema just to order movie tickets.</p>
            <a href="aboutus.php"><button id="readmore-button" type="button" class="btn btn-outline-dark">Read More</button></a>
        </div>
    </footer>
    <footer id="footer">
        <i class="social-icon fab fa-facebook-f"></i>
        <i class="social-icon fab fa-twitter"></i>
        <i class="social-icon fab fa-instagram"></i>
        <p>© Copyright 2020 Kelompok 7</p>
  </footer>

</body>
</html>
