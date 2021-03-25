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

Auth::routes(['verify' => true]);

Route::group(['middleware'=>'verified'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/done', 'DoneController@index')->name('done');
    Route::get('/reservation', 'ReservationController@index')->name('reservation');
    Route::post('/reservation/store', 'ReservationController@store')->name('reservation.store');
});
