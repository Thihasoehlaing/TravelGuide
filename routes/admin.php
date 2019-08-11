<?php

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/admin/login', 'LoginController@GetLogin')->name('Admin.loginform');
        Route::post('/admin/loginpost', 'LoginController@postLogin')->name('Admin.loginpost');
    });

    Route::group(['middleware' => 'admin'], function(){
        Route::get('/admin/dashbaord', 'PageController@Dashboard')->name('admin.dashboard');
        Route::post('/admin/logout', 'LoginController@AdminLogout')->name('admin.logout');
    });