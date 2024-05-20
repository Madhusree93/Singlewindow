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
                    <h1>Notice</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>></li>
                        <li><a href="#">Notice</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header Section End -->
    <!-------------Tender----------------------->
    <div class="tenderarea">
        <div class="container">
            <table class="table">
                <thead style="background-color: #c79153;">
                    <tr>
                        <th scope="col" style="color:#fff; text-align: center;">SL.No.</th>
                        <th scope="col" style="color:#fff; text-align: center;">Title</th>
                        <th scope="col" style="color:#fff; text-align: center;">Date</th>
                        <th scope="col" style="color:#fff; text-align: center;">View</th>
                    </tr>
                </thead>
                <tbody>
             

                </tbody>
            </table>
        </div>
    </div>
    <!-------------Tender----------------------->
@endsection
@section('footer')
    @include('website.include.footer')
@endsection
