
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
                  USA<br>
                </address>
            </div>
            <hr>

            <div class="invoice-to wordwrap">
               <small>TO</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">{{$booking->receiver_name}}</strong><br>
                  Phone: {{$booking->receiver_phone}}<br>

                  <p class="">{{$booking->receiver_address}}</p>

               </address>
            </div>
            <div class="row">
                <div class="d-flex justify-content-around">
                    <div>
                        <img src="{{ asset('storage/qrcodes/'.$qrPhoto->name) }}" alt="QR Code" width="100">
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




