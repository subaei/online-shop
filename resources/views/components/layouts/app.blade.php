<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from htmldemo.net/abelo/abelo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2024 08:32:48 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>{{ $title ?? 'Online Shop' }}</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.png') }}" />
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" type="text/css" media="all">

        <!-- CSS ============================================ -->

        <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/linearicon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}">

        <!-- Plugins CSS (All Plugins Files) -->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        
        <!-- Custom Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/select.css') }}" />

        @livewireStyles
    </head>

    <body wire:click='resetSearch'>
        @livewire('partials.header')

        {{ $slot }}

        @livewire('partials.footer')
        <!-- JS
============================================ -->

            <!-- Vendors JS -->
        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

            <!-- Plugins JS -->
        <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/elevateZoom.js') }}"></script>

        <!-- Main Activation JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        
        @livewireScripts

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <x-livewire-alert::scripts />
    </body>

<!-- Mirrored from htmldemo.net/abelo/abelo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2024 08:34:45 GMT -->
</html>




