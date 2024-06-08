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

            <!-- Content Wrapper -->
            <article class="about-page">
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">
                    <div class="theme-container container ">
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin">About us</h2>
                                    <p class="fs-16 no-margin">Know about us more</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>
                                    <li class="active">About</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- About Us -->
                <section class="pad-50 about-wrap">
                    <span class="bg-text"> About </span>
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us pt-10">
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                        tation ullamcorper suscipit lobortis nisl ut aliquip.
                                    </p>
                                    <ul class="feature">
                                        <li>
                                            <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">Fast delivery</h2>
                                                <p>Duis autem vel eum iriure dolor</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="assets/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">secured service</h2>
                                                <p>Duis autem vel eum iriure dolor in hendrerit</p>
                                            </div>
                                        </li>
                                        <li>
                                            <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" />
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                                                <h2 class="title-1">worldwide shipping</h2>
                                                <p>Eum iriure dolor in hendrerit in vulputa</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <img alt="" src="assets/img/block/about-img.png" class="effect animated fadeInRight" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->

                <!-- More About Us -->
                <section class="pad-30 more-about-wrap">
                    <div class="theme-container container pb-100">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">what we do</h2>
                                    <div class="pad-10"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh eui
                                        tincidunt ut laoreet dolore magna aliquam
                                        volutpat. Ut wisi enim ad minim veniam, quis
                                        nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Our History</h2>
                                    <div class="pad-10"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh eui
                                        tincidunt ut laoreet dolore magna aliquam
                                        volutpat. Ut wisi enim ad minim veniam, quis
                                        nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo</p>
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">our mission</h2>
                                    <div class="pad-10"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh eui
                                        tincidunt ut laoreet dolore magna aliquam
                                        volutpat. Ut wisi enim ad minim veniam, quis
                                        nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.More About Us -->
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

    </body>
</html>
@endsection
