<?php

    Route::get('/', 'MainController@mainView');
    Route::get('/categories/{id}', 'MainController@categoriesList')->name('listFromCategories');
    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/help', function () {
        return view('whatHelp');
    });
