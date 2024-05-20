
<?php
$contact= DB::table('settings')->where('id',1)->first();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Single Window Industry Pvt. Ltd.</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('public/website') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('public/website') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('public/website') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('public/website') }}/css/lightbox.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('public/website') }}/images/logo.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <div class="cursor"></div>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span><span data-text-preloader="W" class="letters-loading">
                                W
                            </span>
                            </span><span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            </span><span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            </span><span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                            </span><span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            </span><span data-text-preloader="W" class="letters-loading">
                                W
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Vertical Lines Start -->
        <div class="vertical-lines-wrapper">
            <div class="vertical-lines">
                <div class="vertical-effect"></div>
                <div class="vertical-effect"></div>
                <div class="vertical-effect"></div>
                <div class="vertical-effect"></div>
                <div class="vertical-effect"></div>
                <div class="vertical-effect"></div>
            </div>
        </div>
        <!-- End Vertical Lines Start -->

        <!-- scrollToTop start -->
        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
                </path>
            </svg>
        </div>
        <!-- scrollToTop end -->

        <!-- Main Header-->
        <header class="main-header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        <!-- Top Left -->
                        <div class="top-left">
                            <div class="text">Welcome to our <a href="#">Single Window</a> Company!</div>
                        </div>

                        <!-- Top Right -->
                        <div class="top-right pull-right">
                            <!-- <div class="clock">We'are Open: Mon - Sat 10:00AM - 7:00PM</div> -->
                            <div class="social-box">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo"><a href="{{ url('/') }}"><img
                                        src="{{ asset('public/website') }}/images/logo.png" alt=""
                                        title="" class="newimg"></a></div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-telephone"></span></div>
                                <ul>
                                    <li><strong>Call Us for help!</strong></li>
                                    <li><a class="fs_22 fw_medium" href="tel:{{$contact->phone}}">{{$contact->phone}}</a></li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <!-- <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                                <ul>
                                    <li><strong>Reach Us</strong></li>
                                    <li>{{$contact->address}}</li>
                                </ul>
                            </div> -->

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-message"></span></div>
                                <ul>
                                    <li><strong>Mail Us</strong></li>
                                    <li><a class="fs_20" href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End Header Upper -->

            <!-- Header Upper -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="inner-container clearfix">

                        <div class="nav-outer">
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('companies') }}">Our companies</a></li>
                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">

                                <!-- Search Btn -->
                                <div class="search-box-btn search-box-outer"><span class="icon flaticon-loupe"></span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="{{ url('/') }}" title=""><img
                                src="{{ asset('public/website') }}/images/logo.png" alt=""
                                title="" class="newimg"></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->

                        </nav><!-- Main Menu End-->

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>

                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-close"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ url('/') }}"><img src="images/logo.png" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->



        @yield('content')



        <!-- Footer Style Two -->
        <footer class="main-footer"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-12.png)">
            <div class="container">
                <!-- Widgets Section -->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!-- Footer Column -->
                        <div class="footer-column col-lg-4">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img
                                            src="{{ asset('public/website') }}/images/logo-footer.png" alt="" /></a>
                                </div>
                                <div class="text">Single Window EXIM Pvt. Ltd. is a pioneering force in the biscuit
                                    and cookie industry, dedicated to crafting exceptional products through innovation,
                                    sustainability, and customer satisfaction.</div>
                                <a href="{{ route('about') }}" class="theme-btn about-btn">About us</a>
                                <ul class="socialftr_arealnk">
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom_ftrhdng">
                                <h4 class="qlnks_hdng">Quick Links</h4>
                                <ul class="fter_pglnkarea">
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="{{ route('about') }}">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="{{ route('companies') }}">
                                            Our Companies
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="{{route('gallery')}}">
                                            Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="{{ route('blog') }}">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom_ftrhdng">
                                <h4 class="qlnks_hdng">Our Products</h4>
                                <ul class="fter_pglnkarea">
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#">
                                           Green Vegetables
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#">
                                          Biscuits
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i>
                                        <a href="#">
                                           Cake
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3">
                            <div class="nwsltr_outsection">
                                <h4 class="qlnks_hdng">Newsletter</h4>
                                <p class="sontext_design">
                                    Subscribe our newsletter to get our latest update & news
                                </p>
                                <div class="email-box">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <input type="email" name="search-field" value=""
                                                placeholder="Your mail address" required>
                                            <button type="submit"><span class="icon flaticon-send"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-4">
                            <div class="nwsltr_outsection">
                                <h4 class="qlnks_hdng">Contact Us</h4>
                                <div class="footer-widget contact-widget jlstftr_area">
                                    <ul class="contact-list">
                                        <li>
                                            <span class="icon fa fa-map"></span>
                                            {{$contact->address}}
                                        </li>
                                        <li>
                                            <span class="icon fa fa-envelope"></span><a class="fs_20" href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                                        </li>
                                        <li>
                                            <span class="icon fa fa-phone"></span><a class="fs_22 fw_medium" href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="copyright">&copy; 2024 Copyright Single Window Industry Pvt. Ltd. All Rights Reserved
                        ||
                        design & developed by <a href="https://devantitsolutions.com/" target="_blank">DITS</a></div>
                </div>
            </div>
        </footer>


    </div>
    <!--End pagewrapper-->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="fa fa-remove"></span></button>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <script src="{{ asset('public/website') }}/js/jquery.js"></script>
    <script src="{{ asset('public/website') }}/js/popper.min.js"></script>
    <script src="{{ asset('public/website') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/website') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('public/website') }}/js/magnific-popup.min.js"></script>
    <script src="{{ asset('public/website') }}/js/appear.js"></script>
    <script src="{{ asset('public/website') }}/js/parallax.min.js"></script>
    <script src="{{ asset('public/website') }}/js/tilt.jquery.min.js"></script>
    <script src="{{ asset('public/website') }}/js/jquery.paroller.min.js"></script>
    <script src="{{ asset('public/website') }}/js/owl.js"></script>
    <script src="{{ asset('public/website') }}/js/wow.js"></script>
    <script src="{{ asset('public/website') }}/js/odometer.js"></script>
    <script src="{{ asset('public/website') }}/js/backToTop.js"></script>
    <script src="{{ asset('public/website') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('public/website') }}/js/cursor-script.js"></script>
    <script src="{{ asset('public/website') }}/js/script.js"></script>
    <script src="{{ asset('public/website') }}/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.portfolio-item').isotope(function() {
                itemSelector: '.item'
            });
            $('.portfolio-menu ul li').click(function() {
                $('.portfolio-menu ul li').removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $('.portfolio-item').isotope({
                    filter: selector
                })
                return false;
            });
        });
    </script>
</body>

</html>
