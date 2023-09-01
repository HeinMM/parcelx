@extends('layouts.master')
@section('content')
    <div class="container px-1 px-md-4  mx-auto">
        <div class="d-flex justify-content-center mt-4">
            <h4 class="p-3 border border-primary rounded text-primary fw-bold">{{$booking->status->status_message}}
            </h4>
        </div>
        <div class="progress-card card">
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


                </div>
            </div>
        </div>

    </div>
@endsection
