<?php
$conn = mysqli_connect("localhost", "root", "", "p07_db");

if( isset($_POST["submit"])){

    $Id_customer = $_POST["Id_customer"];
    $Nama_customer = $_POST["Nama_customer"];
    $Komentar = $_POST["Komentar"];

    $query1 = "INSERT INTO film VALUES ('$Id_customer', '$title', '$jKomentar')";
    mysqli_query($conn, $query1);   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        position: relative;
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

input { font:12px arial; }
  a:hover { text-decoration:underline; }
  
#wrapper, #loginform {
    margin:0 auto;
    padding-bottom:25px;
    background:#EBF4FB;
    width:504px;
    border:1px solid #ACD8F0; }
  
#loginform { padding-top:18px; }
  
    #loginform p { margin: 5px; }
  
#chatbox {
    text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:270px;
    width:430px;
    border:1px solid #ACD8F0;
    overflow:auto; }
  
#usermsg {
    width:395px;
    border:1px solid #ACD8F0; }
  
#submit { width: 60px; }
  
.error { color: #ff0000; }
  
#menu { padding:12.5px 25px 12.5px 25px; }
  
.welcome { float:left; }
  
.logout { float:right; }
  
.msgln { margin:0 0 2px 0; }

    
</style>
<body>
<nav class="navbar navbar-expand-md navbar-black bg-black">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <a class="navbar-brand title" href="#">22.</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
            </li>
            <col-md-3>
            <li class="nav-item">
                <a class="nav-link" href="#">Cinema</a>
            <div class="line2">
                <td class="line2">
                    </td>
            </li>
            </col-md-3>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
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
    <div id="wrapper">
        <div id="menu">
            <p class="Film 22">Film 22, <b></b></p>
            <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            <div style="clear:both"></div>
        </div>
         
        <div id="chatbox"></div>
         
        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" size="63" />
            <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
        </form>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
    // jQuery Document
    $(document).ready(function(){
     
    });
    </script>
    </body>
    </html>