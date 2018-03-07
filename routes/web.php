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
    return view('index');
})->name('welcome');

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

Route::get('neworder','OnlinecabbookingController@neworder')->name('neworder');

Route::get('driver','OnlinecabbookingController@driver')->name('driver');

Route::get('car','OnlinecabbookingController@car')->name('car');

Route::get('inquiry','OnlinecabbookingController@inquiry')->name('inquiry');

Route::get('passenger','OnlinecabbookingController@passenger')->name('passenger');

Route::get('payment','OnlinecabbookingController@payment')->name('payment');

Route::get('user','OnlinecabbookingController@user')->name('user');

Route::get('adminuser','OnlinecabbookingController@adminuser')->name('adminuser');

Route::get('newcar','OnlinecabbookingController@newcar')->name('newcar');

Route::get('admininquiry','OnlinecabbookingController@admininquiry')->name('admininquiry');

Route::get('adddriver','OnlinecabbookingController@adddriver')->name('adddriver');

Route::get('newpassenger','OnlinecabbookingController@newpassenger')->name('newpassenger');

Route::get('addpayment','OnlinecabbookingController@addpayment')->name('addpayment');
