@extends('layouts.home-template')

@section('site.meta')
	<title>{{$member->name}}, {{$member->role}}  | {{config('androcare.website.name')}} </title>
	<meta name="description" content="{{$member->role}} ">
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{$member->name}}" />
	<meta property="og:description" content="{{$member->role}}" />
	<meta property="og:image" content="{{$member->image}}" />
	<meta property="og:url" content="{{url()->current()}}" />
	<meta property="og:site_name" content="{{config('androcare.website.name')}}" />

	<meta name="twitter:title" content="{{ $member->name }} | {{config('androcare.website.name')}} ">
	<meta name="twitter:description" content="{{$member->role}}">
	<meta name="twitter:image" content="{{$member->image}}">
	<meta name="twitter:site" content="{{config('androcare.website.name')}}">
	<meta name="twitter:creator" content="{{config('androcare.website.socials.twitter')}}">
@stop

@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598067670/androcare/assets/pexels-photo-3758833.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">{{$member->name}}</h1>
					<p class="breadcrumbs">
						<span class="mr-2">
							{{$member->role}}
						</span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="">
		<div class="container">
			<div class="row no-gutters" style="height: 800px">
				<div class="col-md-5 p-md-5 img img-2 mt-md-0" style="background-image: url({{$member->image}});">
				</div>
				<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
					<div class="heading-section mb-5">
						<div class="pl-md-5 ml-md-5">
							<h2 class="mb-4" style="font-size: 28px;">{{$member->name}}</h2>
						</div>
					</div>
					<div class="pl-md-5 ml-md-5 mb-5">
						<p>{{$member->bio}}</p>
{{--						<div class="row mt-5 pt-2">--}}
{{--							<div class="col-lg-6">--}}
{{--								<div class="services-2 d-flex">--}}
{{--									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>--}}
{{--									<div class="text">--}}
{{--										<h3>Primary Care</h3>--}}
{{--										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<div class="col-lg-6">--}}
{{--								<div class="services-2 d-flex">--}}
{{--									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>--}}
{{--									<div class="text">--}}
{{--										<h3>Lab Test</h3>--}}
{{--										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<div class="col-lg-6">--}}
{{--								<div class="services-2 d-flex">--}}
{{--									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>--}}
{{--									<div class="text">--}}
{{--										<h3>Symptom Check</h3>--}}
{{--										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<div class="col-lg-6">--}}
{{--								<div class="services-2 d-flex">--}}
{{--									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>--}}
{{--									<div class="text">--}}
{{--										<h3>Heart Rate</h3>--}}
{{--										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
					</div>
				</div>
			</div>
		</div>
	</section>
@stop