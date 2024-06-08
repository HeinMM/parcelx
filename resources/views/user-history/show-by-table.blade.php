@extends('layouts.master')

@section('table')
        <div class=" ">
            <h1 class="text-primary ">History</h1>

        <table class="table table-hover float-start  ">
            <thead>
              <tr >
                <th class="text-primary " scope="col">ID</th>
                <th class="text-primary " scope="col">Booking No</th>
                <th class="text-primary " scope="col">Sender Name</th>
                <th class="text-primary " scope="col">Sender Town</th>
                <th class="text-primary " scope="col">Sender Add Detail</th>


                <th class="text-primary " scope="col">Receiver Name</th>
                <th class="text-primary " scope="col">Receiver Phone</th>
                <th class="text-primary " scope="col">Receiver Town</th>
                <th class="text-primary " scope="col">Receiver Add Detail</th>


                <th class="text-primary " scope="col">Weight</th>
                <th class="text-primary " scope="col">Count</th>

                <th class="text-primary " scope="col">Fees</th>

                    <th class="text-primary " scope="col">COD</th>


                <th class="text-primary " scope="col">Status</th>

              </tr>
            </thead>
            <tbody class="tbody">

                @foreach ( $bookings as $booking )

                <tr>
                    <th scope="row">{{$booking->id}}</th>
                    <th scope="row">{{$booking->booking_number}}</th>
                    <td>{{$booking->sender_name}}</td>
                    <td>{{$booking->stownship->township_name}}</td>
                    <td><input type="text" value="{{$booking->sender_address_detail}}" readonly></td>

                    <td>{{$booking->receiver_name}}</td>
                    <td>{{$booking->receiver_phone}}</td>
                    <td>{{$booking->rtownship->township_name}}</td>
                    <td><input type="text" value="{{$booking->receiver_address_detail}}" readonly></td>
                    <td>{{$booking->weight}} KG</td>
                    <td>{{$booking->count}}</td>
                    <td>{{$booking->fees}} MMK</td>
                    @if ($booking->cod)
                    <td>{{$booking->cod}} MMK</td>
                    @endif
                    @if (!$booking->cod)
                    <td>NO COD</td>
                    @endif

                    <td>{{$booking->status->status_message}}</td>
                </tr>



                @endforeach



            </tbody>
          </table>

          <div class="row">
            <div class="d-flex">
                {!! $bookings->links() !!}
            </div>
            <div class="">

            </div>
          </div>
        </div>
@endsection
