<!DOCTYPE html>
<html lang="en">

<head>
  <title>Join Membership</title>
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


    .line{
        background-color: black;
        width: 250px;
        height: 2px;
        margin-left: 60px;
    }

    .line3{
        background-color: black;
        width: 280px;
        height: 2px;
        margin-left: 6px;
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
    <h2> Get your membership</h2>
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
    <h3>Membership form</h3>
    <tr>
        <div class="line3">
        <td class="line3">
        </td>
        </div>
        </tr>
        <br>
        <br>
    </div>
    </center>
    <br>
    <br>
    <div class="container">
        <from class="form-horizontal">
        <div class="form-group">
            <label for="name_member" class=col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Name">
            </div>
        <br>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
           <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
             <label class="form-check-label" for="inlineCheckbox1">Male</label>
            </div>
            <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
             <label class="form-check-label" for="inlineCheckbox2">Female</label>
            </div>
        <br>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmai">
            </div>
           <div class="form-group">
                <label for="inputPhoneNumber">Phone number</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPhoneNumber" placeholder="">
                <br>
            <div class="form-group">
            <div class="col-sm-10">
                <label class="my-1 mr-2" for="inlineFormCustomeOperator">Banking</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomeOperator">
                  <option selected>Choose...</option>
                  <option value="1">BRI</option>
                  <option value="2">BNI</option>
                  <option value="2">Mandiri</option>
                  <option value="3">Other</option>
                </select>
            </div>
            <br>
                <label class="my-1 mr-2" for="inlineFormCustomeOperator">Operator</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomeOperator">
                  <option selected>Choose...</option>
                  <option value="1">Telkomsel</option>
                  <option value="2">XL axiata</option>
                  <option value="3">Indosat</option>
                  <option value="3">Other</option>
                </select>
                </div>
            <br>
            <form class="form-inline">
                <label class="my-1 mr-2" for="inlineFormCustomSelectMember">Membership Type</label>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Reguler</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Premium</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">VIP</label>
                </div>
                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember my preference</label>
                </div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</body>
</html>