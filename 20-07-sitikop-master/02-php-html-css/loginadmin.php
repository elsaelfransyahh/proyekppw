<?php
session_start();

$conn = mysqli_connect("localhost", "p07_isy3", "JkLEsiZooE", "p07_db");

if( isset($_POST["login"]) ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);   

    $query = "SELECT * FROM daftar WHERE id_daftar = '$username'";

    $result = mysqli_query($conn, $query);  
   
    if( mysqli_num_rows($result) === 1 ){     


       $row = mysqli_fetch_assoc($result);
       if( $password == $row["password_daftar"] ){
           if($_POST["username"] == "admin"){
               header("Location: homepageafterloginadmin.php");
           }
           else{
            header("Location: homepageafterlogin.php");
           } 
           $_SESSION["login"] = true;
           exit;
       }
    } 
}

?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap123.css">

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
form{
    padding-top: 12%;
    text-align: center;
}

.textbox{
    padding-bottom: 10px;
}
</style>
<body>
<nav id="navbar-sec" class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepagestartphprepair.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
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
<div class="container">
    <section>            
        <form action="" method="post">
            <h3>Login Admin Web</h3>
            <div class="textbox">
                <input type="text" placeholder="Username" name="username">
            </div>

            <div class="textbox">
                <input type="password" placeholder="Password" name="password">
            </div>               
            <a href="homepageafterlogin.php"><button class="btn btn-outline-dark" type="submit" name="login">Sign In</button></a>
        </form>
    </section>
</div>
</body>

</html> 