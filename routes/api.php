<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\Password\PasswordController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Clients\Appointment\AppointmentController;
use App\Http\Controllers\NoSession\NoSessionController;
use App\Http\Controllers\Stations\Devices\Calendars\StationDeviceCalendarController;
use App\Http\Controllers\Stations\Devices\StationDeviceController;
use App\Http\Controllers\Stations\StationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('verify/{token}', [VerifyController::class,'VerifyEmail']);

Route::get('stations',[NoSessionController::class,'stations']);
Route::get('distance/stations',[NoSessionController::class,'stationsByDistance']);

Route::group(['middleware' => 'jwt.verify'], function() {
    Route::post('/refresh',[AuthController::class, 'refresh']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/profile/edit', [AuthController::class, 'profileEdit']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/password/update', [AuthController::class, 'passwordUpdate']);

    Route::group(['prefix' => 'reset-password'],function (){
        Route::post('/',[PasswordController::class,'passwordEmail']);
        Route::post('/email',[PasswordController::class,'passwordEmail']);
        Route::get('/{token}',[PasswordController::class,'resetPassword']);
    });

    // Station Route Group
    Route::group(['prefix' => 'station', 'middleware' => 'station-owner'],function (){
        Route::post('/create',[StationController::class,'createStation']);
        Route::post('/update/{stationId}',[StationController::class,'updateStation']);
        Route::post('/status/{stationId}',[StationController::class,'statusStation']);
        Route::get('/list',[StationController::class,'stations']);

        // Station Device Route Group
        Route::group(['prefix' => 'device'],function (){
            Route::get('/list/{stationId}',[StationDeviceController::class,'devices']);
            Route::post('/create',[StationDeviceController::class,'createDevice']);
            Route::post('/update/{deviceId}',[StationDeviceController::class,'updateDevice']);
            Route::post('/status/{deviceId}',[StationDeviceController::class,'statusDevice']);
            Route::get('/tracking/{deviceId}',[StationDeviceController::class,'trackingDevice']);


            // Station Device Calendar Route Group
            Route::group(['prefix' => 'calendar'],function (){
                Route::post('/create',[StationDeviceCalendarController::class,'createCalendar']);
            });
        });
    });

    Route::group(['prefix' => 'client'],function (){
        Route::post('appointment',[AppointmentController::class]);
    });
});


