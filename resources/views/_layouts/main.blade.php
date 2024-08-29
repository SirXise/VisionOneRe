<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('build/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('build/css/bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Stylesheet -->
    <link href="{{ asset('build/css/dataTables.bootstrap5.min.css') }}" rel='stylesheet'>

    <!-- Template Stylesheet -->
    <link href="{{ asset('build/css/style.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include('_layouts.navbar')


    @yield('body')


    @include('_layouts.footer')

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    <!-- JQuery -->
    <script src="{{ asset('build/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/js/jquery.min.js') }}"></script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('build/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('build/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('build/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('build/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- DataTables Javascript -->
    <script src="{{ asset('build/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('build/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('build/js/dataTables.bootstrap5.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('build/js/main.js') }}"></script>

    @yield('scripts')

    <script>
        $(document).ready(function() {
            var $navbar = $(".navbar");
            var $toggleIcon = $(".navbar-toggler");
            var $navbarCollapse = $(".navbar-collapse");
            var $navLinks = $('.navbar .navbar-nav .nav-link:not(.active):not(:hover)');
            var $logo = $('.navbar-brand img');

            // Store the original logo source
            var originalLogoSrc = $logo.attr('src');
            var hoverLogoSrc = '{{ url("build/img/company_logo/VO-03.png") }}';

            // Toggle event
            $toggleIcon.on('click', function() {
                if ($toggleIcon.attr('aria-expanded') === 'true') {
                    $navbar.removeClass("bg-light-transparent").addClass("bg-light");
                    $navLinks.addClass("text-black");
                } else {
                    $navbar.removeClass("bg-light");
                    $navLinks.removeClass("text-black");
                }
            });

            // Function to handle navbar background change
            function toggleNavbarBg() {
                if ($toggleIcon.attr('aria-expanded') === 'true') {
                    return;
                }
                if ($(window).scrollTop() <= 0) {
                    $navbar.removeClass("bg-light-transparent");
                    $navLinks.removeClass("text-black");
                } else {
                    $navbar.addClass("bg-light-transparent");
                    $navLinks.addClass("text-black");
                }
            }

            // Initial check
            toggleNavbarBg();

            // Scroll event with throttling
            var throttleTimeout;
            $(window).on('scroll', function() {
                if (!throttleTimeout) {
                    throttleTimeout = setTimeout(function() {
                        toggleNavbarBg();
                        throttleTimeout = null;
                    }, 100);
                }
            });

            // Hover event
            $navbar.hover(
                function() {
                    if ($toggleIcon.attr('aria-expanded') !== 'true') {
                        $(this).addClass("bg-light-transparent");
                        $navLinks.addClass("text-black");
                        $logo.attr('src', hoverLogoSrc);
                    }
                },
                function() {
                    if ($(window).scrollTop() <= 0 && !$navbarCollapse.hasClass('show')) {
                        $(this).removeClass("bg-light-transparent");
                        $navLinks.removeClass("text-black");
                        $logo.attr('src', originalLogoSrc);
                    }
                }
            );
        });
    </script>
</body>

</html>