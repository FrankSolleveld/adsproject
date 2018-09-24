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

Route::prefix('ad')->group(function () {

    Route::get('/', ['uses' => 'AdvertisementsController@index']);
    Route::get('/details/{id}', ['uses' => 'AdvertisementsController@show']);
    Route::get('/create', ['uses' => 'AdvertisementsController@create']);

});

//Route::resource('ad', 'AdvertisementsController');