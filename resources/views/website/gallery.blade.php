@extends('website.layouts.layout')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{ asset('public/website') }}/images/background/9.jpg)">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Our Gallery</li>
            </ul>
            <h2>Our Gallery</h2>
        </div>
    </section>
    <!--End Page Title-->

    <!-- =========================our gallery section====================== -->
    <div class="container">
 
        <div class="row">
            <div class="col-lg-12">
                <div class="ogallery_outsection">
                    <div class="container text-center">
                    
                        <div class="portfolio-menu">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                @foreach($gallery_category as $data)
                                <li data-filter=".tab_{{$data->id}}">{{$data->tab_name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-item">
                       
                        @foreach($gallery as $list)
                        <div class="item tab_{{$list->tab_name}}">
                            <a href="{{ asset('public/website/images/gallery') }}/{{$list->image}}" data-lightbox="mygallery">
                                <div
                                    style="background-image: url({{ asset('public/website/images/gallery') }}/{{$list->image}})">
                                </div>
                                <div class="galry_backarea">
                                    <i class="fas fa-search zoomicon"></i>
                                </div>
                            </a>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
      
    </div>

    <!-- =========================our gallery section====================== -->
@endsection
