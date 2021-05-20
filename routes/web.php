<?php


Route::get('/', function () {
    return view('child');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/new', 'PostsController@new')->name('posts.new');
Route::post('/posts', 'PostsController@create')->name('posts.create');
Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'PostsController@edit')->name('posts.edit');
Route::post('/posts/{id}', 'PostsController@update')->name('posts.update');
Route::post('/posts/{id}/delete', 'PostsController@destroy')->name('posts.delete');
