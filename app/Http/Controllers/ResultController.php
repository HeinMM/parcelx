<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Models\QrPhoto;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result($booking_number){
        $booking = AuthYTYBooking::where('booking_number',$booking_number)->get()->first();
        $booking_id = $booking->id;
        $qrPhoto = QrPhoto::where('booking_id',$booking->id)->get()->first();
        return view("auth-booking-pages.yty-booking.result",compact("booking","qrPhoto"));
    }
}
