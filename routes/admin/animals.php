<?php

    Route::get('/add', 'AdminAnimalsController@getAddAnimalForm');
    Route::post('/add', 'AdminAnimalsController@postAddAnimalForm');
    Route::get('/addcategory', 'AdminAnimalsController@addCategoryView');
    Route::post('/addcategory', 'AdminAnimalsController@addCategoryPost');