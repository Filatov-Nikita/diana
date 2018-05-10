<?php

    Route::get('/', 'MainController@mainView')->name('main');
    Route::get('/categories/{id}', 'MainController@categoriesList')->name('listFromCategories');
    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/help', function () {
        return view('whatHelp');
    });

    Route::get('/sort/{type_animal_id}', 'MainController@sortAnimalsByCategory')->name('animals.sortByCategory');