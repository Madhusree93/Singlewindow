@extends('website.layouts.layout')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{ asset('public/website') }}/images/background/9.jpg)">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ul>
            <h2>About Us</h2>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="big-text">Assessments</div>
                            <div class="title">About our Company</div>
                            <h2>Building a more competitive business sectors.</h2>
                            <div class="text">M/s Single Window EXIM Pvt. Ltd. has been promoted by Mr. Arupayan Dutta &
                                Ms. Chaitali Dutta
                                as an Export Company of Green Vegetables. It is classified as a private limited company and
                                is in
                                Kolkata, West Bengal. journey through the years has been full of milestones, growth and
                                pushing the boundaries often.
                                With many firsts to its credit, SWEPL has constantly strived to not just grow as an
                                organization but also
                                set an industry benchmark. Keeping up with world-wide technological developments in the
                                logistics
                                industry, SWEPL has been investing extensively in ramping up its infrastructure, since it is
                                the
                                backbone for holding together the operational service excellence. </div>
                            {{-- <div class="text">New analytic tools can help manufacturers in labor-intensive sectors <br>
                                boost productivity and earnings by double-digit on It is a secure and <br> simple on-demand,
                                the total percentages.</div> --}}
                        </div>
                        <div class="row clearfix">

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-engineer"></span>
                                    <h5>Strengthening society</h5>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-customer-support"></span>
                                    <h5>Driving the economy</h5>
                                </div>
                            </div>

                        </div>
                        <!-- Lower Box -->
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Counter Box -->
                        <div class="counter-box">
                            <div class="row clearfix">
                                <!-- Counter Column -->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12">
                                    <h2><span class="odometer" data-count="3010"></span>+</h2>
                                    <div class="counter-text">Satisfied Clients</div>
                                </div>
                                <!-- Counter Column -->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12">
                                    <h2><span class="odometer" data-count="528"></span>+</h2>
                                    <div class="counter-text">Active Projects</div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ asset('public/website') }}/images/resource/about.jpg" alt="" />
                            <div class="circle-layer"
                                style="background-image:url({{ asset('public/website') }}/images/resource/about-circle.png)">
                            </div>
                            <span class="gear-icon-one flaticon-gear"></span>
                            <span class="gear-icon-two flaticon-gear"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ===========================mission & vision section================== -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mvs_jmainoutsection">
                <div class="row">
                    <div class="col-lg-6 mvs_mainleftoutsection">
                        <h1 class="oumtext_design">Our Mission</h1>
                        <p class="sfmv_textdesign">
                            Empowering Single Window EXIM Private Limited to revolutionize the biscuit and cookie industry
                            through innovative production methods, sustainable practices, and cutting-edge technology. Our
                            mission is to deliver high-quality products that delight consumers while prioritizing ingredient
                            sourcing, operational efficiency, and market leadership. With a commitment to growth,
                            excellence, and customer satisfaction, we aim to set new standards in the industry and drive
                            sustainable success for our stakeholders. We strive to foster a culture of continuous
                            improvement, employee development, and community engagement, creating a positive impact on
                            society and the environment. Our relentless pursuit of excellence and ethical business practices
                            underpins our mission to be a trusted, responsible, and forward-thinking leader in the food
                            industry.
                        </p>
                    </div>
                    <div class="col-lg-6 mvs_mainrightoutsection">
                        <img src="{{ asset('public/website') }}/images/resource/mission.jpg" class="jmn_imgdesign">
                    </div>
                    <div class="col-lg-6 mvs_mainrightoutsection">
                        <img src="{{ asset('public/website') }}/images/resource/vision.jpg" class="jmn_imgdesign">
                    </div>
                    <div class="col-lg-6 mvs_mainleftoutsection">
                        <h1 class="oumtext_design1">Our Vision</h1>
                        <p class="sfmv_textdesign1">
                            To be the foremost innovator and market leader in the biscuit and cookie industry, setting
                            benchmarks for quality, sustainability, and customer satisfaction. Our vision is to create a
                            global footprint, leveraging advanced technologies and strategic partnerships to expand our
                            product offerings and reach new markets. We aspire to be recognized as a beacon of excellence,
                            driving positive change in the industry while upholding our commitment to environmental
                            stewardship and social responsibility. Through visionary leadership, relentless innovation, and
                            a customer-centric approach, we aim to shape the future of the food industry and inspire a
                            healthier, more flavorful world. Embracing diversity, fostering a culture of inclusivity, and
                            promoting employee well-being are integral to our vision of building a harmonious,
                            forward-thinking organization that thrives on creativity, collaboration, and sustainable growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========================mission & vision section================== -->
@endsection
