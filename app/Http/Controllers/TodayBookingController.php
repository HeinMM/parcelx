<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Models\QrPhoto;
use App\Models\UsaToMyanmar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodayBookingController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $bookings = AuthYTYBooking::whereDate('created_at','<=', Carbon::today())->with('rtownship','stownship','deliveryman','status')->latest('id')->paginate(10)->withQueryString();
            $usaBookings = UsaToMyanmar::latest('id')->paginate(10)->withQueryString();
            // $bookings = AuthYTYBooking::whereDate('created_at', Carbon::today())->get();

            return view('admin-dashboard.today-bookings',compact(['bookings','usaBookings']));
        }

        if(Auth::user()->role == 'usa-admin'){
            $usaBookings = UsaToMyanmar::latest('id')->paginate(10)->withQueryString();

            // $bookings = AuthYTYBooking::whereDate('created_at', Carbon::today())->get();

            return view('admin-dashboard.today-bookings',compact('usaBookings'));
        }

    }

    public function show($id,$option){
        if($option=="usa"){
            $role = "usa-admin";
            $booking = UsaToMyanmar::where('id','=', $id) -> first();
        $qrPhoto = QrPhoto::where('booking_id',$booking->id)->get()->first();
        return view('admin-dashboard.usa-today-booking',compact('booking','qrPhoto','role'));
        }
        if($option=="yty"){
            $booking = AuthYTYBooking::where('id','=', $id) -> first();
        $qrPhoto = QrPhoto::where('booking_id',$booking->id)->get()->first();
        return view('admin-dashboard.today-booking',compact('booking','qrPhoto'));
        }

    }

    public function showByBookingNumber(Request $request,$option){
        
        if($option=="usa"){
            $role = "usa-admin";
            $booking = UsaToMyanmar::where('booking_number','=', $request->input("booking-number")) -> first();
        $qrPhoto = QrPhoto::where('booking_id',$booking->id)->get()->first();
        return view('admin-dashboard.usa-today-booking',compact('booking','qrPhoto','role'));
        }
        if($option=="yty"){
            $booking = AuthYTYBooking::where('booking_number','=', $request->input("booking-number")) -> first();
        $qrPhoto = QrPhoto::where('booking_id',$booking->id)->get()->first();
        return view('admin-dashboard.today-booking',compact('booking','qrPhoto'));
        }

    }
}
