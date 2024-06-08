<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Models\QrPhoto;
use App\Models\UsaToMyanmar;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result($booking_number,$option){
        if($option=="usa"){
            $booking = UsaToMyanmar::where('booking_number',$booking_number)->get()->first();
            $booking_id = $booking->id;
            $qrPhoto = QrPhoto::where('booking_id',$booking->id)->get()->first();
            return view("auth-booking-pages.yty-booking.result",compact("booking","qrPhoto"));
        }
        $booking = AuthYTYBooking::where('booking_number',$booking_number)->get()->first();
        $booking_id = $booking->id;
        $qrPhoto = QrPhoto::where('booking_id',$booking->id)->get()->first();
        return view("auth-booking-pages.yty-booking.result",compact("booking","qrPhoto"));
    }
}
