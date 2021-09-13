<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
        .btn0{
            height: 52px;
            width: 130px;
            outline: none;
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.4s;
            background-color: rgb(18, 53, 18);
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
            background:url('copy.jpg') no-repeat;
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
            height: 70px;
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

<!--================== main section =====================--->
    <section class="main py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7">
                    <h1>
                        Keeping You Connected <br>
                        Keeping You Productive <br>
                        Keeping You Close <br>
                    </h1>
                    <button class="btn2">About</button>
                </div>
            </div>
        </div>
    </section>

<!---============ category section--->
    <section class="ceta py-5">
        <div class="container fluid py-5 text-center">
            <p class="red">More Information</p>
            <h1>Browse Top Categories</h1>
            <div class="row py-5">
                <div class="col-lg-11 m-auto pt-3">
                    <div class="row py-5">
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card py-3">
                                <div class="card-body">
                                    <img src ="kk.jpg" class="img-fluid my-3" alt="">
                                    <h6>Design & Creative</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 m-auto mt-5">
                            <button class="btn3">BROWSE ALL SECTORS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--===================== resume ====================---->

    <section class="resume py-5 text-center text-white">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-10 m-auto">
                    <p class="pb-3">More About Us</p>
                    <h1>We are here to bridge the gap</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <button class="btn4">Upload your data</button>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>