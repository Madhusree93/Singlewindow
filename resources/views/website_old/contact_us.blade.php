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
                        <h1>Contact Page</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- Contact Section Two Start -->
        <section id="contact-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <small class="small-primary">Our <span>contact</span></small>
                        <h2>Get in touch</h2>
                        <p>
                            <strong>Address:</strong> 
                            ICARE Complex, HIT Campus, P.O.-Hatiberia, Haldia, Dist. Purba Medinipur, WEST BENGAL<br><br>
                            <strong>Phone:</strong> 
                            <a href="tel:+91(03224) 255275, 255662,
                                  255843, 255895">+91(03224) 255275, 255662,
                                  255843, 255895</a><br><br>
                            <strong>Email:</strong> 
                            <a href="mailto:icare_haldia@rediffmail.com">                 icare_haldia@rediffmail.com
                            </a><br>
                            <a href="mailto:contactus@icare-haldia.org">                 contactus@icare-haldia.org
                            </a><br>
                            <a href="mailto:information@icare-haldia.org">                 information@icare-haldia.org
                            </a>
                        </p>
                    </div>

                    <div class="col-md-8">
                        <!-- Contact Form Start -->
                        <form class="form-primary" action="{{route('contact_us_insert')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name*" >
                                </div>
                                <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email*" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="phone" class="form-control" placeholder="Your Phone (Optional)">
                                </div>
                                <div class="col">
                                    <input type="text" name="subject" class="form-control" placeholder="Your Subject*">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <textarea name="message" class="form-control" placeholder="Insert Message*"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input name="submit" type="submit" class="btn button-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                        <!-- Contact Form End -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Section Two End -->

        <section class="google-map google-map-two">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3697.9902188359893!2d88.0680414148351!3d22.04996965750746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02f05ff93ae1ff%3A0x2e9a4ec487437661!2sHaldia%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1654841397216!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map__one"></iframe>
        </section>
        
        
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
         