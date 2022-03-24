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
});


