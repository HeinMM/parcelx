<?php

namespace App\Http\Controllers;

use App\Models\UsaToMyanmar;
use App\Http\Requests\StoreUsaToMyanmarRequest;
use App\Http\Requests\UpdateUsaToMyanmarRequest;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use App\Models\QrPhoto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UsaToMyanmarController extends Controller
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
        if(Auth::user()){
            $userId = Auth::user()->id;

            return view('usa-to-myanmar.create',compact("userId"));
        }

        return view('usa-to-myanmar.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    private function generateQRCodeData($booking) {
        $url = route('booking-status.show',['bookingNumber' => $booking->booking_number]);
        return $url;
    }

    public function store(StoreUsaToMyanmarRequest $request)
    {
        // return $request;
        ///////generate booking number start////////
        $unique = false;
        $deliveryNumber = '';

        while (!$unique) {
            $potentialNumber = Str::random(8); // Generate an 8-character random string

            if (!UsaToMyanmar::where('booking_number', $potentialNumber)->exists()) {
                $unique = true;
                $deliveryNumber = $potentialNumber;
            }
        }

        $booking = new UsaToMyanmar();

        if($request->has('user-id')){

            $booking->user_id = $request->input('user-id');
        }
            $booking->booking_number = $deliveryNumber;
            $booking->sender_name = $request->input("sender-name");
            $booking->sender_phone = $request->input("sender-phone");

            $booking->receiver_name = $request->input("receiver-name");
            $booking->receiver_phone = $request->input("receiver-phone");
            $booking->receiver_address = $request->input("receiver-address");

            $booking->delivery_man_id = 3;

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

                        return redirect()->route("a-yty-booking.result",['booking_number'=>$booking->booking_number,'option'=>"usa"])->withInput();


    }

    /**
     * Display the specified resource.
     */
    public function show(UsaToMyanmar $usaToMyanmar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsaToMyanmar $usaToMyanmar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsaToMyanmarRequest $request, UsaToMyanmar $usaToMyanmar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsaToMyanmar $usaToMyanmar)
    {
        //
    }
}
