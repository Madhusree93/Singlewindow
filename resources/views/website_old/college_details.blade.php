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
                        <h1>College Details</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">College Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================college details area============== -->
            <section id="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="about-section-left">
                            <ul class="pgwSlider">
                                <li><img src="{{asset('public/website/colleges')}}/{{$college_details->cover_photo}}" alt=""></li>
                                <li><img src="{{asset('public/website/colleges')}}/{{$college_details->cover_photo}}" alt=""></li>
                                <li><img src="{{asset('public/website/colleges')}}/{{$college_details->cover_photo}}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="about-section-right">
                            <small class="small-primary">{{$college_details->college_name}}
                            </small>
                            <p class="college_descriptiondesign">{{$college_details->college_description}}</p>
                           
                            <div class="container dtls_clgmainarea">
                                <div class="row">
                                     <div class="col-lg-2 col-3">
                                          <div class="college_detailsiconarea">
                                              <i class="fas fa-history clgdtls_pgeicondesign"></i>
                                          </div>
                                     </div>
                                     <div class="col-lg-10 col-9">
                                          <div class="college_detailsinformarea">
                                               <h6 class="clgdtls_informtextdesign">Established on: {{$college_details->college_estd}}</h6>
                                          </div>
                                     </div>
                                     <div class="col-lg-2 col-3">
                                          <div class="college_detailsiconarea">
                                              <i class="fas fa-globe clgdtls_pgeicondesign"></i>
                                          </div>
                                     </div>
                                     <div class="col-lg-10 col-9">
                                          <div class="college_detailsinformarea">
                                               <h6 class="clgdtls_informtextdesign">
                                                   <a href="{{$college_details->college_website}}" target="_blank" class="clg_inlnktext">
                                                    visit website
                                                   </a>
                                                </h6>
                                          </div>
                                     </div>
                                     <div class="col-lg-2 col-3">
                                          <div class="college_detailsiconarea">
                                              <i class="fas fa-map clgdtls_pgeicondesign"></i>
                                          </div>
                                     </div>
                                     <div class="col-lg-10 col-9">
                                          <div class="college_detailsinformarea">
                                               <h6 class="clgdtls_informtextdesign">{{$college_details->location}}</h6>
                                          </div>
                                     </div>
                                     <div class="col-lg-2 col-3">
                                          <div class="college_detailsiconarea">
                                              <i class="fas fa-phone clgdtls_pgeicondesign"></i>
                                          </div>
                                     </div>
                                     <div class="col-lg-10 col-9">
                                          <div class="college_detailsinformarea">
                                               <h6 class="clgdtls_informtextdesign">{{$college_details->college_contact_number}}</h6>
                                          </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="container">
  <h4 class="small-primary">Course Under College</h4>
       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Course Name</th>
        <th>Number of Seats</th>
        <th>Eligibility</th>
        <th>Course Duration</th>
        <th>Course Details</th>
      </tr>
    </thead>
    <tbody>
        @if(isset($course_list))
        @foreach($course_list as $course)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$course->course_name}}</td>
            <td>{{$course->number_of_seats}}</td>
            <td>{{$course->eligibility}}</td>
            <td>{{$course->course_duration}}</td>
            <td><a href="{{route('course_details')}}/{{$course->slug}}">Click Here</a></td>


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