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
})->name('welcom');

Route::get('index','OnlinecabbookingController@index')->name('index');

Route::get('booking','OnlinecabbookingController@booking')->name('booking');

Route::get('contactus','OnlinecabbookingController@contact')->name('contactus');

Route::get('aboutus','OnlinecabbookingController@about')->name('aboutus');

Route::get('cars','OnlinecabbookingController@cars')->name('cars');

Route::get('login','OnlinecabbookingController@login')->name('login');

//Route::get('adminmain','OnlinecabbookingController@adminheader')->name('adminmain');

Route::get('adminindex','OnlinecabbookingController@admin')->name('adminindex');

Route::get('city','OnlinecabbookingController@city')->name('city');

Route::get('plan','OnlinecabbookingController@plan')->name('plan');

Route::get('order','OnlinecabbookingController@order')->name('order');

Route::get('addcity','OnlinecabbookingController@addcity')->name('addcity');