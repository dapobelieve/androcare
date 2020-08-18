@extends('layouts.template')

@section('content')
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="    background-image:url(/assets/front/images/yoga.jpg);" data-stellar-background-ratio="0.5">

			<div class="overlay"></div>

			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 text ftco-animate">
						<h1 class="mb-4">Nurturing <span>New Lives</span></h1>
						<h3 class="subheading">Committed ourselves to offering a wide range of treatments</h3>
						<p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image:url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 text ftco-animate">
						<h1 class="mb-4">We Care <span>About Your Health</span></h1>
						<h3 class="subheading">Your Health is Our Top Priority with Comprehensive, Affordable medical.</h3>
						<p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-services ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-doctor"></span>
						</div>

						<div class="media-body p-2 mt-3">
							<h3 class="heading">Specialist Doctors</h3>
							<p>We have an array of Specialist Doctors and Consultants at your disposal.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-ambulance"></span>
						</div>

						<div class="media-body p-2 mt-3">
							<h3 class="heading">World Class Facilities</h3>
							<p>Our Fertility Center has world class facilities to cater for our clients</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-stethoscope"></span>
						</div>

						<div class="media-body p-2 mt-3">
							<h3 class="heading">Follow-Up Care</h3>
							<p>We offer counselling & support services for our clients even after conception.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-24-hours"></span>
						</div>

						<div class="media-body p-2 mt-3">
							<h3 class="heading">24 Hours Service</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(/assets/front/images/female_doc.jpg);">
				</div>

				<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
					<div class="heading-section mb-5">
						<div class="pl-md-5 ml-md-5">
							<span class="subheading">Our Fertility Services</span>
							<h2 class="mb-4" style="font-size: 28px;">We are always here to provide you with a world-class fertility treatments. Contact us for a Free Consultation Today</h2>
						</div>
					</div>

					<div class="pl-md-5 ml-md-5 mb-5">
						<p>Androcare Fertility Centre is one of the best fertility clinics in Lagos, Nigeria and we are dedicated to helping thousands of Intending Parents around the world to achieve their dreams of parenthood. We are committed to providing you with a superior level of care in our state of the art facilities. Our commitment, skills and compassion are unparalleled in the fertility industry.</p>
						<div class="row mt-5 pt-2">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
									<div class="text">
										<h3>ADVANCED ANDROLOGY SCREENINGS</h3>
										{{-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> --}}
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
									<div class="text">
										<h3>FERTILITY LABORATORY SERVICES</h3>
										{{-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> --}}
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
									<div class="text">
										<h3>GENDER SELECTION</h3>
										{{-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> --}}
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>

									<div class="text">
										<h3>IN-VITRO FERTILIZATION (IVF)</h3>
										{{-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> --}}
									</div>
								</div>
							</div>
							<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('includes._cta')

    @include('includes._testimonial')

	@include('includes._appointment')

@endsection
