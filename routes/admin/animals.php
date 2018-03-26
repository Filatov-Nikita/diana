<?php

    Route::get('/add', 'AdminAnimalsController@getAddAnimalForm');
    Route::post('/add', 'AdminAnimalsController@postAddAnimalForm');

    Route::get('/test', 'AdminAnimalsController@test');