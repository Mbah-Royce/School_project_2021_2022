@extends('layout.visitor')
<style>
    body{
        background: #ddd;
        font-family: poppins;
    }
    .section-header{
        text-align: center;
        margin-bottom: 30px;
        margin-top: 15px;
    }
    .section-header p {
        font-size: 18px;
    }
    .single-service{
        border:1px solid #ebebeb;
        text-align: center;
        background: #fff;
    }
    .service-bg{
       height:200px;
       position: relative; 
    }
    .service-bg-1{
        background: url('sf2.jpg');
        -webkit-background-size:cover;
        background-size: cover;
        background-position: center;
    }
    .service-bg-2{
        background: url('sr.jpg');
        -webkit-background-size:cover;
        background-size: cover;
        background-position: center;
    }
    .service-bg-3{
        background: url('nm.jpg');
        -webkit-background-size:cover;
        background-size: cover;
        background-position: center;
    }
    .service-bg h2{
       color:#fff;
       background-color: rgb(18, 53, 18);
       border:1px solid white;
       font-size: 17px;
       text-align: center;
       font-weight: 700;
       padding: 15px;
       position: absolute;
       left:8%;
       width:84%;
       margin:0;
       bottom:-25px;
       border-radius: 50px;
       letter-spacing: 2px;
    }
    .single-service:hover .service-bg h2{
        background: white;
        transition: .9s;
        color: rgb(18, 53, 18);
    }
    .service-text{
        padding: 50px 30px 20px;
        font-size: 15px;
        font-weight: 400;
    }
    .service-text p:last-child{
        margin:0;
        line-height: 1.8;
    }
    .btn-area{
        display: inline-block;
        color:#333;
        font-size: 17px;
        font-weight: 700;
        margin-top:30px;
        text-transform: capitalize
    }
</style>
@section('home')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Some of our educational fields and
                        accomplished projects
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-service">
                  <div class="service-bg service-bg-1">
                        <h2>Software Engineering</h2>
                    </div>

                    <div class="service-text">
                        <p>IAI boasts an impecable staff and well equiped lab 
                            to equip its students with the various skill and 
                            ability to thrieve in the world of software engineering</p>
                            <a href="" class="btn-area">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-service">
                  <div class="service-bg service-bg-2">
                        <h2>Networking</h2>
                    </div>

                    <div class="service-text">
                        <p>IAI boast of a Networking field that seeks to empower
                            her students with the technical know-how in the field of
                            networking in partnership with CISCO, Hauwie and an 
                            impecable and experienced staff.
                        </p>

                            <a href="" class="btn-area">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-service">
                  <div class="service-bg service-bg-3">
                        <h2>Computer Maintainance</h2>
                    </div>

                    <div class="service-text">
                        <p>This field has a goal to equip students
                            with the knowledge of computer maintinace together with
                            Maintainance lab to guarantee that.
                        </p>

                            <a href="" class="btn-area">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection