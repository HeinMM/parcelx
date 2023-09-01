@extends('layouts.app')

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
                        <p>{{Auth::user()}}</p>

                    @endauth
                </div>

            </div>

            @auth
                <div class="card">
                    <div class="card-header">Auth User Booking form</div>

                </div>
                @endauth
        </div>
    </div>
</div>
@endsection
