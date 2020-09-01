<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon/favicon.ico')}}">
	<title> Androcare | Dashbaord </title>


	<link href="{{ asset('/admin/dist/css/style.min.css') }}" rel="stylesheet">

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
	<div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
			 style="background:url(https://res.cloudinary.com/rohing/image/upload/v1598653197/androcare/assets/photo-1514416205405-075ab2f15964.jpg) no-repeat center center;">
		<div class="auth-box">
			<div id="loginform">
				<div class="logo">
					<span class="db"><img style="height: 50px" src="{{config('androcare.website.logo')}}" alt="logo" /></span>
					<h5 class="font-medium m-b-20">Sign In Androcare Admin</h5>
				</div>
				<!-- Form -->
				<div class="row">
					<div class="col-12">
						<form method="POST" action="{{route('login')}}" class="form-horizontal mt-3" id="loginform">
							{{csrf_field()}}
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
								</div>
								<input name="email" type="text" class="form-control form-control-lg" placeholder="Email"
											 aria-label="Email" aria-describedby="basic-addon1">
							</div>
							<div class="input-group mb-3">
								{{Session::get('errors')}}
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
								</div>
								<input name="password" type="password" class="form-control form-control-lg" placeholder="Password"
											 aria-label="Password" aria-describedby="basic-addon1">
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember me</label>
									</div>
								</div>
							</div>
							<div class="form-group text-center">
								<div class="col-xs-12 p-b-20">
									<button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit">Log	In</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ============================================================== -->
<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
	// ==============================================================
	$('#to-recover').on("click", function () {
		$("#loginform").slideUp();
		$("#recoverform").fadeIn();
	});
</script>
</body>
</html>