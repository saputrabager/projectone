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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/result', 'ResultController@show')->name('result');

Route::get('/newpost', 'HomeController@newpost')->name('newpost');

Route::get('/home', 'HomeController@index')->name('home');
