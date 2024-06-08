@extends('layouts.master')

@section('content')

@section('table')
<div class=" ">

    <h1 class="text-primary ">Delivery List</h1>

    <div class="mb-2 ">
        <a href="{{ route('deli.create') }}" class="btn btn-outline-danger ">Create New Delivery Man</a>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success mb-2">
        {{ session()->get('success') }}
    </div>
@endif

<table class="table table-hover float-start  ">
    <thead>
      <tr >

        <th class="text-primary " scope="col">ID</th>
        <th class="text-primary " scope="col">Name</th>
        <th class="text-primary " scope="col">Phone</th>
        <th class="text-primary " scope="col">Action</th>

      </tr>
    </thead>
    <tbody class="tbody">


        @if ( !$delivery_men->isEmpty())
        @foreach ( $delivery_men as $delivery_man )

        <form method="POST" action="{{ route('deli.destroy', ['id'=>$delivery_man->id]) }}"  >
            {{ method_field('DELETE') }}
            {{ csrf_field() }}

        <tr>
            <th scope="row">{{$delivery_man->id}}</th>
            <th scope="row">{{$delivery_man->name}}</th>
            <td>{{$delivery_man->phone}}</td>

            <td><button type="submit" class="btn btn-outline-warning  ">Delete</button></td>

        </tr>
        </form>

        @endforeach
        @endif


    @if ( $delivery_men->isEmpty())
            <tr>
                <td colspan="8"><h3>There is no Promo delivery_man Data</h3></td>
            </tr>
        @endif








    </tbody>
  </table>

  <div class="row">
    <div class="d-flex">
        {!! $delivery_men->links() !!}
    </div>
    <div class="">

    </div>
  </div>

  <div class="">
     <a href="{{ URL::previous() }}" class="btn btn-outline-primary ">Back</a>
  </div>
</div>

@endsection


