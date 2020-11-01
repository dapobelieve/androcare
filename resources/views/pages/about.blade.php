@extends('layouts.home-template')

@section('site.title')
    <title>About Us | Androcare Fertility Nigeria </title>
@stop

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1598067670/androcare/assets/pexels-photo-3758833.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(https://res.cloudinary.com/rohing/image/upload/v1604219042/androcare/assets/photo-1596510914914-e14c6f59f925.jpg);">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading">{{config('androcare.website.name')}}</span>
                            <h2 class="mb-4" style="font-size: 28px;">If you are trying to get pregnant and experiencing difficulties, you already know how much of an emotional turbulence it can be.</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>Yet, when you decide to begin your fertility journey, you are making an incredible commitment to pursue a long awaited dream, to start a family.</p>
                        <p>We are equally committed to making your dream a reality and we achieve this through our philosophy of personalised care.  This approach ensures that everyone who comes to us for help not only receives comprehensive advice, evaluation and a world-class treatment program, but that they are supported at every stage by our dedicated team in order to deliver the very best outcome.</p>
                        <p>Be rest assured that whatever your fertility needs, the team here at {{config('androcare.website.name')}}  are dedicated to ensuring that you receive a uniquely tailored and supportive approach throughout each stage of your journey to start a family.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes._cta')
@endsection
