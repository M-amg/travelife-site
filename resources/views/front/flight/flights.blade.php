@extends('base.front')
@section('style')
    <!-- daterangepicker -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>

    <link rel='stylesheet' href='{{asset('assets/ion-rangeSlider/ion.rangeSlider.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/ion-rangeSlider/ion.rangeSlider.skinHTML5.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/animate.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/flights.css')}}'/>

    <style>
        body{
            background-color: #f0f2f3!important;
        }
    </style>
@endsection
@section('body')

    @php
        $t=request()->get('typeVol')?request()->get('typeVol'):"AS";
        $typeVol=['AR'=>"fa-exchange-alt",'AS'=>"fa-arrow-right"];
        $classVol=['All'=>"Tous les classes",'Economy'=>"Economique",'Business'=>"Business",'PremiumEconomy'=>"Premium"];
         if(empty($minPrix))
             $minPrix=0;
        if(empty($maxPrix))
            $maxPrix=0;


        $adult = request()->get('passengers')['adults'] ?? 0;
        $infant = request()->get('passengers')['children'] ?? 0;
        $baby = request()->get('passengers')['infants'] ?? 0;

        $passengers = '';
        if($adult==1)
            $passengers .= $adult ." Adulte ";
        elseif($adult>1){
            $passengers .= $adult . " Adultes ";
        }
        elseif($infant>0)
            $passengers .= " , ";

        if($infant==1)
            $passengers .= $infant ." Enfant ";
        elseif($infant>1)
            $passengers .= $infant ." Enfants ";
        elseif($baby>0)
            $passengers .= " , ";

        if($baby==1)
            $passengers .= $baby . " Bébé";
        elseif($baby>1)
            $passengers .= $baby . " Bébés";
    @endphp

    @isset($slides)
        <div class="owl-carousel owl-theme owl-slid d-none d-md-block">
            @foreach($slides as $key => $slide)
                <div class="item">
                    <img class="item-{{$key}} w-100" src="{{config('services.pathImg').$slide->picture}}" title="{{$slide->title}}" 
                            style="height: 300px; object-fit: cover; margin-bottom: 60px;"/>
                    <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                        <h1 class="text-center w-80 pt-4 bold" style="color: white">{{$slide->title}}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset

    <div class="list-hotels">
        <div style="margin-top: -225px; color: #28356c;">

            @include('front.flight.partials._flightsSearch')

            <div class="container mt-5 pt-5">
                <div class="row">

                    <div class="col-12 col-lg-3">
                        @include('front.flight.partials._filter')
                    </div>

                    <div class="col-12 col-lg-9">
                        @if(isset($error_message))
                            <div class="text-center alert alert-danger" style="color: #000">
                                {{$error_message}}
                            </div>
                        @endif
                        @php($key=0)
                        <!--Item-->
                        @if(request()->get('typeVol')=='AR')
                            @include('front.flight.partials.flightsList.round')
                        @else
                            @include('front.flight.partials.flightsList.simple')
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@include('front.flight.partials.js._flights')
