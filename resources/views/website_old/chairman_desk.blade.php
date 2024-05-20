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
    <section id="page-header-section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Chairman Desk</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>></li>
                        <li><a href="#">Chairman-Desk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header Section End -->
    <!-- chaiman-desk-->
    <div class="chaiman-deskarea">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="chairman-image">
                        <img src="{{ asset('public/website') }}/assets/img/about-section/656530920.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h2>From The Chairman's Desk</h2>
                    <h4>Mr Lakshman Seth, Chairman</h4>
                    <p>" Indian Centre for Advancement of Research and Education,
                        Haldia (ICARE) set up in 1995, is a non-profit making voluntary

                        organisation registered under Societies registration Act, 1961.
                        ICARE is dedicated to promote, establish, run and maintain educational
                        institutions of excellence to keep pace with rapid industrial development
                        in this region. This society is managed by Board of Governors comprising of
                        eminent personalities who are great visionaries to create at Haldia a modern
                        education centre of excellence to provide value based education of international
                        standards and with a motto to march ahead to build an ideally developed Haldia.
                        In view of the noble objectives of the society, it gets support from the local
                        Municipal Authorities, Haldia Development Authority, as well as from the industrial
                        and business houses in and around Haldia."</p>
                </div>
            </div>
        </div>
    </div>
    <!-- chaiman-desk-->
@endsection
@section('footer')
    @include('website.include.footer')
@endsection
