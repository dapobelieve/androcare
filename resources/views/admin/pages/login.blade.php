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
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
	<title> Login | Mendy Admin Template </title>


	<link href="dist/css/style.min.css" rel="stylesheet">

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
	<div class="lds-ripple">
		<div class="lds-pos"></div>
		<div class="lds-pos"></div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
	<!-- ============================================================== -->
	<!-- Login box.scss -->
	<!-- ============================================================== -->
	<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
		<div class="auth-box">
			<div id="loginform">
				<div class="logo">
					<span class="db"><img src="assets/images/logo-icon.png" alt="logo" /></span>
					<h5 class="font-medium m-b-20">Sign In to Mendy Admin</h5>
				</div>
				<!-- Form -->
				<div class="row">
					<div class="col-12">
						<form class="form-horizontal mt-3" id="loginform">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
								</div>
								<input type="text" class="form-control form-control-lg" placeholder="Username"
											 aria-label="Username" aria-describedby="basic-addon1">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
								</div>
								<input type="text" class="form-control form-control-lg" placeholder="Password"
											 aria-label="Password" aria-describedby="basic-addon1">
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember me</label>
										<a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i
													class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
									</div>
								</div>
							</div>
							<div class="form-group text-center">
								<div class="col-xs-12 p-b-20">
									<button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit">Log
										In</button>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
									<div class="social">
										<a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"
											 title="" data-original-title="Login with Facebook"> <i aria-hidden="true"
																																							class="fab  fa-facebook"></i> </a>
										<a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"
											 title="" data-original-title="Login with Google"> <i aria-hidden="true"
																																						class="fab  fa-google-plus"></i> </a>
									</div>
								</div>
							</div>
							<div class="form-group m-b-0 m-t-10">
								<div class="col-sm-12 text-center">
									Don't have an account? <a href="auth-register.html" class="text-info m-l-5"><b>Sign
											Up</b></a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="recoverform">
				<div class="logo">
					<span class="db"><img src="assets/images/logo-icon.png" alt="logo" /></span>
					<h5 class="font-medium m-b-20">Recover Password</h5>
					<span>Enter your Email and instructions will be sent to you!</span>
				</div>
				<div class="row m-t-20">
					<!-- Form -->
					<form class="col-12" action="https://lite.mendy.jthemes.com/">
						<!-- email -->
						<div class="form-group row">
							<div class="col-12">
								<input class="form-control form-control-lg" type="email" required="" placeholder="Username">
							</div>
						</div>
						<!-- pwd -->
						<div class="row m-t-20">
							<div class="col-12">
								<button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit"
												name="action">Reset</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Login box.scss -->
	<!-- ============================================================== -->
</div>

<aside class="customizer">
	<a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
	<div class="customizer-body">
		<ul class="nav customizer-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
					 aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat"
					 aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
					 aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<!-- Tab 1 -->
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div class="p-15 border-bottom">
					<!-- Sidebar -->
					<h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
					<div class="custom-control custom-checkbox m-t-10">
						<input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
						<label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
					</div>
					<div class="custom-control custom-checkbox m-t-10">
						<input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
						<label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
					</div>
					<div class="custom-control custom-checkbox m-t-10">
						<input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
						<label class="custom-control-label" for="header-position">Fixed Header</label>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<!-- Logo BG -->
					<h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
					<ul class="theme-color">
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
					</ul>
					<!-- Logo BG -->
				</div>
				<div class="p-15 border-bottom">
					<!-- Navbar BG -->
					<h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
					<ul class="theme-color">
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
					</ul>
					<!-- Navbar BG -->
				</div>
				<div class="p-15 border-bottom">
					<!-- Logo BG -->
					<h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
					<ul class="theme-color">
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
						<li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
					</ul>
					<!-- Logo BG -->
				</div>
			</div>
			<!-- End Tab 1 -->
			<!-- Tab 2 -->
			<div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
				<ul class="mailbox list-style-none m-t-20">
					<li>
						<div class="message-center chat-scroll">
							<a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                    <span class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status online pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the
                                            my admin!</span> <span class="time">9:30 AM</span>
								</div>
							</a>
							<!-- Message -->
							<a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img"> <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status busy pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a
                                            song! See you at</span> <span class="time">9:10 AM</span>
								</div>
							</a>
							<!-- Message -->
							<a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img"> <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status away pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a
                                            singer!</span> <span class="time">9:08 AM</span>
								</div>
							</a>
							<!-- Message -->
							<a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img"> <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the
                                            my admin!</span> <span class="time">9:02 AM</span>
								</div>
							</a>
							<!-- Message -->
							<!-- Message -->
							<a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img"> <img src="assets/images/users/5.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the
                                            my admin!</span> <span class="time">9:02 AM</span>
								</div>
							</a>
							<!-- Message -->
							<!-- Message -->
							<a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img"> <img src="assets/images/users/6.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see
                                            the my admin!</span> <span class="time">9:02 AM</span>
								</div>
							</a>
							<!-- Message -->
							<!-- Message -->
							<a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img"> <img src="assets/images/users/7.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the
                                            my admin!</span> <span class="time">9:02 AM</span>
								</div>
							</a>
							<!-- Message -->
							<!-- Message -->
							<a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img"> <img src="assets/images/users/8.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span> </span>
								<div class="mail-contnet">
									<h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see
                                            the my admin!</span> <span class="time">9:02 AM</span>
								</div>
							</a>
							<!-- Message -->
						</div>
					</li>
				</ul>
			</div>
			<!-- End Tab 2 -->
			<!-- Tab 3 -->
			<div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				<h6 class="m-t-20 m-b-20">Activity Timeline</h6>
				<div class="steamline">
					<div class="sl-item">
						<div class="sl-left bg-success"> <i class="ti-user"></i></div>
						<div class="sl-right">
							<div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
							<div class="desc">you can write anything </div>
						</div>
					</div>
					<div class="sl-item">
						<div class="sl-left bg-info"><i class="fas fa-image"></i></div>
						<div class="sl-right">
							<div class="font-medium">Send documents to Clark</div>
							<div class="desc">Lorem Ipsum is simply </div>
						</div>
					</div>
					<div class="sl-item">
						<div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/2.jpg">
						</div>
						<div class="sl-right">
							<div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
							<div class="desc">Contrary to popular belief</div>
						</div>
					</div>
					<div class="sl-item">
						<div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/1.jpg">
						</div>
						<div class="sl-right">
							<div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
							<div class="desc">Approve meeting with tiger</div>
						</div>
					</div>
					<div class="sl-item">
						<div class="sl-left bg-primary"> <i class="ti-user"></i></div>
						<div class="sl-right">
							<div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
							<div class="desc">you can write anything </div>
						</div>
					</div>
					<div class="sl-item">
						<div class="sl-left bg-info"><i class="fas fa-image"></i></div>
						<div class="sl-right">
							<div class="font-medium">Send documents to Clark</div>
							<div class="desc">Lorem Ipsum is simply </div>
						</div>
					</div>
					<div class="sl-item">
						<div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/4.jpg">
						</div>
						<div class="sl-right">
							<div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
							<div class="desc">Contrary to popular belief</div>
						</div>
					</div>
					<div class="sl-item">
						<div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/6.jpg">
						</div>
						<div class="sl-right">
							<div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
							<div class="desc">Approve meeting with tiger</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Tab 3 -->
		</div>
	</div>
</aside><!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->

<script>
	$('[data-toggle="tooltip"]').tooltip();
	$(".preloader").fadeOut();
</script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
	$('[data-toggle="tooltip"]').tooltip();
	$(".preloader").fadeOut();
	// ==============================================================
	// Login and Recover Password
	// ==============================================================
	$('#to-recover').on("click", function () {
		$("#loginform").slideUp();
		$("#recoverform").fadeIn();
	});
</script>
</body>
</html>