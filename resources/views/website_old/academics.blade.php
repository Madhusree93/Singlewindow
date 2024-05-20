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

<section id="page-header-section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Academics</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Academics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================academics area============== -->
            <div class="container">
               <div class="row">
                    <div class="col-lg-12 academics_outarea">
                         <img src="{{asset('public/website')}}/assets/img/book.gif" class="academics_fsticondesign">
                         <span class="academics_fsttextdesign">Academics</span>
                         <h2 class="academics_fstheadingtext">Studying at Indian Center For Advancement of Research And Education</h2>
                         <p class="academics_fstptext">
                             Indian Center For Advancement of Research And Education offers students the benefit of a thriving educational environment set in the heart of the most happening Industrial Area of West Bengal.
                         </p>
                    </div>
               </div>
            </div>

            <div class="container">
                <div class="row">
                   <div class="col-lg-12 academics_Secondarea">
                        <img src="{{asset('public/website')}}/assets/img/open-book.gif" class="academics_fsticondesign">
                        <span class="academics_fsttextdesign">UG PROGRAMMES</span>
                   </div>
                </div>
                <div class="row">
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-1.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Bio-Technology</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-2.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Chemical Engineering</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-3.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Computer Science & Engineering</h2>
                              <h6 class="progrrm_nmbedesign">120</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-4.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Electronics & Communication Engineering</h2>
                              <h6 class="progrrm_nmbedesign">120</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-5.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Electronics & Instrumentation Engineering</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-6.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign"> Electrical Engineering</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-7.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">  Information Technology </h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-8.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign"> Mechanical Engineering</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-9.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">  Food Technology</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-10.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign"> Civil Engineering </h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-11.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">  Production Engineering  </h2>
                              <h6 class="progrrm_nmbedesign">40</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-12.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">  B.Sc (Nautical Science)  </h2>
                              <!-- <h6 class="progrrm_nmbedesign">60</h6> -->
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-13.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">  BCA Course </h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 academics_Secondarea">
                        <img src="{{asset('public/website')}}/assets/img/open-book.gif" class="academics_fsticondesign">
                        <span class="academics_fsttextdesign">PG PROGRAMMES</span>
                   </div>
                </div>
                <div class="row">
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-14.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">MBA Course</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-15.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">M.Tech(CSE, ME, CHE, BT & ECE) 18 (Each)</h2>
                              <!-- <h6 class="progrrm_nmbedesign">60</h6> -->
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-16.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">MCA Course</h2>
                              <h6 class="progrrm_nmbedesign">60</h6>
                        </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 academics_Secondarea">
                        <img src="{{asset('public/website')}}/assets/img/open-book.gif" class="academics_fsticondesign">
                        <span class="academics_fsttextdesign">FINANCIAL AIDS</span>
                   </div>
                </div>
                <div class="row">
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-17.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Free Studentship</h2>
                              <!-- <h6 class="progrrm_nmbedesign">60</h6> -->
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-18.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Half-free Studentship</h2>
                              <!-- <h6 class="progrrm_nmbedesign">60</h6> -->
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-19.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Scholarship from Important Trust/Fund</h2>
                              <!-- <h6 class="progrrm_nmbedesign">60</h6> -->
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-20.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign">Facility from Nationalized Bank for needy students</h2>
                              <!-- <h6 class="progrrm_nmbedesign">60</h6> -->
                        </div>
                        <div class="academics_programarea">
                              <img src="{{asset('public/website')}}/assets/img/academics/a-21.jpg" class="academics_programimgdesign">
                              <h2 class="progrm_innmedesign"> Railway Travel Concession.</h2>
                              <!-- <h6 class="progrrm_nmbedesign">60</h6> -->
                        </div>
                </div>
            </div>   
          
        <!-- ================academics area============== -->

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
         