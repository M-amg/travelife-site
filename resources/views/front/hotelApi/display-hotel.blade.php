@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/animate.css')}}'/>
    <style>
        body{
            background-color: #f0f2f3!important;
        }
    </style>
@endsection


@section('body')
    @php
        $v1=\Illuminate\Support\Facades\DB::table("cities")->where('id',request()->get('city'))->select('name AS ville', 'id', 'countryName AS pays')->get()->first();
    @endphp
    @php($dateDepart=Carbon\Carbon::parse($hotel['checkIn']))
    @php($dateReturn=Carbon\Carbon::parse($hotel['checkOut']))
    @php($agency=\App\models\agency\TlAgency::all()->first())
    @php($hotelName=$hotel['name'])



    <div style="padding-bottom: 30px; margin-top:100px">

        <div class="mb-5 bg-w container">
            <div class="row d-flex justify-content-between mt-100 pt-2">
                <div class="ml-2">
                    <h1 class="title-hotel fs-20 mt-4 mb-0">
                        {{ ucwords(strtolower($hotelName)) }} 
                    </h1>
                    <p class="mb-2">
                        @for($i=0; $i < 5; $i++)
                            @if($i < $hotel['starRating'])
                                <i class="fas fa-star fs-10"></i>
                            @endif
                        @endfor
                    </p>
                    <p style="color: #484f56; font-size: 14px;">
                        <i class="fas fa-map-marker-alt"></i> {{ucfirst(strtolower($hotel['address']))}} <span style="text-transform: lowercase !important;">à {{$hotel['city'] }}, {{$hotel['country']}}</span>
    
                        <a data-iframe="true" id="google-map" data-src="https://maps.google.com/maps?q={{ $hotel['latitude'] ?? '0' }},{{ $hotel['longitude'] ?? '0' }}&hl=es;z=14&amp;output=embed" class="mt-4 fs-12">
                            <span style="color:#69aae2; cursor: pointer;">Voir sur carte</span>
                        </a>
                    </p>
                </div>
                <div class="p-2 d-flex align-items-end"><span class="mb-2 mx-2 lowercase fs-14">à partir de </span> 
                    <h2 class="price"> <span style="color: #db1018;"> {{ collect($hotel['rates'])->min('totalPrice')*$currency}} 
                        <span class="fs-16">{{$currencyText}}</span> </span>
                        <span class="fs-10">pour {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}} {{str_plural(__('generate.night'), ($dateDepart->diffInDays($dateReturn)))}}</span>
                    </h2>
                </div>
            </div>
    
            <!-- Gallerie -->
            @include('front._includes.gallerie')
        </div>


        @if($savedHotel['hotelDescription'])
            <div style="padding-bottom: 30px;" class="package-description">
                <div class="container pt-xs-0 px-0">
            
                    <div style="background-color: white;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <a class="nav-link color-grey active" id="descriptif-tab" data-toggle="tab" href="#descriptif" role="tab" aria-controls="descriptif" aria-selected="true">Description</a>
                            <span class="barre"></span>
                            </li>
                        </ul>
            
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-4 color-blue" id="descriptif" role="tabpanel" aria-labelledby="descriptif-tab"      style="text-align: justify;">
                                {{ $savedHotel['hotelDescription'] }}
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        @endif

        @include('front.hotelApi.partials._roomlist')

    </div>

@endsection
@include('front.hotelApi._displayhoteljs')
