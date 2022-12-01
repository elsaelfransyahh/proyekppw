<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="bootstrap_homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
}


#navbar-sec{
position: fixed;
width: 100%;
z-index: 9999;
}
/*section*/

section, .hero-section, .after-hero, .movies-home, .nowplaying, .garis, .garis1, .comingsoon{
    z-index: -1;
}

.hero-in{
    position: absolute;
    max-width: 400px;
    text-align: center;
    left: 50%;
    top: 40%;
    transform: translate(-50%, -40%);
}

.hero-in h1{
    color: white;
    font-family: 'Lora', sans-serif;
}

.section{
    width: 100%;
    height: auto;
    margin: 0 auto;
}

section .hero-section img{
 width: 100%;
 height: 850px;
 position: static;
}

.after-hero{
    width: 100%;
    height: 700px;
    position: absolute;
    background-color: #f1f1f1;
    margin: 0 auto;
}

section .after-hero .sign-up-content{
    align-items: center;
    text-align: center;
    width: 550px;
    margin: auto auto;
    margin-top: 150px;
}


section .after-hero .signup-desc{
    align-items: center;
    text-align: center;
    font-size: 20px;
    margin: auto auto;
    margin-top: 30px;
}

section .after-hero .buttonsignup #signup-button{
    position: relative;
    align-items: center;
    display: inline;
    text-align: center;
    font-size: 20px;
    margin: 0 auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-top: 40px;
}


section .after-hero .signin-desc{
    align-items: center;
    text-align: center;
    font-size: 20px;
    margin: auto auto;
    margin-top: 20px;
}

.buttonsignin{
    width: 100%;
}

section .after-hero .buttonsignin #signin-button{
    position: relative;
    align-items: center;
    display: inline;
    text-align: center;
    font-size: 20px;
    margin: 0 auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-top: 40px;

}


/*nowplaying & comingsoon section*/

.movies-home{
    width: 60%;
    margin: 0 auto;
    background-color: rgb(255, 255, 255);
}

.movies-home{
    top: 700px;
    position: relative;
}

/*nowplaying*/



.nowplaying-image{
    width: 900px;
    display: flex;
    margin: 50px auto;
    justify-content: space-between;
    flex-wrap: wrap;
}


.now-playing{
    margin-top: 20px;
    font-size: 30px;
    margin-left: 20px;
    font-family: 'Lora', serif;
    font-weight: bolder;
}
.garis{
    height: 5px;
    width: 100px;
    background-color: rgb(40, 140, 255);
}

a{
        color: white;
        font-size: 22px;
    }

    body{
        background-color: white;
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

/*coming-soon*/

.comingsoon{
    width: 100%;
}

.comingsoon-image{
    width: 900px;
    display: flex;
    margin: 100px auto;
    justify-content: space-between;
    flex-wrap: wrap;
}


.coming-soon{
    margin-top: 20px;
    font-size: 30px;
    margin-left: 20px;
    font-family: 'Lora', serif;
    font-weight: bolder;
}
.garis1{
    height: 5px;
    width: 100px;
    background-color: rgb(40, 140, 255);
}

/*footer*/
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
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 10px 20px;
    margin-top: 200px;
}

.movies-home{
    position: relative;
}

/*footer*/
</style>


<body>
    <nav id="navbar-sec" class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/homepage')}}">Home</a>
                    <div class="line2">
                        <td class="line2">
                            </td>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movie')}}">Movies</a>
                </li>
                <col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cinema')}}">Cinema</a>
                </li>
                </col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/aboutus')}}">About Us</a>
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

    <section>
        <div class="hero-section">
            <img class="opening-img" src="image/Sherlock123.jpg" alt="">
            <div class="hero-in">
                <h1 class="hero-intro" style="">Wellcome to Pilem22.</h1>
            </div>
        </div>
        <div class="after-hero">
            <h1 class="sign-up-content">You want a better experience, new blood?</h1>
            <h3 class="signup-desc">please sign up</h3>
            <div class="buttonsignup">
                <button id="signup-button" type="button" class="btn btn-outline-dark"> Sign up</button>
            </div>

            <h2 class="signin-desc">ohh, you are not a new blood, please sign in</h2>

            <div class="buttonsignin">
                <button id="signin-button" type="button" class="btn btn-outline-dark">Sign in</button>
            </div>
        </div>
    </section>

    <div class="movies-home">
        <div class="nowplaying">
            <h1 class="now-playing">Now Playing</h1>
            <div class="garis">

            </div>
            <div class="nowplaying-image">
                <img src="image/Kimi no nawa123.JPG" alt="" style="width:200px; " >
                <img src="image/Tenki no ko123.JPG" alt="" style="width: 200px;">
                <img src="image/titanic.jpeg" alt="" style="width: 200px;">
                <img src="image/holmes.PNG" alt="" style="width: 200px;">
            </div>
        </div>
        <div class="comingsoon">
            <h1 class="coming-soon">Coming Soon</h1>
            <div class="garis1">

            </div>
            <div class="comingsoon-image">
                <img src="" alt="" style="width:200px; " >
                <img src="" alt="" style="width: 200px;">
                <img src="iamge/titanic.jpeg" alt="" style="width: 200px;">
                <img src="image/holmes.PNG" alt="" style="width: 200px;">
            </div>
        </div>
    </div>
    <footer>
        <div class="about-footer">
            <h1 class="about">What are we?</h1>
            <p class="about-desc">Pilem22. is a platform that facilitates you to order the latest movie tickets, 
                so you don't have to bother going to the nearest cinema just to order movie tickets.</p>
            <button id="readmore-button" type="button" class="btn btn-outline-dark">Read More</button>
        </div>
    </footer>
  

</body>
</html>