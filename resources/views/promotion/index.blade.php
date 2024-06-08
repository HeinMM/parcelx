@extends('layouts.master')

@section('content')

@section('table')
<div class=" ">

    <h1 class="text-primary ">Promotion code</h1>

    <div class="mb-2 ">
        <a href="{{ route('promo.create') }}" class="btn btn-outline-danger ">Create New Promotion Code</a>
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
        <th class="text-primary " scope="col">For</th>
        <th class="text-primary " scope="col">Code</th>
        <th class="text-primary " scope="col">Promo Price</th>
        <th class="text-primary " scope="col">Count</th>
        <th class="text-primary " scope="col">Limit</th>
        <th class="text-primary " scope="col">Create At</th>
        <th class="text-primary " scope="col">Action</th>

      </tr>
    </thead>
    <tbody class="tbody">


        @if ( !$codes->isEmpty())
        @foreach ( $codes as $code )

        <form method="POST" action="{{ route('promo.destroy', ['id'=>$code->id]) }}"  >
            {{ method_field('DELETE') }}
            {{ csrf_field() }}

        <tr>
            <th scope="row">{{$code->id}}</th>
            <th scope="row">{{$code->name}}</th>
            <td>{{$code->code}}</td>
            <td>{{$code->price}}</td>
            <td>{{$code->count}}</td>

            <td>{{$code->limit}}</td>
            <td>{{$code->created_at}}</td>

            <td><button type="submit" class="btn btn-outline-warning  ">Delete</button></td>

        </tr>
        </form>

        @endforeach
        @endif


    @if ( $codes->isEmpty())
            <tr>
                <td colspan="8"><h3>There is no Promo Code Data</h3></td>
            </tr>
        @endif








    </tbody>
  </table>

  <div class="row">
    <div class="d-flex">
        {!! $codes->links() !!}
    </div>
    <div class="">

    </div>
  </div>

  <div class="">
     <a href="{{ URL::previous() }}" class="btn btn-outline-primary ">Back</a>
  </div>
</div>

@endsection


