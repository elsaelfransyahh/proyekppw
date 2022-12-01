<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: signin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chairlayout.css">
    <link rel="stylesheet" href="bootstrapCL.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav id="navbar-sec" class="navbar navbar-expand-md navbar-black bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <a class="navbar-brand title" href="#">22.</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepagestartphprepair.php">Home</a>
                    <div class="line2">
                        <td class="line2">
                            </td>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movie.php">Movies</a>
                </li>
                <col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="cinema.php">Cinema</a>
                </li>
                </col-md-3>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fa fa-search" style="font-size:24px; color: white;"></span></a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark" style="border-color:silver;"><span class="fa fa-bars"></span></button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <section>
            <div class="movie-display">
    
            </div>
            <div class="row">
                <div id="A" class="col-lg-6">
                    <h1 class="A">A</h1>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">1</button>
                        <button class="btn btn-outline-dark btn-lg">2</button>
                        <button class="btn btn-outline-dark btn-lg">3</button>
                        <button class="btn btn-outline-dark btn-lg">4</button>
                        <button class="btn btn-outline-dark btn-lg">5</button>
                        <button class="btn btn-outline-dark btn-lg">6</button> 
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">7</button>
                        <button class="btn btn-outline-dark btn-lg">8</button>
                        <button class="btn btn-outline-dark btn-lg">9</button>
                        <button class="btn btn-outline-dark btn-lg">10</button>
                        <button class="btn btn-outline-dark btn-lg">11</button>
                        <button class="btn btn-outline-dark btn-lg">12</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">13</button>
                        <button class="btn btn-outline-dark btn-lg">14</button>
                        <button class="btn btn-outline-dark btn-lg">15</button>
                        <button class="btn btn-outline-dark btn-lg">16</button>
                        <button class="btn btn-outline-dark btn-lg">17</button>
                        <button class="btn btn-outline-dark btn-lg">18</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">19</button>
                        <button class="btn btn-outline-dark btn-lg">20</button>
                        <button class="btn btn-outline-dark btn-lg">21</button>
                        <button class="btn btn-outline-dark btn-lg">22</button>
                        <button class="btn btn-outline-dark btn-lg">23</button>
                        <button class="btn btn-outline-dark btn-lg">24</button> 
                    </div>      
                </div>
                <div id="B" class="col-lg-6">
                    <h1 class="B">B</h1>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">1</button>
                        <button class="btn btn-outline-dark btn-lg">2</button>
                        <button class="btn btn-outline-dark btn-lg">3</button>
                        <button class="btn btn-outline-dark btn-lg">4</button>
                        <button class="btn btn-outline-dark btn-lg">5</button>
                        <button class="btn btn-outline-dark btn-lg">6</button> 
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">7</button>
                        <button class="btn btn-outline-dark btn-lg">8</button>
                        <button class="btn btn-outline-dark btn-lg">9</button>
                        <button class="btn btn-outline-dark btn-lg">10</button>
                        <button class="btn btn-outline-dark btn-lg">11</button>
                        <button class="btn btn-outline-dark btn-lg">12</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">13</button>
                        <button class="btn btn-outline-dark btn-lg">14</button>
                        <button class="btn btn-outline-dark btn-lg">15</button>
                        <button class="btn btn-outline-dark btn-lg">16</button>
                        <button class="btn btn-outline-dark btn-lg">17</button>
                        <button class="btn btn-outline-dark btn-lg">18</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">19</button>
                        <button class="btn btn-outline-dark btn-lg">20</button>
                        <button class="btn btn-outline-dark btn-lg">21</button>
                        <button class="btn btn-outline-dark btn-lg">22</button>
                        <button class="btn btn-outline-dark btn-lg">23</button>
                        <button class="btn btn-outline-dark btn-lg">24</button> 
                    </div>
                </div>
                <div id="C" class="col-lg-6">
                    <h1 class="C">C</h1>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">1</button>
                        <button class="btn btn-outline-dark btn-lg">2</button>
                        <button class="btn btn-outline-dark btn-lg">3</button>
                        <button class="btn btn-outline-dark btn-lg">4</button>
                        <button class="btn btn-outline-dark btn-lg">5</button>
                        <button class="btn btn-outline-dark btn-lg">6</button> 
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">7</button>
                        <button class="btn btn-outline-dark btn-lg">8</button>
                        <button class="btn btn-outline-dark btn-lg">9</button>
                        <button class="btn btn-outline-dark btn-lg">10</button>
                        <button class="btn btn-outline-dark btn-lg">11</button>
                        <button class="btn btn-outline-dark btn-lg">12</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">13</button>
                        <button class="btn btn-outline-dark btn-lg">14</button>
                        <button class="btn btn-outline-dark btn-lg">15</button>
                        <button class="btn btn-outline-dark btn-lg">16</button>
                        <button class="btn btn-outline-dark btn-lg">17</button>
                        <button class="btn btn-outline-dark btn-lg">18</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">19</button>
                        <button class="btn btn-outline-dark btn-lg">20</button>
                        <button class="btn btn-outline-dark btn-lg">21</button>
                        <button class="btn btn-outline-dark btn-lg">22</button>
                        <button class="btn btn-outline-dark btn-lg">23</button>
                        <button class="btn btn-outline-dark btn-lg">24</button> 
                    </div>
                </div>
                <div id="D" class="col-lg-6">
                    <h1 class="D">D</h1>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">1</button>
                        <button class="btn btn-outline-dark btn-lg">2</button>
                        <button class="btn btn-outline-dark btn-lg">3</button>
                        <button class="btn btn-outline-dark btn-lg">4</button>
                        <button class="btn btn-outline-dark btn-lg">5</button>
                        <button class="btn btn-outline-dark btn-lg">6</button> 
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">7</button>
                        <button class="btn btn-outline-dark btn-lg">8</button>
                        <button class="btn btn-outline-dark btn-lg">9</button>
                        <button class="btn btn-outline-dark btn-lg">10</button>
                        <button class="btn btn-outline-dark btn-lg">11</button>
                        <button class="btn btn-outline-dark btn-lg">12</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">13</button>
                        <button class="btn btn-outline-dark btn-lg">14</button>
                        <button class="btn btn-outline-dark btn-lg">15</button>
                        <button class="btn btn-outline-dark btn-lg">16</button>
                        <button class="btn btn-outline-dark btn-lg">17</button>
                        <button class="btn btn-outline-dark btn-lg">18</button> 
                    </div>    
                    <div class="col-lg-12">
                        <button class="btn btn-outline-dark btn-lg">19</button>
                        <button class="btn btn-outline-dark btn-lg">20</button>
                        <button class="btn btn-outline-dark btn-lg">21</button>
                        <button class="btn btn-outline-dark btn-lg">22</button>
                        <button class="btn btn-outline-dark btn-lg">23</button>
                        <button class="btn btn-outline-dark btn-lg">24</button> 
                    </div>
                </div>
                <div class="col-lg-12">
                    <h1 class="count">Ticket Count :</h1>
                <button class="btn btn-outline-dark btn-lg buy-ticket"><h6>Buy Ticket</h6></button>
                </div>
            </div>
        </section>
    </div>
</body>
</html>