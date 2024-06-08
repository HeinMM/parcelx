@extends('layouts.master')

@section('content')
    <h1>Create Promotion Code</h1>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="{{ route('promo.store') }}" method="post" >
                    @csrf

                    <div class="card mb-3">
                        <div class="card-header">Generate Here</div>

                        <div class="row ">

                            <div class="  justify-content-center">
                                <div class="input-group  p-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">For</span>
                                    </div>
                                    <input name="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                    @error('name')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="input-group  p-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">Code</span>
                                    </div>
                                    <input name="code" type="text"
                                        class="form-control @error('code') is-invalid @enderror"
                                        value="{{ old('code') }}"
                                        aria-describedby="basic-addon1">
                                    @error('code')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-group  p-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">Price</span>
                                    </div>
                                    <input name="price" type="text"
                                        class="form-control @error('price') is-invalid @enderror"
                                        value="{{ old('price') }}"
                                        aria-describedby="basic-addon1">
                                    @error('price')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="input-group  p-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">Limit</span>
                                    </div>
                                    <input name="limit" type="text"
                                        class="form-control @error('limit') is-invalid @enderror"
                                        value="{{ old('limit') }}"
                                        aria-describedby="basic-addon1">
                                    @error('limit')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center mb-3">
                                    <button  type="submit" class="btn btn-primary ">Create</button>

                                </div>
                            </div>

                        </div>


                    </div>
                </form>
                </div>


@endsection
