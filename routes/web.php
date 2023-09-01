<?php

use App\Http\Controllers\AuthYTYBookingController;
use App\Http\Controllers\BookingStateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultController;
use App\Models\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/booking-status/{bookingNumber}', [BookingStateController::class, 'show'])->name('booking-status.show');

Route::middleware(['auth'])->prefix('userbooking')->group(function(){
    Route::resource("a-yty-booking",AuthYTYBookingController::class);
    Route::get('a-yty-booking/parcelx-booking/{booking_number}', [ResultController::class,"result"])->name('a-yty-booking.result');

});

Route::middleware(['auth'])->prefix('userbooking')->group(function(){
    Route::get('my-history', [HistoryController::class,"index"])->name('myhistory.index');
    Route::get('show-my-history/{booking_number}', [HistoryController::class,"show"])->name('myhistory.show');

});

Route::middleware(['auth','isAdmin'])->prefix('parcel-x')->group(function(){
    Route::resource("admin-dashboard",DashboardController::class);

});




