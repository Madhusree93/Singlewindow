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
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================blog area============== -->
             <section id="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <small class="small-primary">Latest <span>Update</span></small>
                            <h2>Our blog post</h2>
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
                                    <img src="{{asset('public/website')}}/assets/img/blog/newblog-1.jpg" alt="">
                                </div>
                                <p class="date">1, August 2023</p>
                            </div>
                            <h3 class="blog_hdngtext"><a href="{{route('blog_details')}}/{{$blog->slug}}">{{$blog->title}}</a></h3>
                        </div>
                    </div>
                @endforeach
                @endif
                </div>

                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================blog area============== -->

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
         