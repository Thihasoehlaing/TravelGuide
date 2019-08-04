@extends('user.default.master')

@section('css')
    
@endsection

@section('content')
    <div class="shwedagon-container" style="margin-top:100px;">
        {{-- placename ကိုုေရးပါ --}}
        <h2 style="color:#ffcc00;text-align:center;font-weight:bolder">Shwedagon Pagoda</h2>

        {{-- place ရဲ့ပုုံကိုုထည့္ပါ --}}
        <div class="placeimg">
            <img src="/images/shwedagonpagoda.jpg" alt="Shwedagon"> 
        </div>

        <div class="placeform-container" style="margin-left:25%;margin-right:25%;font-weight:bold;">

            {{-- place data ေတြကိုု formအေနနဲ့ ျပမယ္ responsive --}}
            <div class="row">
                <div class="col-4">Name:</div>
                <div class="col-8">Shwedagon Pagoda</div>
            </div>
            <div class="row">
                <div class="col-4">City:</div>
                <div class="col-8">Yangon</div>
            </div>
            <div class="row">
                <div class="col-4">Township:</div>
                <div class="col-8">San Chaung</div>
            </div>
            <div class="row">
                <div class="col-4">Type:</div>
                <div class="col-8">Pagoda</div>
            </div>
            <div class="row">
                <div class="col-4">Note:</div>
                <div class="col-8">Shwedagon Pagoda is the most well-known pagoda of Myanmar.</div>
            </div>
        </div>

    </div>
@endsection
