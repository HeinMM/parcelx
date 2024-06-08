@extends('layouts.master')

@section('content')
    <div class="row  ">
        <div class="d-flex justify-content-around ">
            <div class="">
                <h1>Yangon Delivery man</h1>
            </div>
            <div class="">
                <a href="">ADD</a>
            </div>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            @if ( $booking_id >= 1)
                <th scope="col">Duty</th>
            @endif
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>

            @foreach ( $delivery_men as $delivery_man )
            <tr>
                <th scope="row">{{$delivery_man->id}}</th>
                <td>{{$delivery_man->name}}</td>
                <td>{{$delivery_man->phone}}</td>
                @if ( $booking_id >= 1)

                    <td><a href="{{ route('dashboard.put_duty', ['id'=>$booking_id,'deli_id'=>$delivery_man->id]) }}" class="remove-underline btn btn-outline-primary ">တာ၀န်ပေးမည်</a></td>
                @endif
                <td><a href="" class="btn btn-outline-warning  ">Edit</a> <a href="" class="btn btn-outline-danger ">Delete</a></td>
                <td></td>
            </tr>



            @endforeach



        </tbody>
      </table>

      <div class="d-flex">
        {!! $delivery_men->links() !!}
    </div>

@endsection
