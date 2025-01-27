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

            </header>

            <!-- Content Wrapper -->
            <article>
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">
                    <div class="theme-container container ">
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> product tracking </h2>
                                    <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>
                                    <li class="active">Track</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Tracking -->
                <section class="pt-50 pb-120 tracking-wrap">
                    <div class="theme-container container ">
                        <div class="row pad-10">
                            <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <button class="btn-1">track your product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s">
                                <img alt="" src="assets/img/block/product-1.jpg" />
                            </div>
                            <div class="col-md-5 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="prod-info white-clr">
                                    <ul>
                                        <li> <span class="title-2">Product Name:</span> <span class="fs-16">iPhone 6 Boxed</span> </li>
                                        <li> <span class="title-2">Product id:</span> <span class="fs-16">9034215</span> </li>
                                        <li> <span class="title-2">order date:</span> <span class="fs-16">21st Feb, 2016</span> </li>
                                        <li> <span class="title-2">order status:</span> <span class="fs-16 theme-clr">On Process</span> </li>
                                        <li> <span class="title-2">weight (kg):</span> <span class="fs-16">0.85 KG</span> </li>
                                        <li> <span class="title-2">order type:</span> <span class="fs-16">Basic ($50)</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <div class="progress-status">
                                <span class="border-left"></span>
                                <span class="border-right"></span>
                                <span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                <span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s">  <span class="dot dot-center theme-clr-bg"></span> </span>
                                <span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>
                            </div>
                            <div class="row progress-content upper-text">
                                <div class="col-md-3 col-xs-8 col-sm-2">
                                    <p class="fs-12 no-margin"> FROM </p>
                                    <h2 class="title-1 no-margin">London</h2>
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-3">
                                    <p class="fs-12 no-margin"> [ <b class="black-clr">6 DAYS </b> ] </p>
                                </div>
                                <div class="col-md-4 col-xs-8 col-sm-4 text-center">
                                    <p class="fs-12 no-margin"> currently in </p>
                                    <h2 class="title-1 no-margin">singapore</h2>
                                </div>
                                <div class="col-md-1 col-xs-8 col-sm-1 no-pad">
                                    <p class="fs-12 no-margin"> [ <b class="black-clr">2 DAYS </b> ] </p>
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                                    <p class="fs-12 no-margin"> to </p>
                                    <h2 class="title-1 no-margin">dhaka</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Tracking -->

            </article>
            <!-- /.Content Wrapper -->




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
