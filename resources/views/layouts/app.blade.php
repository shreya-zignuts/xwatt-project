<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xwatt</title>
    <!-- favicon icon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- bootstrap css file -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- custom css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- owl carousel for slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- aos library for animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="loader"></div>

    <div id="content" style="display: none;">
        <!-- navbar section -->
        @include('layouts.navbar')
        <!-- content sections for specific pages -->
        @yield('content')

        <!-- footer section -->
        @include('layouts.footer')
    </div>

    <!-- bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Slick Slider jQuery for testimonials -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- js file -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- aos animation library onscroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- owlcarousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>
