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

Route::get('/','FrontController@home');
Route::get('/tournament', 'FrontController@tournament');
Route::get('/rules', 'FrontController@rules');
Route::get('/how-to-join', 'FrontController@how_to_join');
Route::get('/contact', 'FrontController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
