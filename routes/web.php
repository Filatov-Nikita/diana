<?php



Route::get('/', 'MainController@mainView');
Route::get('/categories/{id}', 'MainController@categoriesList')->name('listFromCategories');
Route::get('/news', 'PagesController@news');
Route::get('/new/{id}', 'PagesController@newsById')->name('newsById');
Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/help', function () {
    return view('whatHelp');
});

Route::post('/login', 'LoginController@PostLogin')->name('login.auth');

Route::get('/logout', 'LoginController@logout');

Route::get('/registration', function () {
    return view('registration');
});

Route::post('/registration', 'LoginController@PostRegistration')->name('registration');

Route::get('/{id}', 'PagesController@newsByOne')->name('site.newsOne');