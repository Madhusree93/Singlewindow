@extends('website.layouts.app')
@section('header')
    @include('website.include.header')
@endsection
@section('body')
    @include('website.include.body')
@endsection
@section('sidebar')
    @include('website.include.sidebar')
@endsection
@section('content')
    <!-- Page Header Section Start -->
    <section id="page-header-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Single Window</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>></li>
                        <li><a href="#">About Single Window</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header Section End -->

    <!-- ================about ICARE area============== -->
    <section id="about-section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="about-section-left">
                        <div class="image-box">
                            <img src="{{ asset('public/website') }}/assets/img/about-section/aboutback-1.jpg"
                                alt="">
                        </div>
                        <div class="text-box">
                            <p class="years-of-success"><span class="knockout">28</span><br>Years of success</p>
                        </div>

                        <ul class="pgwSlider">
                            <li><img src="{{ asset('public/website') }}/assets/img/about-section/about-section1.jpg"
                                    alt=""></li>
                            <li><img src="{{ asset('public/website') }}/assets/img/about-section/about-section2.jpg"
                                    alt=""></li>
                            <li><img src="{{ asset('public/website') }}/assets/img/about-section/about-section3.jpg"
                                    alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="about-section-right">
                        <small class="small-primary">About <span>ICARE</span></small>
                        <h2>Indian Center for Advancement of Research and Education, Haldia (ICARE)</h2>
                        <!-- <p class="lead">We believe the designer will be able to design a good for learnin suides lead through</p> -->
                        <p>set up in 1995, is a non-profit making voluntary organisation registered under Societies
                            Registration Act 1961. ICARE is dedicated to promote, establish, run & maintain educational
                            institutions of excellence to keep pace with the rapid industrial development in this region.
                        </p>
                        <p>This society is managed by a Board of Governors comprising of eminent personalities who are great
                            visionaries.Thesociety aims at creating a modern education centre of excellence in Haldia,
                            provide value based education of international standards and with a motto to march ahead to
                            build an ideally developed Haldia. </p>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                                                                                <div class="col-lg-6">
                                                                                     <div class="aboutmission_outsection">
                                                                                        <img src="{{ asset('public/website') }}/assets/img/about-section/rabindranath-small.jpg"
                                                                                        alt="">
                                                                                     </div>
                                                                                </div>
                                                                            </div> -->
        </div>
    </section>
    <!-- ================about ICARE area============== -->
    <!-- ================mission-vision============== -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-header">
                    <h2>Mission</h2>
                </div>
                <div class="para">
                    <ul>
                        <li><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;To establish and run institutions of higher
                            education
                            in engineering,
                            technology, management, paramedical, medical and other professional courses
                            with the aim of making the Haldia a center for education and training to
                            enable the students to pursue careers of their choice and to obviate the
                            need to travel long distances for fulfilling their aspirations and to
                            enable them to meet the challenge of globalization by fully utilizing the
                            facilities created by ICARE as a gateway to a bright future.</li>
                        <li><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;To develop world class infrastructural
                            facilities in
                            the education sector
                            to supplement existing infrastructure for facilitating rapid industrial
                            development of the region.</li>
                        <li><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;To create a modern education centre of
                            international
                            standard.</li>
                        <li><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;To arrange for a wide range of high quality
                            educational
                            and training
                            opportunities and have a proper Industry- Institution partnership.</li>
                        <li><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;To provide affordable education to all and
                            to grant
                            scholarships to needy,
                            talented and deserving students.</li>
                        <li> <i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;To groom students to become enlightened
                            citizens
                            sensitive to the needs of
                            the society and good human being with leadership quality.</li>
                        <li><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;To participate in various social welfare
                            activities,
                            relief work, health services etc.
                            individually,
                            as well as with other NGOs, for upliftmen for the needy and the poor.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="misionimg">
                    <img src="{{ asset('public/website') }}/assets/img/about-section/rabindranath-small.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="section-header">
                <h2>Vission</h2>


            </div>
            <div class="col-lg-12">
                <p class="missionpara">To be a leading organization for providing education in the fields of technology,
                    management,
                    medical, paramedical science etc., for the socio-economic development of the region creating centers
                    of excellence in education so as to provide value based education of international standards to all
                    segments of society and to stand by the weaker segments of society.

                </p>
            </div>
        </div>
    </div>
    <!-- ================mission-vision============== -->

    <!-- =========================others institute=================== -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 others_instituteoutsection">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <h2>Other Institutes</h2>
                        </div>
                    </div>
                </div>
                <section class="customer-logos slider">
                    <div class="slide">
                        <img src="{{ asset('public/website') }}/assets/img/our-clients/clg-1.png">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/website') }}/assets/img/our-clients/clg-2.png">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/website') }}/assets/img/our-clients/clg-3.png">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/website') }}/assets/img/our-clients/clg-4.png">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/website') }}/assets/img/our-clients/clg-5.png">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/website') }}/assets/img/our-clients/clg-6.png">
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- =========================others institute=================== -->
@endsection
@section('footer')
    @include('website.include.footer')
@endsection
