@extends('base.front')
@section('style')
@endsection
@section('body')
    <div class="top-baner swiper-animate arrows">
        <div class="swiper-container main-slider-3 h-143" data-autoplay="0" data-loop="1" data-speed="800"
             data-center="0" data-slides-per-view="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide active" data-val="0">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act"
                             style="background-image:url({{asset('front/img/home_3/main_slide_1.jpg')}})"></div>
                    </div>
                    <div class="vertical-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                    <div class="main-title">
                                        <h1 class="color-white delay-1">Où voudriez-vous aller?</h1>
                                        <form action="#">
                                            <div class="input-style-1">
                                                <input type="text" required="" placeholder="Entrez votre destination">
                                            </div>
                                            <button type="submit" class="c-button bg-dr-blue hv-transparent"><img
                                                        src="{{asset('front/img/search_icon.png')}}" alt=""><span>rechercher maintenant</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination pagination-hidden poin-style-1"></div>
            </div>
        </div>
    </div>

    <div class="main-wraper">
        <div class="clip hotel-clip">
            <div class="bg bg-bg-chrome act" style="background-image:url({{asset('front/img/home_3/hotel_bg.jpg')}})">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="choose-hotel">
                        <div class="drop-wrap drop-wrap-s-2">
                            <div class="drop">
                                <b>France</b>
                                <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>
                                <span>
								    <a href="#">France</a>
									<a href="#">Italy</a>
									<a href="#">Spain</a>
									<a href="#">Germany</a>
									<a href="#">Netherlands</a>
								</span>
                            </div>
                        </div>
                        <div class="drop-wrap drop-wrap-s-2">
                            <div class="drop">
                                <b>Paris</b>
                                <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>
                                <span>
									<a href="#">Paris</a>
									<a href="#">Rome</a>
									<a href="#">{{ $currencyText }}rid</a>
									<a href="#">Amsterdam</a>
								</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="hotel-choose">
                        <div class="fl w_50">
                            <div class="radius-mask popular-img">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act"
                                         style="background-image:url({{asset('front/img/home_3/hotel_big_img_1.jpg')}})">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="price price-s-1">273 {{ $currencyText }}</div>
                            </div>
                        </div>
                        <div class="fl w_50">
                            <div class="title">
                                <h3>Hotel Hilton</h3>
                                <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris, France</span>
                                <div class="rate-wrap">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <i>485 rewies</i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">Réserve maintenant</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="full-width arrows arrows-3">
                                <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="1000"
                                     data-center="0" data-slides-per-view="responsive" data-mob-slides="1"
                                     data-xs-slides="2" data-sm-slides="2" data-md-slides="4" data-lg-slides="4"
                                     data-add-slides="4">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Paris Hotel</b></h6>
                                            <h6>de 300 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_1.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Metropole Hotel</b></h6>
                                            <h6>de 273 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_2.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>de 273 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_3.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Park Hyatt Hotel</b></h6>
                                            <h6>de 273 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_4.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination"></div>
                                </div>
                                <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
                                <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hotel-choose hotel-hidden">
                        <div class="fl w_50">
                            <div class="radius-mask popular-img">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act"
                                         style="background-image:url({{asset('front/img/home_3/hotel_big_img_2.jpg')}})">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="price price-s-1">135 {{ $currencyText }}</div>
                            </div>
                        </div>
                        <div class="fl w_50">
                            <div class="title">
                                <h3>Hotel Pacific</h3>
                                <span class="color-dark-2 palce-txt">1 Place de la Défense, Puteaux, Lyon</span>
                                <div class="rate-wrap">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <i>313 avis</i>
                                </div>
                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta
                                    nequetiam.</p>
                                <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">Réserve maintenant</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="full-width arrows arrows-3">
                                <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="1000"
                                     data-center="0" data-slides-per-view="responsive" data-mob-slides="1"
                                     data-xs-slides="2" data-sm-slides="2" data-md-slides="4" data-lg-slides="4"
                                     data-add-slides="4">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>de 300 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_5.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Sea Hotel</b></h6>
                                            <h6>de 273 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_6.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Parkside Hotel</b></h6>
                                            <h6>de 273 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_7.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide hotel-sm-slide">
                                            <h6><b>Lyon Hotel</b></h6>
                                            <h6>de 273 {{ $currencyText }}</h6>
                                            <div class="radius-mask tour-block">
                                                <div class="clip">
                                                    <div class="bg bg-bg-chrome act"
                                                         style="background-image:url({{asset('front/img/home_3/hotel_sm_img_8.jpg')}})">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination"></div>
                                </div>
                                <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
                                <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>hôtels populaires</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                            Suspendisse id tor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="arrows">
                    <div class="swiper-container hotel-slider" data-autoplay="5000" data-loop="1" data-speed="1000"
                         data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2"
                         data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/pop_hotel_1.jpg')}}}" alt="">
                                        <div class="price price-s-1">273 {{ $currencyText }}</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">sélectionner</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                    src="{{asset('front/img/loc_icon_small_drak.png')}}" alt="">voir sur la carte</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/pop_hotel_1.jpg')}}}" alt="">
                                        <div class="price price-s-1">273 {{ $currencyText }}</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">sélectionner</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                    src="{{asset('front/img/loc_icon_small_drak.png')}}" alt="">voir sur la carte</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hotel-item">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/pop_hotel_1.jpg')}}}" alt="">
                                        <div class="price price-s-1">273 {{ $currencyText }}</div>
                                    </div>
                                    <div class="title clearfix">
                                        <h4><b>royal Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux</span>
                                        <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae
                                            pulvinar massa idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl">sélectionner</a>
                                        <a href="#" class="c-button color-dr-blue hv-o b-50 fr"><img
                                                    src="{{asset('front/img/loc_icon_small_drak.png')}}" alt="">voir sur la carte</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                        <div class="swiper-arrow-left arrows-travel"><span class="fa fa-angle-left"></span></div>
                        <div class="swiper-arrow-right arrows-travel"><span class="fa fa-angle-right"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-wraper">
        <div class="tab-select">
            <div class="container">
                <div class="form-block clearfix">
                    <div class="drop-wrap drop-wrap-s-3 color-3">
                        <div class="drop">
                            <b>01 adulte</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
							    <a href="#">HOTEL DE L'ÎLE DU NORD</a>
								<a href="#">QUATRE SAISONS HÔTEL</a>
								<a href="#">PARK PARIS HOTEL</a>
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-tour-header row no-padd">
            <div class="tab-tour col-sm-4 col-xs-12">
                <div class="tour-block tour-block-s-3">
                    <span class="border-line-top"></span>
                    <span class="border-line-bottom"></span>
                    <div class="tour-layer delay-1"></div>
                    <img src="{{asset('front/img/home_3/hotel_big_3.jpg')}}" class="res-img" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3>HOTEL DE L'ÎLE DU NORD</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4>de<b> 860 {{ $currencyText }}</b></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-tour col-sm-4 col-xs-12">
                <div class="tour-block tour-block-s-3">
                    <span class="border-line-top"></span>
                    <span class="border-line-bottom"></span>
                    <div class="tour-layer delay-1"></div>
                    <img src="{{asset('front/img/home_3/hotel_big_2.jpg')}}" class="res-img" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3>QUATRE SAISONS HÔTEL</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>de<b> 860 {{ $currencyText }}</b></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-tour col-sm-4 col-xs-12">
                <div class="tour-block tour-block-s-3">
                    <span class="border-line-top"></span>
                    <span class="border-line-bottom"></span>
                    <div class="tour-layer delay-1"></div>
                    <img src="{{asset('front/img/home_3/hotel_big_1.jpg')}}" class="res-img" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3>PARK PARIS HOTEL</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4>de<b> 860 {{ $currencyText }}</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-tour-content">
            <div class="hotel-wrpp active">
                <div class="clip">
                    <div class="bg bg-bg-chrome act" style="background-image:url({{asset('front/img/home_3/hotel_big_main.jpg')}})">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
                            <div class="hotel-choose hotel-choose-1">
                                <div class="fl w_100">
                                    <div class="title">
                                        <h4>de<b> 860 {{ $currencyText }}</b></h4>
                                        <h3>HOTEL DE L'ÎLE DU NORD</h3>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 Avis</i>
                                        </div>
                                        <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris, France</span>
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                            idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                                    </div>
                                </div>
                                <div class="row-5 row">
                                    <div class="full-width arrows arrows-3">
                                        <div class="swiper-container" data-autoplay="5000" data-loop="1"
                                             data-speed="1000" data-center="0" data-slides-per-view="responsive"
                                             data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                                             data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url({{asset('front/img/home_3/mini_hotel_1.jpg')}})">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url({{asset('front/img/home_3/mini_hotel_2.jpg')}})">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url({{asset('front/img/home_3/mini_hotel_3.jpg')}})">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                        <div class="swiper-arrow-left offers-arrow"><span
                                                    class="fa fa-angle-left"></span></div>
                                        <div class="swiper-arrow-right offers-arrow"><span
                                                    class="fa fa-angle-right"></span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel-wrpp">
                <div class="clip">
                    <div class="bg bg-bg-chrome act" style="background-image:url(img/home_3/hotel_big_2.jpg)">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
                            <div class="hotel-choose hotel-choose-1">
                                <div class="fl w_100">
                                    <div class="title">
                                        <h4>From<b> $860</b></h4>
                                        <h3>FOUR SEASONS hotel</h3>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i>
                                        </div>
                                        <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris, France</span>
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                            idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                                    </div>
                                </div>
                                <div class="row-5 row">
                                    <div class="full-width arrows arrows-3">
                                        <div class="swiper-container" data-autoplay="5000" data-loop="1"
                                             data-speed="1000" data-center="0" data-slides-per-view="responsive"
                                             data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                                             data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url(img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url(img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url(img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                        <div class="swiper-arrow-left offers-arrow"><span
                                                    class="fa fa-angle-left"></span></div>
                                        <div class="swiper-arrow-right offers-arrow"><span
                                                    class="fa fa-angle-right"></span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel-wrpp">
                <div class="clip">
                    <div class="bg bg-bg-chrome act" style="background-image:url(img/home_3/hotel_big_1.jpg)">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
                            <div class="hotel-choose hotel-choose-1">
                                <div class="fl w_100">
                                    <div class="title">
                                        <h4>From<b> $400</b></h4>
                                        <h3>Park Paris hotel</h3>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i>
                                        </div>
                                        <span class="color-dark-2 palce-txt">2 Place de la Défense, Puteaux, Paris, France</span>
                                        <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                            idporta nequetiam.</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40">book now</a>
                                    </div>
                                </div>
                                <div class="row-5 row">
                                    <div class="full-width arrows arrows-3">
                                        <div class="swiper-container" data-autoplay="5000" data-loop="1"
                                             data-speed="1000" data-center="0" data-slides-per-view="responsive"
                                             data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                                             data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url(img/home_3/mini_hotel_1.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url(img/home_3/mini_hotel_2.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide hotel-sm-block">
                                                    <div class="radius-mask tour-block">
                                                        <div class="clip">
                                                            <div class="bg bg-bg-chrome act"
                                                                 style="background-image:url(img/home_3/mini_hotel_3.jpg)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                        <div class="swiper-arrow-left offers-arrow"><span
                                                    class="fa fa-angle-left"></span></div>
                                        <div class="swiper-arrow-right offers-arrow"><span
                                                    class="fa fa-angle-right"></span></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wraper padd-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>Haute Hotel Détails</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                            Suspendisse id tor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="arrows">
                    <div class="swiper-container pad-15" data-autoplay="0" data-loop="0" data-speed="1000"
                         data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                         data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/hot_hotel_1.jpg')}}" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>de<b> 273 {{ $currencyText }}</b></h4>
                                        <h4><b>bristol new york Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 Avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux, Paris, France.</span>
                                        <p class="f-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                    class="fa fa-flag"></i> @lang('generate.showMore')</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/hot_hotel_1.jpg')}}" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>de<b> 273 {{ $currencyText }}</b></h4>
                                        <h4><b>bristol new york Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 Avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux, Paris, France.</span>
                                        <p class="f-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                    class="fa fa-flag"></i> @lang('generate.showMore')</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/hot_hotel_1.jpg')}}" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>de<b> 273 {{ $currencyText }}</b></h4>
                                        <h4><b>bristol new york Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 Avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux, Paris, France.</span>
                                        <p class="f-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                    class="fa fa-flag"></i> @lang('generate.showMore')</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/hot_hotel_1.jpg')}}" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>de<b> 273 {{ $currencyText }}</b></h4>
                                        <h4><b>bristol new york Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 Avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux, Paris, France.</span>
                                        <p class="f-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                    class="fa fa-flag"></i> @lang('generate.showMore')</a>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="hotel-item style-2">
                                    <div class="radius-top">
                                        <img src="{{asset('front/img/home_3/hot_hotel_1.jpg')}}" alt="">
                                        <div class="price price-s-1">save 20%</div>
                                    </div>
                                    <div class="title">
                                        <h4>de<b> 273 {{ $currencyText }}</b></h4>
                                        <h4><b>bristol new york Hotel</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                                <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 Avis</i>
                                        </div>
                                        <span class="f-14 color-dark-2">2 Place de la Sans Défense, Puteaux, Paris, France.</span>
                                        <p class="f-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore</p>
                                        <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-50"><i
                                                    class="fa fa-flag"></i> @lang('generate.showMore')</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination poin-style-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-mob-12 col-xs-6">
                    <h2 class="title-small">Tendance maintenant</h2>
                    <div class="row">
                        <div class=" col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-mob-12 col-xs-6">
                    <h2 class="title-small">Spécial pour Vous</h2>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                            <div class="hotel-small clearfix">
                                <a class="hotel-img black-hover" href="#">
                                    <img class="img-responsive radius-3" src="{{asset('front/img/home_3/hotel-small_1.jpg')}}" alt="">
                                    <div class="tour-layer delay-1 radius-3"></div>
                                </a>
                                <div class="hotel-desc">
                                    <h4>bristol Hotel</h4>
                                    <h4>de 273 {{ $currencyText }}</h4>
                                    <div class="hotel-loc">France, Paris</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
