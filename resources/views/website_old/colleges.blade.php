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
                        <h1>Colleges</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Colleges</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================college area============== -->
            <section id="service-section-three">
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
                        
                    <!-- <div class="col-sm-6 col-md-4 wow zoomIn">
                        <div class="service-item bg-two">
                            <div class="icon">
                                <img class="default-icon" src="{{asset('public/website')}}/assets/img/icons/tooth.png" alt="">
                                <img class="hover-icon" src="{{asset('public/website')}}/assets/img/icons/tooth-white.png" alt="">
                            </div>
                            <h3 class="college_nametextdesign">Haldia Institute of Dental Sciences & Research</h3>
                            <p>HIDSAR started Bachelor of Dental surgery (BDS) program from the session.</p>
                            <a href="college-details.html">Read more</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow zoomIn">
                        <div class="service-item bg-three">
                            <div class="icon">
                                <img class="default-icon" src="{{asset('public/website')}}/assets/img/icons/engineering.png" alt="">
                                <img class="hover-icon" src="{{asset('public/website')}}/assets/img/icons/engineering-white.png" alt="">
                            </div>
                            <h3>Haldia Institute of Technology</h3>
                            <p>It is the first private and accredited academic institution catering technical.</p>
                            <a href="college-details.html">Read more</a>
                        </div>
                    </div> -->
<!--                     <div class="col-sm-6 col-md-4 wow zoomIn">
                        <div class="service-item bg-four">
                            <div class="icon">
                                <img class="default-icon" src="{{asset('public/website')}}/assets/img/icons/commercial.png" alt="">
                                <img class="hover-icon" src="{{asset('public/website')}}/assets/img/icons/commercial-light.png" alt="">
                            </div>
                            <h3>Commercial design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur ci sed do eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                            <a href="single-service.html">Read more</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow zoomIn">
                        <div class="service-item bg-five">
                            <div class="icon">
                                <img class="default-icon" src="{{asset('public/website')}}/assets/img/icons/kitchen.png" alt="">
                                <img class="hover-icon" src="{{asset('public/website')}}/assets/img/icons/kitchen-light.png" alt="">
                            </div>
                            <h3>Kitchen design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur ci sed do eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                            <a href="single-service.html">Read more</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow zoomIn">
                        <div class="service-item bg-six">
                            <div class="icon">
                                <img class="default-icon" src="{{asset('public/website')}}/assets/img/icons/landscape.png" alt="">
                                <img class="hover-icon" src="{{asset('public/website')}}/assets/img/icons/landscape-light.png" alt="">
                            </div>
                            <h3>Landscape design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur ci sed do eiusmod tempor incididunt ut ore et dolore magna aliqua.</p>
                            <a href="single-service.html">Read more</a>
                        </div>
                    </div> -->
                </div>
            </div>
            </div>
            </section>
        <!-- ================college area============== -->

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