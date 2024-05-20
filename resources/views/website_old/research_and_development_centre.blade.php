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
    <section id="page-header-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Research and Development Centre</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>></li>
                        <li><a href="#">Research and Development Centre</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header Section End -->
    <!------------- Research and Development Centre----------------------->
    <div class="ResearchCentrearea">
        <div class="container">

                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('public/website') }}/assets/img/about-section/research.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="social-textarea">
                            <h1>Research and Development Centre</h1>
                            <p>This centre has been developed and being operated at Haldia Institute
                                of Technology campus and established under IIUS, Ministry of Commerce
                                & Industries, Govt. of India through Haldia Integrated Development
                                Agency Ltd.<br>

                                The R & D centre is a five storied building with about 80,000 sq.ft.
                                area with 24 hrs power back-up, computer facilities, security arrangement etc
                                and situated in well protected Haldia Institute of Technology campus.
                                The centre is being used for different R&D activities mostly sponsored by
                                different depts. of Govt. of India.<br>

                                Support staff is also available.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

    <!------------- Research and Development Centre----------------------->
@endsection
@section('footer')
    @include('website.include.footer')
@endsection
