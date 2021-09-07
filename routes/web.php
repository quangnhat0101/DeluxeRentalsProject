<?php

use Illuminate\Support\Facades\Route;

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

//----------------Car CRUD---------------------------
//01. Index
Route::get('carindex','CarController@CarIndex');
//02. Create
Route::get('carcreate','CarController@CreateCar');
Route::post('carcreate','CarController@StoreCar');
//03.Update
Route::get('carupdate/{id}','CarController@EditCar');
Route::post('carupdate/{id}','CarController@UpdateCar');
//04.DElete
Route::get('cardelete/{id}','CarController@DeleteCar');


//----------------Site navigation---------------------------

    //Route for homepage
    Route::get('homepage','SiteController@Homepage');
    Route::get('contact','SiteController@Contact');

    //Route for booking
    Route::get('booking','OrderController@BookCar');


//----------------Staff CRUD---------------------------
//01.READ - http://localhost:8080/DeluxeRentals/public/staff/viewstaff
Route::get('staffindex', 'StaffController@index');
//02.CREAT - http://localhost:8080/demo/public/staff/addstaff
Route::get('staffcreate', 'StaffController@create');
Route::post('staffcreate', 'StaffController@createProcess');
//03. UPDATE - http://localhost:8080/demo/public/staff/updatestaff
Route::get('staffupdate/{StaffID}', 'StaffController@update');
Route::post('staffupdate/{StaffID}', 'StaffController@updateProcess');
//04. DELETE
Route::get('staffdelete/{StaffID}', 'StaffController@delete');

//----------------Driver CRUD---------------------------
//01.READ - http://localhost:8080/demo/public/driver/viewdriver
Route::get('driver/viewdriver', 'DriverController@index');
//02.CREAT - http://localhost:8080/demo/public/driver/adddriver
Route::get('driver/adddriver', 'DriverController@create');
Route::post('driver/adddriverprocess', 'DriverController@createProcess');
//03. UPDATE - http://localhost:8080/demo/public/driver/updatedriver
Route::get('driver/updatedriver/{DriverID}', 'DriverController@update');
Route::post('driver/updatedriverprocess/{DriverID}', 'DriverController@updateProcess');
//04. DELETE
Route::get('driver/deletedriver/{DriverID}', 'DriverController@delete');


Route::get('customer/index','CustomerController@index');