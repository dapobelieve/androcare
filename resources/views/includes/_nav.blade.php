<nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
	<div class="container d-flex justify-content-center">
		<div class="row no-gutters d-flex align-items-center px-3 px-md-0">
			<div class="col-lg-2 pr-4 align-items-center">
				<a class="navbar-brand" href="/"><img src="{{config('androcare.website.logo')}}" alt="" height="54"></a>
			</div>
			<div class="col-lg-10 d-none d-md-block">
				<div class="row d-flex">
					<div class="col-md-4 pr-4 d-flex topper align-items-center">
						<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center">
							<span class="icon-map"></span>
						</div>
						<span class="">Address: {{ config('androcare.website.address') }}</span>
					</div>
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center">
							<span class="icon-paper-plane"></span>
						</div>
						<span class="">Email: <a href="mailto:info@androcarefertilityng.org"><span>{{ config('androcare.website.email') }}</span></a></span>
					</div>
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center">
							<span class="icon-phone2"></span>
						</div>
						<span class="text">Phone: {{ config('androcare.website.phone') }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center">
		<button onclick="toggleMenu()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<p class="button-custom order-lg-last mb-0">
			<a href="/#section-counter" class="btn btn-secondary py-2 px-3">Make An Appointment</a>
		</p>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item {{Request::is('/') ? 'active' : ''}}">
					<a href="{{route('andro.home')}}" class="nav-link pl-0">Home</a>
				</li>
				<li class="nav-item andro-nav {{Request::is('treatments*') ? 'active' : ''}}">
					<a href="{{route('andro.services')}}" class="nav-link pl-0">Treatments</a>
					<div class="sub-menu">
						@foreach($serviceTitles->slice(0, 4) as $data)
							<p><a href="{{route('andro.service.details', ['service' => $data->slug ])}}">{{$data->name}}</a></p>
						@endforeach
					</div>
				</li>
				<li class="nav-item {{Request::is('article*') ? 'active' : ''}}"><a href="{{route('andro.articles')}}" class="nav-link pl-0">Articles</a></li>
{{--				<li class="nav-item {{Request::is('gallery*') ? 'active' : ''}}"><a href="{{route('andro.gallery')}}" class="nav-link pl-0">Gallery</a></li>--}}
				<li class="nav-item"><a href="{{ route('andro.success') }}" class="nav-link pl-0">Success Stories</a></li>
				<li class="nav-item {{Request::is('our-team*') ? 'active' : ''}}"><a href="{{route('andro.team')}}" class="nav-link pl-0">Our Team</a></li>
				<li class="nav-item andro-nav {{Request::is('about') ? 'active' : ''}}">
					<a href="{{ route('andro.about') }}" class="nav-link">About Us</a>
					<div class="sub-menu">
							<p><a href="{{route('andro.why-choose-us')}}">Why choose us?</a></p>
							<p><a target="_blank" href="https://www.youtube.com/channel/UCNDzBBe5ImJqc11DqItQRfg">Youtube Channel</a></p>
							<p><a href="{{route('andro.team')}}">Our Team</a></p>
							<p><a href="#">Testimonials</a></p>e
					</div>
				</li>
				<li class="nav-item {{Request::is('contact*') ? 'active' : ''}}"><a href="{{ route('andro.contact') }}" class="nav-link">Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>
