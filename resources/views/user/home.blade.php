@extends('user.default.master')

@section('content')
    <div id="home" class="bd-example">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/maharmyatmuni.jpg" class="d-block w-100 slideimg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/deedoke.jpg" class="d-block w-100 slideimg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/colonial.jpg" class="d-block w-100 slideimg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/pyinoolwin.jpg" class="d-block w-100 slideimg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/sutaungpyae.jpg" class="d-block w-100 slideimg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/ubeinbridge.jpg" class="d-block w-100 slideimg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/mandalayhill.jpg" class="d-block w-100 slideimg" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="about"><br><br><br>
        <div class="knwondivisions">
            <h1 style="text-align: center;color:#ffcc00;font-weight:bolder">Myanmar, The Golden Land</h1><br>
                <p style="margin-left:2%;text-align:justify;font-size:20px;">
                    &emsp; &emsp;Myanmar, the official name for the Southeast Asian nation more commonly known as Burma, is a must-see for travelers who like Buddha and beaches, though not necessarily in that order. The country contains thousands of Buddhist temples. It also has pristine white beaches along the Bay of Bengal and Andaman Sea. The country is slowly opening to foreign tourism, so travelers who want to experience a more traditional Burma may want to visit now.
                </p><br>
            <h3 style="margin-left:2%">Well-Known Divisions and Places</h3><br><br>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('yangon') }}">
                        <div class="card" style="width: 18rem;margin-left:10%">
                            <img src="images/shwedagon.jpg" class="card-img-top" alt="Yangon">
                            <div class="card-body">
                                <h5 class="card-title">Yangon Division</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card" style="width: 18rem;margin-left:10%">
                            <img src="images/mandalay.jpg" class="card-img-top" alt="Mandalay">
                            <div class="card-body">
                                <h5 class="card-title">Mandalay Division</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card" style="width: 18rem;margin-left:10%">
                            <img src="images/bago.jpg" class="card-img-top" alt="bago">
                            <div class="card-body">
                                <h5 class="card-title">Bago Division</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-4">
                    <a href="#">
                        <div class="card" style="width: 18rem;margin-left:10%">
                            <img src="images/kyaiktiyoe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KayiktiYoe Pagoda</h5>
                            </div>
                        </div>
                    </a>  
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card" style="width: 18rem;margin-left:10%">
                            <img src="images/bagan.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bagan</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card" style="width: 18rem;margin-left:10%">
                            <img src="images/inlaylake.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Inn Lay Lake</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="contact"><br><br><br>
        <h2 style="margin-left:2%;margin-top:20px;margin-right:2%;">Contact</h2>
        <p style="margin-left:5%;text-align:justify;">
            &emsp; &emsp;First of all, I'm <b>Ma Hnin Ya Wai Theint</b>. I'm also final year student of <em>University of Computer Studies ( UCST )</em>.
             This is my first laravel web application in my internship. I had a lots of experience. Thank you for helping me.
        </p>
        <h5 style="margin-left:5%;text-align:justify;font-family:Times">
            If you want to contact me, my mail is 
        </h5>
        <div class="row" style="margin-left:10%">
            <div class="col-4"><i class="fas fa-envelope"></i>&emsp; Email:</div>
            <div class="col-8">
                <a href="mailto:hninyawaitheint@gmail.com" style="text-decoration:none;color:black;">
                    <span>hninyawaitheint@gmail.com</span>
                </a>
            </div>
        </div>
    </div>
@endsection