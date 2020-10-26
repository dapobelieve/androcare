@extends('layouts.home-template')

@section('site.meta')
    <title>Androcare Fertility Nigeria </title>
    <meta name="description" content="Androcare Fertility Lagos Nigeria | We have Committed ourselves to offering a wide range of treatments with particular emphasis on issues related to female conception. At our advanced IVF facility, we are dedicated to helping you and your family.">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Androcare Fertility Nigeria" />
    <meta property="og:description" content="Best Fertility Clinic In Lagos &#124; We have Committed ourselves to offering a wide range of treatments with particular emphasis on issues related to female conception. At our advanced IVF facility, we are dedicated to helping you and your family." />
    <meta property="og:image" content="https://res.cloudinary.com/rohing/image/upload/v1599569049/androcare/assets/IMG-20190123-WA0012.jpg" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{config('androcare.website.name')}}" />

    <meta name="twitter:title" content="Androcare Fertility Nigeria">
    <meta name="twitter:description" content="Androcare Fertility Lagos Nigeria | We have Committed ourselves to offering a wide range of treatments with particular emphasis on issues related to female conception. At our advanced IVF facility, we are dedicated to helping you and your family.">
    <meta name="twitter:image" content="https://res.cloudinary.com/rohing/image/upload/v1599569049/androcare/assets/IMG-20190123-WA0012.jpg">
    <meta name="twitter:site" content="{{config('androcare.website.name')}}">
    <meta name="twitter:creator" content="{{config('androcare.website.socials.twitter')}}">
@stop

@section('content')

	@include('includes._slider')

	@include('includes._services')

	@include('includes._cta')

    @include('includes._testimonial')

	@include('includes._appointment')

@endsection
