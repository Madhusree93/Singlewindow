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
$gallery_tab=DB::table('gallery_tabs')->get();
?>

<?php
$gallery= DB::table('galleries')->get();
?>


         <!-- Page Header Section Start -->
         <section id="page-header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Imgae Gallery</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>></li>
                            <li><a href="#">Imgae Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->

        <!-- ================image gallery area============== -->
            <section id="portfolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <small class="small-primary">Gallery</small>
                        <h2>Image Gallery</h2>
                    </div>
                    <div class="col-md-7 position-relative">
                        <div class="portfolio-item-controls">
                            <button class="active" data-filter="*">All <span>show</span></button>
                            @if(isset($gallery_tab))
                            @foreach($gallery_tab as $gallery_tab)
                            <button data-filter=".{{$gallery_tab->tab_name}}">{{$gallery_tab->tab_name}}</button>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item-list">
                <div class="portfolio-item-sizer"></div>
                @if(isset($gallery))
            @foreach($gallery as $gallery)
                <div class="portfolio-item has-gutter {{$gallery->tab_name}}">
                    <div class="inner">
                        <img src="{{asset('public/website/images/gallery')}}/{{$gallery->image}}" alt="">
                        <div class="overlay">
                            <a href="assets/img/portfolio-one/1.jpg" data-lightbox="portfolio-item" data-title="Architecture Project 1"><img src="{{asset('public/website')}}/assets/img/icons/plus.png" alt=""></a>
                            <div class="title">
                                <small class="small-secondary">{{$gallery->tab_name}}</small>
                                <h3>{{$gallery->title}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
             
            </div>
        </section>
        <!-- ================image gallery area============== -->

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