<?php

//USER ROUTES
Route::get('/', function(){
    return view('user.home');
});
Auth::routes();