<!DOCTYPE html>
<html lang="en">
<head>
   @include('layouts._partials.head')

</head>
<body>
    <!-- Color Nip -->
    <div class="Switcher">
    <button id="Switcher__control" class="Switcher__control">
        <i class="fas fa-cogs"></i>
    </button>
    <h5 style="margin-bottom: 5px">DANSOS</h5>
    <ul id="colors" data-dir="{{ asset('') }}assets/css/theme-colors/">
        <li data-scheme="theme-default" data-color="#4272d7" style="background-color:#4272d7"></li>
        <li data-scheme="theme-red" data-color="#fa4251" style="background-color:#fa4251"></li>
        <li data-scheme="theme-green" data-color="#63c76a" style="background-color:#63c76a"></li>
        <li data-scheme="theme-yellow" data-color="#ffe048" style="background-color:#ffe048"></li>
        <li data-scheme="theme-orange" data-color="#f39c12" style="background-color:#f39c12"></li>
    </ul>
    </div>
    <!-- End Color Nip -->
    <div class="search-overlay"></div>

    @include('layouts._partials.topbar')
    <!-- Start Slider Area -->
    @yield('slider')
    <!-- End Slider Area -->
    <!-- Start Why Choose Us Area -->
    @yield('content')
    <!-- End Why Choose Us Area -->
    @include('layouts._partials.footer')
    <!-- JS -->
   <!-- Popper.js -->
   <script src="{{ asset('') }}assets/js/popper.min.js"></script>
   <!-- Bootstrap.js -->
   <script src="{{ asset('') }}assets/js/bootstrap-4.3.1.min.js"></script>
   <!-- Modernizr.js -->
   <script src="{{ asset('') }}assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Owl.Carousel.js -->
   <script src="{{ asset('') }}assets/js/vendor/owl.carousel-2.3.4.min.js"></script>
   <script src="{{ asset('') }}assets/js/vendor/owl.carousel2.thumbs.min.js"></script>
   <!-- Waypoints.js -->
   <script src="{{ asset('') }}assets/js/vendor/waypoints-4.0.1.min.js"></script>
   <!-- ColorNip.js -->
   <script src="{{ asset('') }}assets/js/vendor/colornip.min.js"></script>
   <!-- SlickNav.js -->
   <script src="{{ asset('') }}assets/js/vendor/slicknav.min.js"></script>
   <!-- ScrollUp.js -->
   <script src="{{ asset('') }}assets/js/vendor/jquery.scrollUp.min.js"></script>
   <!-- MagnificPopup.js -->
   <script src="{{ asset('') }}assets/js/vendor/magnific-popup.min.js"></script>

   <!-- Main.js -->
   <script src="{{ asset('') }}assets/js/main.js"></script>
   @stack('custom-js')
</body>
</html>
