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
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

#navbar-sec{
    width: 100%;
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

.p2{
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

/*section*/

section{
    background-color: rgb(255, 255, 255);
    width: 100%;
    height: 1080px;
}

.container-sec{
    z-index: -1;
    background-color: rgb(255, 255, 255);
    width: 60%;
    height: 1080px;
    margin: 0 auto;
}

h1, h4, h5, h3{
    color: rgb(0, 0, 0);
}

.hero-desc{
    right: 60px;
    top: 130px;
    float: right;
    position: relative;
    flex-wrap: wrap;
}

.container-img{
    position: absolute;
    top: 200px;
    z-index: 0;
    float: left;
}

button{
    position: absolute;
}

#buy{
    width: 200px;
    top: 100px;
    right: 350px;
}

#add{
    width: 200px;
    top: 100px;
    right: 140px;
}

.hero-desc h3{
    position: absolute;
    top: 150px;
}

.hero-desc h6{
    position: absolute;
    color: rgb(0, 0, 0);
    font-size: 14px;
}

#d0{
    position: absolute;
    top: 200px;
}

#d1{
    top: 250px;
}
#d2{
    top: 270px;
}
#d3{
    top: 290px;
}
#d4{
    top: 310px;
}
#d5{
    top: 330px;
}
#d6{
    top: 350px;
}

#d7{
    top: 370px;
}

#dsyn{
    clear: right;
    position: absolute;
    color: white;
    top: 700px;
}

.syn-desc{
    width: 900px;
    clear: right;
    position: absolute;
    color: white;
    top: 750px;
}
</style>
<body>
    <nav id="navbar-sec" class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#" style="color: white; font-size: 40px;">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/index')}}" style="color: white;">Home</a>
                    <div class="line2">
                        <td class="line2">
                            </td>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movie')}}" style="color: white;">Movies</a>
                </li>
                <col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cinema')}}" style="color: white;">Cinema</a>
                </li>
                </col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/aboutus')}}" style="color: white;">About Us</a>
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
        <div class= "container-img">
        <td><img src="image/america.JPG" width="400" height="310"></td>
        </div>
        <div class="container-sec">
            <h2 id="dsyn">Synopsis</h2>
            <p class="syn-desc">Chris Kyle's sniper precision has saved countless lives on the battlefield and that has made him a legend.
                When he returned home after four stints, Chris found that there was a "war" that he could not escape.</p>
            <div class="hero-desc">
                <h4 style="display: inline;">Rp. 50.000,00.,-</h4>
                <h4 style="display: inline;">Rp. 35.000,00.,-</h4>
                <h5 style="display: inline;">*Discount only for a Member </h5>
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