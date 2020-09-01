@extends('layouts.home-template')

@section('site.meta')
	<title>{{ $article->title }}  | {{config('androcare.website.name')}} </title>
	<meta name="description" content="{{$article->body}}. We at Androcare fertility can't wait to serve you">
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{ $article->title }}" />
	<meta property="og:description" content="{{$article->body}}" />
	<meta property="og:image" content="{{$article->mainImage()}}" />
	<meta property="og:url" content="{{url()->current()}}" />
	<meta property="og:site_name" content="{{config('androcare.website.name')}}" />

	<meta name="twitter:title" content="{{ $article->name }}">
	<meta name="twitter:description" content="{{$article->body}}">
	<meta name="twitter:image" content="{{$article->mainImage()}}">
	<meta name="twitter:site" content="{{config('androcare.website.name')}}">
	<meta name="twitter:creator" content="{{config('androcare.website.socials.twitter')}}">
@stop

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598067280/androcare/assets/photo-1558980663-3685c1d673c4.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">{{$article->title}}</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{route('andro.home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span>
						<span class="mr-2"><a href="{{route('andro.articles')}}">Articles <i class="ion-ios-arrow-forward"></i></a></span>
						<span>{{ $article->title }} </span>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 ftco-animate">
					<h2 class="mb-3">{{ ucwords($article->title) }}</h2>
					<div class="mb-5"><img src="{{$article->mainImage()}}" alt=""></div>
					{!! $article->richBody !!}

{{--					<div class="about-author d-flex p-4 bg-light">--}}
{{--						<div class="bio mr-5">--}}
{{--							<img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">--}}
{{--						</div>--}}
{{--						<div class="desc">--}}
{{--							<h3>George Washington</h3>--}}
{{--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>--}}
{{--						</div>--}}
{{--					</div>--}}


					<div class="pt-5 mt-5">
					</div>
				</div> <!-- .col-md-8 -->

				<div class="col-lg-4 sidebar ftco-animate">
					<div class="sidebar-box">
						<form action="#" class="search-form">
							<div class="form-group">
								<span class="icon icon-search"></span>
								<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
							</div>
						</form>
					</div>
					<div class="sidebar-box ftco-animate">
						<h3>Category</h3>
						<ul class="categories">
							<li><a href="#">Neurology <span>(6)</span></a></li>
							<li><a href="#">Cardiology <span>(8)</span></a></li>
							<li><a href="#">Surgery <span>(2)</span></a></li>
							<li><a href="#">Dental <span>(2)</span></a></li>
							<li><a href="#">Ophthalmology <span>(2)</span></a></li>
						</ul>
					</div>

{{--					<div class="sidebar-box ftco-animate">--}}
{{--						<h3>Popular Articles</h3>--}}
{{--						<div class="block-21 mb-4 d-flex">--}}
{{--							<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>--}}
{{--							<div class="text">--}}
{{--								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>--}}
{{--								<div class="meta">--}}
{{--									<div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>--}}
{{--									<div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>--}}
{{--									<div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="block-21 mb-4 d-flex">--}}
{{--							<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>--}}
{{--							<div class="text">--}}
{{--								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>--}}
{{--								<div class="meta">--}}
{{--									<div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>--}}
{{--									<div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>--}}
{{--									<div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="block-21 mb-4 d-flex">--}}
{{--							<a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>--}}
{{--							<div class="text">--}}
{{--								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>--}}
{{--								<div class="meta">--}}
{{--									<div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>--}}
{{--									<div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>--}}
{{--									<div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}

					<div class="sidebar-box ftco-animate">
						<h3>Archives</h3>
						<p>Coming Soon</p>
{{--						<ul class="categories">--}}
{{--							<li><a href="#">December 2018 <span>(30)</span></a></li>--}}
{{--							<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>--}}
{{--							<li><a href="#">September 2018 <span>(6)</span></a></li>--}}
{{--							<li><a href="#">August 2018 <span>(8)</span></a></li>--}}
{{--						</ul>--}}
					</div>
				</div><!-- END COL -->
			</div>
		</div>
	</section>
@stop
@section('site.scripts')
	<script>
		document.onreadystatechange = () => {
			// remove focus outline
			// remove contenteditable attr
			let editor = document.getElementsByClassName("ql-editor")[0]
			editor.addEventListener('click', () => {
				editor.style.outline = "none"
				editor.removeAttribute('contenteditable')
			})

			// resize images
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

			if(document.readyState == "complete") {

			}
		}
	</script>
@stop