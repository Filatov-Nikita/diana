<?php

    Route::get('/add', 'AdminPostsController@add')->name('news.add');
    Route::post('/add', 'AdminPostsController@addPost');
