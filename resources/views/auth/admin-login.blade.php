<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Admitro - Laravel Bootstrap Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		
		<!-- Title -->
		<title>ICARE- Login</title>

		<!--Favicon -->
		<link rel="icon" href="{{asset('public/admin/')}}/assets/images/brand/favicon.ico" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="{{asset('public/admin/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Style css -->
		<link href="{{asset('public/admin/')}}/assets/css/style.css" rel="stylesheet" />
		<link href="{{asset('public/admin/')}}/assets/css/dark.css" rel="stylesheet" />
		<link href="{{asset('public/admin/')}}/assets/css/skin-modes.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{asset('public/admin/')}}/assets/css/animated.css" rel="stylesheet" />
		
		<!---Icons css-->
		<link href="{{asset('public/admin/')}}/assets/css/icons.css" rel="stylesheet" />
		
				
		<!-- Color Skin css -->
		<link id="theme" href="{{asset('public/admin/')}}/assets/colors/color1.css" rel="stylesheet" type="text/css"/>
			
	</head>
	<body class="h-100vh bg-primary">
	<div class="box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="page">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="">
								<div class="text-white">
									<div class="card-body">
									   <div class="footer-widget__logo">
                                <a href="index.html"><img src="{{asset('public/website')}}/assets/images/resources/hihs-newlogo-white.png" alt="" class="site_hilogo1"></a>
                            </div>
										<h2 class="display-4 mb-2 font-weight-bold error-text text-center"><strong>Login</strong></h2>
										<h4 class="text-white-80 mb-7 text-center">Sign In to your account</h4>
										@include('notification')
										
										<form method="post" action="{{route('admin.login')}}">
											@csrf
										<div class="row">
											<div class="col-9 d-block mx-auto">
												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-user"></i>
														</div>
													</div>
													<input type="email" class="form-control" placeholder="Email" name="email">
												</div>
												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-lock"></i>
														</div>
													</div>
													<input type="password" class="form-control" name="password" placeholder="Password">
												</div>
												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn  btn-secondary btn-block px-4">Login</button>
													</div>
													<!-- <div class="col-12 text-center">
														<a href="forgot-password-2.html" class="btn btn-link box-shadow-0 px-0 text-white-80">Forgot password?</a>
													</div> -->
												</div>
											</div>
										</div>
										</form>
										<!-- <div class="text-center pt-4">
											<div class="font-weight-normal fs-16">You Don't have an account <a class="btn-link font-weight-normal text-white-80" href="#">Register Here</a></div>
										</div> -->
									</div>
									<!-- <div class="custom-btns text-center">
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-facebook-f"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-google"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-twitter"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-pinterest-p"></i></span></button>
									</div> -->
								</div>
							</div>
						</div>
						<div class="col-md-6 d-none d-md-flex align-items-center">
							<img src="{{asset('public/admin/')}}/assets/images/png/login.png" alt="img">
						</div>
					</div>
				</div>
			</div>
        </div>
	
		<!-- Jquery js-->
		<script src="{{asset('public/admin/')}}/assets/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap4 js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/popper.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!-- Circle-progress js-->
		<script src="{{asset('public/admin/')}}/assets/js/circle-progress.min.js"></script>

		<!-- Jquery-rating js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/rating/jquery.rating-stars.js"></script>
				<!-- Custom js-->
		<script src="{{asset('public/admin/')}}/assets/js/custom.js"></script>	
	</body>


</html>