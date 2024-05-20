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
                        <h1>Our Courses</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Course List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

                  <div class="container">
                <div class="row">
                <div class="container">
  <h4 class="small-primary" style="margin-top: 40px;">Course Under College</h4>
       
  <table class="table table-bordered">
    <thead style="background-color: #c79153;">
      <tr>
        <th style="color:#fff;">SL.NO.</th>
        <th style="color:#fff;">Course Name</th>
        <th style="color:#fff;">Number of Seats</th>
        <th style="color:#fff;">Eligibility</th>
        <th style="color:#fff;">Course Duration</th>
        <th style="color:#fff;">Course Details</th>
      </tr>
    </thead>
    <tbody >
        @if(isset($course))
        @foreach($course as $course)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$course->course_name}}</td>
            <td>{{$course->number_of_seats}}</td>
            <td>{{$course->eligibility}}</td>
            <td>{{$course->course_duration}}</td>
            <td style="width: 180px;"><button class="btn button-primary" ><a href="{{route('course_details')}}/{{$course->slug}}" style="color:#fff ; font-size: 15px;">Click Here</a></button></td>


        </tr>
        @endforeach
        @endif
    
    </tbody>
  </table>
</div>

                </div>
            </div>
        </section>
        <!-- ================college details area============== -->

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