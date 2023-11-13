<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PARCEL X</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
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
        </main>

        <footer class=" bg-dark py-5 text-center text-white mt-auto">
        <small>&copy; PARCEL X Copyright 2023. All Rights Reserved.</small>
        </footer>
    </div>

    @stack('script')

</body>
</html>
