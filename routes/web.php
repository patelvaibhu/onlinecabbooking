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
Route::get('viewbooking/{id}','OnlinecabbookingController@viewbooking')->name('viewbooking');
Route::get('distroybooking/{id}','OnlinecabbookingController@distroybooking')->name('distroybooking');



Route::get('contactus','OnlinecabbookingController@contact')->name('contactus');//contact form
Route::post('contactusstore','OnlinecabbookingController@contactusstore')->name('contactusstore');//contact store


Route::get('adminuser','OnlinecabbookingController@adminuser')->name('adminuser');//adminusre form
Route::post('adminuserstore','OnlinecabbookingController@adminuserstore')->name('adminuserstore');//store
Route::get('user','OnlinecabbookingController@user')->name('user');// admin data
Route::get('viewadmin/{id}','OnlinecabbookingController@viewadmin')->name('viewadmin');
Route::get('distroycar/{id}','OnlinecabbookingController@distroycar')->name('distroycar');
Route::get('editcar/{id}','OnlinecabbookingController@editcar')->name('editcar');
Route::post('updatecar','OnlinecabbookingController@updatecar')->name('updatecar');




Route::get('aboutus','OnlinecabbookingController@about')->name('aboutus');

Route::get('cars','OnlinecabbookingController@cars')->name('cars');//forms
Route::post('carsstore','OnlinecabbookingController@carsstore')->name('carsstore');//store data
Route::get('distroyadmin/{id}','OnlinecabbookingController@distroyadmin')->name('distroyadmin');
Route::get('adminindex','OnlinecabbookingController@admin')->name('adminindex');



Route::get('city','OnlinecabbookingController@city')->name('city');
Route::get('addcity','OnlinecabbookingController@addcity')->name('addcity');
Route::post('citystore','OnlinecabbookingController@citystore')->name('citystore');
Route::get('viewcity/{id}','OnlinecabbookingController@viewcity')->name('viewcity');
Route::get('distroycity/{id}','OnlinecabbookingController@distroycity')->name('distroycity');




Route::get('order','OnlinecabbookingController@order')->name('order');//form
Route::post('orderstore','OnlinecabbookingController@orderstore')->name('orderstore'); //form store
Route::get('neworder','OnlinecabbookingController@neworder')->name('neworder');
Route::get('vieworder/{id}','OnlinecabbookingController@vieworder')->name('vieworder');
Route::get('distroyorder/{id}','OnlinecabbookingController@distroyorder')->name('distroyorder');


Route::get('driver','OnlinecabbookingController@driver')->name('driver');
Route::post('driverstore','OnlinecabbookingController@driverstore')->name('driverstore');
Route::get('viewdriver/{id}','OnlinecabbookingController@viewdriver')->name('viewdriver');
Route::get('adddriver','OnlinecabbookingController@adddriver')->name('adddriver');
Route::get('distroydriver/{id}','OnlinecabbookingController@distroydriver')->name('distroydriver');



Route::get('car','OnlinecabbookingController@car')->name('car');
Route::get('viewcar/{id}','OnlinecabbookingController@viewcar')->name('viewcar');
Route::get('newcar','OnlinecabbookingController@newcar')->name('newcar');



Route::get('inquiry','OnlinecabbookingController@inquiry')->name('inquiry');
Route::post('inquirystore','OnlinecabbookingController@inquirystore')->name('inquirystore');
Route::get('viewinquiry/{id}','OnlinecabbookingController@viewinquiry')->name('viewinquiry');
Route::get('admininquiry','OnlinecabbookingController@admininquiry')->name('admininquiry');
Route::get('distroyinquiry/{id}','OnlinecabbookingController@distroyinquiry')->name('distroyinquiry');




Route::get('passenger','OnlinecabbookingController@passenger')->name('passenger');
Route::post('passengerstore','OnlinecabbookingController@passengerstore')->name('passengerstore');
Route::get('newpassenger','OnlinecabbookingController@newpassenger')->name('newpassenger');
Route::get('viewpassenger/{id}','OnlinecabbookingController@viewpassenger')->name('viewpassenger');
Route::get('distroypassenger/{id}','OnlinecabbookingController@distroypassenger')->name('distroypassenger');



Route::get('payment','OnlinecabbookingController@payment')->name('payment');
Route::post('paymentstore','OnlinecabbookingController@paymentstore')->name('paymentstore');
Route::get('addpayment','OnlinecabbookingController@addpayment')->name('addpayment');
Route::get('viewpayment/{id}','OnlinecabbookingController@viewpayment')->name('viewpayment');
Route::get('distroypayment/{id}','OnlinecabbookingController@distroypayment')->name('distroypayment');




Route::get('adminfeedback','OnlinecabbookingController@adminfeedback')->name('adminfeedback');
Route::get('viewfeedback/{id}','OnlinecabbookingController@viewfeedback')->name('viewfeedback');
Route::get('distroyfeedback/{id}','OnlinecabbookingController@distroyfeedback')->name('distroyfeedback');


Route::get('plan','OnlinecabbookingController@plan')->name('plan');
Route::post('planstore','OnlinecabbookingController@planstore')->name('planstore');
Route::get('adminplan','OnlinecabbookingController@adminplan')->name('adminplan');
Route::get('viewplan/{id}','OnlinecabbookingController@viewplan')->name('viewplan');
Route::get('distroyplan/{id}','OnlinecabbookingController@distroyplan')->name('distroyplan');


Route::get('adminlogin','OnlinecabbookingController@adminlogin')->name('adminlogin');


