<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Models\UsaToMyanmar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DeliveryManBookingStateApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $bookings = AuthYTYBooking::where('delivery_man_id','=',$id)->where('complete_at','=',null)->latest("id")
        ->get();
        return response()->json($bookings);
    }


    public function usaIndex()
    {

        $bookings = UsaToMyanmar::where('complete_at','=',null)->latest("id")
        ->get();
        return response()->json($bookings);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    //     return response()->json(
    //         [
    //             "message" => "success testing"
    //         ]
    //    );
        $getBooking = AuthYTYBooking::where('booking_number', $id)->get()->first();
        if ($getBooking) {
            return response()->json(
                 $getBooking
            );
        }
    }

    public function usaShow(string $id)
    {
    //     return response()->json(
    //         [
    //             "message" => "success testing"
    //         ]
    //    );
        $getBooking = UsaToMyanmar::where('booking_number', $id)->get()->first();
        if ($getBooking) {
            return response()->json(
                 $getBooking
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getBooking = AuthYTYBooking::where('id', $id)->get()->first();

        if ($request->status_id == 2) {
            $getBooking->assign_at = Carbon::now();
            $getBooking->status_id = 2;
            $getBooking->update();
            return response()->json([
                "message" => "assign_at updated",
                "status" => 200
            ]);
        }

        if ($request->status_id == 3) {
            $getBooking->road_at = Carbon::now();
            $getBooking->status_id = 3;
            $getBooking->update();
            return response()->json([
                "message" => "road_at updated",
                "status" => 200
            ]);
        }

        if ($request->status_id == 4) {
            $getBooking->complete_at = Carbon::now();
            $getBooking->status_id = 4;
            $getBooking->update();
            return response()->json([
                "message" => "complete updated",
                "status" => 200
            ]);
        }

        if ($request->status == 5) {
            $getBooking->status_id = $request->status;
            $getBooking->update();
            return response()->json([
                "message" => "customer is not accept",
                "status" => 200
            ]);
        }


        return response()->json([
            "message" => "something wrong ",
            "status" => 400
        ]);


    }


    public function usaUpdate(Request $request, string $id)
    {
        $getBooking = UsaToMyanmar::where('id', $id)->get()->first();

        if ($getBooking->assign_at==null) {
            $getBooking->assign_at = Carbon::now();

            $getBooking->update();
            return response()->json([
                "message" => "assign_at updated",
                "status" => 200
            ]);
        }

        if ($getBooking->assign_at!=null&&$getBooking->road_at==null) {
            $getBooking->road_at = Carbon::now();

            $getBooking->update();
            return response()->json([
                "message" => "road_at updated",
                "status" => 200
            ]);
        }

        if ($getBooking->assign_at!=null && $getBooking->road_at!=null && $getBooking->complete_at==null) {
            $getBooking->complete_at = Carbon::now();

            $getBooking->update();
            return response()->json([
                "message" => "complete updated",
                "status" => 200
            ]);
        }


        return response()->json([
            "message" => "something wrong ",
            "status" => 400
        ]);


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
