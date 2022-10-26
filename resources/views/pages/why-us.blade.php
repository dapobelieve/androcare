@extends('layouts.home-template')

@section('site.title')
	<title>Why Choose Androcare | Androcare Fertility Nigeria </title>
@stop

@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598067670/androcare/assets/pexels-photo-3758833.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Why Choose Androcare</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Why Choose Androcare <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="
				background-image: url(https://res.cloudinary.com/rohing/image/upload/v1666755818/androcare/assets/tembinkosi-sikupela-opqGuOr1bHM-unsplash.jpg);">
				</div>
				<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
					<div class="heading-section mb-5">
						<div class="pl-md-5 ml-md-5">
{{--							<span class="subheading">{{config('androcare.website.name')}}</span>--}}
							<h2 class="mb-4" style="font-size: 28px;">WHY CHOOSE ANDROCARE</h2>
						</div>
					</div>
					<div class="pl-md-5 ml-md-5 mb-5">
						<div>
							<div class="reason">
								<div class="d-flex align-items-center">
									<img style="height: 20px" src="https://res.cloudinary.com/rohing/image/upload/v1666754469/androcare/assets/green-check.png" alt="">
									<h4 class="mb-0 ml-2">Availability of genetically screened donors</h4>
								</div>
								<p class="text-left">We understand the sensitivities of patients going through donation. We want to make this journey as comfortable as possible for our patients and hence we offer genetic screening of donors on patient request. Genetic tests undertaken in donors may include karyotyping and genetic screening for the carrier status of specific conditions such as cystic fibrosis, spinal muscular atrophy, haemoglobinopathies, Tay-Sachs disease and Fragile X syndrome. Genetic screening is done in addition to other guidelines on donor selection.</p>
							</div>
							<div class="reason">
								<div class="d-flex align-items-center">
									<img style="height: 20px" src="https://res.cloudinary.com/rohing/image/upload/v1666754469/androcare/assets/green-check.png" alt="">
									<h4 class="mb-0 ml-2">Highly experienced specialist infertility team</h4>
								</div>
								<p class="text-left">Our clinic specializes in fertility and does not offer any other services. We concentrate on what we do best and that’s reproductive medicine. Together our team have decades of experience in the world of fertility and care. We take pride in recruiting some of the top fertility experts. Our doctors, nurses and embryologists are always at the forefront of science, training and development and we are always looking to improve our patient’s chances of success</p>
							</div>
							<div class="reason">
								<div class="d-flex align-items-center">
									<img style="height: 20px" src="https://res.cloudinary.com/rohing/image/upload/v1666754469/androcare/assets/green-check.png" alt="">
									<h4 class="mb-0 ml-2">Clean Room Technologies</h4>
								</div>
								<p class="text-left">The quality of air within an IVF lab will inevitably affect embryonic development and therefore has a critical impact on IVF success. At Androcare, we make use of a "Clean room technology” to create a carefully controlled sealed environment in which the entry of particles and contaminants is significantly minimised. This is achieved by highly filtered air being flushed through High Efficiency Particle Air (HEPA) filters under positive pressure, which leads to a cleaner environment overall.</p>
							</div>
							<div class="reason">
								<div class="d-flex align-items-center">
									<img style="height: 20px" src="https://res.cloudinary.com/rohing/image/upload/v1666754469/androcare/assets/green-check.png" alt="">
									<h4 class="mb-0 ml-2">Low oxygen IVF incubators</h4>
								</div>
								<p class="text-left">Our IVF incubators incorporate the newest technologies that are referred to as “tri-gas” or “low oxygen” IVF incubators. Studies have shown that tri-gas incubators have superior embryo development and improved pregnancy rates compared to older CO2 incubators.</p>
							</div>
							<div class="reason">
								<div class="d-flex align-items-center">
									<img style="height: 20px" src="https://res.cloudinary.com/rohing/image/upload/v1666754469/androcare/assets/green-check.png" alt="">
									<h4 class="mb-0 ml-2">BLASTOCYST CULTURE</h4>
								</div>
								<p class="text-left">We offer BLASTOCYST CULTURE (growing your embryo in the lab for two extra days) free of charge when required in our IVF and ICSI cycles</p>
							</div>
							<div class="reason">
								<div class="d-flex align-items-center">
									<img style="height: 20px" src="https://res.cloudinary.com/rohing/image/upload/v1666754469/androcare/assets/green-check.png" alt="">
									<h4 class="mb-0 ml-2">High success rate</h4>
								</div>
								<p class="text-left">We prioritise our client chance at conception by striving to achieve industry leading pregnancy rates.We constantly upgrade our lab equipment and treatment protocols to achieve this goal.We follow the latest developments in the IVF field and no expense is spared when our laboratory is concerned. Our lab is equip with IMSI , saturn laser biopsy , trigas incubators and Preimplantation Genetic Testing equipment.
								 </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('includes._cta')
@endsection
