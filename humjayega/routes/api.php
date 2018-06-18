<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//----------DAILY SERVICE ROUTES----------//
/*1. VEHICLE*/
Route::resource('vehicle', 'Vehicle\vehicleController');
Route::resource('vehicle.journey', 'Vehicle\vehicleJourneyController');

/*2. JOURNEY*/
Route::resource('journey', 'Journey\journeyController');

/*3. VEHICLE UNAVILABLE*/
Route::resource('vehicleUnavailable', 'VehicleUnavailable\vehicleUnavailableController');

/*4. RESERVATION DAILY SERVICE*/
Route::resource('reservationDailyService', 'ReservationDailyService\reservationDailyServiceController');

/*5. RESERVED SEAT*/
Route::resource('reservedSeat', 'ReservedSeat\reservedSeatController');

/*6. USER*/
Route::resource('user', 'User\UserController', ['except' => ['create', 'edit']]);

//---------- ----------//