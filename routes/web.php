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

Route::post('/home', 'PagesController@home')->middleware('checkuser');
Route::get('/login','PagesController@login');
Route::get('/','PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts/store','PostsController@store');
