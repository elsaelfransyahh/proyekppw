<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style-css/movie.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</head>

<body>
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

        </style>


    <nav class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movie')}}">Movies</a>
                    <div class="line2">
                        <td class="line2">
                            </td>
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

<br>
<div>
    <td><a href="nowplaying"><h2>Now Playing</h2></a></td>
    
    <table style="width: 100%;text-align: center; margin-left: 24px;">
        <tr>
            <td class="line">
            </td>
            <td></td>
        </tr>
    </table>
</div>
<div>
  <table style="width: 100%;text-align: center;">
      <tr>
          <td><img src="image/america.JPG" width="200" height="270"></td>
          <td><img src="image/Kimi no nawa.JPG" width="200" height="270"></td>
          <td><img src="image/Tenki no ko.JPG" width="200" height="270"></td>
      </tr>

      </tr> 
      <tr>
          <td><a href="/moviedetails"><p>American Sniper</p></a></td>
          <td><a href="/moviedetails"><p>Kimi No Nawa</p></a></td>
          <td><a href="/moviedetails"><p>Tenki No Ko</p></a></td>
      </tr>
      <tr>
          <td><img src="image/damo.JPG" width="200" height="270"></td>
          <td><img src="image/parasit.jpeg" width="200" height="270"></td>
          <td></td>
      </tr>
      <tr>
          <td><a href="#"><p>Damo</p></a></td>
          <td><a href="#"><p>Parasit</p></a></td>
          <td><a href="#"><p></p></a></td>
      </tr>
  </table>
</div>

<br>
<tr>
<tr>
<tr>

<div class= "button">
    <td><a href="{{ url('/nowplaying')}}"><button class="button" href="{{ url('/nowplaying')}}">Menambahkan Nowplaying</button></a></td>
    <br> 

    <tr>
    <tr>
    <tr>
    <tr>

<div>
  <h2>
    Coming Soon
  </h2>
  <table style="width: 100%;text-align: center; margin-left: 24px;">
      <tr>
          <td class="line">
          </td>
          <td></td>
      </tr>
  </table>
</div>
<div>
  <table style="width: 100%;text-align: center;">
      <tr>
          <td><img src="image/titanic.JPG" width="200" height="270"></td>
          <td><img src="image/run.JPG" width="200" height="270"></td>
          <td><img src="image/millers.JPG" width="200" height="270"></td>
      </tr>

      <tr>
          <td><img src="image/holmes.JPG" width="200" height="270"></td>
          <td><img src="image/parasit.jpeg" width="200" height="270"></td>
          <td></td>
      </tr>
      
  </table>
</div> 

</body>
</html>