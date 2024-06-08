<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Models\DeliveryMan;
use App\Models\User;
use Illuminate\Http\Request;

class DutyController extends Controller
{
    public function index($id=0){
        $booking_id = $id;

        $delivery_men =  DeliveryMan::paginate(5)->withQueryString();;
        return view('admin-dashboard.duty',compact('delivery_men','booking_id'));
        }

        public function duty($id,$deli_id) {
        $booking = AuthYTYBooking::where('id', $id)->get();
        $delivery_man = DeliveryMan::where('id', $deli_id)->first();
        
        $delivery_man_id = User::where('email', $delivery_man->email)->first();
        $booking->toQuery()->update([
            'delivery_man_id' => $delivery_man_id->id,
            'assign_at' => now()
        ]);
        return redirect()->back();
        }


}
