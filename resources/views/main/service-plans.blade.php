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
                           <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a>
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

            <!-- Content Wrapper -->
            <article>
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">
                    <div class="theme-container container ">
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin">Pricing & plans</h2>
                                    <p class="fs-16 no-margin">Know about our pricing & plans</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>
                                    <li class="active">Pricing</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Pricing & Plans -->
                <section class="pricing-wrap pad-80">
                    <div class="theme-container container">
                        <div class="row pb-50">
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">$50</h2>
                                        <p>for single product</p>
                                        <div class="btn-1">basic</div>
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
                                        <a href="#" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                            <div class="col-md-4 active white-clr wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="pricing-box theme-clr-bg">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">$250</h2>
                                        <p>for package product</p>
                                        <div class="btn-1 dark">Premium</div>
                                    </div>
                                    <div class="price-content">
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="white-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="white-clr">  all</span> </li>
                                            <li> duration: <span class="white-clr">7-14 days</span> </li>
                                            <li> support: <span class="white-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#" class="title-1 white-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">$150</h2>
                                        <p>for multiple product</p>
                                        <div class="btn-1">standard</div>
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
                                        <a href="#" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row pricing-2 pad-50">
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="block-inline text-center">
                                        <div class="pad-10"></div>
                                        <h3 class="title-2"> Basic </h3>
                                        <h2 class="section-title fs-36">$50</h2>
                                        <p>for single product</p>
                                    </div>
                                    <div class="price-content-2">
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-center order-2">
                                        <a href="#" class="btn-round"> order now </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="pricing-box active">
                                    <div class="block-inline text-center">
                                        <div class="pad-10"></div>
                                        <h3 class="title-2"> Premium </h3>
                                        <h2 class="section-title fs-36">$250</h2>
                                        <p>for package product</p>
                                    </div>
                                    <div class="price-content-2">
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-center order-2">
                                        <a href="#" class="btn-round"> order now </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="block-inline text-center">
                                        <div class="pad-10"></div>
                                        <h3 class="title-2"> standard </h3>
                                        <h2 class="section-title fs-36">$150</h2>
                                        <p>for multiple product</p>
                                    </div>
                                    <div class="price-content-2">
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-center order-2">
                                        <a href="#" class="btn-round"> order now </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Pricing & Plans -->
            </article>
            <!-- /.Content Wrapper -->


            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">
                    <div class="login-wrap text-center">
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> GO </strong> for getting all details </p>

                        <div class="login-form clrbg-before">
                            <form class="login">
                                <div class="form-group"><input type="text" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in now </button>
                                </div>
                            </form>
                            <a href="#" class="gray-clr"> Forgot Passoword? </a>
                        </div>
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don’t have an account? </a>
                        <h2 class="title-2"> <a href="#" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login -->

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->

        <!-- Main Jquery JS -->
        <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <!-- Bootstrap JS -->
        <script src="assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Bootstrap Select JS -->
        <script src="assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <!-- OwlCarousel2 Slider JS -->
        <script src="assets/plugins/owl.carousel.2/owl.carousel.min.js" type="text/javascript"></script>
        <!-- Sticky Header -->
        <script src="assets/js/jquery.sticky.js"></script>
        <!-- Wow JS -->
        <script src="assets/plugins/WOW-master/dist/wow.min.js" type="text/javascript"></script>

        <!-- Slider JS -->


        <!-- Theme JS -->
        <script src="assets/js/theme.js" type="text/javascript"></script>

        @endsection
