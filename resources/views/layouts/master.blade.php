<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head profile="https://parcelxmm.com/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>PARCEL X</title>

    <link rel="icon"
      type="image/png"
      href="https://parcelxmm.com/public/assets/img/logo/logo-black.png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
   @media print {
    .footer,
    #non-printable {
        display: none !important;
    }
    #printable {
        display: block;
    }
    @media print {
    @page { margin: 0; }
    html, body {
    height:100%;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden;
  }

}
}



table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}



</style>
<body>

    <div id="app" class=" min-vh-100 d-flex flex-column">
        @include("layouts.nav")



        <main class="py-4 ">

            <div class=" container">
                <div class="row d-flex justify-content-center">
                    <div class=" col-lg-8 ">
                        @yield('content')
                    </div>

                </div>
            </div>

            <div class=" container  table-left">
                <div class="">
                    @yield('table')

                </div>
            </div>



        </main>

        <footer class=" bg-dark py-5 text-center text-white mt-auto footer">
        <small>&copy; PARCEL X Copyright 2023. All Rights Reserved.</small>
        </footer>
    </div>



    @stack('scripts')

</body>
</html>
