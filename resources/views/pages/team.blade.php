@extends('layouts.home-template')

@section('site.meta')
	<title>Our Team  | Androcare Fertility Nigeria </title>
@stop

@section('site.styles')@stop

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Meet Our Team</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Our Team <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				@foreach($team as $member)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{$member->image}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3><a href="{{route('andro.member.details', ['team' => $member->slug])}}">{{$member->name}}</a></h3>
								<span class="position mb-2">{{$member->role}}</span>
								<div class="faded">

									<ul class="ftco-social text-center">
										<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
										<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>

		</div>
	</section>

@stop