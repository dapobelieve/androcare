@extends('layouts.home-template')

@section('site.title')
	<title>Not Found | Androcare Fertility Nigeria </title>
@stop

@section('content')

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3>404, Sorry wrong diagnosis :(</h3> <a href="{{route('andro.home')}}">Back to home</a>
				</div>
			</div>
		</div>
	</section>

@stop