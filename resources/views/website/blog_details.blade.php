@extends('website.layouts.layout')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{ asset('public/website') }}/images/background/9.jpg)">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog Details</li>
            </ul>
            <h2>Blog Details</h2>
        </div>
    </section>
    <!--End Page Title-->

    <!-- ======================blog details======================= -->
    <div class="sidebar-page-container">
        <div class="pattern-layer"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-25.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!-- News Detail -->
                    <div class="news-detail">
                        <div class="inner-box">
                        @if(isset($list))
                            <div class="image">
                                <img src="{{asset('public/blog')}}/{{$list->image}}" alt="" />
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                
                                    <!-- <li>Industrial</li> -->
                                    <li><span class="icon flaticon-calendar"></span>{{$list->created_at->format('d-m-Y')}}</li>
                                    <!-- <li><span class="icon flaticon-user-2"></span>340 Views</li>
                                    <li><span class="icon flaticon-chat-1"></span>5 Comments</li> -->
                                </ul>
                                <h3>{{$list->title}}</h3>
                                <p>{!!$list->description!!}</p>
                            </div>
                        @endif
                            <!-- Post Share Options-->
                            <!-- <div class="post-share-options">
                                <div class="post-share-inner clearfix">
                                    <div class="tags"><span class="tags">Tags:</span><a href="#">Factory</a> <a
                                            href="#">Industry </a><a href="#">Logistics</a></div>
                                    <ul class="social-box">
                                        <span class="share">Share Article</span>
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- End Post Share Options-->

                        </div>
                    </div>

                    <!-- Related Post -->
              
                    <!-- End Related Post -->

                    <!-- Comments Area -->
                  



                    <!-- Comment Form -->
                   

                        <!--Comment Form-->
                        

                    <!--End Comment Form -->



                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar padding-left sticky-top">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="https://html.themexriver.com/industo/contact.html">
                                <div class="form-group">Categories
                                    <input type="search" name="search-field" value=""
                                        placeholder="Search Here ..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Service Widget -->
                        <!-- <div class="sidebar-widget service-widget">
                            <div class="widget-content">
                                <div class="sidebar-title-two">
                                    <h4>Categories</h4>
                                </div>
                                <ul class="service-list-two">
                                    <li><a href="#">Envato <span>3</span></a></li>
                                    <li><a href="#">Themeforest <span>2</span></a></li>
                                    <li><a href="#">Graphicriver <span>8</span></a></li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="widget-content">
                                <div class="sidebar-title-two">
                                    <h4>Latest Post</h4>
                                </div>
                                <article class="post">
                                    <figure class="post-thumb"><img
                                            src="{{ asset('public/website') }}/images/resource/post-thumb-4.jpg"
                                            alt=""><a href="{{ route('blog_detail') }}"
                                            class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                    <div class="text"><a href="{{ route('blog_detail') }}">Zechsal Magnesium flakes
                                            especially...</a></div>
                                    <div class="post-info">February 12, 2021</div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img
                                            src="{{ asset('public/website') }}/images/resource/post-thumb-5.jpg"
                                            alt=""><a href="{{ route('blog_detail') }}"
                                            class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                    <div class="text"><a href="{{ route('blog_detail') }}">Finding a way to the
                                            separate
                                            ‘work’ ...</a></div>
                                    <div class="post-info">February 12, 2021</div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img
                                            src="{{ asset('public/website') }}/images/resource/post-thumb-6.jpg"
                                            alt=""><a href="{{ route('blog_detail') }}"
                                            class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                    <div class="text"><a href="{{ route('blog_detail') }}">Hunching over desk can cause
                                            pain.</a></div>
                                    <div class="post-info">February 12, 2021</div>
                                </article>

                            </div>
                        </div>

                        <!-- Archive Widget -->
                        <!-- <div class="sidebar-widget service-widget">
                            <div class="widget-content">
                                <div class="sidebar-title-two">
                                    <h4>Archives</h4>
                                </div>
                                <ul class="service-list-two">
                                    <li><a href="#">November 2019 <span>5</span></a></li>
                                    <li><a href="#">February 2020 <span>6</span></a></li>
                                    <li><a href="#">September 2019 <span>8</span></a></li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- Gallery Widget -->
                       
                        <!-- Tag Widget -->
                        
                    </aside>
                </div>

            </div>
        </div>
    </div>
    <!-- ======================blog details======================= -->
@endsection
