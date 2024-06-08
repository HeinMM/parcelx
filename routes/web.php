<?php

use App\Http\Controllers\AuthYTYBookingController;
use App\Http\Controllers\BookingStateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeliveryManController;
use App\Http\Controllers\DutyController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromocodeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TodayBookingController;
use App\Http\Controllers\UsaToMyanmarController;
use App\Models\DeliveryMan;
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
    Route::get('a-yty-booking/parcelx-booking/{booking_number}/{option?}', [ResultController::class,"result"])->name('a-yty-booking.result');

});

Route::middleware(['auth'])->prefix('userbooking')->group(function(){
    Route::get('my-history', [HistoryController::class,"index"])->name('myhistory.index');
    Route::get('show-my-history/{booking_number}', [HistoryController::class,"show"])->name('myhistory.show');
    Route::get('show-my-historys', [HistoryController::class,"showByTable"])->name('myhistory.show-my-historys');

});



Route::get('/booking', [AuthYTYBookingController::class, 'create'])->name('noBookingCreate');
Route::post('/booking', [AuthYTYBookingController::class, 'store'])->name('noBookingStore');


Route::middleware(['auth','isAdmin'])->prefix('parcel-x')->group(function(){

    Route::get('admin-dashboard/today-booking/duty/{id}', [DutyController::class,"index"])->name('dashboard.duty');
    Route::get('admin-dashboard/today-booking/duty/{id}/{deli_id}', [DutyController::class,"duty"])->name('dashboard.put_duty');

    Route::get('admin-dashboard/today-bookings', [TodayBookingController::class,"index"])->name('dashboard.todayBookings');
    Route::get('admin-dashboard/today-booking/{id}/{option?}', [TodayBookingController::class,"show"])->name('dashboard.todayBooking');
    Route::post('admin-dashboard/today-booking/{option}', [TodayBookingController::class,"showByBookingNumber"])->name('dashboard.todayBookingByBookingNumber');

    Route::get('promotion', [PromocodeController::class,"index"])->name('promo.index');
    Route::get('promotion/create', [PromocodeController::class,"create"])->name('promo.create');
    Route::post('promotion', [PromocodeController::class,"store"])->name('promo.store');
    Route::delete('promotion/{id}', [PromocodeController::class,"destroy"])->name('promo.destroy');

    Route::get('deli', [DeliveryManController::class,"index"])->name('deli.index');
    Route::get('deli/create', [DeliveryManController::class,"create"])->name('deli.create');
    Route::post('deli', [DeliveryManController::class,"store"])->name('deli.store');
    Route::delete('deli/{id}', [DeliveryManController::class,"destroy"])->name('deli.destroy');

    Route::resource("admin-dashboard",DashboardController::class);

});

Route::post('show-my-history', [HistoryController::class,"showTwo"])->name('myhistory.showTwo');

Route::resource('usa-to-myanmar', UsaToMyanmarController::class);




