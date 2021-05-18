<?php


Route::get('/', function () {
    return view('child');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/new', 'PostsController@new');
