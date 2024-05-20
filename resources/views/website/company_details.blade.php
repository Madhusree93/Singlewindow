@extends('website.layouts.layout')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/9.jpg)">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Companies Details</li>
            </ul>
            <h2>Companies Details</h2>
        </div>
    </section>
    <!--End Page Title-->

    <!-- =======================companies details area====================== -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 companies_detailsoutsection">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="companmies_leftsectionout">
                            <img src="images/resource/companies1.jpg" class="icmimg_design">
                            <img src="images/resource/companies2.jpg" class="icmimg_design1">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="companmies_rightsectionout">
                            <h2 class="cnme_textdesign">GET TO KNOW US</h2>
                            <h6 class="cnme_textdesign1">Single Window Industry Pvt. Ltd.</h6>
                            <p class="cmpnydescrptn_text">
                                Purchasing from select family farmers who farm organically because they believe in
                                it and so we do. We are conscious of air miles and our carbon footprint so a lot of
                                our produce comes from Egypt. Lorem ipsum is simply free text used by copytyping
                                refreshing. orem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepte
                                ursint occaecat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum.
                            </p>
                            <ul class="sngllist_outsectionlistd">
                                <li>
                                    <i class="fas fa-history"></i>
                                    <span>
                                        Established on: 1996
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-globe"></i>
                                    <span>
                                        <a href="#" target="_blank">
                                            visit website
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>
                                        Kolkata
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>
                                        + (91) 000 000 0000
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =======================companies details area====================== -->
@endsection
