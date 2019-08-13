<?php

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/admin/login', 'LoginController@GetLogin')->name('Admin.loginform');
        Route::post('/admin/loginpost', 'LoginController@postLogin')->name('Admin.loginpost');
    });

    Route::group(['middleware' => 'admin'], function(){
        Route::get('/admin/dashbaord', 'PageController@Dashboard')->name('admin.dashboard');
        Route::get('/admin/divisions/newdivision', 'PageController@NewDivision')->name('newdivision');
        Route::post('/admin/divisions/newdivisionpost', 'DivisionController@Division')->name('postdivision');
        Route::get('/admin/places', 'PageController@Place')->name('place');
        Route::get('/admin/places/newplace', 'PageController@NewPlace')->name('newplace');
        Route::post('/admin/places/newplacepost', 'PlaceController@Place')->name('postplace');
        Route::get('/admin/places/edit/{id}', 'CrudController@edit');
        Route::post('/admin/places/edit/{id}', 'CrudController@update');
        Route::get('/admin/places/delete/{id}', 'CrudController@delete');
        Route::get('/admin/divisions/edit/{id}', 'CrudController@dedit');
        Route::post('/admin/divisions/edit/{id}', 'CrudController@dupdate');
        Route::get('/admin/divisions/delete/{id}', 'CrudController@ddelete');


        Route::post('/admin/logout', 'LoginController@AdminLogout')->name('Admin.logout');
    });