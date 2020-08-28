@extends('layouts.home-template')

@section('site.meta')
	<title>{{ $service->name }}  | {{config('androcare.website.name')}} </title>
	<meta name="description" content="{{$service->body}}. Contant us today for your {{ $service->name }} service, We at Androcare fertility can't wait to serve you">
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{ $service->name }}" />
	<meta property="og:description" content="{{$service->body}}" />
	<meta property="og:image" content="{{$service->mainImage()}}" />
	<meta property="og:url" content="{{url()->current()}}" />
	<meta property="og:site_name" content="{{config('androcare.website.name')}}" />

	<meta name="twitter:title" content="{{ $service->name }}">
	<meta name="twitter:description" content="{{$service->body}}">
	<meta name="twitter:image" content="{{$service->mainImage()}}">
	<meta name="twitter:site" content="{{config('androcare.website.name')}}">
	<meta name="twitter:creator" content="{{config('androcare.website.socials.twitter')}}">
@stop

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598067280/androcare/assets/photo-1558980663-3685c1d673c4.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">{{ ucwords($service->name) }}</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{route('andro.services')}}">Services <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ ucwords($service->name) }} <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 ftco-animate">
					<h2 class="mb-3">{{ ucwords($service->name) }}</h2>

					{!! $service->richBody !!}


					<div class="tag-widget post-tag-container mb-5 mt-5">
						<div class="tagcloud">
							<a href="#" class="tag-cloud-link">Life</a>
							<a href="#" class="tag-cloud-link">Sport</a>
							<a href="#" class="tag-cloud-link">Tech</a>
							<a href="#" class="tag-cloud-link">Travel</a>
						</div>
					</div>

					<div class="about-author d-flex p-4 bg-light">
						<div class="bio mr-5">
							<img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
						</div>
						<div class="desc">
							<h3>George Washington</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
						</div>
					</div>

				</div> <!-- .col-md-8 -->
			</div>
		</div>
	</section>
@stop
@section('site.scripts')
<script>
	document.onreadystatechange = () => {
		if(document.readyState == "complete") {
			let images = document.querySelectorAll("img");

			images.forEach(ele => {
				ele.style.height = "100%";
				ele.style.width = "100%";
				ele.style.objectFit = "cover";
			});

			// remove wrong editor divs
			let divs = document.querySelectorAll(".ql-clipboard, .ql-tooltip")
			divs.forEach(el => {
				el.remove();
			})


		}
	}
</script>
@stop