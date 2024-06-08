<?php

use App\Http\Controllers\DeliveryLoginController;
use App\Http\Controllers\DeliveryManBookingStateApiController;
use App\Http\Controllers\PromocodeApiController;
use App\Http\Controllers\TownshipApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [DeliveryLoginController::class, "login"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/townships/{id}',[TownshipApiController::class,"show"]);

Route::get("/delivery-man-status/{id}",[DeliveryManBookingStateApiController::class,"index"])->middleware('auth:api');
Route::get("/usa-delivery-man-status",[DeliveryManBookingStateApiController::class,"usaIndex"])->middleware('auth:api');

Route::put("/delivery-man-status/{id}",[DeliveryManBookingStateApiController::class,"update"])->middleware('auth:api');
Route::put("/usa-delivery-man-status/{id}",[DeliveryManBookingStateApiController::class,"usaUpdate"])->middleware('auth:api');

Route::get("/delivery-man-statu/{id}",[DeliveryManBookingStateApiController::class,"show"])->middleware('auth:api');

Route::get("/usa-delivery-man-statu/{id}",[DeliveryManBookingStateApiController::class,"usaShow"])->middleware('auth:api');

Route::get('/promotion/{code}',[PromocodeApiController::class,"check"]);
