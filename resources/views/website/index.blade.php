@extends('website.layouts.layout')
@section('content')
<?php
    $gallery_category=DB::table('gallery_tabs')->where('status','=',1)->get();
    $gallery=DB::table('galleries')->where('status','=',1)->get();
    $blog=DB::table('blogs')->get();
?>
    <!-- Main Slider Section -->
    <section class="main-slider">
        <div class="main-slider-carousel owl-theme owl-carousel">

            <!-- Slide 01 -->
            <div class="slide">
                <div class="image-layer"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/image-1.jpg)"></div>
                <div class="pattern-layer"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/pattern-1.png)"></div>
                <div class="pattern-layer-two"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/pattern-2.png)"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <h1>Transforming the Biscuit and Cookie Industry from Dough to Delight.</h1>
                            <div class="text">Single Window EXIM Pvt. Ltd. is a pioneering force in the biscuit and cookie
                                industry, dedicated to crafting exceptional products through innovation, sustainability, and
                                customer satisfaction.</div>
                            <div class="button-box">
                                <a class="btn-style-one theme-btn" href="{{ route('companies') }}"><span class="txt">Our
                                        Companies <i class="arrow fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slide 01 -->

            <!-- Slide 02 -->
            <div class="slide">
                <div class="image-layer"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/image-1.jpg)"></div>
                <div class="pattern-layer"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/pattern-1.png)"></div>
                <div class="pattern-layer-two"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/pattern-2.png)"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <h1>Transforming the Biscuit and Cookie Industry from Dough to Delight.</h1>
                            <div class="text">Single Window EXIM Pvt. Ltd. is a pioneering force in the biscuit and cookie
                                industry, dedicated to crafting exceptional products through innovation, sustainability, and
                                customer satisfaction.</div>
                            <div class="button-box">
                                <a class="btn-style-one theme-btn" href="#"><span class="txt">Our
                                        Companies <i class="arrow fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slide 02 -->

            <!-- Slide 03 -->
            <div class="slide">
                <div class="image-layer"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/image-1.jpg)"></div>
                <div class="pattern-layer"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/pattern-1.png)"></div>
                <div class="pattern-layer-two"
                    style="background-image:url({{ asset('public/website') }}/images/main-slider/pattern-2.png)"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <h1>Transforming the Biscuit and Cookie Industry from Dough to Delight.</h1>
                            <div class="text">Single Window EXIM Pvt. Ltd. is a pioneering force in the biscuit and cookie
                                industry, dedicated to crafting exceptional products through innovation, sustainability, and
                                customer satisfaction.</div>
                            <div class="button-box">
                                <a class="btn-style-one theme-btn" href="#"><span class="txt">Our
                                        Companies <i class="arrow fa fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slide 03 -->

        </div>
    </section>
    <!-- End Main Slider Section -->

    <!-- Main Slider Service Section -->
    <section class="service-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="shape-one"
                                style="background-image:url({{ asset('public/website') }}/images/icons/shape-1.png)"></div>
                            <div class="shape-two"
                                style="background-image:url({{ asset('public/website') }}/images/icons/shape-2.png)"></div>
                            <div class="image-layer"
                                style="background-image:url({{ asset('public/website') }}/images/resource/service.jpg)">
                            </div>
                            <div class="icon flaticon-factory">
                                <img src="{{ asset('public/website') }}/images/engineer.png" class="jegimg_design">
                            </div>
                            <h5><a class="#" >Sustainable Manufacturing</a></h5>
                            <div class="text">Our commitment to sustainability drives our manufacturing processes.</div>
                            <!-- <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-right-arrow"></span></a> -->
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="shape-one"
                                style="background-image:url({{ asset('public/website') }}/images/icons/shape-1.png)"></div>
                            <div class="shape-two"
                                style="background-image:url({{ asset('public/website') }}/images/icons/shape-2.png)"></div>
                            <div class="image-layer"
                                style="background-image:url({{ asset('public/website') }}/images/resource/service.jpg)">
                            </div>
                            <div class="icon flaticon-factory">
                                <img src="{{ asset('public/website') }}/images/project-management.png"
                                    class="jegimg_design">
                            </div>
                            <h5><a class="#" >Product Innovation</a></h5>
                            <div class="text">From classic biscuits to gourmet cookies, we blend creativity and quality to
                                deliver unique and delectable treats.</div>
                            <!-- <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-right-arrow"></span></a> -->
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="shape-one"
                                style="background-image:url({{ asset('public/website') }}/images/icons/shape-1.png)"></div>
                            <div class="shape-two"
                                style="background-image:url({{ asset('public/website') }}/images/icons/shape-2.png)"></div>
                            <div class="image-layer"
                                style="background-image:url({{ asset('public/website') }}/images/resource/service.jpg)">
                            </div>
                            <div class="icon flaticon-factory">
                                <img src="{{ asset('public/website') }}/images/like.png" class="jegimg_design">
                            </div>
                            <h5><a class="#" >Global Market Expansion</a></h5>
                            <div class="text">Expand your market reach and unlock new opportunities with our global
                                market expansion services.</div>
                            <!-- <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-right-arrow"></span></a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Main Slider End Service Section -->

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
                            <h2>Single Window EXIM Pvt. Ltd. classified as a private limited company and is in Kolkata.
                            </h2>
                            <div class="text">M/s Single Window EXIM Pvt. Ltd. has been promoted by Mr. Arupayan Dutta &
                                Ms. Chaitali Dutta
                                as an Export Company of Green Vegetables. Now, SWEPL is in the process of acquiring a
                                Biscuits manufacturing company
                            </div>
                        </div>
                        <div class="row clearfix">

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-engineer"></span>
                                    <h5>Freshness Guaranteed</h5>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-customer-support"></span>
                                    <h5>Revolutionizing Biscuit Production</h5>
                                </div>
                            </div>

                        </div>
                        <!-- Lower Box -->
                        <div class="lower-box clearfix">
                            <div class="button-box">
                                <a class="btn-style-one theme-btn" href="{{ route('about') }}"><span
                                        class="txt">About us
                                        <i class="arrow fa fa-angle-right"></i></span></a>
                            </div>
                            <div class="phone-box">
                                <div class="box-inner">
                                    <span class="icon flaticon-telephone"></span>
                                    Call us for help
                                    <strong>9830035546</strong>
                                </div>
                            </div>
                        </div>
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

    <!-- Companies Section -->
    <section class="service-section-two">
        <div class="image-layer" style="background-image:url({{ asset('public/website') }}/images/background/1.jpg)">
        </div>
        <div class="pattern-layer-one"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-1.png)"></div>
        <div class="pattern-layer-two"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-2.png)"></div>
        <div class="pattern-layer-three"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-3.png)"></div>
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="big-text">Companies</div>
                <div class="title">Our Companies</div>
                <h2>Building a more competitive <br> business sectors.</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
                <!-- Service Block Two -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/website') }}/images/resource/companies-1.jpg" alt="" />
                            <div class="overlay-box">
                                <span class="icon flaticon-drop-of-liquid">
                                    <img src="{{ asset('public/website') }}/images/">
                                </span>
                                <div class="content">
                                    <h5>Companies 1</h5>
                                    <div class="title">Glue Factory</div>
                                </div>
                            </div>
                            <div class="overlay-box-two">
                                <span class="icon-two flaticon-drop-of-liquid"></span>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h5><a href="#">Companies 1</a></h5>
                                        <div class="text">The Industrial Revolution, which took place from the 18th
                                            to 19th centuries, was a period during predomic.</div>
                                        <a href="#" class="read-more">Read more <span
                                                class="flaticon-next-3"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Block Two -->
                <div class="service-block-two style-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/website') }}/images/resource/companies-2.jpg" alt="" />
                            <div class="overlay-box">
                                <span class="icon flaticon-drop-of-liquid">
                                    <img src="{{ asset('public/website') }}/images/">
                                </span>
                                <div class="content">
                                    <h5>Companies 2</h5>
                                    <div class="title">Gas Station</div>
                                </div>
                            </div>
                            <div class="overlay-box-two">
                                <span class="icon-two flaticon-drop-of-liquid"></span>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h5><a href="#">Companies 2</a></h5>
                                        <div class="text">The Industrial Revolution, which took place from the 18th
                                            to 19th centuries, was a period during predomic.</div>
                                        <a href="#" class="read-more">Read more <span
                                                class="flaticon-next-3"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Block Two -->
                <div class="service-block-two style-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/website') }}/images/resource/companies-3.jpg" alt="" />
                            <div class="overlay-box">
                                <span class="icon flaticon-drop-of-liquid">
                                    <img src="{{ asset('public/website') }}/images/">
                                </span>
                                <div class="content">
                                    <h5>Companies 3</h5>
                                    <div class="title">Construction</div>
                                </div>
                            </div>
                            <div class="overlay-box-two">
                                <span class="icon-two flaticon-drop-of-liquid"></span>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h5><a href="#">Companies 3</a></h5>
                                        <div class="text">The Industrial Revolution, which took place from the 18th
                                            to 19th centuries, was a period during predomic.</div>
                                        <a href="#" class="read-more">Read more <span
                                                class="flaticon-next-3"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Block Two -->
                <div class="service-block-two style-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/website') }}/images/resource/companies-2.jpg" alt="" />
                            <div class="overlay-box">
                                <span class="icon flaticon-drop-of-liquid">
                                    <img src="{{ asset('public/website') }}/images/">
                                </span>
                                <div class="content">
                                    <h5>Companies 2</h5>
                                    <div class="title">Gas Station</div>
                                </div>
                            </div>
                            <div class="overlay-box-two">
                                <span class="icon-two flaticon-drop-of-liquid"></span>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h5><a href="#">Companies 2</a></h5>
                                        <div class="text">The Industrial Revolution, which took place from the 18th
                                            to 19th centuries, was a period during predomic.</div>
                                        <a href="#" class="read-more">Read more <span
                                                class="flaticon-next-3"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Block Two -->
                <div class="service-block-two style-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/website') }}/images/resource/companies-3.jpg" alt="" />
                            <div class="overlay-box">
                                <span class="icon flaticon-drop-of-liquid">
                                    <img src="{{ asset('public/website') }}/images/">
                                </span>
                                <div class="content">
                                    <h5>Companies 3</h5>
                                    <div class="title">Construction</div>
                                </div>
                            </div>
                            <div class="overlay-box-two">
                                <span class="icon-two flaticon-drop-of-liquid"></span>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h5><a href="#">Companies 3</a></h5>
                                        <div class="text">The Industrial Revolution, which took place from the 18th
                                            to 19th centuries, was a period during predomic.</div>
                                        <a href="#" class="read-more">Read more <span
                                                class="flaticon-next-3"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Block Two -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/website') }}/images/resource/companies-1.jpg" alt="" />
                            <div class="overlay-box">
                                <span class="icon flaticon-drop-of-liquid">
                                    <img src="{{ asset('public/website') }}/images/">
                                </span>
                                <div class="content">
                                    <h5>Companies 1</h5>
                                    <div class="title">Glue Factory</div>
                                </div>
                            </div>
                            <div class="overlay-box-two">
                                <span class="icon-two flaticon-drop-of-liquid"></span>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h5><a href="#">Companies 1</a></h5>
                                        <div class="text">The Industrial Revolution, which took place from the 18th
                                            to 19th centuries, was a period during predomic.</div>
                                        <a href="#" class="read-more">Read more <span
                                                class="flaticon-next-3"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rmorebtn_section mt-3">
            <div class="button-box ">
                <a class="btn-style-one theme-btn inbtngo" href="{{ route('companies') }}">
                    <span class="txt">Show All <i class="arrow fa fa-angle-right"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Companies Section -->

    <!-- CTA Section -->
    <section class="cta-section-two oscta_outsection">
        <div class="container-fluid p-0">
            <div class="inner-container"
                style="background-image:url({{ asset('public/website') }}/images/background/7.jpg)">
                <div class="pattern-layer"
                    style="background-image:url({{ asset('public/website') }}/images/background/pattern-26.png)"></div>
                <div class="pattern-layer-two"
                    style="background-image:url({{ asset('public/website') }}/images/background/pattern-27.png)"></div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h2>Gets an Quotation For <br> Your Industry</h2>

                        <!-- Button Box -->
                        <div class="button-box">
                            <a href="#" class="theme-btn btn-style-seven clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">Get Appoinment</span>
                                    <span class="text-two">Get Appoinment</span>
                                </span>
                            </a>
                        </div>

                        <div class="play-box">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video play-button"><span
                                    class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                            Call us Now
                            <strong>9830035546</strong>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="side-image wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <img src="{{ asset('public/website') }}/images/resource/cta.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section -->


    <!-- How it works Section -->
    <section class="process-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title alternate">
                            <div class="title">How It Work</div>
                            <h2>Our Company Working Process</h2>
                        </div>
                        <!-- Blocks Outer -->
                        <div class="blocks-outer">

                            <!-- Process Block -->
                            <div class="process-block">
                                <div class="inner-box">
                                    <div class="number">01</div>
                                    <strong>Dough Preparation</strong>
                                    Mix ingredients meticulously to create the perfect dough consistency, ensuring a blend
                                    of water and leavening agents like ammonium bicarbonate for ideal texture.
                                </div>
                            </div>

                            <!-- Process Block -->
                            <div class="process-block">
                                <div class="inner-box">
                                    <div class="number">02</div>
                                    <strong>Fermentation and Rising</strong>
                                    Allow the dough to ferment for 21-26 hours, letting yeast work its magic to make the
                                    biscuits light and airy, enhancing their taste and texture.
                                </div>
                            </div>

                            <!-- Process Block -->
                            <div class="process-block">
                                <div class="inner-box">
                                    <div class="number">03</div>
                                    <strong>Cooling, Testing, and Packaging</strong>
                                    Cool the baked biscuits, conduct quality tests, and package them using advanced
                                    machinery for distribution, ensuring freshness and quality for consumers.
                                </div>
                            </div>

                        </div>
                        <!-- End Blocks Outer -->
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('public/website') }}/images/resource/process-1.jpg" alt="" />
                        </div>
                        <div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('public/website') }}/images/resource/process-2.jpg" alt="" />
                        </div>
                        <div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('public/website') }}/images/resource/process-3.jpg" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End How it works Section -->

    <!-- =========================our gallery section====================== -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ogallery_outsection1">
                    <div class="sec-title centered">
                        <div class="big-text">Gallery</div>
                        <div class="title">Our Gallery</div>
                        <h2>Building a more competitive <br> business sectors.</h2>
                    </div>
                    <div class="container text-center">
                        <div class="portfolio-menu">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                @foreach($gallery_category as $data)
                                <li data-filter=".tab_{{$data->id}}">{{$data->tab_name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-item">
                    @foreach($gallery as $list)
                        <div class="item tab_{{$list->tab_name}}">
                        <a href="{{ asset('public/website/images/gallery') }}/{{$list->image}}" data-lightbox="mygallery">
                                <div
                                    style="background-image: url({{ asset('public/website/images/gallery') }}/{{$list->image}})">
                                </div>
                                <div class="galry_backarea">
                                    <i class="fas fa-search zoomicon"></i>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                    <div class="rmorebtn_section">
                        <div class="button-box ">
                            <a class="btn-style-one theme-btn inbtngo" href="{{route('gallery')}}"><span class="txt">More
                                    Gallery <i class="arrow fa fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =========================our gallery section====================== -->


    <!-- Testimonial Section Three -->
    <section class="testimonial-section-three"
        style="background-image:url({{ asset('public/website') }}/images/background/map.png)">
        <div class="auto-container">
            <!-- Sec Title Three -->
            <div class="sec-title-three centered">
                <div class="title">Our Testimonial</div>
                <h2>Happy Client Says <br> About Us</h2>
            </div>
            <div class="three-item-carousel-two owl-carousel owl-theme">

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="author-box">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('public/website') }}/images/resource/businessman.png"
                                        alt="" />
                                </div>
                                <strong>User 1</strong>
                                <div class="designation">Client</div>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore Risus facilisis.</div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="author-box">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('public/website') }}/images/resource/businesswoman.png"
                                        alt="" />
                                </div>
                                <strong>User 1</strong>
                                <div class="designation">Client</div>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore Risus facilisis.</div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="author-box">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('public/website') }}/images/resource/businessman.png"
                                        alt="" />
                                </div>
                                <strong>User 1</strong>
                                <div class="designation">Client</div>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore Risus facilisis.</div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="author-box">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('public/website') }}/images/resource/businesswoman.png"
                                        alt="" />
                                </div>
                                <strong>User 1</strong>
                                <div class="designation">Client</div>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore Risus facilisis.</div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="author-box">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('public/website') }}/images/resource/businessman.png"
                                        alt="" />
                                </div>
                                <strong>User 1</strong>
                                <div class="designation">Client</div>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore Risus facilisis.</div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="author-box">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('public/website') }}/images/resource/businesswoman.png"
                                        alt="" />
                                </div>
                                <strong>User 1</strong>
                                <div class="designation">Client</div>
                            </div>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore Risus facilisis.</div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section Three -->

    <!-- News Section -->
    <section class="news-section">
        <div class="pattern-layer"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-5.png)"></div>
        <div class="pattern-layer-two"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-6.png)"></div>
        <div class="pattern-layer-three"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-7.png)"></div>
        <div class="auto-container">
            <div class="sec-title">
                <div class="big-text">Blog</div>
                <div class="title">Latest Blog</div>
                <h2>Learn something from blog.</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
            @if(isset($blog))
                @foreach($blog as $list)
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                        <a href="{{route('blog_detail')}}/{{$list->id}}"><img src="{{asset('public/blog')}}/{{$list->image}}" alt=""></a>
                            <div class="overlay-box">
                                <div class="content">
                                <ul class="post-meta">
                                            <li><span class="icon flaticon-user-2"></span>by <span
                                                    class="theme-color"></span>Admin</li>
                                            <li><span class="icon flaticon-calendar-2"></span>{{$list->created_at}}<span class="theme-color"></span></li>
                                        </ul>
                                    <h5>{{$list->title}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="rmorebtn_section">
                <div class="button-box ">
                    <a class="btn-style-one theme-btn inbtngo" href="{{route('blog')}}"><span class="txt">Browse Our
                            Blogs <i class="arrow fa fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <!-- Sec Title Three -->
            <div class="sec-title alternate centered">
                <div class="title">Companies</div>
                <h2>Other Companies</h2>
            </div>

            <div class="carousel-outer">
                <!-- Sponsors Slider -->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/1.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/2.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/3.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/4.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/1.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/2.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/3.png" alt=""></a>
                        </div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img
                                    src="{{ asset('public/website') }}/images/clients/4.png" alt=""></a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->
@endsection
