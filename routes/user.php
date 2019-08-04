<?php
Route::get('/home', 'PageController@home')->name('home');

//Division နွင့္ပက္ေသာ route ဒီမွာေရးပါ
Route::get('/YangonDivision', 'PageController@Yangon')->name('yangon');

//Place နွင့္ပက္ေသာ route ဒီမွာေရးပါ
Route::get('/YangonDivision/Shwedagon','PageController@Shwedagon')->name('shwedagon');