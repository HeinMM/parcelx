@extends('layouts.master')
@section('content')
   @if($booking!=null)
    <div class="container px-1 px-md-4  mx-auto">
        <div class="d-flex justify-content-center mt-4">
            <h4 class="p-3 border border-primary rounded text-primary fw-bold">{{$booking->status->status_message}}
            </h4>
        </div>
        <div class="progress-card ">
            <!-- Add class 'active' to progress -->
            <div class=" d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="{{ $booking->status_id >= 1 ? 'active' : '' }} step0"></li>
                        <li class="{{ $booking->status_id >= 2 ? 'active' : '' }} step0"></li>
                        <li class="{{ $booking->status_id >= 3 ? 'active' : '' }} step0"></li>
                        <li class="{{ $booking->status_id === 4 ? 'active' : '' }} step0"></li>
                    </ul>
                </div>
            </div>

            {{-- /////////images/////// --}}
            <div class="d-flex justify-content-around col-13 ms-2">
                <div class="row d-flex  ">
                    <img style="width: 80px" class="icon" src="{{ asset('progress-images/gbooking.png') }}">
                </div>
                <div class="row d-flex  ">
                    <img style="width: 90px" class="icon" src="{{ asset('progress-images/grassign.png') }}">
                </div>
                <div class="row d-flex  ">
                    <img style="width: 80px" class="icon" src="{{ asset('progress-images/groad.png') }}">
                </div>
                <div class="row d-flex  ">
                    <img style="width: 80px" class="icon" src="{{ asset('progress-images/complete.png') }}">
                </div>
            </div>

        </div>

        <div class="container px-1 px-md-4  mx-auto">
            <div class="progress-card card">
                <div class="mt-3 p-1  mx-2">

                    <div class="   d-flex justify-content-between ">
                        <div class="row ">
                            <div class="">
                                <p class="card-text fw-bold "> {{ $booking->created_at->format('d m Y') }}</p>
                            </div>
                            <div class="">
                                <p class="card-text text-primary mx-3 "> {{ $booking->created_at->format('h:i A') }}</p>
                            </div>
                        </div>
                        <div class="">
                            <p>ဘိုကင် တင်ထားဆဲပါ</p>
                        </div>
                    </div>
                    @if ($booking->assign_at && $booking->status_id >= 2)
                        <div class=" d-flex justify-content-between ">
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <p class="card-text fw-bold"> {{ $booking->assign_at->format('d m Y') }}</p>
                                    </div>
                                    <div class="">
                                        <p class="card-text text-primary mx-3 "> {{ $booking->assign_at->format('h:i A') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-3">
                                <p>တာ၀န်ပေးအပ်ထားခြင်း</p>
                            </div>
                        </div>
                    @endif

                    @if ($booking->road_at && $booking->status_id >= 3)
                        <div class=" d-flex justify-content-between ">
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <p class="card-text fw-bold"> {{ $booking->road_at->format('d m Y') }}</p>
                                    </div>
                                    <div class="">
                                        <p class="card-text text-primary mx-3 "> {{ $booking->road_at->format('h:i A') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p>သယ်ဆောင်လာခြင်း</p>
                            </div>
                        </div>
                    @endif

                    @if ($booking->qrcode_at && $booking->status_id >= 3)
                        <div class=" d-flex justify-content-between ">
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <p class="card-text fw-bold"> {{ $booking->qrcode_at->format('d m Y') }}</p>
                                    </div>
                                    <div class="">
                                        <p class="card-text text-primary mx-3 "> {{ $booking->qrcode_at->format('h:i A') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p>လမ်းကြောင်းအစီစဥ်ချခြင်း</p>
                            </div>
                        </div>
                    @endif

                    @if ($booking->complete_at && $booking->status_id === 4)
                        <div class=" d-flex justify-content-between ">
                            <div class="">
                                <div class="row">
                                    <div>
                                        <p class="card-text fw-bold"> {{ $booking->complete_at->format('d m Y') }}</p>
                                    </div>
                                    <div>
                                        <p class="card-text text-primary mx-3 ">
                                            {{ $booking->complete_at->format('h:i A') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p>အိမ်သို့ပို့ဆောင်ပီး</p>
                            </div>
                        </div>
                    @endif

                    @if ($booking->assign_at && $booking->status_id === 5)
                        <div class=" d-flex justify-content-between">
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <p class="card-text fw-bold"> {{ $booking->assign_at->format('d m Y') }}</p>
                                    </div>
                                    <div class="">
                                        <p class="card-text text-primary mx-3 "> {{ $booking->assign_at->format('h:i A') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p>ပစ္စည်းလက်မခံပါ</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <div class="container px-1 px-md-4  mx-auto">
            <div class="progress-card card">
                <div class="">
                    <h4 class="fw-bold m-3">Basic Information</h4>
                </div>

                <div class="px-1 mx-2">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p class="fw-bold">ပါဆယ်နာမည်</p class="fw-bold">
                        </div>
                        <div class="">
                            <p>{{ Str::limit($booking->parcel_name, 20, '...') }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p class="fw-bold">ဘိုကင်နံပတ်</p class="fw-bold">
                        </div>
                        <div class="">
                            <p>{{ $booking->booking_number }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p class="fw-bold">ပို့သူ</p class="fw-bold">
                        </div>
                        <div class="">
                            <p>{{ Str::limit($booking->sender_name, 8, '...') }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p class="fw-bold">လက်ခံသူ</p class="fw-bold">
                        </div>
                        <div class="">
                            <p>{{ Str::limit($booking->receiver_name, 8, '...') }}</p>
                        </div>
                    </div>


                    @if ($booking->delivery_man_id != 0)
                            <div class="d-flex justify-content-center">
                                <div class="card mb-3 border-primary" style="max-width: 540px;">
                                    <div class="row g-0 col-md-8">

                                        <div class=" row d-flex justify-content-center">

                                            <div class="card-body text-center">
                                                <h4 class=" ">Delivery Man</h4>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="pr-3">
                                                        <img src="{{ asset('progress-images/deliman.png') }}"
                                                            class="img-thumbnail rounded deliman " alt="deliverman">
                                                    </div>
                                                    <div class="flex-shrink-0 flex-basis-auto">


                                                            <div class="mb-1">
                                                                <p class="">{{$booking->deliveryman->name}}</p>
                                                            </div>


                                                            <div class="">
                                                                <p class="card-text">{{$booking->deliveryman->phone}}</p>
                                                            </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif

                    @if ($booking->delivery_man_id == 0)
                            <div class="d-flex justify-content-center">
                                <div class="card mb-3 border-primary justify-content-center align-items-center" >
                                    <div class="row g-0 col-md-8">

                                        <div class=" row d-flex justify-content-center">

                                            <div class="card-body text-center">
                                                <h4 class=" ">Delivery Man</h4>
                                                <div class="d-flex justify-content-center align-items-center">

                                                    <div class="">


                                                            <div class="mb-1">
                                                                သယ်ဆောင်လာမည့်သူအား စီစစ်နေသည်
                                                            </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif


                </div>
            </div>
        </div>

    </div>
    @endif

   @if($usaBooking!=null)

   <div class="container px-1 px-md-4  mx-auto">
    <div class="d-flex justify-content-center mt-4">
        @if ($usaBooking->assign_at!=null&&$usaBooking->road_at==null&&$usaBooking->complete_at==null)
            <h4 class="p-3 border border-primary rounded text-primary fw-bold">We Received Your Box
        @endif
        @if ($usaBooking->assign_at!=null&&$usaBooking->road_at!=null&&$usaBooking->complete_at==null)
            <h4 class="p-3 border border-primary rounded text-primary fw-bold">Delivering State
        @endif
        @if ($usaBooking->assign_at!=null&&$usaBooking->road_at!=null&&$usaBooking->complete_at!=null)
            <h4 class="p-3 border border-primary rounded text-primary fw-bold">Complete State
        @endif

        </h4>
    </div>
    <div class="progress-card ">
        <!-- Add class 'active' to progress -->
        <div class=" d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="{{ $usaBooking->assign_at==null||$usaBooking->assign_at!=null ? 'active' : '' }} step0"></li>
                    <li class="{{ $usaBooking->assign_at!=null ? 'active' : '' }} step0"></li>
                    <li class="{{ $usaBooking->assign_at!=null&&$usaBooking->road_at!=null ? 'active' : '' }} step0"></li>
                    <li class="{{ $usaBooking->assign_at!=null&&$usaBooking->road_at!=null&&$usaBooking->complete_at!=null ? 'active' : '' }} step0"></li>
                </ul>
            </div>
        </div>

        {{-- /////////images/////// --}}
        <div class="d-flex justify-content-around col-13 ms-2">
            <div class="row d-flex  ">
                <img style="width: 80px" class="icon" src="{{ asset('progress-images/gbooking.png') }}">
            </div>
            <div class="row d-flex  ">
                <img style="width: 90px" class="icon" src="{{ asset('progress-images/grassign.png') }}">
            </div>
            <div class="row d-flex  ">
                <img style="width: 80px" class="icon" src="{{ asset('progress-images/groad.png') }}">
            </div>
            <div class="row d-flex  ">
                <img style="width: 80px" class="icon" src="{{ asset('progress-images/complete.png') }}">
            </div>
        </div>

    </div>

    <div class="container px-1 px-md-4  mx-auto">
        <div class="progress-card card">
            <div class="mt-3 p-1  mx-2">

                <div class="   d-flex justify-content-between ">
                    <div class="row ">
                        <div class="">
                            <p class="card-text fw-bold "> {{ $usaBooking->created_at->format('d m Y') }}</p>
                        </div>
                        <div class="">
                            <p class="card-text text-primary mx-3 "> {{ $usaBooking->created_at->format('h:i A') }}</p>
                        </div>
                    </div>
                    <div class="">
                        <p>Your Box is Booking State</p>
                    </div>
                </div>
                @if ($usaBooking->assign_at!=null)
                    <div class=" d-flex justify-content-between ">
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <p class="card-text fw-bold"> {{ $usaBooking->assign_at->format('d m Y') }}</p>
                                </div>
                                <div class="">
                                    <p class="card-text text-primary mx-3 "> {{ $usaBooking->assign_at->format('h:i A') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p>We Received Your Box</p>
                        </div>
                    </div>
                @endif

                @if ($usaBooking->assign_at!=null&&$usaBooking->road_at!=null)
                    <div class=" d-flex justify-content-between ">
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <p class="card-text fw-bold"> {{ $usaBooking->road_at->format('d m Y') }}</p>
                                </div>
                                <div class="">
                                    <p class="card-text text-primary mx-3 "> {{ $usaBooking->road_at->format('h:i A') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p>Delivering State (on way)</p>
                        </div>
                    </div>
                @endif



                @if ($usaBooking->assign_at!=null&&$usaBooking->road_at!=null&&$usaBooking->complete_at!=null)
                    <div class=" d-flex justify-content-between ">
                        <div class="">
                            <div class="row">
                                <div>
                                    <p class="card-text fw-bold"> {{ $usaBooking->complete_at->format('d m Y') }}</p>
                                </div>
                                <div>
                                    <p class="card-text text-primary mx-3 ">
                                        {{ $usaBooking->complete_at->format('h:i A') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p>Complete State</p>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <div class="container px-1 px-md-4  mx-auto">
        <div class="progress-card card">
            <div class="">
                <h4 class="fw-bold m-3">Basic Information</h4>
            </div>

            <div class="px-1 mx-2">

                <div class="d-flex justify-content-between">
                    <div class="">
                        <p class="fw-bold">ဘိုကင်နံပတ်</p class="fw-bold">
                    </div>
                    <div class="">
                        <p>{{ $usaBooking->booking_number }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="">
                        <p class="fw-bold">ပို့သူ</p class="fw-bold">
                    </div>
                    <div class="">
                        <p>{{ Str::limit($usaBooking->sender_name, 8, '...') }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="">
                        <p class="fw-bold">လက်ခံသူ</p class="fw-bold">
                    </div>
                    <div class="">
                        <p>{{ Str::limit($usaBooking->receiver_name, 8, '...') }}</p>
                    </div>
                </div>


                @if ($usaBooking->delivery_man_id != 0)
                        <div class="d-flex justify-content-center">
                            <div class="card mb-3 border-primary" style="max-width: 540px;">
                                <div class="row g-0 col-md-8">

                                    <div class=" row d-flex justify-content-center">

                                        <div class="card-body text-center">
                                            <h4 class=" ">Delivery Man</h4>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="pr-3">
                                                    <img src="{{ asset('progress-images/deliman.png') }}"
                                                        class="img-thumbnail rounded deliman " alt="deliverman">
                                                </div>
                                                <div class="flex-shrink-0 flex-basis-auto">


                                                        <div class="mb-1">
                                                            <p class="">{{$usaBooking->deliveryman->name}}</p>
                                                        </div>


                                                        <div class="">
                                                            <p class="card-text">{{$usaBooking->deliveryman->phone}}</p>
                                                        </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif

                @if ($usaBooking->delivery_man_id == 0)
                        <div class="d-flex justify-content-center">
                            <div class="card mb-3 border-primary justify-content-center align-items-center" >
                                <div class="row g-0 col-md-8">

                                    <div class=" row d-flex justify-content-center">

                                        <div class="card-body text-center">
                                            <h4 class=" ">Delivery Man</h4>
                                            <div class="d-flex justify-content-center align-items-center">

                                                <div class="">


                                                        <div class="mb-1">
                                                            သယ်ဆောင်လာမည့်သူအား စီစစ်နေသည်
                                                        </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif


            </div>
        </div>
    </div>

</div>

    @endif
@endsection
