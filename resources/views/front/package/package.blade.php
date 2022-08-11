@extends('base.front')
@section('style')
    <!-- slide -->
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/animate.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/package.css')}}'/>
    <style>
        body{
            background-color: #f0f2f3!important;
        }
    </style>
@endsection
@section('body')

    <div class="mb-5 bg-w container" style="margin-top:100px">
        <div class="row d-flex justify-content-between mt-100 pt-2">
            <h1 class="title-hotel fs-20 mt-4 mb-0 ml-2">
                {{ ucwords(strtolower($package->title)) }}
            </h1>
            <div class="p-2 d-flex align-items-end"><span class="mb-2 mx-2 lowercase fs-14">à partir de </span> 
                <h2 class="price"> <span style="color: #db1018;"> 
                    {{ number_format($package->startPrice*$currency, 0, ',', ' ') }}
                    <span class="fs-16">{{$currencyText}}</span> </span>
                    <span class="fs-10">@lang('generate.Perperson')</span>
                </h2>
            </div>
        </div>

        <!-- Gallerie -->
        @include('front._includes.gallerie')
    </div>

    @include('front.package.partials._tablist')

    @if($package->isAlaCarte != 1)
        @include('front.package.partials._search')
    @endif

@endsection

@include('front.package.partials._js')

