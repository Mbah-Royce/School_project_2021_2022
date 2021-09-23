<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<style text="text/css">
    <title>Hello, world!</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .navbar-brand{
            font-size: 2rem;
            color: rgb(7, 61, 7);
        }
        .nav-link{
            color: rgb(10,10,94);
        }
        .nav-link:hover{
            color:red;
            transition: 0.3s;
        }
        .nav-item{
            color: rbg(7,7,78);
            font-weight: 500;
            padding-left: 35px
        }
        .nav{
            background-color: whitesmoke;
        }
        .btn0{
            height: 52px;
            width: 130px;
            outline: none;
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.4s;
            background-color: rgb(18, 53, 18);
            padding-top:15px;
        }
        .btn0:hover{
            background-color: rgb(255, 84, 22);
            transition: all 0.4s;
        }
        .btn1{
            height: 52px;
            width: 130px;
            background-color: transparent;
            outline: none;
            border: 2px solid rgb(18, 53, 18);
        }
        .btn1:hover{
            background-color: rgb(255, 84, 22);
            transition: all 0.4s;
            color: white;
            cursor: pointer;
            border: none;
            outline: none;
        }
        .main{
            background:url('iai.jpg') no-repeat;
            background-size: cover;
            min-height: 95vh;
            width: 100%;
        }
        .main h1{
            font-size: 4rem;
            font-weight: 300;
        }
        .btn2{
            height: 70px;
            width: 25%;
            border-radius: 10px;
            background-color: rgb(18, 53, 18);
            color: white;
            border: none;
            outline: none;
            cursor: pointer;
            transition: all 0.4s
        }
        .btn2:hover{
            background-color: rgb(255, 84, 22);
            transition: all 0.4s;
            color: white;
            cursor: pointer;
            border: none;
            outline: none;
        }.ceta h1{
            font-size: 3.2rem
        }
        .ceta .card:hover{
            color: red;
            cursor: pointer;
            transition: all 0.4s;
            box-shadow: -2px 2px 22px -11px rgba(0,0,0,0.75);
            -webkit-box-shadow: -2px 2px 22px -11px rgba(0,0,0,0.75);
            -moz-box-shadow: -2px 2px 22px -11px rgba(0,0,0,0.75);
        }
        .btn3{
            height: 70px;
            width: 70%;
            border: 1px solid rgb(18, 53, 18);
            background: transparent;
            transition: all 0.4s;
            border-radius: 5px;
            color: rgb(18, 53, 18);
        }
        .btn4:hover{
            background: rgb(255, 84, 22);
            color:white;
            border: none;
            outline: none;
            transition: all 0.4s
        }
        .btn4{
            height: 60px;
            width: 70%;
            border: 1px solid white;
            background: transparent;
            transition: all 0.4s;
            border-radius: 5px;
            color: white;
        }
        .btn3:hover{
            background: rgb(255, 84, 22);
            color:white;
            border: none;
            outline: none;
            transition: all 0.4s
        }
        .resume{
            background:linear-gradient(rgba(4,11,75,0.719),rgba(4,26,100,0.73)),url('copy.jpg')no-repeat;
            background-size: cover;
            height: 90vh;
            width: 100%;
        }
        .resume h1{
            font-size: 3.8rem;
        }
/*======================== main secion ================*/
        </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">EDUSAFE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('service')}}">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" >
            About
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('contact')}}">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <a class="btn btn0" href="{{route('login')}}" role="button" >Login</a>
        {{-- <button class="btn0" href="#">Login</button> --}}
        {{-- <button class="btn1 mx-2">Follow</button> --}}
        <a class="btn btn0" href="#" role="button">Follow</a>
      </form>
    </div>
  </div>
</nav>
@yield('home')
<footer class="page-footer my-5" style="background-color:rgb(18, 53, 18)">

    <div class="bg-success">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-12 text-center">
                    <a href="#"><i class="fab fa-facebook text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                </div>
            </div>
        </div>
    </div>
<div class="container text-center text-md-left mt-5">
    <div class="row">
        <div class= "col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">The providers</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" 
            style="width:125px; height:2px">
           <p class="mt-2">The African Institute of Computer 
               Science (AICS), is an Inter-State School created 
               by Decision of the Heads of State
                in 1971 in Fort-Lamy (current N’Djamena) in 
                Chad and endowed with a diplomatic Statute, 
               with for Headquarters Libreville in Gabon.</p> 
        </div>
        <div class= "col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Branches</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" 
            style="width:125px; height:2px">

            <ul class="list-unstyled">
                <li class="my-2"><a href="">Gabon</a></li>
                <li class="my-2"><a href="">Congo</a></li>
                <li class="my-2"><a href="">Chad</a></li>
                <li class="my-2"><a href="">Senegal</a></li>
            </ul>
        </div>

        <div class= "col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Partners</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" 
            style="width:125px; height:2px">
            <ul class="list-unstyled">
                <li class="my-2"><a href="">CRTV</a></li>
                <li class="my-2"><a href="">CAMTEL</a></li>
                <li class="my-2"><a href="">CISCO</a></li>
                <li class="my-2"><a href="">Huawe</a></li>
            </ul>
        </div>

        <div class= "col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Contacts</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" 
            style="width:125px; height:2px">
            <ul class="list-unstyled">
                <li class="my-2"><i class="fas fa-home"></i>     Cameroon, Centre Region, Yaounde, Nkolanga</li>
                <li class="my-2"><i class="fas fa-envelope"></i>   contact@iaicameroun.com</li>
                <li class="my-2"><i class="fas fa-phone"></i>      Tél. (237) 242 72 99 58</li>
                <li class="my-2"><i class="fas fa-print"></i>     BP 13 719 Yaoundé (Cameroun)</li>
            </ul>
        </div>
    </div>
</div>

    <div class="footer-copyright text-center py-3">
        <p class="">&copy; Copyright 
            <a href="#">roycedev.com</a>
        </p>
        <p>Build by Royce referent the Provider</p>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  </body>
</html>