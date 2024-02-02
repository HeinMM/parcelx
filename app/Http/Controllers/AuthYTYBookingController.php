<?php

namespace App\Http\Controllers;

use App\Models\AuthYTYBooking;
use App\Http\Requests\StoreAuthYTYBookingRequest;
use App\Http\Requests\UpdateAuthYTYBookingRequest;
use App\Models\QrPhoto;
use App\Models\Township;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AuthYTYBookingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $townships = Township::all();
        return view('auth-booking-pages.yty-booking.create', compact('user', 'townships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    private function generateQRCodeData($booking) {
        $url = route('booking-status.show',['bookingNumber' => $booking->booking_number]);
        return $url;
    }

    public function store(StoreAuthYTYBookingRequest $request)
    {
        // return $request;
        ///////generate booking number start////////
        $unique = false;
        $deliveryNumber = '';

        while (!$unique) {
            $potentialNumber = Str::random(8); // Generate an 8-character random string

            if (!AuthYTYBooking::where('booking_number', $potentialNumber)->exists()) {
                $unique = true;
                $deliveryNumber = $potentialNumber;
            }
        }
        ///////generate booking number end////////



        if (!$request->has("sender-name")) {
            $booking = new AuthYTYBooking();
            $booking->booking_number = $deliveryNumber;
            $booking->user_id = Auth::user()->id;
            $booking->parcel_name = $request->input("parcel-name");

            $booking->sender_name = Auth::user()->name;
            $booking->sender_phone =  Auth::user()->phone;
            $booking->sender_city = $request->input("sender-city");
            $booking->sender_township_id = $request->input("sender-township");
            $booking->sender_address_detail = $request->input("sender-address-detail");

            $booking->receiver_name = $request->input("receiver-name");
            $booking->receiver_phone = $request->input("receiver-phone");
            $booking->receiver_city = $request->input("receiver-city");
            $booking->receiver_township_id = $request->input("receiver-township");
            $booking->receiver_address_detail = $request->input("receiver-address-detail");

            $booking->weight = $request->input("weight");
            $booking->count = $request->input("count");

            $booking->delivery_man_id = 0;
            $booking->status_id = 1;

            $booking->save();

            $qrCodeData = $this->generateQRCodeData($booking);
            $filename = '/public/qrcodes' .'/'. $booking->booking_number . '.svg';
            $qrCode = QrCode::format('svg')->size(200)->generate($qrCodeData);

            // Save the QR code image to the storage disk
            Storage::put($filename, $qrCode);

            $qrPhoto = new QrPhoto();
            $qrPhoto->booking_id = $booking->id;
            $qrPhoto->name = $booking->booking_number . '.svg';
            $qrPhoto->save();

                        $response = Gate::inspect('create', $booking);

                    if ($response->allowed()) {
                        $booking->save();

                        return redirect()->route("a-yty-booking.result",['booking_number'=>$booking->booking_number])->withInput();
                    } else {
                        return abort(403, $response->message());
                    }
        }

        if ($request->has("sender-name")) {
            $booking = new AuthYTYBooking();
            $booking->booking_number = $deliveryNumber;
            $booking->user_id = 0;
            $booking->parcel_name = $request->input("parcel-name");

            $booking->sender_name = $request->input("sender-name");
            $booking->sender_phone =  $request->input("sender-phone");
            $booking->sender_city = $request->input("sender-city");
            $booking->sender_township_id = $request->input("sender-township");
            $booking->sender_address_detail = $request->input("sender-address-detail");

            $booking->receiver_name = $request->input("receiver-name");
            $booking->receiver_phone = $request->input("receiver-phone");
            $booking->receiver_city = $request->input("receiver-city");
            $booking->receiver_township_id = $request->input("receiver-township");
            $booking->receiver_address_detail = $request->input("receiver-address-detail");

            $booking->weight = $request->input("weight");
            $booking->count = $request->input("count");

            $booking->delivery_man_id = 1;
            $booking->status_id = 1;

            $booking->save();

            $qrCodeData = $this->generateQRCodeData($booking);
            $filename = '/public/qrcodes' .'/'. $booking->booking_number . '.svg';
            $qrCode = QrCode::format('svg')->size(200)->generate($qrCodeData);

            // Save the QR code image to the storage disk
            Storage::put($filename, $qrCode);

            $qrPhoto = new QrPhoto();
            $qrPhoto->booking_id = $booking->id;
            $qrPhoto->name = $booking->booking_number . '.svg';
            $qrPhoto->save();




                        $booking->save();

                        return redirect()->route("welcome")->withInput();

        }
    }





    /**
     * Display the specified resource.
     */
    public function show(AuthYTYBooking $authYTYBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AuthYTYBooking $authYTYBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthYTYBookingRequest $request, AuthYTYBooking $authYTYBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuthYTYBooking $authYTYBooking)
    {
        //
    }


}
