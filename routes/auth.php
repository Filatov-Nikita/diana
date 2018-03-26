<?php

    Route::get('/login', function () {
        return view('login');
    });

    Route::post('/login', 'LoginController@PostLogin')->name('login.auth');

    Route::get('/logout', 'LoginController@logout');

    Route::get('/registration', function () {
        return view('registration');
    });

    Route::post('/registration', 'LoginController@PostRegistration')->name('registration');