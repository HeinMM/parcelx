@extends('layouts.master')

@section('content')
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
                    <div>
                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                        images, lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
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
                    <a href="" class="admin-tag">
                        <div
                            class="card border-start border-primary border-top-0 border-end-0 border-bottom-0 shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            YTY Today Booking</div>
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
                <!-- YTY Branch Card  -->

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
                <!-- YTY Completed Card -->

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

        </div>
        {{-- YANGON TO YANGON END --}}

        {{-- YANGON TO NAL START --}}
        <div class="row">

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

        </div>
        {{-- YANGON TO NAL END --}}

        {{-- NAL TO YANGON START --}}
        <div class="row">

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

        </div>
        {{-- NAL TO YANGON END --}}

    </div>
@endsection
