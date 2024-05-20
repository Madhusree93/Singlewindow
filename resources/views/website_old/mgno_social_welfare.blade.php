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
                    <h1>MNGO &amp; Social Welfare</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>></li>
                        <li><a href="#">MNGO &amp; Social Welfare</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header Section End -->
    <!------------- social-welfare----------------------->
    <div class="social-walfarearea">
        <div class="container">
            <div class="social-walfarearea">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('public/website') }}/assets/img/about-section/icare.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="social-textarea">
                            <h1>MNGO & Social Welfare</h1>
                            <p> Apart from the activities in the field of education & health,
                                ICARE is also actively participating and assisting other NGOs in
                                various social welfare services like natural disaster, relief,
                                mother & child care, promoting Self Help Groups (SHGs), immunization,
                                providing education to deaf and dumb children etc. ICARE has been working
                                for RCH-II (Mother & Child Health) as MNGO by Dept. of Family Welfare,
                                Govt. of India for the district of Purba Medinipur through its 4 FNGOs
                                in 4 different blocks in this district. ICARE is also selected for
                                implementation of IEC Scheme of Dept. of AYUSH, Govt. of India.

                                In keeping with the social Welfare objectives of the society it grants free,
                                half free studentship and also assists to get scholarships from
                                Trusts/Funds/ for talented, enthusiastic & deserving students.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!------------- social-welfare----------------------->
@endsection
@section('footer')
    @include('website.include.footer')
@endsection
