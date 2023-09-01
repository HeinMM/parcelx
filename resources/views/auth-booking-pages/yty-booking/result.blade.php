@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="card text-center">
            <div class="d-flex justify-content-center align-items-center">
                <div class="">
                    <h4>Booking Number :</h4>
                </div>
                <div class="mx-3 text-primary">
                    <h5 id="copy-text">{{$booking->booking_number}}</h5>
                </div>
                <div class="">
                    <a href="#">
                        <i class="bi bi-clipboard-data" style="font-size: 2rem;" id="copy-click"></i>
                    </a>
                </div>
            </div>

            <div class=" d-flex justify-content-center align-items-center">
                <div class="">
                    <h4>QR Code</h4>
                    <div class="m-3">
                        <img src="{{ asset('storage/qrcodes/'.$qrPhoto->name) }}" alt="QR Code">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <div class="mx-3"><a href="{{ route('welcome') }}" class="btn btn-outline-primary">Home</a></div>
            <div class=""><a href="{{ route('myhistory.index') }}" class="btn btn-outline-primary">History</a></div>
            <div class="mx-3"><a href="{{ route('a-yty-booking.create') }}" class="btn btn-outline-primary">Booking Again</a></div>
        </div>

    </div>
@endsection
@push('script')
    @vite("resources/js/copyText.js")
@endpush
