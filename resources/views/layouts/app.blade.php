<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg"/>    <link
        rel="shortcut icon"
        href="{{ asset('/image/rotemarket_favicon/favicon.ico') }}"
        type="image/x-icon"
    />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
        @vite(['resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/main.css?v=5.6')}}"/>
</head>
<body>
    <!-- Modal Start -->
    {{-- <x-eccomerce.layouts.modalpromo/> --}}
    <!-- Header Start -->
    <x-eccomerce.layouts.header />
    <!-- mobile menu Start -->
    <x-eccomerce.layouts.menumobile/>

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <!-- Footer Start -->
    <x-eccomerce.layouts.footer/>
    <!-- Preloader Start -->
    <x-eccomerce.layouts.preload/>


    @stack('modals')

    @livewireScripts
    <!-- Vendor JS-->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slick.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{asset('assets/js/main.js?v=5.6')}}"></script>
    <script src="{{asset('assets/js/shop.js?v=5.6')}}"></script>
</body>
</html>
