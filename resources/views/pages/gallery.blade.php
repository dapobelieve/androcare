@extends('layouts.home-template')

@section('site.title')
	<title>Gallery 📸 | Androcare Fertility Nigeria </title>
@stop

@section('site.styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
	<style>
		.gallery-block{
			padding-bottom: 60px;
			padding-top: 60px;
		}

		.gallery-block .heading{
			margin-bottom: 50px;
			text-align: center;
		}

		.gallery-block .heading h2{
			font-weight: bold;
			font-size: 1.4rem;
			text-transform: uppercase;
		}

		.gallery-block.compact-gallery .item{
			height: 360px;
			width: 270px;
			overflow: hidden;
			margin-bottom: 0;
			background: black;
			opacity: 1;
		}

		.gallery-block.compact-gallery .item .image{
			height: 360px;
			width: 270px;
			object-fit: cover;
			transition: 0.8s ease;
		}

		.gallery-block.compact-gallery .item .info{
			position: relative;
			display: inline-block;
		}

		.gallery-block.compact-gallery .item .description{
			display: grid;
			position: absolute;
			bottom: 0;
			left: 0;
			color: #fff;
			padding: 10px;
			font-size: 17px;
			line-height: 18px;
			width: 100%;
			padding-top: 15px;
			padding-bottom: 15px;
			opacity: 1;
			color: #fff;
			transition: 0.8s ease;
			text-align: center;
			text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
			background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.39));
		}

		.gallery-block.compact-gallery .item .description .description-heading{
			font-size: 1em;
			font-weight: bold;
		}

		.gallery-block.compact-gallery .item .description .description-body{
			font-size: 0.8em;
			margin-top: 10px;
			font-weight: 300;
		}

		@media (min-width: 576px) {

			.gallery-block.compact-gallery .item .description {
				opacity: 0;
			}

			.gallery-block.compact-gallery .item a:hover .description {
				opacity: 1;
			}

			.gallery-block .zoom-on-hover:hover .image {
				transform: scale(1.3);
				opacity: 0.7;
			}
		}

	</style>
@stop

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('/assets/front/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Gallery 📸</h1>
					<p class="breadcrumbs">
						<span class="mr-2"><a href="index.html">Home<i class="ion-ios-arrow-forward"></i></a></span>
						<span>Gallery <i class="ion-ios-arrow-forward"></i></span>
					</p>
				</div>
			</div>
		</div>
	</section>
	@php
		$img1 = 'https://res.cloudinary.com/rohing/image/upload/v1585572497/harley-davidson-1HZcJjdtc9g-unsplash_vwslej.jpg';
		$img2 = 'https://res.cloudinary.com/rohing/image/upload/v1587700139/photo-1542393545-10f5cde2c810_zvvwje.jpg';
	@endphp

	<section class="gallery-block compact-gallery">
		<div class="container">
			<div class="row no-gutters">
				@for($i = 0; $i < 1; $i++)
				<div class="col-md-6 col-lg-4 item zoom-on-hover">
					<a class="lightbox" href="{{ $i % 2 == 0 ? $img1 : $img2 }}">
						<img class="img-fluid image" src="{{ $i % 2 == 0 ? $img1 : $img2 }}">
						<span class="description">
							<span class="description-heading">Wyclef Jean</span>
							<span class="description-body">I'm tryna have some dinner with dome candle lights</span>
						</span>
					</a>
				</div>
				@endfor
			</div>
		</div>
	</section>

@stop
@section('site.scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
	<script>
      baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
	</script>
@stop
