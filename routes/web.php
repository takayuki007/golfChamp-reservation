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

//TOPページ
Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::group(['middleware'=>'verified'], function (){
    //マイページ表示
    Route::get('/home', 'HomeController@index')->name('home');
    //完了ページを表示
    Route::get('/done', 'DoneController@index')->name('done');
    //予約ページを表示
    Route::get('/reservation', 'ReservationController@index')->name('reservation');
    //予約処理
    Route::post('/reservation/store', 'ReservationController@store')->name('reservation.store');
    //プロフィールページを表示
    Route::get('/profile/index', 'ProfileController@index')->name('profile.index');
    //プロフィール登録処理
    Route::post('/profile/store', 'ProfileController@store')->name('profile.store');

});

