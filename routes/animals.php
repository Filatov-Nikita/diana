<?php 

Route::get('/', function () {
    return 'Hello World';
});

Route::get('/add', 'AnimalsController@getAddForm');