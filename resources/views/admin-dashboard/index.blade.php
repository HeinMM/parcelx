@extends('layouts.master')

@section('content')

@if(auth()->user()->role == "usa-admin")
    <h1>usa admin</h1>
    <div class="container mt-3 ">

        {{-- YANGON TO YANGON START --}}
        <div class="row">

            <div class="">
                <p class="">USA To Myanmar</p>
            </div>

            <!-- YTY Today Booking Card -->

                <div class="col-xl-12 col-md-12 mb-4">
                    <a href="{{ route('dashboard.todayBookings') }}" class="admin-tag remove-underline">
                        <div
                            class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Usa to Myanmar Booking</div>
                                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">20</div> --}}
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-calendar2-heart text-primary" style="font-size: 40px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-12 col-md-12 mb-4">
                    {{-- <a href="{{ route('dashboard.todayBookings') }}" class="admin-tag remove-underline"> --}}
                        <div
                            class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                            <div class="card-body">
                                <form action="{{ route('dashboard.todayBookingByBookingNumber',['option'=>'usa']) }}" method="POST" enctype="multipart/form-data"
                                autocomplete="off">
                                @csrf
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="input-group mb-3">

                                                        <input required type="text" name="booking-number" class="form-control" placeholder="Booking Number" aria-label="Booking Number" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"><button class="admin-tag remove-underline btn btn-outline-primary ">search</button></span>
                                                        </div>

                                              </div>
                                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">20</div> --}}
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    {{-- </a> --}}
                </div>

    </div>
@endif

@if(auth()->user()->role == "admin")
    <div class="container">
        <div class="row">
            {{-- admin dash board menu start --}}
            <a class="btn btn-outline-primary  float-end" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                Admin Dashboard Menu
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">



                            <div class="">
                                <a class="remove-underline" href="{{route("promo.index")}}">Promotion code</a>
                            </div>
                                    <hr>
                            <div class="">
                                <a class="remove-underline" href="{{route("deli.index")}}">Delivery Man</a>
                            </div>
                            <hr>
                            <div class="">
                                <a class="remove-underline" href="#">Something else here</a>
                            </div>


                </div>
            </div>
            {{-- admin dash board menu end --}}
        </div>
    </div>


    <div class="container mt-3 ">

        {{-- YANGON TO YANGON START --}}
        <div class="row">

            <div class="">
                <p class="">Yangon To Yangon</p>
            </div>

            <!-- YTY Today Booking Card -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ route('dashboard.todayBookings') }}" class="admin-tag remove-underline">
                        <div
                            class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Myanmar Bookings</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-calendar2-heart text-primary" style="font-size: 40px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- YTY On The Way Card -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="" class="admin-tag remove-underline">
                        <div
                            class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            On The Way</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-sign-stop-lights text-primary" style="font-size: 40px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- YTY Branch Card  -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="" class="admin-tag remove-underline">
                        <div
                            class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Branch</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-building-gear text-primary" style="font-size: 40px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- YTY Completed Card -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="" class="admin-tag remove-underline">
                        <div
                            class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Completed</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">250</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="bi bi-check2-circle text-primary" style="font-size: 40px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

        </div>
        {{-- YANGON TO YANGON END --}}

        {{-- YANGON TO NAL START --}}
        {{-- <div class="row">

            <div class="">
                <p class="">Yangon To Nal</p>
            </div>

            <!-- YTN Today Booking Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                <div class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    YTN Today Booking</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-calendar2-heart text-primary" style="font-size: 40px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- YTN On The Way Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                    <div
                        class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        On The Way</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-sign-stop-lights text-primary" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- YTN Branch Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                    <div
                        class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Branch</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-building-gear text-primary" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- YTN Completed Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                    <div
                        class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Completed</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">250</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-check2-circle text-primary" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div> --}}
        {{-- YANGON TO NAL END --}}

        {{-- NAL TO YANGON START --}}
        {{-- <div class="row">

            <div class="">
                <p class="">Nal To Yangon</p>
            </div>

            <!-- NTY Today Booking Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                    <div
                        class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        NTY Today Booking</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-calendar2-heart text-primary" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- NTY On The Way Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                    <div
                        class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        On The Way</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-sign-stop-lights text-primary" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- NTY Branch Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                    <div
                        class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Branch</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-building-gear text-primary" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- NTY Completed Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="" class="admin-tag">
                    <div
                        class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Completed</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">250</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-check2-circle text-primary" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div> --}}
        {{-- NAL TO YANGON END --}}

    </div>
    @endif

    @if(auth()->user()->role == "usa-admin")

    @endif
@endsection
