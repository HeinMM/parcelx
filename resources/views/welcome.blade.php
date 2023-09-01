@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @auth
                            <p>{{ Auth::user() }}</p>

                        @endauth
                    </div>

                </div>

                @auth
                    <div class="card">
                        <div class="card-header">Auth User Booking form</div>
                        <div class="card-body col d-flex justify-content-around">

                            <a href="{{ route('a-yty-booking.create') }}" class="btn btn-primary">Yangon To Yangon</a>
                            <a href="" class="btn btn-primary">Yangon To Nal</a>
                            <a href="" class="btn btn-primary">Nal To Yangon</a>

                        </div>
                    </div>
                @endauth

                @guest
                    <div class="card">
                        <div class="card-header">Guest Booking form</div>
                        <div class="card-body col d-flex justify-content-around">

                            <a href="" class="btn btn-primary">Yangon To Yangon</a>
                            <a href="" class="btn btn-primary">Yangon To Nal</a>
                            <a href="" class="btn btn-primary">Nal To Yangon</a>

                        </div>
                    </div>
                @endguest

                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate(Request::url("https://test.121remits.com/login")); !!}
                    <p>Scan me to return to the original page.</p>
                </div>
                

            </div>
        </div>
    </div>
@endsection


