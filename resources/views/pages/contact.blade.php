@extends('layouts.home-template')

@section('site.meta')
	<title>Contact Us ☎️ | Androcare Fertility Nigeria </title>
@stop

@section('content')

	<section class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598068083/androcare/assets/contact-andro.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Contact Us  ☎️️</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
		<div class="container">
			<div class="row d-flex align-items-stretch no-gutters">
				<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
					<form action="#">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
				<div class="col-md-6 d-flex align-items-stretch">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
@endsection
