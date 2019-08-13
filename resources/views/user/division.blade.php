@extends('user.default.master')

@section('css')
    
@endsection

@section('content')
    <div class="division-container">
        <div class="divisionimage">
            <img src="" alt="">
        </div>
        <div class="yangonplace-container" style="margin-top:10px;">
            <h2 style="text-align:center;color:#ffcc00;font-weight:bolder;"> Division</h2>
            <p style="text-align:justify;font-size:18px;color:black;margin-left:3%;margin-right:3%;">
                note
            </p>

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
            </div>

        </div>
        <div id="map"></div>
    </div>
@endsection

@section('script')
    
@endsection