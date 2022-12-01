<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="aboutus.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
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

h1{
    font-size: 40px;
    font-family:'Georgia';
    font-weight: bold;
    color: black;
}

p{
    font-size: 20px;
    font-family: 'Times New Roman';
    font-weight: normal;
}

h2{
    font-size: 30px;
    font-family: 'Georgia';
    font-weight: bold;
    color:black;
}

p2{
    font-size: 20px;
    font-family: 'Arial';
    font-weight: normal;
    color: black;
}

.line{
    background-color: black;
    width: 720px;
    height: 3px;
    margin-left: 320px;
}

.line2{
    background-color: white;
    width: 40px;
    height: 2px;
    margin-left: 40px;
    }

.footer-links{
    display: flex;
    justify-content: flex;
    margin-left: 30px;
}

.footer-links li{
    list-style: none;
}

.footer-link li a{
    text-decoration: none;
    color: black;
    padding-right: 40px;
}
</style>
<body>
<nav class="navbar navbar-expand-md navbar-black bg-black">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <a class="navbar-brand title" href="#">22.</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/movie')}}">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/cinema')}}">Cinema</a>
            </li>
            <col-md-3>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/aboutus')}}">About Us</a>
            </li>
            <div class="line2">
                <td class="line2">
                </td>
            </div>
        </col-md-3>
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
<br>
<br>
<br>
<br>
<center>
<div>
    <h1>What are we?</h1>
<br/>
<p>Pilem22, is a platform that facilities you to order the latest movie tikets,<br/>
so you don't have to bother going to the nearest cinema just to order movie tickets. </p>
</center>
<br>
    <col-md-3>
<div class="line">
    <td class="line">
</col-md-3>
    </td>
</div>
<br>
</div>
<br>
<center>
<h2> What makes us believe that<br/>
    we can serve you well?</h2>
<br>
<p2>Of course, we believe with our platform, we make it esay for you to access the films that we broadcast,<br/>
    and they are the latest films, so you don't have to worry about that. </p2>
</center>
</body>
<br>
<br>
<br>
<footer>
<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p><input type="button" class="btn" value="Instagram">
    <input type="button" class="btn" value="Facebook">
    <input type="button" class="btn" value="Twitter"></p>
</div> 
</footer>
</html>