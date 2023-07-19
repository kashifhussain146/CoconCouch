{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    @stack('css')
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Main Header-->
    <header class="main-header header-style-two">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="top-left">
                        <div class="text">First 20 students get 50% discount. Hurry up!</div>
                    </div>

                    <div class="top-right">
                        <ul class="useful-links">
                            <li><a href="#">Login</a></li>
                        </ul>

                        <ul class="social-icon-one light">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt="" title="Tronis"></a></div>
                    </div>

                    <ul class="contact-info-outer">
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <i class="icon lnr-icon-phone-handset"></i>
                                <span class="title">Call Anytime</span>
                                <a href="tel:+919748093320" class="text">+91 9748093320</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <i class="icon lnr-icon-envelope"></i>
                                <span class="title">Send Email</span>
                                <a href="mailto:learn@coachoncouch.com" class="text">learn@coachoncouch.com</a>
                            </div>
                        </li>
                        <li>
                            <!-- Contact Info Box -->
                            <div class="contact-info-box">
                                <i class="icon lnr-icon-map"></i>
                                <span class="title"> 12th Cross, Wilson Garden</span>
                                <div class="text"> Bangalore, Karnataka</div>
                            </div>
                        </li>
                    </ul>

                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->


        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <!-- Main box -->
                <div class="main-box">
                    <!--Nav Box-->
                    <div class="nav-outer">

                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li class="current"><a href="">Home</a>
                                </li>
                                <li class=""><a href="#">About Us</a>
                                </li>
                                <li class=""><a href="#">Assignment Help</a></li>
                                <li class=""><a href="#">Take My Online Class</a></li>
                                <li class=""><a href="#">Solution Library</a></li>
                                <li class=""><a href="#">Services</a></li>
                                <!-- <li class=""><a href="#">Get a Quote</a></li> -->

                                <!-- <ul>
                                    <li><a href="page-courses.html">Courses List</a></li>
                                    <li><a href="page-course-details.html">Course Details</a></li>
                                </ul> -->
                                </li>

                            </ul>
                        </nav>
                        <!-- Main Menu End-->

                    </div>
                </div>
                <!-- End Main Box -->
            </div>
        </div>
        <!-- Header Lower -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/logo-2.png') }}"
                                alt="" title=""></a>
                    </div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>

                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
                <ul class="contact-list-one">
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:+92880098670">+92 (8800) - 98670</a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Send Email</span>
                            <a href="mailto:help@company.com">help@company.com</a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock"></span>
                            <span class="title">Send Email</span>
                            Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                        </div>
                    </li>
                </ul>


                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <a href="index.html" title=""><img src="{{ asset('assets/images/logo.png') }}"
                                alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

    </header>
    <!--End Main Header -->


    @yield('content')


    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="bg-image zoom-two"></div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Footer Column-->
                    <div class="footer-column col-xl-4 col-lg-12 col-md-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                            </div>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.Lorem Ipsum is simply dummy text of the printing .
                            </div>

                            <ul class="social-icon-two">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="btn-box">
                                <a href="" class="theme-btn btn-style-one footer-btn"><span
                                        class="btn-title">Contact
                                        With Us</span></a>
                                <span class="float-icon icon-arrow"></span>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-xl-2 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Subjects</h4>
                            <ul class="user-links">
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">News & Articles</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Sign In/Registration</a></li>
                                <li><a href="#">Coming Soon</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-xl-2 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="user-links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Instructor</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Instructor Profile</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget contact-widget">
                            <h4 class="widget-title">Get Contact</h4>
                            <div class="widget-content">
                                <ul class="contact-info">
                                    <li>
                                        <p>Phone:</p> <a href="tel:++919748093320">+91 9748093320</a>
                                    </li>
                                    <li>
                                        <p>Email:</p> <a
                                            href="mailto:learn@coachoncouch.com">learn@coachoncouch.com</a>
                                    </li>
                                </ul>
                                <div class="subscribe-form">

                                    <h4 class="widget-title">Newsletter</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing .
                                    </p>
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="email" name="email" class="email" value=""
                                                placeholder="Email Address" required="">
                                            <button type="button" class="theme-btn btn-style-one"><i
                                                    class="fa fa-long-arrow-alt-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright-text">&copy; Copyright 2023 by <a href="">CoachOnCouch</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="bottom-link">Terms of Use |</a>
                        <a class="bottom-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer -->


    <script src="{{ asset('assets/index.js') }}"></script>
    <script src="https://kit.fontawesome.com/0172345ae2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @stack('js')
</body>

</html>
