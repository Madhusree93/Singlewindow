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

<?php
$course=DB::table('course')->get();
?>

 <!-- Page Header Section Start -->
 <section id="page-header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Courses</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================courses area============== -->
            <section id="service-section-three">
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
                        <div class="col-lg-4">
                            <div class="single_cardarea">
                                <a href="{{route('course_details')}}/{{$course->slug}}">
                                <img src="{{asset('public/website/course')}}/{{$course->course_photo}}" class="clgimg_design">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                </div>
            </section>
        <!-- ================courses area============== -->
        
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