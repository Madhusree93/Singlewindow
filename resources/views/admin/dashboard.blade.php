@extends('admin.layouts.app')
@section('header')
<title>Icare| Admin Dashboard</title>
   @include('admin.include.header')
   @endsection
   @section('sidebar')
   @include('admin.include.sidebar')
@endsection
         

   @section('content')		
				
						<!--/app header-->												<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Hi! Welcome Back</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.dashboard')}}">admin Dashboard</a></li>
								</ol>
							</div>
							
						</div>
						<!--End Page header-->
																		
						<!-- Row-1 -->
						<!-- <div class="row">
							<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Total User</p>
										<h2 class="mb-1 number-font">100</h2>
										<small class="fs-12 text-muted">Compared to Last Month</small>
										<span class="ratio bg-warning">76%</span>
										<span class="ratio-text text-muted">Goals Reached</span>
									</div>
									<div id="spark1"></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Total Question</p>
										<h2 class="mb-1 number-font">1,678</h2>
										<small class="fs-12 text-muted">Compared to Last Month</small>
										<span class="ratio bg-info">85%</span>
										<span class="ratio-text text-muted">Goals Reached</span>
									</div>
									<div id="spark2"></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Upcoming Events</p>
										<h2 class="mb-1 number-font">10</h2>
										<small class="fs-12 text-muted">Compared to Last Month</small>
										<span class="ratio bg-danger">62%</span>
										<span class="ratio-text text-muted">Goals Reached</span>
									</div>
									<div id="spark3"></div>
								</div>
							</div>
							
						</div> -->
						

					</div>
				</div>
				
			</div>

			   @endsection
@section('footer')
    @include('admin.include.footer')
@endsection
						