@extends('layouts.master')

@section('content')
        <h1 class="text-primary">My History</h1>
        <div>
            <h4>Yangon to Yangon</h4>
        <a href="{{ route('myhistory.show-my-historys') }}" class=" btn btn-outline-danger mb-2">See All By Table</a>
        <div class="row">

            @if (!$bookings)
                <h1>There is No History</h1>
                <a href="">Please Booking Here</a>
            @endif


            @foreach ($bookings as $booking )
            <div class="col-sm-12 col-md-4 mb-3">

                <div class="card">
                  <div class="card-body">
                      <img class="img-fluid" style="" src="{{ asset('business-images/smalllog.png') }}" alt="">
                      <hr>
                    <div class="">


                      <h5 class="card-text"><span class="badge bg-primary p-3 custom-badge" >ဘိုကင်နံပတ်</span>   {{ $booking->booking_number}}</h5>
                      <h5 class="card-text"><span class="badge bg-primary p-3 custom-badge text-center">လက်ခံနာမည်</span>   {{ Str::limit($booking->receiver_name, 10,"...")  }}</h5>
                      <h5 class="card-text"><span class="badge bg-primary p-3 custom-badge" >ပို့ရန်မြို့နယ်</span> {{ $booking->stownship->township_name}}</h5>

                      <div class="text-center">
                          <a href="{{ route('myhistory.show', ['booking_number'=>$booking->booking_number]) }}" class="btn btn-outline-primary">ကြည့်မည်</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

            <div class="">
                {{$bookings->links()}}
            </div>
        </div>
    </div>

    @if (count($usaBooking) >= 1)
    <div>
        <h4>USA to Myanmar</h4>
    {{-- <a href="{{ route('myhistory.show-my-historys') }}" class=" btn btn-outline-danger mb-2">See All By Table</a> --}}
    <div class="row">




        @foreach ($usaBooking as $booking )
        <div class="col-sm-12 col-md-4 mb-3">

            <div class="card">
              <div class="card-body">
                  <img class="img-fluid" style="" src="{{ asset('business-images/smalllog.png') }}" alt="">
                  <hr>
                <div class="">


                  <h5 class="card-text"><span class="badge bg-primary p-3 custom-badge" >ဘိုကင်နံပတ်</span>   {{ $booking->booking_number}}</h5>
                  <h5 class="card-text"><span class="badge bg-primary p-3 custom-badge text-center">လက်ခံနာမည်</span>   {{ Str::limit($booking->receiver_name, 10,"...")  }}</h5>


                  <div class="text-center">
                      <a href="{{ route('myhistory.show', ['booking_number'=>$booking->booking_number]) }}" class="btn btn-outline-primary">ကြည့်မည်</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        <div class="">
            {{$bookings->links()}}
        </div>
    </div>
</div>
    @endif



@endsection
