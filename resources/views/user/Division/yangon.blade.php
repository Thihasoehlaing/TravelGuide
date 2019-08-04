@extends('user.default.master')

@section('css')
    
@endsection

@section('content')
    <div class="yangon-container">

        {{-- carouselimage --}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">  
                <div class="carousel-item active">
                    <img src="images/MahabandulaPark.jpg" class="d-block w-100 slideimg" alt="bandula">
                </div>
                <div class="carousel-item">
                    <img src="images/shwedagon.jpg" class="d-block w-100 slideimg" alt="Shwedagon">
                </div>
                <div class="carousel-item">
                    <img src="images/sule.jpg" class="d-block w-100 slideimg" alt="sule">
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
        <div class="yangonplace-container" style="margin-top:10px;">
            <h2 style="text-align:center;color:#ffcc00;font-weight:bolder;">Yangon Division</h2>
            <p style="text-align:justify;font-size:18px;color:black;margin-left:3%;margin-right:3%;">
                &emsp; &emsp;Yangon boasts the largest number of colonial-era buildings in Southeast Asia,[4] and has a unique colonial-era urban core that is remarkably intact.[5] The colonial-era commercial core is centred around the Sule Pagoda, which is reputed to be over 2,000 years old.[6] The city is also home to the gilded Shwedagon Pagoda – Myanmar's most sacred Buddhist pagoda.
            The mausoleum of the last Mughal Emperor is located in Yangon, where he had been exiled following the Indian Mutiny of 1857.
            Yangon suffers from deeply inadequate infrastructure, especially compared to other major cities in Southeast Asia. Though many historic residential and commercial buildings have been renovated throughout central Yangon, most satellite towns that ring the city continue to be profoundly impoverished and lack basic infrastructure.",
            </p>
            {{-- placenamecard --}}

            {{-- yangonတြင္ရွိေသာplace ေတြကိုု card view နဲ့ 1 row 4 columns နည္းနဲ့ ေရးပါ --}}
            {{-- 1row 4columns --}}
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-3">
                        <a href="{{ route('shwedagon') }}">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/shwedagonpagoda.jpg" class="card-img-top" alt="Shwedagon"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Shwedagon Pagoda</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/MahabandulaPark.jpg" class="card-img-top" alt="bandula"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Mahabandula Park</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/sule.jpg" class="card-img-top" alt="sule"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Sule Pagoda</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/peoplepark.jpg" class="card-img-top" alt="peoplepark"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Yangon People Park</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            {{-- ေနာက္ 1 row 4 columns ထပ္ေရးပါ place ေတြရွိမွာ ေရးပါ --}}

                {{-- yangonတြင္ရွိေသာplace ေတြကိုု card view နဲ့ 1 row 4 columns နည္းနဲ့ ေရးပါ --}}
                {{-- 1row 4columns --}}
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/shwedagonpagoda.jpg" class="card-img-top" alt="Shwedagon"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Shwedagon Pagoda</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/MahabandulaPark.jpg" class="card-img-top" alt="bandula"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Mahabandula Park</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/sule.jpg" class="card-img-top" alt="sule"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Sule Pagoda</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <div class="card" style="width: 18rem;margin-left:10%">
                                {{-- division အလိုုက္ place image ပုုံသြင္းပါ --}}
                                <img src="images/peoplepark.jpg" class="card-img-top" alt="peoplepark"> 
                                <div class="card-body">
                                    {{-- place name ေရးပါ --}}
                                    <h5 class="card-title">Yangon People Park</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection