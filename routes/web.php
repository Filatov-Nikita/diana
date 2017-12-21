<?php



Route::get('/', function () {
    return view('main');
});
Route::get('/news', function () {
    return view('news');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'LoginController@PostLogin')->name('login.auth');

Route::get('/reg', 'LoginController@registration');
Route::get('/logout', 'LoginController@logout');
