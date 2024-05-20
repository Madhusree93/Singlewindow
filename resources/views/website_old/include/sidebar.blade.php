<body>

    <!-- Header Area One Start -->
    <header class="header-one sticky">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 top-bar-left">
                        <ul>
                            <li>Call Us: <a href="tel:+91(03224) 255275">+91(03224) 255275</a></li>
                            <li>Email: <a href="mailto:icare_haldia@rediffmail.com">icare_haldia@rediffmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 top-bar-right">
                        <ul>
                            <!-- <li>Fax: <a href="tel:+91 (03224) 252800, 255275">+91 (03224) 252800, 255275</a></li> -->
                            <!-- <li>
                            <select class="select-primary">
                                <option value="English">English </option>
                                <option value="Spanish">Spanish</option>
                                <option value="France">France</option>
                            </select>
                        </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Header Nav Start -->
        <div class="header-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-logo">
                            <a href="{{ route('website.home') }}"><img src="{{ asset('public/website') }}/assets/img/logo/icare-logo.png"
                                    alt=""></a>
                        </div>
                        <div class="header-menu">
                            <ul id="main-menu">
                                <li>
                                    <a href="{{ route('website.home') }}">Home</a>
                                </li>
                                <li>
                                    About Us <i class="fas fa-chevron-down chevron_mobiledesign"></i>
                                    <ul>
                                          <li><a href="{{ route('about_icare') }}"> About Icare</a></li>
                                        <li><a href="{{ route('chairman_desk') }}">Chaiman Desk</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('colleges') }}">Colleges</a>
                                </li>
                                <li>
                                    <a href="{{ route('course') }}">Courses</a>
                                </li>
                                <!-- <li>
                                <a href="{{ route('academics') }}">Academics</a>
                            </li> -->
                                <li>
                                    <a href="{{ route('admission') }}">Admission</a>
                                </li>
                                <li>
                                    Gallery <i class="fas fa-chevron-down chevron_mobiledesign"></i>
                                    <ul>
                                        <li><a href="{{ route('image_gallery') }}">Image Gallery</a></li>
                                        <li><a href="#">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact_us') }}">Contact Us</a>
                                </li>
                            </ul>
                            <ul>

                                <li><a href="#" id="sliding-sidebar-btn"><img
                                            src="{{ asset('public/website') }}/assets/img/icons/cracked-bar.png"
                                            alt=""></a></li>
                            </ul>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
    </header>
    <!-- Header Area One End -->


    <!-- Search Modal Start -->
    <div class="search-modal-wrpr">
        <form class="inline-form-primary form-inline d-flex">
            <input type="text">
            <button type="submit" class="btn button-primary">Search</button>
        </form>
        <span class="close-icon"><img src="{{ asset('public/website') }}/assets/img/icons/cross-light.png"
                alt=""></span>
    </div>
    <!-- Search Modal End -->


    <!-- Sliding Sidebar Start -->
    <div class="sliding-sidebar">
        <span class="close-icon"><img src="{{ asset('public/website') }}/assets/img/icons/cross-dark.png"
                alt=""></span>
        <div class="logo">
            <a href="https://themejunction.net/"><img
                    src="{{ asset('public/website') }}/assets/img/logo/logo-icare.png" alt=""></a>
        </div>
        <div class="about">
            <h3>About Us</h3>
            <img src="{{ asset('public/website') }}/assets/img/sidebar-image.jpg" alt="">
            <p>Indian Center for Advance - ment of Research and Education, Haldia (ICARE) set up in 1995, is a
                non-profit making voluntary organization.</p>
            <a href="{{ route('about_icare') }}"><button class="btn button-primary">Read More</button></a>
        </div>
        <div class="contact">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-5">
                        <strong>Phone:</strong> <a href="tel:+91(03224) 255275">+91(03224) 255275</a>
                    </div>
                    <div class="col-7">
                        <strong>Email:</strong> <a
                            href="mailto:contactus@icare-haldia.org">contactus@icare-haldia.org</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <strong>Address:</strong> ICARE Complex, HIT Campus, P.O.-Hatiberia, Haldia
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sliding Sidebar End -->


    <!-- Body Overlay Start -->
    <div class="body-overlay"></div>
    <!-- Body Overlay End -->
