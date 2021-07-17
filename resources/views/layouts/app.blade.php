<!DOCTYPE html>
<html class="no-js" lang="ar">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>

    <!-- Google Fonts
		============================================ -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700"
        rel="stylesheet"
        type="text/css"
    />

    <!-- Style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('school/style.css')}}"/>

    <!-- Modernizr JS
		============================================ -->
    <script src="{{asset('school/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
<!--Header Area Start-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <div class="header-top-info">
                        <span>Open hours: 8.00AM-4.00PM Sun-Thu</span>
                        <div class="social-links">
                            <a href="https://www.facebook.com/%D9%85%D8%AF%D8%B1%D8%B3%D8%A9-%D8%A3%D9%83%D8%A7%D8%AF%D9%8A%D9%85%D9%8A%D8%A9-%D8%B1%D9%88%D8%A7%D8%AF-%D8%A7%D9%84%D8%B1%D9%85%D9%84%D8%A9-%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%88%D9%8A%D8%A9-175053893054727"
                               target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu sticker">
        <div class="container">
            <div class="logo-menu-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo">
                            <a href="{{route('home')}}"
                            ><img src="img/logo/logo(2).png" alt="RAMLA SCHOOL" style="max-width: 40%"
                                /></a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="mainmenu-area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current">
                                            <a href="{{route('home')}}">Home </a>
                                        </li>
                                        <li><a href="{{route('about')}}">About us</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Logo Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="current">
                                    <a href="{{route('home')}}">Home </a>
                                </li>
                                <li><a href="{{route('about')}}">About us</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>

@yield('content')

<!--Footer Area Start-->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-info-container text-center section-padding">
                    <div class="footer-logo">
                        <a href="{{route('home')}}"><img src="img/logo/logo(2).png" alt="" style="width: 10rem;"/></a>
                    </div>
                    <div class="footer-info">
                <span><i class="fa fa-map-marker"></i><a target="_blank"
                                                         href="https://www.google.com/maps/place/Ramla+School+Pioneers+Academy/@31.9738419,35.916233,20z/data=!4m18!1m12!4m11!1m6!1m2!1s0x151b5ff63ece2075:0x273dd8a0d0a7e27b!2sRamla+School+Pioneers+Academy!2m2!1d35.9163565!2d31.9738597!1m3!2m2!1d35.9163551!2d31.973917!3m4!1s0x151b5ff63ece2075:0x273dd8a0d0a7e27b!8m2!3d31.9738597!4d35.9163565?hl=en-US">
                        Jabal Al Hussein, Amman</a></span>
                        <span>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:Ramleh.school@yahoo.com">Ramleh.school@yahoo.com</a>
                        </span>
                        <span
                        ><i class="fa fa-envelope"></i><a href="mailto:info@alramlehschool.edu.jo">info@alramlehschool.edu.jo</a></span
                        >
                        <span><i class="fa fa-phone"></i><a href="tel:065664626">(+962) 6 566 4626</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-container">
                    <div class="row">
                        <div class="col-lg-6">
                  <span
                  >&copy; 2021
                    <a href="https://www.codexjo.com" target="_blank">CodexJo</a>. All
                    rights reserved</span>
                        </div>
                        <div class="col-lg-6">
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Footer Area-->

<!-- jquery
    ============================================ -->
<script src="{{asset('school/js/vendor/jquery-1.12.3.min.js')}}"></script>

<!-- Popper JS
    ============================================ -->
<script src="{{asset('school/js/popper.js')}}"></script>

<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('school/js/bootstrap.min.js')}}"></script>

<!-- bootstrap Toggle JS
    ============================================ -->
<script src="{{asset('school/js/bootstrap-toggle.min.js')}}"></script>

<!-- nivo slider js
    ============================================ -->
<script src="{{asset('school/lib/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('school/lib/nivo-slider/home.js')}}"></script>

<!-- wow JS
    ============================================ -->
<script src="{{asset('school/js/wow.min.js')}}"></script>

<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('school/js/jquery.meanmenu.js')}}"></script>

<!-- Owl carousel JS
    ============================================ -->
<script src="{{asset('school/js/owl.carousel.min.js')}}"></script>

<!-- Countdown JS
    ============================================ -->
<script src="{{asset('school/js/jquery.countdown.min.js')}}"></script>

<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('school/js/jquery.scrollUp.min.js')}}"></script>

<!-- Waypoints JS
    ============================================ -->
<script src="{{asset('school/js/waypoints.min.js')}}"></script>

<!-- Counterup JS
    ============================================ -->
<script src="{{asset('school/js/jquery.counterup.min.js')}}"></script>

<!-- Slick JS
    ============================================ -->
<script src="{{asset('school/js/slick.min.js')}}"></script>

<!-- Mix It Up JS
    ============================================ -->
<script src="{{asset('school/js/jquery.mixitup.js')}}"></script>

<!-- Venubox JS
    ============================================ -->
<script src="{{asset('school/js/venobox.min.js')}}"></script>

<!-- plugins JS
    ============================================ -->
<script src="{{asset('school/js/plugins.js')}}"></script>

<!-- Google Map js
    ============================================ -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4t4A_BFODGGlnnUKf1WGHJDkflzawOQA"></script>
<script src="https://www.google.com/jsapi"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(31.97391700744629, 35.91635513305664),
        };

        var map = new google.maps.Map(
            document.getElementById("googleMap"),
            mapOptions
        );

        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            icon: "img/map-marker.png",
            map: map,
        });
    }

    google.maps.event.addDomListener(window, "load", initialize);
</script>

<!-- main JS
    ============================================ -->
<script src="{{asset('school/js/main.js')}}"></script>
</body>
</html>
