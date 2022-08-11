@extends('base.front')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel='stylesheet' href='{{asset('css/hotels.css')}}'/>
    <style>
        body{
            background-color: #f0f2f3!important;
        }
    </style>
@endsection
@section('body')
    @php
        $adult=0;
        $infant=0;

        foreach(request()->get('room') as $key => $room){
            $adult+=$room["adults"];
            $infant+=$room['children'];
        }

        $period = request()->query('period');

        $dateDepart=Carbon\Carbon::createFromFormat('d/m/Y',explode(" - ", $period)[0]);
        $dateReturn=Carbon\Carbon::createFromFormat('d/m/Y',explode(" - ", $period)[1]);
    @endphp
    
    <div class="list-hotels">

        <!--header-->

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

        <div class="container px-5" id="search">
            <div class="py-3 booking-search">
                <form action="{{route('api.hotels')}}" method="get">
                    <div class="row mb-1 mt-3 px-3">
                        <div class="col-12 col-md-3 p-1">
                            <div class="form-group city" style="position: relative !important;">
                                <i class="fas fa-map-marker-alt"
                                    style="color: rgb(40 53 108 / 80%); position: absolute !important; top: 19px; left: 8px; z-index: 200"></i>
                                <input type="text" placeholder="Destination (ville)"
                                        value="{{ request()->get('cityName') }}" name="cityName"
                                        autocomplete="off" class="form-control-new hotel" id="HvilleR" required>
                                <input type="hidden" value="{{ request()->get('city') }}" name="city" id="HvilleRID"
                                        required>
                                <div id="HvilleR_data" class="data-city" style="position: relative;"></div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 p-1">
                            <div class="form-group calendar" style="position: relative !important;">
                                <i class="fas fa-calendar-alt"
                                    style="color: rgb(40 53 108 / 80%); position: absolute; top: 19px; left: 8px; z-index: 200;"></i>
                                <input type="text" placeholder="" required class="date-ar form-control-new" id="Period"
                                        value="{{request()->get('period')}}"
                                        name="period" style="position: relative;">
                            </div>
                        </div>

                        <div class="col-12 col-md-4 p-1">
                            <div class="form-group voyageur">
                                <div class="position-relative form-control-new">
                                    <div class="d-flex sw-passengers-input" id="Hotel-passenger-input">
                                        <div>
                                            <i class="fas fa-users"
                                                style="color: rgb(40 53 108 / 80%); position: absolute; top: 18px; left: -37px; z-index: 200; padding-left: 46px;"></i>
                                        </div>
                                        <div class="p-2 pl-3 bd-highlight passengers-text">2 @lang('generate.Adult')s,</div>
                                        <div class="ml-auto p-2 bd-highlight"><i class="fa fa-caret-down"></i></div>
                                    </div>
                                    <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none"
                                            id="Hotel-passenger">
                                        <i class="fa fa-caret-up text-white"></i>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark">@lang('generate.room')(s)</span><br>
                                            </div>
                                            <div class="col-6">
                                                <div class="number-input">
                                                    <button class="hl-room"
                                                            type="button"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                    <input class="quantity" id="room" min="1" name="room" type="number"
                                                            value="{{sizeof(request()->get('room'))}}" max="4">
                                                    <button class="hl-room plus"
                                                            type="button"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                    ></button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="room-list">
                                            @php($query="")
                                            @foreach(request()->get('room') as $key => $room)

                                                @php($query .= "&room%5B".$key."%5D%5Badults%5D=".$room['adults'] )
                                                @php($query .= "&room%5B".$key."%5D%5Bchildren%5D=".$room['children'] )


                                                @if($key>0)
                                                    <hr>
                                                @endif
                                                <div class="row mb-1">
                                                    <div class="col-6">
                                                        <span class="text-dark">@lang('generate.Adult')(s) </span><br>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="number-input">
                                                            <button class="hl-passenger"
                                                                    type="button"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                            <input class="quantity" min="1" name="room[{{$key}}][adults]"
                                                                    id="adult-{{$key}}" value="{{$room['adults']}}" max="10"
                                                                    type="number">
                                                            <button class="hl-passenger plus"
                                                                    type="button"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            ></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-6">
                                                        <span class="text-dark">@lang('generate.Child')(s)</span><br>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="number-input">
                                                            <button class="infant-age" data-id="{{$key}}"
                                                                    type="button"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                            <input class="quantity" min="0" id="infant-{{$key}}"
                                                                    name="room[{{$key}}][children]"
                                                                    value="{{$room['children']}}" max="4" type="number">

                                                            <button class="infant-age plus" data-id="{{$key}}"
                                                                    type="button"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            ></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="infant-age-{{$key}}">
                                                    @if($room['children']>0)
                                                        @foreach($room['childrenAges'] as $key2=>$age)

                                                            @php($query.="&room%5B".$key."%5D%5BchildrenAges%5D%5B".$key2."%5D=".$age)

                                                            <div class="row mb-1">
                                                                <div class="col-6">
                                                                    <span class="text-dark">Age {{$key2}}</span><br>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="number-input">
                                                                        <button type="button"
                                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                                        <input class="quantity" min="1"
                                                                                name="room[{{$key}}][childrenAges][{{$key2}}]"
                                                                                id="age{{$key2}}" value="{{$age}}" max="17"
                                                                                type="number" required>
                                                                        <button class="plus" type="button"
                                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-2 p-1">
                            <div class="form-group btnHotelSearch">
                                <button type="submit" class="btn bg-my btn-block text-white rounded-0" style="height: 50px">
                                    @lang('generate.searchFor')
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end header-->

        <!--Content-->
        <div class="container mt-5 pt-5">
            <div class="row">
                <!--Filter-->
                <div class="col-12 col-md-3">

                    @include('front.hotelApi.partials._filter')

                </div>
                <!--/Filter-->

                <!--Results-->
                <div class="col-12 col-md-9">

                    <div id="hotel-results">

                    </div>
                    <div class="my-5 pb-3 text-center">
                        <button id="load-more" class="btn btn-block bg-my rounded-0"
                                data-page="1">@lang('voir plus')</button>
                    </div>
                </div>
                <!--End Results-->
            </div>
        </div>
        <!--End Content-->
    </div>

@endsection
@include('front.hotelApi._hoteljs')
