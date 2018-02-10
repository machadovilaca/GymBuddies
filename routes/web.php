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


Route::get('/calendar', function () {
    return view('calendar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/edit', 'HomeController@edit');

Route::post('/edit', 'HomeController@patch');


Route::get('/food', 'FoodController@index');
Route::get('/food/create', 'FoodController@create');
Route::post('/food', 'FoodController@store');
