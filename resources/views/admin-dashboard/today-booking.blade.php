{{-- @extends('layouts.master')

@section('content')

    <h1>booking detail</h1>
    <P>{{$booking}}</P>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
@endsection --}}

{{-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Transaction Invoice</title> --}}

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> --}}
        <html moznomarginboxes mozdisallowselectionprint>
        @extends('layouts.master')

@section('content')
        @vite('resources/js/app.js')

    </head>
    <style>
        body{
                        margin-top:20px;
                        background:#eee;
                    }

                    .invoice {
                        background: #fff;
                        padding: 20px
                    }

                    .invoice-company {
                        font-size: 20px
                    }

                    .invoice-header {
                        margin: 0 -20px;
                        background: #fff;
                        padding: 20px
                    }

                    .invoice-date,
                    .invoice-from,
                    .invoice-to {
                        display: table-cell;
                        width: 1%
                    }

                    .invoice-from,
                    .invoice-to {
                        padding-right: 20px
                    }

                    .invoice-date .date,
                    .invoice-from strong,
                    .invoice-to strong {
                        font-size: 16px;
                        font-weight: 600
                    }

                    .invoice-date {
                        text-align: right;
                        padding-left: 20px
                    }

                    .invoice-price {
                        background: #f0f3f4;
                        display: table;
                        width: 100%
                    }

                    .invoice-price .invoice-price-left,
                    .invoice-price .invoice-price-right {
                        display: table-cell;
                        padding: 20px;
                        font-size: 20px;
                        font-weight: 600;
                        width: 75%;
                        position: relative;
                        vertical-align: middle
                    }

                    .invoice-price .invoice-price-left .sub-price {
                        display: table-cell;
                        vertical-align: middle;
                        padding: 0 20px
                    }

                    .invoice-price small {
                        font-size: 12px;
                        font-weight: 400;
                        display: block
                    }

                    .invoice-price .invoice-price-row {
                        display: table;
                        float: left
                    }

                    .invoice-price .invoice-price-right {
                        width: 25%;
                        color: #050505;
                        font-size: 28px;
                        text-align: right;
                        vertical-align: bottom;
                        font-weight: 300
                    }

                    .invoice-price .invoice-price-right small {
                        display: block;
                        opacity: .6;
                        position: absolute;
                        top: 10px;
                        left: 10px;
                        font-size: 12px
                    }

                    .invoice-footer {
                        border-top: 1px solid #f0f3f4;
                        padding-top: 10px;
                        font-size: 10px
                    }

                    .invoice-note {
                        color: #f0f3f4;
                        margin-top: 80px;
                        font-size: 85%
                    }

                    .invoice>div:not(.invoice-footer) {
                        margin-bottom: 20px
                    }

                    .btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
                        color: #2d353c;
                        background: #fff;
                        border-color: #d9dfe3;
                    }

                    .wordwrap {
                        display: block;

                        width:500px;

                        position: relative;
                        }
                        .ptest{
                            margin: 0;
                            padding: 0;
                            text-overflow: clip;
                            word-wrap: break-word
                        }




    </style>
    <body class="antialiased">

<div class="container">

   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">

            <img src={{ asset('assets/img/logo/logo-black.png') }} alt="logo" width="60" height="30"/>
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header ">
            <div class="invoice-from wordwrap">
               <small>FROM</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">{{$booking->sender_name}}</strong><br>
                  Phone: {{$booking->sender_phone}}<br>
                  {{$booking->stownship->township_name}}<br>

                  <p class="ptest">{{\Illuminate\Support\Str::words($booking->sender_address_detail, 2, ' ......')}}</p><br>
                </address>
            </div>
            <hr>
                @if ($booking->cod)
                <small>COD:</small><strong class="text-inverse"> {{$booking->cod}} MMK</strong>
                <hr>
                @endif

            <div class="invoice-to wordwrap">
               <small>TO</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">{{$booking->receiver_name}}</strong><br>
                  Phone: {{$booking->receiver_phone}}<br>
                  {{$booking->rtownship->township_name}}<br>
                  <p class="">{{$booking->receiver_address_detail}}</p>

               </address>
            </div>
            <div class="row">
                <div class="d-flex justify-content-around">
                    <div>
                        <img src="{{ asset('storage/qrcodes/'.$qrPhoto->name) }}" alt="QR Code" width="100">
                    </div>


                    <div class="invoice-date col">
                        <small>Booking Detail</small>
                        <div class="date text-inverse m-t-5">{{Carbon\Carbon::now()->format('d-m-Y')}}</div>
                        <div class="date text-inverse m-t-5">Booking Number : {{$booking->booking_number}}</div>
                        <div class="date text-inverse m-t-5">အရေအတွက် : {{$booking->count}}</div>
                        <div class="date text-inverse m-t-5">အလေးချိန် : {{$booking->weight}}</div>


                     </div>

                     <div class="invoice-date col">
                        <small>Service fees</small>
                        <div class="date text-inverse m-t-5">ပို့ခ: {{$booking->fees}}</div>

                     </div>
                </div>
            </div>
         </div>


         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer footer">
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> www.parcelx.com</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T: 09444666121 </span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> info@onetwoonemyanmar.com</span>
            </p>
         </div>
         <!-- end invoice-footer -->

      </div>

   </div>
</div>
<br>
<span class="pull-right hidden-print">
    <a href="javascript:;" onclick="window.print()" class="btn btn-lg btn-white m-b-10 p-l-5 footer"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
    </span>
@endsection




