<!DOCTYPE HTML>
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Passion Education and Visa Consultancy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="70x70" href="{{ asset('assets/frontend/img/logo.png') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" type="text/css"
        media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nivo-slider.css') }}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animated-text.css') }}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/frontend/fonts/font-awesome/css/font-awesome.min.css') }}">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme-default.css') }}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/meanmenu.min.css') }}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.transitions.css') }}" type="text/css"
        media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/venobox/venobox.css') }}" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/widget.css') }}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <style>
        .parallax {
            position: relative;
            overflow: hidden;
        }

        .parallax::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            z-index: -1;
        }

        .single_about_thumb_inner:hover img {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body>

    @include('frontend.layouts.header')
    @include('frontend.layouts.navbar')
    @yield('container')
    @include('frontend.layouts.footer')


    <!-- jquery js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/venobox/venobox.js') }}"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/ajax-mail.js') }}"></script>
    <!--  testimonial js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/testimonial.js') }}"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.scrollUp.js') }}"></script>
    <!-- theme js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/theme.js') }}"></script>
    <!-- jquery js -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var flipboxAreas = document.querySelectorAll('.parallax');

            function updateParallax() {
                flipboxAreas.forEach(function(area) {
                    var boundingRect = area.getBoundingClientRect();
                    var offset = window.pageYOffset - boundingRect.top;
                    var speed = 0.5; // Adjust the parallax speed

                    area.style.backgroundPositionY = offset * speed + "px";
                });
            }

            // Initial call to set the background position on page load
            updateParallax();

            // Update the parallax effect on scroll
            window.addEventListener("scroll", updateParallax);
        });
    </script>

</body>

<!-- Mirrored from html.ditsolution.net/techno/index-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 15:40:52 GMT -->

</html>
