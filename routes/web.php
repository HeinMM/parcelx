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
Route::get('/aboutus', function () {

    return view('main.about-us');
})->name('aboutus');

Route::get('/tracking', function () {

    return view('main.tracking');
})->name('tracking');

Route::get('/contact', function () {

    return view('main.contact-us');
})->name('contact');

Route::get('/service-plans', function () {

    return view('main.service-plans');
})->name('service');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/booking-status/{bookingNumber}', [BookingStateController::class, 'show'])->name('booking-status.show');

Route::middleware(['web'])->prefix('userbooking')->group(function(){
    Route::resource("a-yty-booking",AuthYTYBookingController::class);
    Route::get('a-yty-booking/parcelx-booking/{booking_number}', [ResultController::class,"result"])->name('a-yty-booking.result');

});

Route::middleware(['web'])->prefix('userbooking')->group(function(){
    Route::get('my-history', [HistoryController::class,"index"])->name('myhistory.index');
    Route::get('show-my-history/{booking_number}', [HistoryController::class,"show"])->name('myhistory.show');

});

Route::middleware(['web','isAdmin'])->prefix('parcel-x')->group(function(){
    Route::resource("admin-dashboard",DashboardController::class);

});

Route::get('/booking', [AuthYTYBookingController::class, 'create'])->name('noBookingCreate');
Route::post('/booking', [AuthYTYBookingController::class, 'store'])->name('noBookingStore');




