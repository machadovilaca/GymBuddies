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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit', 'HomeController@edit');

Route::post('/edit', 'HomeController@patch');


Route::get('/food', 'FoodController@index');
Route::get('/food/create', 'FoodController@create');
Route::post('/food', 'FoodController@store');

Route::get('/calendarjs', 'CalendarjsController@index');
Route::get('/grab_calendar', 'CalendarjsController@grab_calendar');


Route::get('/calendar?week={week}&year={year}', 'CalendarController@index');

Route::get('/calendar', function () {
    $year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
    $week = (isset($_GET['week'])) ? $_GET['week'] : date('W');

    return redirect('/calendar?week='.$week.'&year='.$year);
});

Route::get('/calendar/create', 'CalendarController@create');

Route::get('/calendar', 'CalendarController@index');
Route::get('/calendar/create/{arg}', 'CalendarController@create');
Route::post('/calendar', 'CalendarController@store');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit', 'HomeController@edit');

Route::post('/edit', 'HomeController@patch');


Route::get('/food', 'FoodController@index');
Route::get('/food/create', 'FoodController@create');
Route::post('/food', 'FoodController@store');

Route::get('/calendar', 'CalendarController@index');
Route::get('/grab_calendar', 'CalendarController@grab_calendar');

Route::post('/put_calendar', 'CalendarController@store');

