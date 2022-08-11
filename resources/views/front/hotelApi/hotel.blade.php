@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <link rel='stylesheet' href='{{asset('css/animate.css')}}'/>
@endsection


@section('body')
    @php
        $v1=\Illuminate\Support\Facades\DB::table("cities")->where('id',request()->get('city'))->select('name AS ville', 'id', 'countryName AS pays')->get()->first();
    @endphp
    @php($dateDepart=Carbon\Carbon::parse($hotel['checkIn']))
    @php($dateReturn=Carbon\Carbon::parse($hotel['checkOut']))
    @php($hotelName=$hotel['name'])



    <div style="background: #f4f3ee; padding-bottom: 30px;">
        <div id="displayHotelApi" class="container">

            @include('front.hotelApi.partials._detailHotel')
            @include('front.hotelApi.partials._roomList')

        </div>
    </div>

@endsection
@include('front.hotelApi.partials.js._hotel')
