@extends('layouts.home-template')

@section('site.meta')
	<title>Articles 📖  | {{config('androcare.website.name')}} </title>
	<meta name="description" content="We at Androcare fertility can't wait to serve you">
	<meta property="og:type" content="" />
	<meta property="og:title" content="Androcare Articles" />
	<meta property="og:description" content="Androcare articles" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="{{url()->current()}}" />
	<meta property="og:site_name" content="{{config('androcare.website.name')}}" />

	<meta name="twitter:title" content="Androcare Articles">
	<meta name="twitter:description" content="Androcare Articles">
	<meta name="twitter:site" content="{{config('androcare.website.name')}}">
	<meta name="twitter:image" content="https://res.cloudinary.com/rohing/image/upload/v1598859726/androcare/assets/photo-1530026186672-2cd00ffc50fe.jpg">
	<meta name="twitter:creator" content="{{config('androcare.website.socials.twitter')}}">
@stop

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598859726/androcare/assets/photo-1530026186672-2cd00ffc50fe.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Articles</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="{{route('andro.home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Articles <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			@forelse($articles as $article)
				<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="{{route('andro.article.detaiils', ['article' => $article->slug])}}" class="block-20" style="background-image: url({{$article->mainImage()}});">
						<div class="meta-date text-center p-2">

							<span class="day">{{$article->formattedDate()['day']}}</span>
							<span class="mos">{{$article->formattedDate()['month']}}</span>
							<span class="yr">{{$article->formattedDate()['year']}}</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="{{route('andro.article.detaiils', ['article' => $article->slug])}}">{{$article->title}}</a></h3>
						<p>{{ Str::words($article->body, 16) }}</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0">
								<a href="{{route('andro.article.detaiils', ['article' => $article->slug])}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
{{--									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>--}}
								</p>
						</div>
					</div>
				</div>
			</div>
			@empty
				<p>No article here yet</p>
			@endforelse
		</div>

</section>
@stop