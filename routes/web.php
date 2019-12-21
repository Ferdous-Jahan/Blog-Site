<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show')->name('show');
Route::get('/createpost', 'PostsController@create');
Route::post('/createpost', 'PostsController@store');
Route::get('/edit/{id}', 'PostsController@edit')->name('edit');
Route::post('/edit/{id}', 'PostsController@update');
Route::get('/delete/{id}', 'PostsController@destroy')->name('delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
