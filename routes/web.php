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
Route::get('addData', 'AddDataController@getData')->name('add');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/registerSuccess', function() {
        return view('notice');
    })->name('notice');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('data', 'DataController', ['only' => ['index']]);
    Route::get('device', 'DeviceController@status')->name('status.device');
    Route::resource('/chart', 'ChartController', ['only' => ['index']]);
    Route::get('temp', 'TempController@getTemp')->name('temp.data');
    Route::get('ph', 'PHController@getPH')->name('ph.data');
});

