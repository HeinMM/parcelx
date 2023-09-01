<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use Illuminate\Http\Request;

class BookingStateController extends Controller
{
    public function show($bookingNumber){
        $booking = AuthYTYBooking::where('booking_number',$bookingNumber)->get()->first();
        return view('user-history.show',compact("booking"));
    }
}
