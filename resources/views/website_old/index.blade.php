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
 <!-- Hero Section One Start -->
 <section id="hero-section-one">
            <!-- Hero Slider Start -->
            <div class="owl-carousel hero-slider">
                <!-- <div class="hero-slider-item bg-one">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="hero-contents">
                                            <span class="hero-counter"></span>
                                            <h1>Welcome to<br>ICARE
                                            </h1>
                                            <p>Indian Center for Advance - ment of Research and Education, Haldia (ICARE) set up in 1995, is a non-profit making voluntary organization.</p>
                                            <button class="btn button-primary">See College</button>
                                            <button class="btn button-secondary-white">Get Contact</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="date">Publish - Jan 02, 2023</span>
                </div> -->

                <div class="hero-slider-item bg-three">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="hero-contents">
                                            <span class="hero-counter"></span>
                                            <h1>Welcome to<br>ICARE</h1>
                                            <p>Indian Center for Advancement of Research and Education, Haldia (ICARE) set up in 1995, is a non-profit making voluntary organization.</p>
                                            <a href="{{route('colleges')}}"><button class="btn button-primary">See College</button></a>
                                           <a href="{{route('contact_us')}}"> <button class="btn button-secondary-white">Get Contact</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--   <span class="date">Publish - Jan 02, 2023</span> -->
                </div>
                 
                <div class="hero-slider-item bg-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="hero-contents">
                                            <span class="hero-counter"></span>
                                            <h1>Welcome to<br>ICARE</h1>
                                            <p>Indian Center for Advancement of Research and Education, Haldia (ICARE) set up in 1995, is a non-profit making voluntary organization.</p>
                                            <button class="btn button-primary">See College</button>
                                            <button class="btn button-secondary-white">Get Contact</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--   <span class="date">Publish - Jan 02, 2023</span> -->
                </div>
                
            </div>
            <!-- Hero Slider End -->
            
            <!-- Hero Social Icons Start -->
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
               
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
            <!-- Hero Social Icons End -->
            
            <!-- Hero Copy Right Start -->
            <span class="copy-right">&copy; Copyright 2023</span>
            <!-- Hero Copy Right End -->
            
            <!-- Hero Scroll Icon Start -->
            <a href="#about-section-two" class="scroll-icon smooth-scroll"></a>
            <!-- Hero Scroll Icon End -->

            <!-- Hero Video Icon Start -->
            <!-- <span class="video-play" data-bs-toggle="modal" data-bs-target=".hero-video-modal"><img src="{{asset('public/website')}}/assets/img/icons/video-play.png" alt=""> Video play</span> -->
            <!-- Hero Video Icon End -->
            
            <!-- Hero Video Modal Start -->
            <!-- <div class="modal fade bd-example-modal-lg hero-video-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/7d16CpWp-ok" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Hero Video Modal End -->
        </section>
        <!-- Hero Section One End -->

        <!-- Rating Section Start -->
        <section id="rating-section">

            <div class="rating-item bg-one">
                <div class="icon">
                    <img src="{{asset('public/website')}}/assets/img/icons/handshake.png" class="default-icon" alt="">
                    <img src="{{asset('public/website')}}/assets/img/icons/handshake-light.png" class="hover-icon" alt="">
                </div>
                <a class="icare_dslidetext" href="{{route('affilation')}}"><h3>Affiliation</h3>
                <p>The Institute is affiliated to AICTE, MAKAUT, WBUHS, VU.</p></a>
                <!-- <span class="rating">93%</span> -->
            </div>

            <div class="rating-item bg-two">
                <div class="icon">
                    <img src="{{asset('public/website')}}/assets/img/icons/university.png" class="default-icon" alt="">
                    <img src="{{asset('public/website')}}/assets/img/icons/university-light.png" class="hover-icon" alt="">
                </div>
                <a class="icare_dslidetext" href="{{route('colleges')}}"><h3>14 Colleges</h3>
                <p>We must have life-building, man-making, character-making assimilation of ideas.</p></a>
                <!-- <span class="rating">93%</span> -->
            </div>
            <div class="rating-item bg-three">
                <div class="icon">
                    <img src="{{asset('public/website')}}/assets/img/icons/registration-form.png" class="default-icon" alt="">
                    <img src="{{asset('public/website')}}/assets/img/icons/registration-form-light.png" class="hover-icon" alt="">
                </div>
                <a class="icare_dslidetext" href="{{route('admission')}}">
                <h3>Apply Online</h3>
                <p>We are happy to tell you that we are accepting new addmissions for new batch.</p></a>
                <!-- <span class="rating">93%</span> -->
            </div>
            <div class="rating-item bg-four">
                <div class="icon">
                    <img src="{{asset('public/website')}}/assets/img/icons/goal.png" class="default-icon" alt="">
                    <img src="{{asset('public/website')}}/assets/img/icons/goal-light.png" class="hover-icon" alt="">
                </div>
                <h3>Success Driven</h3>
                <p>The experiential learning ensures professional student success.</p>
                <!-- <span class="rating">93%</span> -->
            </div>
            <div class="rating-item bg-five">
                <div class="icon">
                    <img src="{{asset('public/website')}}/assets/img/icons/communicate.png" class="default-icon" alt="">
                    <img src="{{asset('public/website')}}/assets/img/icons/communicate-light.png" class="hover-icon" alt="">
                </div>
                 <a class="icare_dslidetext" href="{{route('contact_us')}}">
                <h3>Reach Out Us</h3>
                <p>Reach out for inquiries, feedback, or assistance. We're ready to assist!</p></a>
                <!-- <span class="rating">93%</span> -->
            </div>
        </section>
        <!-- Rating Section End -->

        <!-- About Section Two Start -->
        <section id="about-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="about-section-left">
                                <div class="image-box">
                                    <img src="{{asset('public/website')}}/assets/img/about-section/aboutback-1.jpg" alt="">
                                </div>
                                <div class="text-box">
                                    <p class="years-of-success"><span class="knockout">28</span><br>Years of success</p>
                                </div>
                            
                            <ul class="pgwSlider">
                                <li><img src="{{asset('public/website')}}/assets/img/about-section/about-section1.jpg" alt=""></li>
                                <li><img src="{{asset('public/website')}}/assets/img/about-section/about-section2.jpg" alt=""></li>
                                <li><img src="{{asset('public/website')}}/assets/img/about-section/about-section3.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="about-section-right">
                            <small class="small-primary">About <span>ICARE</span></small>
                            <h2>Indian Center for Advancement of Research and Education, Haldia (ICARE)</h2>
                            <!-- <p class="lead">We believe the designer will be able to design a good for learnin suides lead through</p> -->
                            <p>set up in 1995, is a non-profit making voluntary organisation registered under Societies Registration Act 1961. ICARE is dedicated to promote, establish, run & maintain educational institutions of excellence to keep pace with the rapid industrial development in this region.</p>
                            <p>This society is managed by a Board of Governors comprising of eminent personalities who are great visionaries.Thesociety aims at creating a modern education centre of excellence in Haldia, provide value based education of international standards and with a motto to march ahead to build an ideally developed Haldia. </p>
                            <a href="{{route('about_icare')}}"><button class="btn button-primary">MORE ABOUT US</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section Two End -->

        <!-- ======================college section start=============== -->
                <section id="service-section-three" class="home_collegebackarea">
                    <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                               <h2>Our Colleges</h2>
                            </div>   
                        </div>
                    </div>
                    <div class="row">
                    @if(isset($college))
                    @foreach($college as $college)
                        <div class="col-lg-3">
                             <div class="iinerclg_mainarea">
                                  <img src="{{asset('public/website/colleges')}}/{{$college->cover_photo}}" class="cclgimg_designarea">
                                  <h2 class="cclgnme_textdesign">
                                      {{$college->college_name}}
                                  </h2>
                                
                                  <div class="text-center">
                                  <a href="{{route('college_details')}}/{{$college->slug}}"> <button class="btn button-primary">
                                        College Details
                                      </button></a>
                                  </div>
                             </div>
                        </div>
                    @endforeach
                    @endif
                        <div class="section_btnarea">
                            <div class="wrapper">
                                <a href="{{route('colleges')}}"> All Colleges </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
        <!-- ======================college section start=============== -->

        <!-- CTA Section Start -->
        <section id="cta-section" class="cta_homesection">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Don’t hesitate, contact us for better future life.</h3>
                        <p>Indian Center for Advance - ment of Research and Education, Haldia (ICARE)</p>
                    </div>
                    <div class="col-md-4">
                        <div class="cta-right">
                            <a href="#" class="btn button-primary">Contact now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section End -->

        <!-- ======================courses section start=============== -->
            <section id="service-section-three" class="home_collegebackarea">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                               <h2>Our Courses</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if(isset($course))
                        @foreach($course as $course)
                        <div class="col-lg-2">
                            <div class="single_cardarea">
                                <a href="{{route('course_details')}}/{{$course->slug}}">
                                <img src="{{asset('public/website/course')}}/{{$course->course_photo}}" class="clgimg_design">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                     
                        <div class="section_btnarea">
                            <div class="wrapper">
                                <a href="{{route('course')}}"> All Courses </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ======================courses section start=============== -->

        <!-- ======================timeline start====================== -->
        <!-- <section id="process">
          <div class="row">
            <div class="section-heading">
              <h2 class="text-center orange">Career After Courses</h2>
            </div>
          </div>
          <div class="container-fluid timeline_mainarea">
              <div class="row">
              <div class="steps-timeline text-center">

                <div class="steps-one">
                  <h3>Step 1</h3>
                  <div class="end-circle back-orange"></div>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-blue">
                    <div class="steps-pane">
                      <img src="https://imgur.com/5U7IJvy.png">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-blue">
                    <div class="inverted-steps-pane">
                      <p>Step 1</p>
                    </div>
                  </div>
                </div>

                <div class="steps-two">
                  <h3>Step 2</h3>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-orange">
                    <div class="steps-pane">
                      <img src="https://imgur.com/ACjjJNm.png">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-orange">
                    <div class="inverted-steps-pane">
                      <p>Step 2</p>
                    </div>
                  </div>
                </div>

                <div class="steps-three">
                  <h3>Step 3</h3>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-blue">
                    <div class="steps-pane">
                      <img class="third" src="https://imgur.com/5U7IJvy.png">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-blue">
                    <div class="inverted-steps-pane">
                      <p>Step 3</p>
                    </div>
                  </div>
                </div>

                <div class="steps-four">
                  <h3>Step 4</h3>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-orange">
                    <div class="steps-pane">
                      <img src="https://imgur.com/ACjjJNm.png">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-orange">
                    <div class="inverted-steps-pane">
                      <p>Step 4</p>
                    </div>
                  </div>
                </div>

                <div class="steps-five">
                  <h3>Step 5</h3>
                  <div class="inverted-end-circle back-orange"></div>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-blue">
                    <div class="steps-pane">
                      <img src="https://imgur.com/5U7IJvy.png">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-blue">
                    <div class="inverted-steps-pane">
                      <p>Step 5</p>
                    </div>
                  </div>
                </div>

              </div>
           
            </div>
            </div>
        </section> -->
        <!-- ======================timeline start====================== -->

        <!-- Testimonial Section Start -->
        <section id="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme testimonial-carousel">
                            <div class="testimonial-carousel-item">
                                <div class="testimonial-carousel-item-inner">
                                    <div class="image-box">
                                        <img src="{{asset('public/website')}}/assets/img/user/bstudent.png" alt="">
                                    </div>
                                    <h4>Subhadip Ghosh - <span>Student</span></h4>
                                    <ul class="rating-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>The knowledgeable faculty, diverse community, and practical education prepared me for success in my career. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-carousel-item">
                                <div class="testimonial-carousel-item-inner">
                                    <div class="image-box">
                                        <img src="{{asset('public/website')}}/assets/img/user/student.png" alt="">
                                    </div>
                                    <h4>Dipa Das - <span>Student</span></h4>
                                    <ul class="rating-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>ICARE Group of Colleges offers top-notch education with a supportive environment, shaping students into future leaders. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-carousel-item">
                                <div class="testimonial-carousel-item-inner">
                                    <div class="image-box">
                                        <img src="{{asset('public/website')}}/assets/img/user/bstudent.png" alt="">
                                    </div>
                                    <h4>Subhadip Ghosh - <span>Student</span></h4>
                                    <ul class="rating-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>The knowledgeable faculty, diverse community, and practical education prepared me for success in my career. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-carousel-item">
                                <div class="testimonial-carousel-item-inner">
                                    <div class="image-box">
                                        <img src="{{asset('public/website')}}/assets/img/user/student.png" alt="">
                                    </div>
                                    <h4>Dipa Das - <span>Student</span></h4>
                                    <ul class="rating-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>ICARE Group of Colleges offers top-notch education with a supportive environment, shaping students into future leaders. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-carousel-item">
                                <div class="testimonial-carousel-item-inner">
                                    <div class="image-box">
                                        <img src="{{asset('public/website')}}/assets/img/user/bstudent.png" alt="">
                                    </div>
                                    <h4>Subhadip Ghosh - <span>Student</span></h4>
                                    <ul class="rating-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>The knowledgeable faculty, diverse community, and practical education prepared me for success in my career. Highly recommended!</p>
                                </div>
                            </div>
                            <div class="testimonial-carousel-item">
                                <div class="testimonial-carousel-item-inner">
                                    <div class="image-box">
                                        <img src="{{asset('public/website')}}/assets/img/user/student.png" alt="">
                                    </div>
                                    <h4>Dipa Das - <span>Student</span></h4>
                                    <ul class="rating-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>ICARE Group of Colleges offers top-notch education with a supportive environment, shaping students into future leaders. Highly recommended!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- ==========================blog section====================== -->
        <section id="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <small class="small-primary">Latest <span>Update</span></small>
                            <h2>Our latest blog</h2>
                            <p>Our have the best people with whom we can overcome all obstacles in our way, with whom we confidently look to the future</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                @if(isset($blog))
                @foreach($blog as $blog)
                    <div class="col-md-4">
                        <div class="single-post">
                            <div class="image-box">
                                <div class="image-box-inner">
                                    <img src="{{asset('public/blog')}}/{{$blog->image}}" alt="">
                                </div>
                                <p class="date">{{$blog->created_at}}</p>
                            </div>
                            <h3 class="blog_hdngtext"><a href="{{route('blog_details')}}/{{$blog->slug}}">{{$blog->title}}</a></h3>
                        </div>
                    </div>
              @endforeach
                @endif


                    <div class="section_btnarea">
                        <div class="wrapper">
                            <a href="{{route('blog')}}"> More Blog </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========================blog section====================== -->

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
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-1.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-2.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-3.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-4.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-5.png">
                              </div>
                              <div class="slide">
                                <img src="{{asset('public/website')}}/assets/img/our-clients/clg-6.png">
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
         