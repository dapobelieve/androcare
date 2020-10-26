@extends('layouts.home-template')

@section('site.meta')
	<title>Gallery 📸 | Androcare Fertility Nigeria </title>
@stop

@section('site.styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
	<style>
		.gallery-block.grid-gallery{
			padding-bottom: 60px;
			padding-top: 60px;
		}

		.gallery-block.grid-gallery .heading{
			margin-bottom: 50px;
			text-align: center;
		}

		.gallery-block.grid-gallery .heading h2{
			font-weight: bold;
			font-size: 1.4rem;
			text-transform: uppercase;
		}

		.gallery-block.grid-gallery a:hover{
			opacity: 0.8;
		}

		.gallery-block.grid-gallery .item img{
			object-fit: cover;
			height: 100%;
			width: 100%;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
			transition: 0.4s;
		}

		.gallery-block.grid-gallery .item{
			height: 270px;
			width: 360px;
			margin-bottom: 20px;
		}

		@media (min-width: 576px) {

			.gallery-block.grid-gallery .scale-on-hover:hover{
				transform: scale(1.05);
				box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
			}
		}
	</style>
@stop

@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598859099/androcare/assets/photo-1500051638674-ff996a0ec29e.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Gallery 📸</h1>
					<p class="breadcrumbs">
						<span class="mr-2">Enjoy some beautiful moments from out Patients, Doctors, Nurses and other members of staff</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	@php
		$img1 = 'https://res.cloudinary.com/rohing/image/upload/v1585572497/harley-davidson-1HZcJjdtc9g-unsplash_vwslej.jpg';
		$img2 = 'https://res.cloudinary.com/rohing/image/upload/v1587700139/photo-1542393545-10f5cde2c810_zvvwje.jpg';
	@endphp

	<section class="gallery-block grid-gallery">
		<div class="container">
			<div class="row">
				@foreach($images as $image)
					<div class="col-md-6 col-lg-3 item">
						<a class="lightbox" href="{{$image->mainImage()}}">
							<img class="img-fluid image scale-on-hover"
									 src="{{$image->mainImage()}}">
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</section>

@stop
@section('site.scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
	<script>
      baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
	</script>
@stop
