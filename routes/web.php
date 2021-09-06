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

// Routes for car
Route::get('car/index','CarController@CarIndex');

Route::get('car/addcar','CarController@CreateCar');
Route::post('car/addcar','CarController@StoreCar');

Route::get('car/editcar/{id}','CarController@EditCar');
Route::post('car/updatecar/{id}','CarController@UpdateCar');

Route::get('car/deletecar/{id}','CarController@DeleteCar');

//Site navigation routes

    //Route for homepage
    Route::get('homepage','SiteController@Homepage');

    //Route for booking
    Route::get('booking','OrderController@BookCar');


