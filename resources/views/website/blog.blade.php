@extends('website.layouts.layout')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{ asset('public/website') }}/images/background/9.jpg)">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blogs</li>
            </ul>
            <h2>Blogs</h2>
        </div>
    </section>
    <!--End Page Title-->

    <!-- News Section -->
    <section class="news-section">
        <div class="pattern-layer"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-5.png)"></div>
        <div class="pattern-layer-two"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-6.png)"></div>
        <div class="pattern-layer-three"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-7.png)"></div>
        <div class="auto-container">
        
            <div class="sec-title">
                <div class="big-text">Blog</div>
                <div class="title">Latest Blog</div>
                <h2>Learn something from blog.</h2>
            </div>   
            <div class="three-item-carousel owl-carousel owl-theme">
                <!-- Blog Detail -->
                @if(isset($blog))
                @foreach($blog as $list)
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{route('blog_detail')}}/{{$list->id}}"><img src="{{asset('public/blog')}}/{{$list->image}}" alt=""></a>
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-2"></span>by <span
                                                    class="theme-color"></span>Admin</li>
                                            <li><span class="icon flaticon-calendar-2"></span>{{$list->created_at->format('d-m-Y')}}<span class="theme-color"></span></li>
                                        </ul>
                                        <h5>{{$list->title}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End News Section -->
@endsection
