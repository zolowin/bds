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
use  Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('tinh', 'TinhController@index')->name('tinh.index');
    Route::get('tinh-them', 'TinhController@create')->name('tinh.create');
    Route::get('tinh-them', 'TinhController@store')->name('tinh.store');
    Route::get('tinh-them', 'TinhController@edit')->name('tinh.edit');
    Route::get('tinh-them', 'TinhController@update')->name('tinh.update');
    Route::get('tinh-them', 'TinhController@destroy')->name('tinh.destroy');
});
