<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(){
        $bookings = AuthYTYBooking::where('user_id',Auth::user()->id)->latest("id")->paginate(3);
        return view("user-history.index",compact("bookings"));
    }
    public function show($bookingNumber){
        $booking = AuthYTYBooking::where('booking_number',$bookingNumber)->get()->first();
        return view('user-history.show',compact("booking"));
    }
}
