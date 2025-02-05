<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>Firstreach Logistics Express & Cargo Services  </title>
    <!-- Stylesheets -->
    <link href="{{ asset('dist/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('dist/front/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset('dist/front/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset('dist/front/css/style.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('dist/front/images/logo-2.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Custom CSS -->
    <!-- Custom CSS -->
    <style>
        .tracking-card {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* padding: 2rem; */
            color: black;
        }

        .tracking-card h1 {
            font-size: 1rem;
            font-weight: bolder;
            margin-bottom: 1.5rem;
        }

        .shipment-details {
            margin-top: ;
            padding: .5rem;
        }

        .shipment-details .card {
            background: rgba(255, 255, 255, 0.1) !important;
            border: none;
            border-radius: 10px;
            font-weight: bolder;
            margin-bottom: 1rem;
        }

        .shipment-details .card h3 {
            font-size: 1rem;
            font-family: inherit;
            font-weight: bolder;
            margin-bottom: 1.5rem;
        }

        .shipment-details .card p {
            margin: 0.5rem 0;
            font-weight: medium;
        }

        .history-list {
            list-style: none;
            padding: 0;
        }

        .history-list li {
            margin-bottom: 0.75rem;
            font-size: 1rem;
        }
    </style>

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one" id="home">
                                        <div class="p-2">
                                            <div href="#" id="google_translate_element"></div>
                                        </div>
            <!-- Header Top -->
            <div class="header-top">
                <div class="bg-lines"></div>
                <div class="inner-container">
                    <div class="top-left">
                        <ul class="social-icon-one light">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>

                        </ul>
                    </div>
                    <div class="top-right">
                        <!-- Info List -->
                        <ul class="list-style-one light">
                            <li><i class="far fa-clock"></i> Mon - Fri: 09.00am - 10.00pm</li>
                            <li><i class="fa fa-map-marker-alt"></i> 1300-1398 67th St
                            1300-1398 67th St, Brooklyn, NY 11219</li>
                            <li><i class="far fa-envelope"></i> <a href="mailto:support@firstreachlogistics.com"><span class="__cf_email__"
                                        data-cfemail="">support@firstreachlogistics.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header Top -->

            <div class="header-lower style-two">
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ route("home") }}" title="">
                                <img alt="" title="TransGo+" data-cfsrc="{{ asset('dist/front/images/logo-2.png') }}"
                                    style="">
                                <img class="w-50" src="{{ asset('dist/front/images/logo-2.png') }}" alt=""
                                    title="firstreach">
                            </a>
                        </div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">

                            <ul class="navigation onepage-nav">
                                <li class="{{ Route::currentRouteName() == 'home' ? 'current' : ''  }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li><a class="{{ Route::currentRouteName() == 'service' ? 'current' : ''  }}"
                                        href="{{ route("services") }}">Services</a></li>
                                <li><a class="{{ Route::currentRouteName() == 'about' ? 'current' : ''  }}"
                                        href="{{ route("about") }}">About</a></li>
                                <li><a class="{{ Route::currentRouteName() == 'contact' ? 'current' : ''  }}"
                                        href="{{ route('contact') }}">Contact</a></li>
                                <li><a class="{{ Route::currentRouteName() == 'contact' ? 'current' : ''  }}"
                                        href="{{ route('shipment.tracking') }}">Track Shipment</a></li>

                            </ul>
                        </nav>
                    </div>
                    <!-- Main Menu End-->


                    <!-- Outer Box -->
                    <div class="outer-box">
                        <!-- Header Search -->

                        <div class="header-search">
                            <a class="btn btn-danger btn-md" href="{{ route('shipment.tracking') }}">
                                Track Shipment
                            </a>
                        </div>
                        <!-- Info Btn -->
                        <div class="btn-box">
                            <!-- Info Btn -->
                            <a href="tel:+3655540069" class="info-btn-two"> <i class="icon fa fa-phone"></i> <small>Make
                                    a Call</small> <strong>+36 55 540 069</strong> </a>
                        </div>
                        <!-- Mobile Nav toggler -->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="upper-box">
                        <div class="nav-logo"><a href="index-2.html"><img alt="" title=""
                                    data-cfsrc="{{ asset('dist/front/images/logo-2.png') }}"
                                    style="display:none;visibility:hidden;">
                                <img src="{{ asset('dist/front/images/logo-2.png') }}" alt="" title="">
                            </a></div>
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>
                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                    <ul class="contact-list-one light">
                        <li> <i class="icon lnr-icon-phone-handset"></i> <span class="title">Chat Us</span>
                            <div class="text"><a href="https://wa.me/+92880098670">+92 (8800) - 98670</a></div>
                        </li>
                        <li> <i class="icon lnr-icon-envelope1"></i> <span class="title">Send Email</span>
                            <div class="text"><a
                                    href=""><span
                                        class="__cf_email__"
                                        data-cfemail="">support@firstreachlogistics.com</span></a>
                            </div>
                        </li>
                        <li> <i class="icon lnr-icon-map-marker"></i> <span class="title">Address</span>
                            <div class="text">1300-1398 67th St
                            1300-1398 67th St, Brooklyn, NY 11219</div>
                        </li>
                    </ul>
                    <ul class="social-links">

                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->


            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo">
                            <a href="{{ route("home") }}" title=""><img alt="" title=""
                                    data-cfsrc="{{ asset('dist/front/images/logo-2.png') }}"
                                    style="display:none;visibility:hidden;"><img
                                    src="{{ asset('dist/front/images/logo-2.png') }}" alt="" title=""></a>
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
                            </nav>
                            <!-- Main Menu End-->

                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->
        </header>
        <!--End Main Header -->

        {{ $slot }}

        <!--End News Section -->
        <!-- Main Footer -->
        <footer class="main-footer footer-style-one">
            <div class="bg-pattern-2 bounce-y"></div>

            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row align-items-center">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="widget-content">
                                    <div class="logo">
                                        <a href="{{ route("home") }}">
                                            <img alt="Logo" data-cfsrc="{{ asset("dist/front/images/-2.png") }}"
                                                style="display:none;visibility:hidden;">
                                            <img src="{{ asset("dist/front/images/logo-2.png") }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="text">With proven experience providing solutions to
                                        large-scale enterprises throughout the globe</div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-2 offset-lg-1 col-md-6 col-sm-6">
                            <div class="footer-widget links-widget">
                                <h5 class="widget-title">Quick Links</h5>
                                <div class="widget-content">
                                    <ul class="user-links">
                                        <li><a href="{{ route("home") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Home</a>
                                        </li>
                                        <li><a href="{{ route("services") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Services</a></li>
                                        <li><a href="{{ route("about") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                About
                                                Us</a></li>

                                        <li><a href="{{ route("contact") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-widget links-widget">
                                <h5 class="widget-title">Services</h5>
                                <div class="widget-content">
                                    <ul class="user-links">
                                        <li><a href="{{ route("services") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Air
                                                Fright</a></li>
                                        <li><a href="{{ route("services") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Ocean
                                                Fright</a></li>
                                        <li><a href="{{ route("services") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Road
                                                Fright</a></li>
                                        <li><a href="{{ route("services") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Warehouse</a></li>
                                        <li><a href={{ route("services") }}"><i class="fa fa-solid fa-angle-right"></i>
                                                Transport</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h5 class="widget-title">Newsletter</h5>
                                <div class="widget-content">
                                    <div class="subscribe-form">
                                        <div class="text">Sign up for alerts, our latest blogs, <br />thoughts, and
                                            insights.</div>
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <input type="email" name="email" class="email" value=""
                                                    placeholder="Your Email" required="">
                                                <button type="button" class="theme-btn2"><span class="btn-title"><i
                                                            class="fa fa-paper-plane"></i></span></button>
                                                <i class="icon fa fa-regular fa-envelope"></i>
                                            </div>
                                        </form>
                                        <button class="theme-btn btn-style-one hvr-light" type="submit"
                                            name="submit-form"><span class="btn-title">SUBSCRIBE
                                                NOW</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="copyright-text">© Copyrights 2024 FirstReach Logistics All rights reserved.</div>
                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer -->

    </div><!-- End Page Wrapper -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{ asset('dist/front/js/jquery.js') }}"></script>
    <script src="{{ asset('dist/front/js/popper.min.js') }}"></>
            <!--Revolution Slider-->
            <script src="{{ asset('dist/front/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('dist/front/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script
        src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script
        src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script
        src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script
        src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('dist/front/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('dist/front/js/main-slider-script.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('dist/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/front/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('dist/front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('dist/front/js/wow.js') }}"></script>
    <script src="{{ asset('dist/front/js/appear.js') }}"></script>
    <script src="{{ asset('dist/front/js/select2.min.js') }}"></script>
    <script src="{{ asset('dist/front/js/swiper.min.js') }}"></script>
    <script src="{{ asset('dist/front/js/bxslider.js') }}"></script>
    <script src="{{ asset('dist/front/js/owl.js') }}"></script>
    <script src="{{ asset('dist/front/js/mixitup.js') }}"></script>
    <script src="{{ asset('dist/front/ntro/intro.js') }}"></script>
    <script src="{{ asset('dist/front/js/script.js') }}"></script>
