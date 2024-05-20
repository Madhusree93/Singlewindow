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
                        <h1>Course Details</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Course Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================courses details area============== -->
            <div class="container">
                 <div class="row">
                      <div class="col-lg-12 coursedetails_outsection">
                          <div class="row">
                               <div class="col-lg-5">
                                    <div class="coursedtls_imgsection">
                                         <img src="{{asset('public/website/course')}}/{{$course_details->course_photo}}" class="clgimg_design">
                                    </div>
                               </div>
                               <div class="col-lg-7">
                                   <div class="coursedtls_textsection">
                                       <div class="about-section-right p-2">
                                            <small class="small-primary">{{$course_details->course_name}}
                                            </small>
                                            <p class="college_descriptiondesign">{!!$course_details->description!!}</p>
                                            
                                           
                                            
                                        </div>
                                   </div>
                               </div>
                          </div>
                      </div>
                 </div>
            </div>
        <!-- ================courses details area============== -->

@endsection
@section('footer')
@include('website.include.footer')
@endsection
