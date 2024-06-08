@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div>
                <h3 class="text-danger">USA TO MYANMAR</h3>
            </div>
            <div class="col-md-8">

                    <form action="{{ route('usa-to-myanmar.store') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf

                    <div class="card mb-3">
                        <div class="card-header">SENDER</div>

                        <div class="col">
                            <p class="m-3 text-primary">Sender Data</p>


                            @if($userId)
                                <input name="user-id" type="text"
                                    value={{$userId}}
                                    aria-describedby="basic-addon1" hidden>

                            @endif




                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
                                </div>
                                <input name="sender-name" type="text"
                                    class="form-control @error('sender-name') is-invalid @enderror"

                                    aria-describedby="basic-addon1">
                                @error('sender-name')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
                                </div>
                                <input name="sender-phone" type="text"
                                    class="form-control @error('sender-phone') is-invalid @enderror"

                                    aria-describedby="basic-addon1">
                                @error('sender-phone')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>

                    </div>

                    <div class="card mb-3">
                        <div class="card-header">RECEIVER</div>

                        <div class="col">
                            <p class="m-3 text-primary">Receiver Data</p>
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
                                </div>
                                <input name="receiver-name" type="text"
                                    class="form-control @error('receiver-name') is-invalid @enderror"
                                     placeholder="receiver name" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                @error('receiver-name')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
                                </div>
                                <input name="receiver-phone" type="text"
                                    class="form-control  @error('receiver-phone') is-invalid @enderror"
                                     placeholder="receiver phone"
                                    aria-label="Username" aria-describedby="basic-addon1">
                                @error('receiver-phone')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Address</span>
                                </div>
                                <input name="receiver-address" type="text"
                                    class="form-control  @error('receiver-address') is-invalid @enderror"
                                     placeholder="receiver address"
                                    aria-label="Username" aria-describedby="basic-addon1">
                                @error('receiver-address')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary float-end" id="booking">BOOKING</button>
                </form>



            </div>
        </div>
    </div>



@endsection
@push('scripts')


<script type="text/javascript">



</script>
@endpush




