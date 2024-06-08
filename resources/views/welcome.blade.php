{{-- @extends('layouts.master')

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
                            <p>{{ Auth::user() }}</p>

                        @endauth
                    </div>

                </div>

                @auth
                    <div class="card">
                        <div class="card-header">Auth User Booking form</div>
                        <div class="card-body col d-flex justify-content-around">

                            <a href="{{ route('a-yty-booking.create') }}" class="btn btn-primary">Yangon To Yangon</a>
                            <a href="" class="btn btn-primary">Yangon To Nal</a>
                            <a href="" class="btn btn-primary">Nal To Yangon</a>

                        </div>
                    </div>
                @endauth

                @guest
                    <div class="card">
                        <div class="card-header">Guest Booking form</div>
                        <div class="card-body col d-flex justify-content-around">

                            <a href="{{ route('noBookingCreate') }}" class="btn btn-primary">Yangon To Yangon</a>
                            <a href="" class="btn btn-primary">Yangon To Nal</a>
                            <a href="" class="btn btn-primary">Nal To Yangon</a>

                        </div>
                    </div>
                @endguest

                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate(Request::url("https://test.121remits.com/login")); !!}
                    <p>Scan me to return to the original page.</p>
                </div>


            </div>
        </div>
    </div>
@endsection

 --}}
 @extends('master-layouts.master')




         @section('content')


         <!-- Main Wrapper -->
         <main class="wrapper">

             <!-- Header -->
             <header class="header-main">

                 <!-- Header Topbar -->
                 <div class="top-bar font2-title1 white-clr">
                     <div class="theme-container container">
                         <div class="row">
                             <div class="col-md-6 col-sm-5">
                                 <ul class="list-items fs-10">
                                    <li><a href="#">group from 121</a></li>
                                 </ul>
                             </div>
                             <div class="col-md-6 col-sm-7 fs-12">
                                 <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> 09444666121 </span> </p>
                             </div>
                         </div>
                     </div>
                     @guest()
                            <a data-toggle="modal" href="/login" class="sign-in fs-12 theme-clr-bg"> sign in </a>
                     @endguest
                 </div>
                 <!-- /.Header Topbar -->

                 <!-- Header Logo & Navigation -->
                 <nav class="menu-bar font2-title1">
                     <div class="theme-container container">
                         <div class="row">
                             <div class="col-md-2 col-sm-2">
                                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                     <span class="sr-only">Toggle navigation</span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                 </button>
                                 <a class="navbar-logo" href="#"> <img src="assets/img/logo/logo-black.png" alt="logo" /> </a>
                             </div>
                             <div class="col-md-10 col-sm-10 fs-12">
                                 <div id="navbar" class="collapse navbar-collapse no-pad">
                                     <ul class="navbar-nav theme-menu">
                                        <li> <a href="{{ route('welcome') }}">home</a> </li>
                                         <li> <a href="{{ route('aboutus') }}">about</a> </li>
                                         <li> <a href="{{ route('contact') }}"> contact </a> </li>
                                         @auth()
                                            <li> <a href="{{ route('myhistory.index') }}"> my page </a> </li>
                                         @endauth


                                         <li><span class="search fa fa-search theme-clr transition"> </span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </nav>
                 <!-- /.Header Logo & Navigation -->

             </header>
             <!-- /.Header -->

             <!-- Content Wrapper -->
             <article>
                 <!-- Banner -->
                 <section class="banner mask-overlay pad-120 white-clr">
                     <div class="container theme-container rel-div">
                         <img class="pt-10 effect animated fadeInLeft" alt="" src="assets/img/icons/icon-1.png" />
                         <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                             <li><a href="#">fast</a></li>
                             <li><a href="#">secured</a></li>
                             <li><a href="#">worldwide</a></li>
                         </ul>
                         <br>
                         <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> <span class="theme-clr"> Delivery </span> & <span class="theme-clr"> Warehousing Services </span>
                             <br><br>YOUR RELIABLE PARTNER</h2>
                     </div>
                     <div class="pad-50 visible-lg"></div>
                 </section>
                 <!-- /.Banner -->

                 <!-- Track Product -->
                 <section>
                     <div class="theme-container container">
                         <div class="row">
                             <div class="col-md-8 col-md-offset-2 track-prod clrbg-before" data-wow-offset="50" data-wow-delay=".20s">
                                 <h2 class="title-1"> သင့်ပစ္စည်းအားရှာမည် </h2> <span class="font2-light fs-12">ဤ နေရာတွင် Booking Number နှင့်အတူရှာခြင်းဖြင့် လွယ်ကူစွာ သိရှိနိုင်မည်</span>
                                 <div class="row">
                                    <form action="{{ route('myhistory.showTwo') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                         <div class="col-md-7 col-sm-7">
                                             <div class="form-group">
                                                 <input type="text" placeholder="Enter your  Booking Number" required="" name="booking-number" class="form-control box-shadow">
                                             </div>
                                         </div>
                                         <div class="col-md-5 col-sm-5">
                                             <div class="form-group">
                                                 <button type="submit" class="btn-1">ရှာမည်</button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>

                     @error('error')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                 </section>
                 <!-- /.Track Product -->

                 <!-- Services Us -->
                 <section class="pad-80 about-wrap clrbg-before">
                         <div class="title-wrap text-center  pb-50">
                             <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s">services & booking</h2>
                             <p class="" data-wow-offset="50" data-wow-delay=".25s">လူကြီးမင်း ပို့ဆောင်မည့် plan အား ရွေးချယ်၍ ပို့ဆောင်နိုင်ပါသည်။</p>
                         </div>
                    <div class="theme-container container d-flex justify-content-center">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-md-6" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">Available</h2>
                                        <p>ရန်ကုန်မြို့တွင်း Booking</p>

                                    </div>
                                    <div class="price-content text-center ">
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr"> &LT; 30kg</span> </li>
                                            <li> duration: <span class="gray-clr">2-3 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                            <li> type: <span class="gray-clr">You don't need to Login</span> </li>
                                        </ul>
                                    </div>


                                <div class="text-center p-5 text-white"><a style="color:rgb(255, 255, 255)" href="{{ route('a-yty-booking.create') }}" class="title-1 btn btn-success mb-4  p-4 text-white ">  booking here  </a></div>
                                <br>



                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>

                            <div class="col-md-6" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">Available</h2>
                                        <p>USA မှ Myanmarသို့</p>

                                    </div>
                                    <div class="price-content text-center">
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr"> &LT; 30kg</span> </li>
                                            <li> duration: <span class="gray-clr">1 Months</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                            <li> type: <span class="gray-clr">You need to Login</span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-center">
                                        <a style="color:rgb(255, 255, 255)" href="{{ !Auth::user()? '' :  route('usa-to-myanmar.create') }}" class="title-1 btn btn-success mb-4  p-4 text-white " {{!Auth::user()? 'disabled' : ''}}>  booking here  </a>
                                    </div>
                                    <br>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>

                            {{-- <div class="col-md-4" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">NOT YET</h2>
                                        <p>နယ်မြို့များမှ ရန်ကုန်သို့</p>
                                        <div class="btn-1">Other City to Yangon</div>
                                    </div>
                                    <div class="price-content">
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#" class="title-1 theme-clr"> <span class="transition"> soon </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </section>
                <!-- /.Services Us -->

                 <!-- About Us -->
                 <section class="pad-80 about-wrap clrbg-before">
                     <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
                     <div class="theme-container container">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="about-us">
                                     <h2 class="section-title pb-10" data-wow-offset="50" data-wow-delay=".20s"> About Us </h2>
                                     <p class="fs-16" data-wow-offset="50" data-wow-delay=".25s">PAECEL X ဆိုတာ မြန်မာလူမျိုးတိုင်းရဲ့ ပစ္စည်းများကို လုံခြုံစိတ်ချစွာဖြင့်
                                         သက်မှတ်ထားသော များပြားလှသော မြို့၊ မြို့နယ်၊ အိမ်အရောက်ပို့ စနစ်ဖြင့် လုပ်ငန်းကို လည်ပတ်နေပါသည်။ ထို့အပြင် ပြည်တွင်းသာမက ပြည်ပ ၀န်ဆောင်မှု့များလဲပေးနေပါသည်။ </p>
                                     <ul class="feature">
                                         <li>
                                             <img alt="" src="assets/img/icons/icon-2.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                             <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                 <h2 class="title-1">Fast delivery</h2>
                                                 <p>စနစ်ကျ၍ လျှင်မြန်သော delivery စနစ်</p>
                                             </div>
                                         </li>
                                         <li>
                                             <img alt="" src="assets/img/icons/icon-3.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                             <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                 <h2 class="title-1">secured service</h2>
                                                 <p>customerတိုင်းရဲ့ ပစ္စည်းမပျောက်ရှ မကွဲကြေရေ ဦးစားပေးသော စနစ်</p>
                                             </div>
                                         </li>
                                         <li>
                                             <img alt="" src="assets/img/icons/icon-4.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                                             <div class="feature-content" data-wow-offset="50" data-wow-delay=".30s">
                                                 <h2 class="title-1">worldwide shipping</h2>
                                                 <p>အမြို့မြို့ အနယ်နယ် ပြည်တွင်းသာမက ပြည်ပအထိပါ ၀န်ဆောင်မှု့ပေးသော စနစ်</p>
                                             </div>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-md-6 text-center">
                                 <div class="pb-80 visible-lg"></div>
                                 <img alt="" src="assets/img/block/about-img.png" class="" data-wow-offset="50" data-wow-delay=".20s" />
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- /.About Us -->

                 <!-- Calculate Your Cost -->
                 {{-- <section class="calculate pt-100">
                     <div class="theme-container container">
                         <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> calculate </span>
                         <div class="row">
                             <div class="col-md-6 text-center">
                                 <img src="assets/img/block/Courier-Man.png" alt="" class="" data-wow-offset="50" data-wow-delay=".20s" />
                             </div>
                             <div class="col-md-6">
                                 <div class="pad-10"></div>
                                 <h2 class="section-title pb-10" data-wow-offset="50" data-wow-delay=".20s" > ရန်ကုန်မြို့တွင်း ပစ္စည်းပို့ခ</h2>
                                 <p class="fs-16" data-wow-offset="50" data-wow-delay=".25s">ရန်ကုန်မြို့နယ် တစ်နေရာမှ မြို့တွင်း တစ်နေရာသို့ ပစ္စည်းပေးပို့ရန် ပို့ခအား လွယ်ကူ
                                     လွတ်လပ်စွာဖြင့် ဤနေရာတွင် တွက်နိုင်ပါသည်</p>
                                 <div class="calculate-form">
                                     <form class="row">
                                         <div class="form-group" data-wow-offset="50" data-wow-delay=".20s">
                                             <div class="col-sm-3"> <label class="title-2"> height (cm): </label></div>
                                             <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height" type="text" placeholder="" class="form-control"> </div>
                                         </div>
                                         <div class="form-group" data-wow-offset="50" data-wow-delay=".20s">
                                             <div class="col-sm-3"> <label class="title-2"> width (cm): </label></div>
                                             <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width" type="text" placeholder="" class="form-control"> </div>
                                         </div>
                                         <div class="form-group" data-wow-offset="50" data-wow-delay=".20s">
                                             <div class="col-sm-3"> <label class="title-2"> depth (cm): </label></div>
                                             <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="depth" type="text" placeholder="" class="form-control"> </div>
                                         </div>
                                         <div class="form-group" data-wow-offset="50" data-wow-delay=".20s">
                                             <div class="col-sm-3"> <label class="title-2"> weight (kg): </label></div>
                                             <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" type="text" placeholder="" class="form-control"> </div>
                                         </div>
                                         <div class="form-group" data-wow-offset="50" data-wow-delay=".20s">
                                             <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                             <div class="col-sm-9">
                                                 <div class="col-sm-6 no-pad">
                                                     <input type="text" data-bind="in:value" data-name="locations[from]" placeholder="From" class="form-control from fw-600">
                                                 </div>
                                                 <div class="col-sm-6 no-pad">
                                                     <input type="text" data-bind="in:value" data-name="locations[to]" placeholder="To" class="form-control to fw-600">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="form-group" data-wow-offset="50" data-wow-delay=".20s">
                                             <div class="col-sm-3"> <label class="title-2"> Package: </label></div>
                                             <div class="col-sm-9">
                                                 <div class="form-group">
                                                     <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                                                             data-toggle="tooltip" title="select your package">
                                                         <option value="cost">Usual Delivery</option>
                                                         <option value="cost + 25">Fastest Delivery: + $25</option>
                                                         <option value="cost*0.9">Discount Delivery: -10%</option>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="form-group" data-wow-offset="50" data-wow-delay=".20s">
                                             <div class="col-sm-9 col-xs-12 pull-right">
                                                 <div class="btn-1"> <span> Total Cost: </span>
                                                     <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                                         <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap" style="display: none;"><span class="pr">0</span></span>
                                                     </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="pt-80 hidden-lg"></div>
                             </div>
                         </div>
                     </div>
                 </section> --}}
                 <!-- /.Calculate Your Cost -->

                 <!-- Steps -->
                 <section class="steps-wrap mask-overlay pad-80">
                     <div class="theme-container container">
                         <div class="row">
                             <div class="col-md-3 col-sm-6">
                                 <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>
                                 <div class="steps-content" data-wow-offset="50" data-wow-delay=".25s">
                                     <h2 class="title-3">Order</h2>
                                     <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6">
                                 <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>
                                 <div class="steps-content" data-wow-offset="50" data-wow-delay=".25s">
                                     <h2 class="title-3">Wait</h2>
                                     <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6">
                                 <div class="font-2 fs-50" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>
                                 <div class="steps-content" data-wow-offset="50" data-wow-delay=".25s">
                                     <h2 class="title-3">Deliver</h2>
                                     <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="assets/img/block/step-img.png" alt="" /> </div>
                 </section>
                 <!-- /.Steps -->

                 <!-- Product Delivery -->
                 <section class="prod-delivery pad-120">
                     <div class="theme-container container">
                         <div class="row">
                             <div class="col-md-11 col-md-offset-1">
                                 <div class="pt-120 rel-div">
                                     <div class="pb-50 hidden-xs"></div>
                                     <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s"> လုံခြုံခြင်း၊မြန်ဆန်ခြင်း စသော ခံစားမှု့ </h2>
                                     <p class="fs-16" data-wow-offset="50" data-wow-delay=".25s">လူကြီးမင်းပစ္စည်းများ ပို့ဆောင်ရာတွင်လျှင်မြန်စိတ်ချရဖို့ Parcel X ဖြင့်သာ လက်တွဲလိုက်ပါ။</p>
                                     <div class="pb-120 hidden-xs"></div>
                                 </div>
                                 <div class="delivery-img pt-10">
                                     <img alt="" src="assets/img/block/delivery.png" class="" data-wow-offset="50" data-wow-delay=".20s"/>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- /.Product Delivery -->

                 <!-- Testimonial -->
                 <section class="testimonial mask-overlay">
                     <div class="theme-container container">
                         <div class="testimonial-slider no-pagination pad-120">
                             <div class="item">
                                 <div class=" darkclr-border theme-clr font-2" data-wow-offset="50" data-wow-delay=".20s">
                                     <img alt="" src="assets/img/block/testimonial-1.png" />
                                     {{-- <span>,,</span> --}}
                                 </div>
                                 <br>
                                 <div class="testimonial-content">
                                     <p class="" data-wow-offset="50" data-wow-delay=".25s">  <i class="gray-clr fs-16">
                                        စနစ်ကြမှု့ကိုအခြေခံခြင်းဖြင့်
                                             <br>  customer များရဲ့
                                             <br> ယုံကြည်မှု့ကိုရယူနိုင်မည်
                                         </i> </p>

                                     <h2 class="title-2 pt-10" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="white-clr fw-900"> Parcel X CEO </a> </h2>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class=" darkclr-border theme-clr font-2">
                                     <img alt="" src="assets/img/block/testimonial-1.png" />
                                     {{-- <span>,,</span> --}}
                                 </div>
                                 <br>
                                 <div class="testimonial-content">
                                     <p>  <i class="gray-clr fs-16">
                                        အမျိုးမျိုးသော ၀န်ဆောင်မှု့များအား ပေးဆောင်မည်။
                                             <br> customerပစ္စည်းများအား
                                             <br> မိမိပစ္စည်းပမာ သယ်ဆောင်ရမည်။
                                         </i> </p>

                                     <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Parcel X MANAGER </a> </h2>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class=" darkclr-border theme-clr font-2">
                                     <img alt="" src="assets/img/block/testimonial-1.png" />
                                     {{-- <span>,,</span> --}}
                                 </div>
                                 <br>
                                 <div class="testimonial-content">
                                     <p>  <i class="gray-clr fs-16">
                                        customerများ အသုံပြုမှု့ လွယ်ကူစေရခြင်းမှာ
                                             <br> ဦးစားပေးဖြစ်သည်။
                                         </i> </p>

                                     <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Parcel X DEVELOPER TEAM </a> </h2>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- /.Testimonial -->

                 <!-- Pricing & Plans -->

                 <!-- /.Pricing & Plans -->

                 <!-- Contact us -->
                 <section class="contact-wrap pad-120">
                     <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
                     <div class="theme-container container">
                         <div class="row">
                             <div class="col-md-6 col-sm-8">
                                 <div class="title-wrap">
                                     <h2 class="section-title" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
                                     <p class="" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easiky</p>
                                 </div>
                                 <ul class="contact-detail title-2">
                                     <li class="" data-wow-offset="50" data-wow-delay=".20s"> <span>Myanmar Numbers:</span> <p class="gray-clr"> 09444666121 </p> </li>
                                     <li class="" data-wow-offset="50" data-wow-delay=".25s"> <span>Korea Numbers:</span> <p class="gray-clr">+82 1084624516 </p> </li>
                                     <li class="" data-wow-offset="50" data-wow-delay=".25s"> <span>USA Numbers:</span> <p class="gray-clr"> +1 6264265494 </p> </li>
                                     {{-- <li class="" data-wow-offset="50" data-wow-delay=".30s"> <span>Email address:</span> <p class="gray-clr"> info@onetwoonemyanmar.com </p> </li> --}}
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </section>
                 <!-- /.Contact us -->
             </article>
             <!-- /.Content Wrapper -->


         @endsection


