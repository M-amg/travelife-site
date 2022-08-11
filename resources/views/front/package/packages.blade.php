@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('assets/ion-rangeSlider/ion.rangeSlider.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/ion-rangeSlider/ion.rangeSlider.skinHTML5.css')}}'/>

    <style>
        body{
            background-color: #f0f2f3!important;
        }
    </style>
@endsection

@section('body')
    @php($currencytext = 'DH')

    <!--header-->
    <header class="position-relative">
        @php($slides=\App\models\page\TlSlider::all()->where('property', 'package')->where('status', 1)->take(3))
        @isset($slides)
            <div class="owl-carousel owl-theme owl-slid d-none d-md-block">
                @foreach($slides as $key => $slide)
                    <div class="item">
                        <img class="item-{{$key}} img-fluid w-100" src="{{config('services.pathImg').$slide->picture}}" title=""
                        style="height: 380px;object-fit:cover;"/>
                        <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                            <h1 class="text-center w-80 pt-4" style="color: white; margin-top: 10px; font-weight: bold;">{{$slide->title}}</h1>
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset
    </header>
    <!-- END Header-->

    <!--Content-->
    <div class="container" style="margin-top: -85px;">
        @include('front.package.partials._searchliste')
    </div>
    @include('front.package.partials._packageliste')
    <!-- END Content-->

@endsection

@include('front.package.partials._packagejs')

