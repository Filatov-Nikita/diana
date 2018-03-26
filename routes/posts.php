<?php
    Route::get('/', 'PostsController@listPosts');
    Route::get('/{id}', 'PostsController@postById')->name('postById');
