<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-5">
					<h2 class="ftco-heading-2 logo"><img src="{{config('androcare.website.logo')}}" alt="" height="54"></h2>
					<p>We are always here to provide you with a world-class fertility treatments.</p>
				</div>
				<div class="ftco-footer-widget mb-5">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">
                                   {{config('androcare.website.address')}}
                                </span></li>
							<li>
								<a href="#"><span class="icon icon-phone"></span><span class="text">{{config('androcare.website.phone')}}</span></a>
							</li>
							<li>
								<a href="mailto:info@androcarefertilityng.org"><span class="icon icon-envelope"></span><span class="text">
                                        <span>{{config('androcare.website.email')}}</span></span></a>
							</li>
						</ul>
					</div>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
						<li class="ftco-animate"><a target="_blank" href="{{config('androcare.website.socials.twitter')}}"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a target="_blank" href="{{config('androcare.website.socials.facebook')}}"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a target="_blank" href="{{config('androcare.website.socials.instagram')}}"><span class="icon-instagram"></span></a></li>
						<li class="ftco-animate"><a target="_blank" href="{{config('androcare.website.socials.linkedin')}}"><span class="icon-linkedin"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-5 ml-md-4">
					<h2 class="ftco-heading-2">Links</h2>
					<ul class="list-unstyled">
						<li><a href="{{route('andro.home')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
						<li><a href="{{route('andro.services')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
						<li><a href="{{route('andro.gallery')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Gallery</a></li>
						<li><a href="{{route('andro.articles')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Articles</a></li>
						<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
					</ul>
				</div>
				<div class="ftco-footer-widget mb-5 ml-md-4">
					<h2 class="ftco-heading-2">Services</h2>
					<ul class="list-unstyled">
						<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>SPERM GENETICS</a></li>
						<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>FERTILITY LABORATORY SERVICES</a></li>
						<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>GENDER SELECTION</a></li>
						<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>IN-VITRO FERTILIZATION (IVF)</a></li>
						<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>ADVANCED ANDROLOGY SCREENINGS</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-5">
					<h2 class="ftco-heading-2">Recent Articles</h2>
					@foreach($articles->slice(0, 2) as $article)
						<div class="block-21 mb-4 d-flex">
						<a class="blog-img mr-4" style="background-image: url({{$article->mainImage()}});"></a>
						<div class="text">
							<h3 class="heading"><a href="{{route('andro.article.detaiils', ['article' => $article->slug])}}">{{$article->title}}</a></h3>
							<div class="meta">
								<div><a href="{{route('andro.article.detaiils', ['article' => $article->slug])}}"><span class="icon-calendar"></span> {{$article->formattedDate('day', 'shortMonthName', 'year')['month']}} {{$article->formattedDate()['day']}}, {{$article->formattedDate()['year']}}</a></div>
								<div><a href="{{route('andro.article.detaiils', ['article' => $article->slug])}}"><span class="icon-person"></span> Admin</a></div>
{{--								<div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-5">
					<h2 class="ftco-heading-2">Opening Hours</h2>
					<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
				</div>
				<div class="ftco-footer-widget mb-5">
					<h2 class="ftco-heading-2">Subscribe Us!</h2>
					<form action="#" class="subscribe-form">
						<div class="form-group">
							<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
							<input type="submit" value="Subscribe" class="form-control submit px-3">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p>
				Copyright &copy;<script type="7e700508d0afead9016b28c0-text/javascript">document.write(new Date().getFullYear());
</script> All rights reserved | Built with <i class="icon-heart" aria-hidden="true"></i> <a target="_blank" href="https://twitter.com/CodeDrogo">by Believe</a>
				</p>

			</div>
		</div>
	</div>
</footer>
