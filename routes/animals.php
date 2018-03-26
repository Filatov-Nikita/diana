<?php 

    Route::get('/', function () {
        return 'Hello World';
    });

    //Route::get('/add', 'AnimalsController@getAddForm');
    Route::get('/{id}', 'AnimalsController@detailAnimal')->name('animals.detail');