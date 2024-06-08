<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Models\UsaToMyanmar;
use Illuminate\Http\Request;

class BookingStateController extends Controller
{
    public function show($bookingNumber){
        $booking = AuthYTYBooking::where('booking_number',$bookingNumber)->get()->first();
        if($booking==null){
            $booking = null;
            $usaBooking = UsaToMyanmar::where('booking_number',$bookingNumber)->get()->first();
            return view('user-history.show',compact(["usaBooking","booking"]));
        }
        $usaBooking = null;
        return view('user-history.show',compact(["usaBooking","booking"]));
    }
}
