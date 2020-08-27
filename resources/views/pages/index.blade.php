@extends('layouts.home-template')

@section('site.meta')
    <title>Welcome to Androcare Fertility Nigeria </title>
    <meta name="description" content="Androcare Fertility Nigeria | Best Fertility Clinic In Lagos &#124; Androcare Fertility Center">
@stop

@section('content')

	@include('includes._slider')

	@include('includes._services')

	@include('includes._cta')

    @include('includes._testimonial')

	@include('includes._appointment')

@endsection
