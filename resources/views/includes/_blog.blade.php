<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4">Recent Articles</h2>
			</div>
		</div>
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
	</div>
</section>