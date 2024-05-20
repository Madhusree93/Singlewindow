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
  <section id="page-header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog Details</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Blog Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================blog details area============== -->
             <section id="single-post-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-post">
                            <img src="{{asset('public/blog')}}/{{$blog_details->image}}" alt="">
                            <h2>{{$blog_details->title}}</h2>
                            <ul class="result-list">
                                <li><a href="#"><i class="far fa-heart"></i> Like</a></li>
                                <li><a href="#"><i class="far fa-comment"></i> Comments</a></li>
                                <li><a href="#"><i class="far fa-eye"></i> Views</a></li>
                            </ul>
                            <p>{!!$blog_details->description!!}</p>
                           
                            <div class="share-icons">
                                <span>Share</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Start -->
                    <div class="col-md-4">
                        <div class="sidebar-widget">
                            <h3 class="title">Popular post</h3>
                            <div class="sidebar-single-post">
                                <div class="image-box bg-one">
                                </div>
                                <div class="contents">
                                    <h4><a href="#">Workshop on MATLAB by IEEE HIT SB</a></h4>
                                    <p class="date">5, August 2023</p>
                                </div>
                            </div>
                            <div class="sidebar-single-post">
                                <div class="image-box bg-one">
                                </div>
                                <div class="contents">
                                    <h4><a href="#">Workshop on MATLAB by IEEE HIT SB</a></h4>
                                    <p class="date">5, August 2023</p>
                                </div>
                            </div>
                            <!-- <div class="sidebar-single-post">
                                <div class="image-box bg-two">
                                </div>
                                <div class="contents">
                                    <h4><a href="#">MSME Conference</a></h4>
                                    <p class="date">7, August 2023</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
        </section>
        <!-- ================blog details area============== -->

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