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
<style>
            a{
      color:white;
      font-size: 22px;
  }

  body{
    background-color: white;

  }

  .nav-item{
      padding-left: 48px;
  }

  .navbar{
      background-color: black;
      padding-top: 0;
      padding-bottom: 0;
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

  p{
      font-size: 24px;
      font-family: 'Times New Roman';
      font-weight: bold;
      color:black;
  }

  .line{
      background-color: black;    
      width: 140px;
      height: 2px;
      margin-left: 60px;
  }

  .line2{
      border-bottom: 3px solid white;
      width: 40px;
      height: 2px;
      margin-left: 10px;
  }

  .button{
    background-color: white;
    border-color: black;
    color: black;
    padding: 20px 40px;
    text-align:center;
    display:flex;
    font-size: 20px;
    margin: 6px 4px;
    cursor: pointer;
    padding-left: 140px;
    margin-left: 140px;
    padding-right: 140px;
    margin-right: 140px;

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
            <col-md-3>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/cinema')}}">Cinema</a>
            <div class="line2">
                <td class="line2">
                    </td>
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
    <h2> Join Membership</h2>
    <div class="line4">
    <td class="line4">
    </td>
    </div>
</div>
<br>
<br>
<div class= "button">
<a href="{{ url('/JoinMembership')}}"><button class="button" href="{{ url('/JoinMembership')}}">Join Membership</button></a>
<br>
</div>
</center>
</body>
</html>