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
//for redirect to homepage which is shown first 
Route::get('/', function () {
    return view('index');
});

//for login and registration 
Auth::routes();

//for redirect to admin/user homepage 
Route::get('/home', 'HomeController@index');

//Register
Route::get('/registration/getInfo','adminController@getData')->name('UserInfo');
Route::get('/registration/getInfo/{id}','adminController@Delete');

//Reservation
Route::get('/Reservation/viewReservation' , 'ReservationController@viewReservation');
Route::get('/Reservation/makeReservation' , 'ReservationController@makeReservation');
Route::delete('/Reservation/delete/{id}' , 'ReservationController@destroy');
Route::post('/Reservation' , 'ReservationController@store');

//Reservation/ticket
Route::get('/Reservation/ViewTicket','ReservationController@viewTicket');

//registration
Route::get('/registration/getInfo','adminController@getData')->name('UserInfo');
Route::get('/registration/getInfo/{id}','adminController@Delete');
Route::get('/user/details','UserController@viewDetails');