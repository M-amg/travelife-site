@extends('base.front')
@section('style')
@endsection
@section('body')
    <div class="top-baner swiper-animate arrows">
        <div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide active" data-val="0">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url({{asset('front/img/home_9/slide_1.jpg')}})">
                        </div>
                    </div>
                    <div class="vertical-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title style-1 vert-title">
                                        <div class="top-weather-info delay-1">
                                            <img src="{{asset('front/img/home_9/slide_icon.png')}}" alt="">
                                        </div>
                                        <h1 class="color-white delay-1">@lang('generate.amazingCruises')</h1>
                                        <h3 class="person_price color-white delay-1">@lang('generate.moreThen') <strong>10 000</strong> @lang('generate.cruisesAroundWorld')</h3>
                                        <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum. Lorem ipsum dolor sit.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#" class="c-button b-60 bg-blue-3 hv-transparent delay-2 fr"><img src="{{asset('front/img/loc_icon.png')}}" alt=""><span>@lang('generate.seeVisites')</span></a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#" class="c-button b-60 bg-tr-1 hv-blue-3-f delay-2 fl"><span>@lang('generate.seeHaute')</span></a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-val="1">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url({{asset('front/img/home_9/slide_1.jpg')}})">
                        </div>
                    </div>
                    <div class="vertical-align">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title style-1 vert-title">
                                        <div class="top-weather-info delay-1">
                                            <img src="{{asset('front/img/home_9/slide_icon.png')}}" alt="">
                                        </div>
                                        <h1 class="color-white delay-1">@lang('generate.amazingCruises')</h1>
                                        <h3 class="person_price color-white delay-1">@lang('generate.moreThen') <strong>10 000</strong> @lang('generate.cruisesAroundWorld')</h3>
                                        <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum. Lorem ipsum dolor sit.</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#" class="c-button b-60 bg-blue-3 hv-transparent delay-2 fr"><img src="{{asset('front/img/loc_icon.png')}}" alt=""><span>@lang('generate.seeVisites')</span></a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="#" class="c-button b-60 bg-tr-1 hv-blue-3-f delay-2 fl"><span>@lang('generate.seeHaute')</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination pagination-hidden poin-style-1"></div>
        </div>
        <div class="arrow-wrapp m-200 arr-s-7">
            <div class="cont-1170">
                <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
            </div>
        </div>

        <div class="baner-tabs style-2">
            <div class="text-center">
                <div class="drop-tabs">
                    <b>@lang('generate.hotels')</b>
                    <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
                    <ul class="nav-tabs tpl-tabs tabs-style-1">
                        <li class="active click-tabs"><a href="#one" data-toggle="tab" aria-expanded="false">@lang('generate.hotels')</a></li>
                        <li class="click-tabs"><a href="#two" data-toggle="tab" aria-expanded="false">@lang('generate.vols')</a></li>
                        <li class="click-tabs"><a href="#three" data-toggle="tab" aria-expanded="false">@lang('generate.carsSlide')</a></li>
                        <li class="click-tabs"><a href="#four" data-toggle="tab" aria-expanded="false">@lang('generate.croisiers')</a></li>
                        <li class="click-tabs"><a href="#five" data-toggle="tab" aria-expanded="false">@lang('generate.activities')</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content tpl-tabs-cont section-text t-con-style-1">
                <div class="tab-pane active in" id="one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>@lang('generate.ourdestinations')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                        <input type="text" placeholder="Entrez une destination ou un nom d'hôtel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.goDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.returnDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.child')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.Adult')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.room')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="{{route('front.cruises.list')}}" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>@lang('generate.searchFor') </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane in" id="two">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>@lang('generate.ourdestinations')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                        <input type="text" placeholder="Entrez une destination ou un nom d'hôtel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.goDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.returnDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.child')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.Adult')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.room')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>@lang('generate.searchFor') </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane in" id="three">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>@lang('generate.ourdestinations')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                        <input type="text" placeholder="Entrez une destination ou un nom d'hôtel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.goDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.returnDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.child')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.Adult')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.room')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>@lang('generate.searchFor') </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane in" id="four">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>@lang('generate.ourdestinations')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                        <input type="text" placeholder="Entrez une destination ou un nom d'hôtel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.goDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.returnDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.child')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.Adult')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.room')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>@lang('generate.searchFor')</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane in" id="five">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="tabs-block">
                                    <h5>@lang('generate.ourdestinations')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                        <input type="text" placeholder="Entrez une destination ou un nom d'hôtel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.goDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                <div class="tabs-block">
                                    <h5>@lang('generate.returnDate')</h5>
                                    <div class="input-style-1">
                                        <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                        <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.child')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.Adult')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                <div class="tabs-block">
                                    <h5>@lang('generate.room')s</h5>
                                    <div class="drop-wrap drop-wrap-s-3">
                                        <div class="drop">
                                            <b>01</b>
                                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                                            <span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="c-button b-60 bg-white"><i class="fa fa-search"></i><span>@lang('generate.searchFor')</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">top @lang('generate.croisiers')</h4>
                        <h2 class="color-dark-2">mieux proposer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-container pad-15" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hotel-item style-6">
                                <div class="radius-top">
                                    <img src="{{asset('front/img/home_9/tour_1.jpg')}}" alt="">
                                </div>
                                <div class="title">
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info fl">
                                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                            <span class="font-style-2 color-grey-3">alaska</span>
                                        </div>
                                    </div>
                                    <h4><b>ALASKA LAND croisière</b></h4>
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
                                    <h5>de <strong>860 {{ $currencyText }}</strong> / personne</h5>
                                    <p class="f-14 color-grey-3">San Juan, Charlotte Amalie, Philipsburg, Castries, Basseterre, Ponta Delgada, Southampton.</p>
                                    <a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">@lang('generate.detail')</a>
                                    <a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">@lang('generate.toBook')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination poin-style-2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- TOP PREVIEW-->
    <div class="top-preview row no-margin">
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
            <div class="tp_entry style-2">
                <div class="tp_image">
                    <img class="center-image" src="{{asset('front/img/home_9/preview_1.jpg')}}" alt="">
                </div>
                <div class="tp_content">
                    <div class="rate-wrap clearfix">
                        <div class="rate">
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                            <span class="fa fa-star color-yellow"></span>
                        </div>
                        <i>485 Avis</i>
                        <div class="tp_price">273 {{ $currencyText }}</div>
                    </div>
                    <h4><b>visites à monaco</b></h4>
                    <div class="tour-info-line clearfix">
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">@lang('generate.July') <strong>19 2019</strong></span>
                        </div>
                        <div class="tour-info fl">
                            <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                            <span class="font-style-2 color-grey-3">alaska</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">top destinations</h4>
                        <h2 class="color-dark-2">top destinations dans le monde</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="world-city black-hover">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="{{asset('front/img/home_9/city_1.jpg')}}" alt="">
                        <div class="vertical-align">
                            <h3 class="world-title color-white">Italie</h3>
                            <h4 class="world-price color-white">de <b>860 {{ $currencyText }}</b></h4>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <p class="color-white-light">Nunc cursus libero purus ac congue arcu cursus ut.</p>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-baner arrows">
        <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="center-image" src="{{asset('front/img/home_9/bg_1.jpg')}}" alt="">
                    <div class="slider-tour style-2 padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <h3><strong>de 960 {{ $currencyText }}</strong> / personne</h3>
                                    <div class="rate-wrap clearfix">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 Avis</i>
                                    </div>
                                    <h2>Princess World Croisière vacances</h2>
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info">
                                            <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                            <span class="font-style-2 color-white">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                            <span class="font-style-2 color-white">alaska</span>
                                        </div>
                                    </div>
                                    <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>@lang('generate.showMore')</span></a>
                                    <h4>inna lunoe</h4>
                                    <p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="center-image" src="{{asset('front/img/home_9/bg_1.jpg')}}" alt="">
                    <div class="slider-tour style-2 padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <h3><strong>de 960 {{ $currencyText }}</strong> / personne</h3>
                                    <div class="rate-wrap clearfix">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 Avis</i>
                                    </div>
                                    <h2>Princess World Croisière vacances</h2>
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info">
                                            <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                            <span class="font-style-2 color-white">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                            <span class="font-style-2 color-white">alaska</span>
                                        </div>
                                    </div>
                                    <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>@lang('generate.showMore')</span></a>
                                    <h4>inna lunoe</h4>
                                    <p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="center-image" src="{{asset('front/img/home_9/bg_1.jpg')}}" alt="">
                    <div class="slider-tour style-2 padd-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <h3><strong>de 960 {{ $currencyText }}</strong> / personne</h3>
                                    <div class="rate-wrap clearfix">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 Avis</i>
                                    </div>
                                    <h2>Princess World Croisière vacances</h2>
                                    <div class="tour-info-line clearfix">
                                        <div class="tour-info">
                                            <img src="{{asset('front/img/calendar_icon.png')}}" alt="">
                                            <span class="font-style-2 color-white">@lang('generate.July') <strong>19 2015</strong></span>
                                        </div>
                                        <div class="tour-info">
                                            <img src="{{asset('front/img/loc_icon_small.png')}}" alt="">
                                            <span class="font-style-2 color-white">alaska</span>
                                        </div>
                                    </div>
                                    <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>@lang('generate.showMore')</span></a>
                                    <h4>inna lunoe</h4>
                                    <p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination pagination-hidden poin-style-1"></div>
        </div>
        <div class="arrow-wrapp arr-s-7">
            <div class="cont-1170">
                <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
            </div>
        </div>
    </div>


    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">populaire</h4>
                        <h2 class="color-dark-2">croisières populaires</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                    <div class="hotel-small style-2 clearfix">
                        <a class="hotel-img black-hover" href="#">
                            <img class="img-responsive radius-0" src="{{asset('front/img/home_9/cruise_1.jpg')}}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="hotel-desc">
                            <h5><span class="color-dark-2"><strong>273 {{ $currencyText }}</strong> / personne</span></h5>
                            <h4>HAWAIIAN @lang('generate.croisiers')</h4>
                            <div class="hotel-loc tt"><strong>19.07 - 26.07 / 7</strong> nuits</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="item-block style-5 hover-blue-3">
                        <img class="center-image" src="{{asset('front/img/home_9/special.jpg')}}" alt="">
                        <div class="tour-layer delay-1"></div>
                        <div class="vertical-align">
                            <h4 class="ib-subtitle hover-it"><span>-20%</span> off</h4>
                            <h3 class="hover-it">honeymoon @lang('generate.croisiers')</h3>
                            <p>Cursus libero purus ac cursus ut sed.Nunc cursus libero purus ac congue arcu.</p>
                            <div class="ib-undertitle">de seulement</div>
                            <div class="ib-price">860 {{ $currencyText }}</div>
                            <a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>@lang('generate.showMore')</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HOTEL-ITEM-->
    <div class="main-wraper padd-90 bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="second-title">
                        <h4 class="subtitle color-dr-blue-2">ligne de croisière</h4>
                        <h2 class="color-dark-2">MEILLEURS ITINÉRAIRES DE LA LIGNE DE CROISIÈRE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">croisière à partir de <strong>750 {{ $currencyText }}</strong></div>
                        <img class="icon-img" src="{{asset('front/img/home_9/icon_1.jpg')}}" alt="">
                        <div class="rate-wrap clearfix">
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <i>485 Avis</i>
                        </div>
                        <h5 class="icon-title color-dark-2">ligne de croisière Carnival</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>@lang('generate.showMore')</span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">croisière à partir de <strong>750 {{ $currencyText }}</strong></div>
                        <img class="icon-img" src="{{asset('front/img/home_9/icon_1.jpg')}}" alt="">
                        <div class="rate-wrap clearfix">
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <i>485 Avis</i>
                        </div>
                        <h5 class="icon-title color-dark-2">ligne de croisière Carnival</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>@lang('generate.showMore')</span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">croisière à partir de <strong>750 {{ $currencyText }}</strong></div>
                        <img class="icon-img" src="{{asset('front/img/home_9/icon_1.jpg')}}" alt="">
                        <div class="rate-wrap clearfix">
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <i>485 Avis</i>
                        </div>
                        <h5 class="icon-title color-dark-2">ligne de croisière Carnival</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>@lang('generate.showMore')</span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="icon-block style-3 bg-white">
                        <div class="icon-price color-dark-2">croisière à partir de <strong>750 {{ $currencyText }}</strong></div>
                        <img class="icon-img" src="{{asset('front/img/home_9/icon_1.jpg')}}" alt="">
                        <div class="rate-wrap clearfix">
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <i>485 Avis</i>
                        </div>
                        <h5 class="icon-title color-dark-2">ligne de croisière Carnival</h5>
                        <div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
                        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>@lang('generate.showMore')</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
