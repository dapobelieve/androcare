@extends('layouts.home-template')

@section('site.title')
    <title>Services | Androcare Fertility Nigeria </title>
    <meta name="robots" content="index, follow">
@stop

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/assets/front/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Our Services</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="{{route('andro.home')}}">Home<i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Our Services <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @forelse($services as $service)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry shadow-1">
                            <a href="{{route('andro.service.details', ['service' => $service->slug ])}}" class="block-20" style="background-image: url({{$service->mainImage()}});">                   </a>
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="{{route('andro.service.details', ['service' => $service->slug ])}}">{{$service->name}}</a></h3>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0">
                                        <a href="{{route('andro.service.details', ['service' => $service->slug ])}}" style="color: #d93300">Learn More
                                            <span class="ion-ios-arrow-round-forward"></span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No services listed yet</p>
                @endforelse
            </div>
{{--            <div class="row no-gutters my-5">--}}
{{--                <div class="col text-center">--}}
{{--                    <div class="block-27">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>--}}
{{--                            <li class="active"><span>1</span></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

@stop
