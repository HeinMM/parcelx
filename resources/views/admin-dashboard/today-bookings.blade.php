@extends('layouts.master')

@section('content')

@if (auth()->user()->role=='admin')
<h3>yangon to yangon</h3>
<table class="table table-striped ">


    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">To</th>
            <th scope="col">From</th>
            <th scope="col">Product</th>
            <th scope="col">State</th>
            <th scope="col">Delivery</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $bookings as $booking )
            <tr>
                <th scope="row">{{$booking->id}}</th>
                <td>{{$booking->rtownship->township_name}}</td>
                <td>{{$booking->stownship->township_name}}</td>
                <td>{{$booking->parcel_name}}</td>
                <td>{{$booking->status->status_message}}</td>
                @if ($booking->delivery_man_id == 0)
                    <td><a href="{{ route('dashboard.duty', ['id'=>$booking->id]) }}" class="remove-underline text-bg-danger ">တာ၀န်မပေးရသေးပါ</a></td>
                @endif
                @if ($booking->delivery_man_id != 0)
                    <td><a href="" class="remove-underline text-bg-primary ">တာ၀န်ပေးအပ်ထားသည်</a></td>
                @endif

                <td><a href="{{ route('dashboard.todayBooking', ['id'=>$booking->id,'option'=>'yty']) }}" class="btn btn-warning ">Detail</a></td>
            </tr>
            @endforeach



        </tbody>
      </table>

      <div class="d-flex">
        {!! $bookings->links() !!}
    </div>
@endif

@if (auth()->user()->role=='usa-admin'||auth()->user()->role=='admin')

<h3>USA to Myanmar</h3>

<table class="table table-striped ">


    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Sender</th>
            <th scope="col">Receiver</th>
            <th scope="col">Booking Number</th>
            @if (auth()->user()->role=='admin')
            <th scope="col">Delivery</th>
            @endif
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>



            @foreach ( $usaBookings as $booking )
            <tr>
                <th scope="row">{{$booking->id}}</th>
                <td>{{$booking->sender_name}}</td>
                <td>{{$booking->receiver_name}}</td>
                <td>{{$booking->booking_number}}</td>
                @if (auth()->user()->role=='admin')
                @if ($booking->delivery_man_id == 0)
                    <td><a href="{{ route('dashboard.duty', ['id'=>$booking->id]) }}" class="remove-underline text-bg-danger ">တာ၀န်မပေးရသေးပါ</a></td>
                @endif

                @if ($booking->delivery_man_id != 0)
                    <td><a href="" class="remove-underline text-bg-primary ">တာ၀န်ပေးအပ်ထားသည်</a></td>
                @endif
                @endif

                <td><a href="{{ route('dashboard.todayBooking', ['id'=>$booking->id,'option'=>'usa']) }}" class="btn btn-warning ">Detail</a></td>
            </tr>
            @endforeach
            @if (count($usaBookings)<1)
                <h3>There is no booking yet!</h3>
            @endif





        </tbody>
      </table>

      <div class="d-flex">
        {!! $usaBookings->links() !!}
    </div>

@endif



@endsection
