@extends('layouts.home-template')

@section('site.title')
    <title>Home | Androcare Fertility Nigeria </title>
@stop

@section('content')

	@include('includes._slider')

	@include('includes._services')

	@include('includes._cta')

    @include('includes._testimonial')

	@include('includes._appointment')

@endsection
