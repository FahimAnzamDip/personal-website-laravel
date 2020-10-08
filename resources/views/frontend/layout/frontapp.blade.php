<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Google fonts for this template-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.all.min.css') }}">

    <!--Animate CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/animate.css/animate.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl/css/owl.theme.default.min.css') }}">

    <!--Normalize CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">

    <!--Main CSS File-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!--Fav Icon-->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}"/>
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="80">

    <!--Preloader-->
    @include('frontend.sections.preloader')

    @yield('page-content')

    <!--Hire me Section-->
    @include('frontend.sections.hireme')

    <!--Contact Section-->
    @include('frontend.sections.contact')

    <!--Footer Start-->
    @include('frontend.sections.footer')

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Wow JS Scroll Animation-->
    <script src="{{ asset('frontend/js/wow/wow.min.js') }}"></script>

    <!-- Waypoint JS -->
    <script src="{{ asset('frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>

    <!-- Typed JS -->
    <script src="{{ asset('frontend/vendor/typedjs/typed.min.js') }}"></script>

    <!--Counter JS-->
    <script src="{{ asset('frontend/js/counter/counter.min.js') }}"></script>

    <!--Isotope JS-->
    <script src="{{ asset('frontend/js/isotope/isotope.min.js') }}"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ asset('frontend/vendor/owl/js/owl.carousel.min.js') }}"></script>

    <!-- Parallax JS -->
    <script src="{{ asset('frontend/vendor/parallax/parallax.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
