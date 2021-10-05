<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        html, body {
  height:100%;
}

.center {
    /* position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  
  background-color: #ccc;
  border-radius: 3px; */
  /* padding: 90px; */
}
        body{
            background: rgb(179, 235, 179);
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px rgb(210, 255, 201) 
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            height: 100%;        
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background: rgb(18, 53, 18);
            color: white;
            border-radius: 4px;
            font-weight: bold
        }
        .btn1:hover{
            background: rgb(255, 84, 22);
            color: white;
            border: 1px solid
        }
        .test{
            background: rgb(245, 239, 239) url('iailogo1.jpg');
            background-position: center;
            background-size: cover; 
        }
        h1{
            padding-top: 20px;
        }
        </style>
  </head>
    <title>Hello, world!</title>
  </head>
  <body>
    <section class="form my-4 mx-20 px-10 center" >
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="test col-lg-7 text-center ">
                    <h1 class="font-weight-bold text-center"style="color:white">AICS CAMEROON</h1>
                </div>
                <div class=" col-lg-5 px-5 pt-3">
                    <h1 class="font-weight-bold py-3 text-center">Welcome Back</h1>
                    <h4 class="text-center">Login into your account</h4>
                    <form method="POST" action="/login">
                        @csrf
                        <x-alert/>
                        <div class="form-row justify-content-center">
                            <div class="col-lg-9">
                                <input type="email" placeholder="Email" name="email" class="form-control my-3 p-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-lg-9">
                                <input type="password" placeholder="Password" name="password" class="form-control my-3 p-3 pr-8 @error('password') is-invalid @enderror" required  autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-lg-9">
                                <button  type="submit" class="btn1 mt-3 mb-4">Login</button>
                            </div>
                        </div>
                        <a href="{{route('forget.password.get')}}" class="text-center">Forgot Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>