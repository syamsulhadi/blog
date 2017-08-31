<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', 'PostController');
Route::resource('/user', 'UserController');
Route::resource('/blog', 'BlogController');
Route::resource('/kategori', 'KategoriController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@create')->name('user.index');
Route::post('/user', 'UserController@store')->name('user.store');
Route::get('/user/{id}/user', 'UserController@index')->name('user/{id}/user');
Route::get('/user/{id}/kategori', 'UserController@index')->name('user/{id}/kategori');
Route::get('/user/{id}/blog', 'UserController@index')->name('user/{id}/blog');
Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::get('/user/{id}/show', 'UserController@show')->name('user.show');
Route::get('/user/{id}/delete', 'UserController@destroy');
Route::get('/user/kategori', 'KategoriController@index')->name('user.kategori');
Route::get('/user/blog', 'BlogController@index');
Route::get('/kategori', 'KategoriController@create')->name('kategori.index');
Route::get('/kategori', 'KategoriController@index')->name('kategori.index');
Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');
Route::get('/kategori/{id}/edit','KategoriController@edit')->name('kategori.edit');
Route::get('/kategori/{id}/delete','KategoriController@destroy')->name('kategori.destroy');
Route::get('/kategori/{id}/show', 'KategoriController@show')->name('kategori.show');
Route::get('/kategori/user','UserController@index');
Route::get('/kategori/blog','BlogController@index');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/user','UserController@index');
Route::get('/blog/kategori','KategoriController@index');
Route::get('/blog/create','BlogController@create')->name('blog.create');
Route::get('/blog/{id}/edit','BlogController@edit')->name('blog.edit');
Route::get('/blog/{id}/delete','BlogController@destroy')->name('blog.destroy');
Route::get('/blog/{id}/show', 'BlogController@show')->name('blog.show');
Route::get('/blog/update', 'BlogController@update')->name('blog.update');