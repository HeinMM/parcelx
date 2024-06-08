@extends('layouts.master')

@section('content')
    <h1>Create Delivery Man</h1>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="{{ route('deli.store') }}" method="post" >
                    @csrf

                    <div class="card mb-3">
                        <div class="card-header">Create Here</div>

                        <div class="row ">

                            <div class="  justify-content-center">
                                <div class="input-group  p-3">

                                    <input name="role" type="text"
                                        value="mm-delivery" aria-label="Useremail"
                                        aria-describedby="basic-addon1" hidden>

                                </div>
                                <div class="input-group  p-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">Email</span>
                                    </div>
                                    <input name="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" aria-label="Useremail"
                                        aria-describedby="basic-addon1">
                                    @error('email')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="input-group  p-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
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
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
                                    </div>
                                    <input name="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}"
                                        aria-describedby="basic-addon1">
                                    @error('phone')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-group  p-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1" style="width: 100px">Password</span>
                                    </div>
                                    <input name="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}"
                                        aria-describedby="basic-addon1">
                                    @error('password')
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
