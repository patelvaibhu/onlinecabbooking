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

Route::get('booking','OnlinecabbookingController@booking')->name('booking');//booking

Route::post('bookingstore','OnlinecabbookingController@bookingstore')->name('bookingstore');//bookingstore




Route::get('adminbooking','OnlinecabbookingController@adminbooking')->name('adminbooking');

Route::get('contactus','OnlinecabbookingController@contact')->name('contactus');//contact form
Route::post('contactusstore','OnlinecabbookingController@contactusstore')->name('contactusstore');//contact store


Route::get('adminuser','OnlinecabbookingController@adminuser')->name('adminuser');//adminusre form
Route::post('adminuserstore','OnlinecabbookingController@adminuserstore')->name('adminuserstore');//store
Route::get('user','OnlinecabbookingController@user')->name('user');// admin data


Route::get('aboutus','OnlinecabbookingController@about')->name('aboutus');

Route::get('cars','OnlinecabbookingController@cars')->name('cars');//forms
Route::post('carsstore','OnlinecabbookingController@carsstore')->name('carsstore');//store data

Route::get('adminindex','OnlinecabbookingController@admin')->name('adminindex');

Route::get('city','OnlinecabbookingController@city')->name('city');
Route::get('addcity','OnlinecabbookingController@addcity')->name('addcity');
Route::post('citystore','OnlinecabbookingController@citystore')->name('citystore');

Route::get('plan','OnlinecabbookingController@plan')->name('plan');
Route::post('planstore','OnlinecabbookingController@planstore')->name('planstore');

Route::get('order','OnlinecabbookingController@order')->name('order');//form
Route::post('orderstore','OnlinecabbookingController@orderstore')->name('orderstore'); //form store


Route::get('neworder','OnlinecabbookingController@neworder')->name('neworder');

Route::get('driver','OnlinecabbookingController@driver')->name('driver');
Route::post('driverstore','OnlinecabbookingController@driverstore')->name('driverstore');

Route::get('car','OnlinecabbookingController@car')->name('car');

Route::get('inquiry','OnlinecabbookingController@inquiry')->name('inquiry');
Route::post('inquirystore','OnlinecabbookingController@inquirystore')->name('inquirystore');

Route::get('passenger','OnlinecabbookingController@passenger')->name('passenger');
Route::post('passengerstore','OnlinecabbookingController@passengerstore')->name('passengerstore');

Route::get('payment','OnlinecabbookingController@payment')->name('payment');
Route::post('paymentstore','OnlinecabbookingController@paymentstore')->name('paymentstore');



Route::get('newcar','OnlinecabbookingController@newcar')->name('newcar');

Route::get('admininquiry','OnlinecabbookingController@admininquiry')->name('admininquiry');

Route::get('adddriver','OnlinecabbookingController@adddriver')->name('adddriver');

Route::get('newpassenger','OnlinecabbookingController@newpassenger')->name('newpassenger');

Route::get('addpayment','OnlinecabbookingController@addpayment')->name('addpayment');

Route::get('adminlogin','OnlinecabbookingController@adminlogin')->name('adminlogin');

Route::get('adminfeedback','OnlinecabbookingController@adminfeedback')->name('adminfeedback');

Route::get('adminplan','OnlinecabbookingController@adminplan')->name('adminplan');
