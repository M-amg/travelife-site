@extends('base.front')
@section('style')
    <link href="{{asset('front/css/DateTimePicker.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('body')
    <div class="top-baner map-baner">
        <div id="map-canvas" class="style-1" data-lat="34.0531457" data-lng="-118.2126053" data-zoom="12"
             data-style="4"></div>
        <div class="addresses-block">
            <a data-lat="33.664467" data-lng="-117.601586" data-string="Hôtel Santa Monica"></a>
        </div>
        <div class="addresses-block">
            <a data-lat="34.0715983" data-lng="-118.3979557" data-string="Hôtel Beverly Hills"></a>
        </div>
        <div class="addresses-block">
            <a data-lat="34.0627456" data-lng="-118.2450692" data-string="Hôtel Los Angeles"></a>
        </div>
        <div class="addresses-block">
            <a data-lat="33.937677" data-lng="-118.1304229" data-string="Hôtel Downey"></a>
        </div>
    </div>
    <div class="container">
        <form action="#" class="hotel-filter">
            <div class="baner-bar cars-bar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hotels-block">
                            <h4>De</h4>
                            <div class="input-style-1">
                                <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                <input type="text" placeholder="Destination; Zip Code" required>
                            </div>
                            <div class="input-entry color-5">
                                <input class="checkbox-form" id="text-1" type="checkbox" name="checkbox"
                                       value="climat control">
                                <label class="clearfix" for="text-1">
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">@lang('generate.sameLocation')</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="hotels-block">
                            <h4>To</h4>
                            <div class="input-style-1">
                                <img src="{{asset('front/img/loc_icon_small_grey.png')}}" alt="">
                                <input type="text" placeholder="Destination; Zip Code" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="timePiker"></div>
                    <div class="col-md-2">
                        <div class="hotels-block">
                            <h4>Check in</h4>
                            <div class="input-style-1">
                                <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                <input type="text" placeholder="" class="datepicker" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="hotels-block">
                            <h4>@lang('generate.time')</h4>
                            <div class="time-input">
                                <img src="{{asset('front/img/clock.png')}}" alt="">
                                <input type="text" data-field="time" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="hotels-block">
                            <h4>@lang('generate.checkIn')</h4>
                            <div class="input-style-1">
                                <img src="{{asset('front/img/calendar_icon_grey.png')}}" alt="">
                                <input type="text" placeholder="" class="datepicker" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="hotels-block">
                            <h4>@lang('generate.time')</h4>
                            <div class="time-input">
                                <img src="{{asset('front/img/clock.png')}}" alt="">
                                <input type="text" data-field="time" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2 col-md-offset-2">
                        <div class="submit">
                            <input class="c-button b-60 bg-white hv-orange" type="submit" value="rechercher maintenant">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="range-wrapp">
                            <h4>@lang('generate.rangePrice')</h4>
                            <div class="slider-range" data-counter="$" data-position="start" data-from="0"
                                 data-to="5000" data-min="0" data-max="5000">
                                <div class="range"></div>
                                <input type="text" class="amount-start" readonly value="0 {{ $currencyText }}">
                                <input type="text" class="amount-end" readonly value="1500 {{ $currencyText }}">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>


    <div class="main-wraper hotel-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="second-title">
                        <h2>@lang('generate.advancedSearch') (16)</h2>
                        <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                            Suspendisse id tor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="hotel-item cars-item">
                        <div class="low-price">-10%</div>
                        <div class="radius-top">
                            <img src="{{asset('front/img/car_1.png')}}" alt="">
                            <div class="price price-s-1">500 {{ $currencyText }}<span>/@lang('generate.day')</span></div>
                        </div>
                        <div class="title">
                            <h4><a href="#">porsche cayenne</a></h4>
                            <h6 class="clas">standard</h6>
                            <div class="rate-wrap">
                                <span class="car-i"><img src="{{asset('front/img/car_icon_2.png')}}"
                                                         alt=""><i>X2</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_3.png')}}"
                                                         alt=""><i>X4</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_5.png')}}"
                                                         alt=""><i>+</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_1.png')}}" alt=""><i>auto</i></span>
                                <span class="car-i"><img src="{{asset('front/img/car_icon_4.png')}}"
                                                         alt=""><i>gaz</i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('front/js/DateTimePicker.min.js')}}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{asset('front/js/map.js')}}"></script>
@endsection
