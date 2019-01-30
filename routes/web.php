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

Route::get('/home', 'homing@show')->middleware('auth');
Route::get('post', function () {
    return view('npm');

});
Route::get('f', 'homing@event');

// event(new firsttime("fgdfg"));





Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
