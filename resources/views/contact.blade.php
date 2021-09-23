{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<style text="text/css">
    body{
        background-image: radial-gradient(circle farthest-corner at 10% 20%,
        rgba(234,249,251,0.63) 0.1%,rgba(239,249,251,0.63) 90.1%);
    }
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

</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
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
                <a class="nav-link " href="#">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn0">Login</button>
              <button class="btn1 mx-2">Follow</button>
            </form>
          </div>
        </div>
      </nav>
      
    <div class="container">
        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Contact Us</h2>
            <p class="text-center w-responsive mx-auto mb-5">Do you have any question or wish to find out more about us? Please do not hesitate to 
                contact us directly. Our team will come back to you within a matter of
                hours to help you.
            </p>

            <div class="row">
                <div class ="col-md-9 mb-md-0 mb-5" >
                    <form action="" id="contactform">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="name" class="form-control">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" name="email" class="form-control">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" name="subject" class="form-control">
                                    <label for="subject">Subjet</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control
                                    md-textarea"></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left">
                            <button class="btn" type="submit" style="background-color: rgb(18, 53, 18);color:white">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 text-center text-primary">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x" style="color: green"></i>
                            <p class="text-dark">Cameroon, Centre Region, Yaounde, Nkolanga</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x" style="color: green"></i>
                            <p class="text-dark">
                             Tél. (237) 242 72 99 58</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x" style="color: green"></i>
                            <p class="text-dark">
                                contact@iaicameroun.com</p>
                        </li>
                    </ul>
                    </div> 
            </div>
        </section>
    </div>


    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html> --}}

@extends('layout.visitor')
<style>
    /* body{
            background:url('contact.jpg') no-repeat;
            background-size: cover;
            min-height: 95vh;
            width: 100%;
        } */
</style>
@section('home')
<div class="container">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contact Us</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any question or wish to find out more about us? Please do not hesitate to 
            contact us directly. Our team will come back to you within a matter of
            hours to help you.
        </p>

        <div class="row">
            <div class ="col-md-9 mb-md-0 mb-5" >
                <form action="" id="contactform">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" name="name" class="form-control">
                                <label for="name">Your Name</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" name="email" class="form-control">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" name="subject" class="form-control">
                                <label for="subject">Subjet</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea name="message" id="" cols="30" rows="5" class="form-control
                                md-textarea"></textarea>
                                <label for="message">Your Message</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-md-left">
                        <button class="btn" type="submit" style="background-color: rgb(18, 53, 18);color:white">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 text-center text-primary">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x" style="color: green"></i>
                        <p class="text-dark">Cameroon, Centre Region, Yaounde, Nkolanga</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x" style="color: green"></i>
                        <p class="text-dark">
                         Tél. (237) 242 72 99 58</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x" style="color: green"></i>
                        <p class="text-dark">
                            contact@iaicameroun.com</p>
                    </li>
                </ul>
                </div> 
        </div>
    </section>
</div>
@endsection