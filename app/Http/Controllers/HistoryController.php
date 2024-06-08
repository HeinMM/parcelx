<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Models\UsaToMyanmar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(){
        $bookings = AuthYTYBooking::where('user_id',Auth::user()->id)->latest("id")->paginate(3);
        $usaBooking = UsaToMyanmar::where('user_id',Auth::user()->id)->latest("id")->paginate(3);

        return view("user-history.index",compact(["bookings","usaBooking"]));
    }
    public function show($booking_number){
        $usaBooking = null;
        $booking = AuthYTYBooking::where('booking_number',"=",$booking_number)->get()->first();
        if(empty($booking)){
            $booking = null;
            $usaBooking = UsaToMyanmar::where('booking_number',"=",$booking_number)->get()->first();
            return view('user-history.show',compact(["usaBooking","booking"]));
        }
        return view('user-history.show',compact(["booking","usaBooking"]));
    }

    public function showTwo(Request $request){
        $usaBooking = null;
        $booking = AuthYTYBooking::where('booking_number',$request->input('booking-number'))->get()->first();
        if(empty($booking)){
            $booking = null;
            $usaBooking = UsaToMyanmar::where('booking_number',"=",$request->input('booking-number'))->get()->first();
            if(empty($usaBooking)){
                return redirect()->back()->with(['error' => 'Error message']);
            }
            return view('user-history.show',compact(["usaBooking","booking"]));
        }


        return view('user-history.show',compact(["booking","usaBooking"]));
    }

    public function showByTable(){
        $bookings = AuthYTYBooking::where('user_id',Auth::user()->id)->with('rtownship','stownship','status')->latest("id")->paginate(10);

        return view('user-history.show-by-table',compact("bookings"));
    }
}
