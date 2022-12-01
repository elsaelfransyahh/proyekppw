<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cinema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style-css/style.css">
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

  h3{
      font-family: 'Arial';
      padding-left: 80px;
      font-weight: bold;
      color: blue;
      font-size: 24px;
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
                    <a class="nav-link" href="{{ url('/search')}}"><span class="fa fa-search" style="font-size:24px"></span></a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark" style="border-color:silver;"><span class="fa fa-bars"></span></button>
                </li>
            </ul>
        </div>
    </nav>

<br>
<div>
    <h2>
        Cinemas
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
          <td><img src="image/Laguboti.PNG" width="320" height="250"></td>
          <td><img src="image/Balige.png" width="320" height="250"></td>
          <td><img src="image/Siborong-borong.PNG" width="320" height="250"></td>
      </tr>
      <tr>
          <td><a href="/detailcinema"><p>Laguboti</p></a></td>
          <td><a href="/detailcinema"><p>Balige</p></a></td>
          <td><a href="/detailcinema"><p>Siborong-borong</p></a></td>
      </tr>
      <tr>
          <td><img src="image/Medan.PNG" width="320" height="250"></td>
          <td><img src="image/Medan Tembung.PNG" width="320" height="250"></td>
          <td><img src="image/Medan Jermal.PNG" width="320" height="250"></td>
          <td></td>
      </tr>
      <tr>
          <td><a href="/detailcinema"><p>Medan</p></a></td>
          <td><a href="/detailcinema"><p>Medan Tembung</p></a></td>
          <td><a href="/detailcinema"><p>Medan Jermal</p></a></td>
          <td><a href="/detailcinema"><p></p></a></td>
      </tr>
  </table>
</div>

<br>


<div class="row">
    <tr></tr>
    <tr></tr>
    <tr></tr>
    
    </li>
         </div>

         <div class= "button">
    <td><a href="{{ url('/cinemas')}}"><button class="button" href="{{ url('/cinemas')}}">Menambahkan Cinema</button></a></td>
    <br>
</body>
</html>