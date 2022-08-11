@extends('base.front')
@section('style')

    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <!-- animation -->
    <link rel='stylesheet' href='{{asset('assets/animatecss/animate.css')}}'/>

    <link rel='stylesheet' href='{{asset('assets/daterangepicker/daterangepicker.css')}}'/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('body')

<header class="position-relative">
    @isset($slides)
        <div class="owl-carousel owl-theme owl-slid d-none d-md-block">
            @foreach($slides as $key => $slide)
                <div class="item">
                    <img class="item-{{$key}}" src="{{config('services.pathImg').$slide->picture}}" title="" style="height: 500px; margin-bottom: 60px;"/>
                    <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                        <h1 class="text-center w-80 pt-4" style="color: white">
                            <strong>{{$slide->title}}</strong>
                        </h1>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset
    <div class="container motor-search-web">
        <div class="row" style="padding-top: 22px">
            <div class="w-100 col-md-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="py-3 booking-search tab-pane fade show active" id="vol" role="tabpanel" aria-labelledby="nav-contact-tab">
                        @include('front.flight.partials._flightSearch')
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    @include('front._includes.home.flightHome')
</div>

@endsection

@include('front.flight.partials.js._index')
