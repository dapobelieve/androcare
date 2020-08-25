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
	<link rel="icon" type="image/png" sizes="16x16" href="/admin//admin/assets/images/favicon.png">
	<title> Dashboard | Androcare </title>


	<!-- Custom CSS -->
	<link href="/admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
	<link href="/admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
	<link href="/admin/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="/admin/dist/css/style.min.css" rel="stylesheet">
	@yield('admin.styles')
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
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


	@include('admin.includes._header')


	@include('admin.includes._nav')

	<div class="page-wrapper" id="app">

		<div class="page-breadcrumb">
			<div class="row">
				<div class="col-7 align-self-center">
					<div class="d-flex align-items-center">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html" class="link">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 1</li>
							</ol>
						</nav>
					</div>
					<h4 class="page-title">@yield('admin.page')</h4>
				</div>
			</div>
		</div>


		<div class="container-fluid">

			@yield('admin-content')

		</div>

		<footer class="footer text-center">
			Built by <a href="https://twitter.com/CodeDrogo" target="_blank">Dapo Believe</a>.
		</footer>
	</div>

</div>

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="/admin/dist/js/app.min.js"></script>
<script src="/admin/dist/js/app.init.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="/admin/assets/extra-libs/sparkline/sparkline.js"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<!--Wave Effects -->
<!--Wave Effects -->
<script src="/admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/admin/dist/js/sidebarmenu.js"></script>
<script src="/admin/dist/js/feather.min.js"></script>
<!--Custom JavaScript -->
<script src="/admin/dist/js/custom.min.js"></script>

<!--This page JavaScript -->
<!--chartis chart-->
<script src="/admin/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<!--c3 charts -->
<script src="/admin/assets/extra-libs/c3/d3.min.js"></script>
<script src="/admin/assets/extra-libs/c3/c3.min.js"></script>
<script src="/admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/admin/dist/js/pages/dashboards/dashboard1.js"></script>
<script>
	$('.datepicker').datepicker({
		autoclose: true,
		todayHighlight: true
	});
</script>
<script src="/js/app.js"></script>
</body>
</html>