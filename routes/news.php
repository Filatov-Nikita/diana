<?php

Route::get('/add', 'NewsController@add')->name('news.add');
Route::post('/add', 'NewsController@addPost');
