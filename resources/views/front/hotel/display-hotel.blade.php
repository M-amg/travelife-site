@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>

    <link rel='stylesheet' href='{{asset('css/animate.css')}}'/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
    <style>
        #spinner {
            display: none;
        }

        body.busy .spinner {
            display: block !important;
        }
        body{
            background-color: #f0f2f3!important;
        }
        .services:hover a{
            color: #464646;
        }
    </style>

@endsection


@section('body')

    @php
        $v1=\Illuminate\Support\Facades\DB::table("cities")->where('id',request()->get('city'))->select('name AS ville', 'id', 'countryName AS pays')->get()->first();
    @endphp
    @php $dateDepart=Carbon\Carbon::parse($hotel->checkIn) @endphp
    @php $dateReturn=Carbon\Carbon::parse($hotel->checkOut) @endphp
    @php $agency=\App\models\agency\TlAgency::all()->first() @endphp
    @php $hotelName=$hotel->name @endphp



        <div style="background: #f0f2f3; padding-bottom: 30px; margin-top:100px">

            <div class="mb-5 bg-w container p-md-3 px-0">
                <div class="row mt-100 p-2">
                    <div class="col-md ml-2">
                        <h1 class="title-hotel fs-20 mt-4 mb-0">
                            {{ ucwords(strtolower($hotelName)) }}
                        </h1>
                        <p class="mb-2">
                            @for($i=0; $i < 5; $i++)
                                @if($i < $hotel->category)
                                    <i class="fas fa-star fs-10"></i>
                                @endif
                            @endfor
                        </p>
                        <p style="color: #484f56; font-size: 14px;">
                            <i class="fas fa-map-marker-alt"></i> {{ucfirst(strtolower($hotel->address))}} <span style="text-transform: lowercase !important;">à {{$hotel->tlCity()->first()->name }}
                                , {{$hotel->tlCountry()->first()->name}}</span>

                            <a data-iframe="true" id="google-map" data-src="https://maps.google.com/maps?q={{ $hotel->latitude ?? '0' }},{{ $hotel->longitude ?? '0' }}&hl=es;z=14&amp;output=embed" class="mt-4 fs-12"> <span style="color:#69aae2; cursor: pointer;">Voir sur carte</span>
                            </a>
                        </p>
                    </div>

                    @if($hotelBook)
                        @if($hotelBook["promo"] == true)
                                    @if($hotelBook['conditionStay'])
                                        <div class="col-md-5 mt-5 text-right"><span class="mb-2 mx-2 lowercase fs-14">à partir de </span>
                                            <h2 class="price">
                                                <span style="font-size: 13px; color: #db1018;">
                                                    <strike> {{ number_format($price*$currency, 2, ',', ' ') }}
                                                        <span class="fs-16">{{$currencyText}}</span> </strike>
                                                </span><br>
                                                <span style="font-weight: bold; font-size: 22px">
                                                    {{ number_format($hotelBook["priceDiscount"]*$currency, 2, ',', ' ') }}
                                                    <span class="fs-16">{{$currencyText}}</span>
                                                </span>
                                                <span class="fs-10">pour {{$hotelBook ? $hotelBook["nights"]: 0}} {{ str_plural(__('generate.night'), ($hotelBook ? $hotelBook["nights"]: 0)) }}</span>
                                            </h2>
                                        </div>
                                    @else
                                        <div class="col-md-5 mt-5 text-right" style="margin-left: -25px;">
                                            <h2 class="c-txt-or font-weight-bold float-right mr-6">
                                                <span style="font-size: 11px; line-height: 13px; height: 13px; margin: 0;">Minimum Séjour est </span>{{ $hotelBook['stayMin'] }} nuits
                                            </h2>
                                        </div>
                                    @endif
                        @else
                                    @if($hotelBook['conditionStay'])
                                        <div class="col-md-5 mt-5 text-right"><span class="mb-2 mx-2 lowercase fs-14">à partir de </span>
                                            <h2 class="price">
                                                <span style="color: #db1018;">
                                                    {{ number_format($price*$currency, 2, ',', ' ') }}
                                                    <span class="fs-16">{{$currencyText}}</span>
                                                </span>
                                                <span class="fs-10">pour {{$hotelBook ? $hotelBook["nights"]: 0}} {{ str_plural(__('generate.night'), ($hotelBook ? $hotelBook["nights"]: 0)) }}</span>
                                            </h2>
                                        </div>
                                    @else
                                        <div class="col-md-5 mt-5 text-right" style="margin-left: -25px;">
                                            <h2 class="c-txt-or font-weight-bold float-right mr-6">
                                                <span style="font-size: 11px; line-height: 13px; height: 13px; margin: 0;">Minimum Séjour est </span>{{ $hotelBook['stayMin'] }} nuits
                                            </h2>
                                        </div>
                                    @endif
                        @endif
                    @endif

                </div>

                <!-- Gallerie -->
                @include('front._includes.gallerie')
            </div>

                <div style="padding-bottom: 30px;" class="package-description">
                    <div class="container pt-xs-0 px-0">

                        <div style="background-color: white;">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link color-grey active" id="descriptif-tab" data-toggle="tab" href="#descriptif" role="tab" aria-controls="descriptif" aria-selected="true">Description</a>
                                        <span class="barre"></span>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link color-grey" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false">Services</a>
                                        <span class="barre"></span>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link color-grey" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Infos</a>
                                        <span class="barre"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-12 d-flex justify-content-end align-items-start p-2 pr-4">
                                    <p class="mr-4 text-right"><span class="bold">VOIR DISPONIBILITE</span> <br> 
                                        Configurer votre séjour à {{$hotel->tlCity()->first()->name }}</p>
                                    <a href="#reserver" class="btn bg-my rounded-0">Réserver</a>
                                </div>
                            </div>
                            

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active p-4 color-blue" id="descriptif" role="tabpanel" aria-labelledby="descriptif-tab" style="text-align: justify;">
                                    {{ $hotel['shortdesc'] }}
                                </div>
                                <div class="tab-pane fade p-2" id="service" role="tabpanel" aria-labelledby="service-tab">
                                    @if($hotel->tlHotelOptions->count() > 0)
                                        <div class="row p-4">
                                            @foreach($hotel->tlHotelOptions as $service)
                                                <div class="p-2 col-sm-4 col-xs-12">

                                                    @if($service->icon)
                                                        <img src="{{ config('services.pathImg').$service->icon }}"
                                                            alt="{{ $service->name }}" style="width: 30px;">
                                                    @endif

                                                    {{ $service->name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade p-4 color-blue" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    @if(App\models\hotel\TlInfoHotel::all()->where('tl_hotel_id', $hotel->id)->count() > 0)
                                        <div class="row p-4">
                                            @foreach($hotel->tlInfoHotels as $infoHotel)
                                                <div class="p-2 col-sm-4 col-xs-12 text-justify bold uppercase">
                                                    {{$infoHotel->title}}
                                                </div>
                                                <div class="p-2 col-sm-8 col-xs-12 text-justify">
                                                    @if($infoHotel->hasTranslation(session()->get('local')))
                                                        {!! $infoHotel->translate(session()->get('local'))->description !!}
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            <!--Moteur de recherche-->
            <div class="container detail-hotel__rooms pb-3" id="reserver">
                <form style="padding: 15px 15px;border: 1px solid #ddd;margin: 15px 0;" id="form">
                    <input type="hidden" name="hotel" value="{{request()->query('id')}}">
                    <div class="row">

                        <div class="form-group col-md">
                            <label class="" for="Period">@lang('generate.period') </label>
                            <input type="text" required class="date-ar form-control" id="Period"
                                   value="{{request()->query('chickIn')}} - {{request()->query('chickOut')}}"
                                   name="period" style="height: 38px;">
                        </div>
                        <div class="form-group col-md">
                            <label class="">@lang('generate.room') @lang('generate.and') {{ lcfirst(trans('generate.person')) }}s </label>
                            <div class="position-relative" style="border: 1px solid #ced4da;border-radius: .25rem;">
                                <div class="d-flex sw-passengers-input" id="Hotel-passenger-input">
                                    <div class="p-2"><i class="fa fa-user"></i></div>
                                    <div class="p-2 bd-highlight passengers-text">
                                        2 @lang('generate.Adult')
                                        s {{sizeof(request()->get('room'))}} @lang('generate.room')(s),
                                    </div>
                                    <div class="ml-auto p-2 bd-highlight"><i class="fa fa-caret-down"></i></div>
                                </div>
                                <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none"
                                     id="Hotel-passenger">
                                    <i class="fa fa-caret-up text-white"></i>
                                    <div class="row">
                                        <div class="col-6 pt-2">
                                            <span class="text-dark">@lang('generate.room')(s)</span><br>
                                        </div>
                                        <div class="col-6">
                                            <div class="number-input">
                                                <button class="hl-room"
                                                        type="button"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                <input class="quantity" id="room" min="1" name="room" type="number"
                                                       value="{{$hotelBook ? sizeof($hotelBook["rooms"]) : 1}}" max="4">
                                                <button class="hl-room plus"
                                                        type="button"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                ></button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="room-list">
                                        @php $query="" @endphp
                                        @foreach(request()->get('room') as $key => $room)
                                            @php $query .= "&room%5B".$key."%5D%5Badults%5D=".$room['adults'] @endphp
                                            @php $query .= "&room%5B".$key."%5D%5Bchildren%5D=".$room['children'] @endphp


                                            @if($key>0)
                                                <hr>
                                            @endif
                                            <div class="row mb-1">
                                                <div class="col-6 pt-2">
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
                                                <div class="col-6 pt-2">
                                                    <span class="text-dark">@lang('generate.child')(s)</span><br>
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

                                                        @php $query.="&room%5B".$key."%5D%5BchildrenAges%5D%5B".$key2."%5D=".$age @endphp

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
                        <div class="form-group col-md">
                            <button type="button"
                                    class="btn bg-my text-white w-100 mt-4 rounded-0 find d-flex justify-content-center">
                                <span class="spinner spinner-border spinner-border-sm mr-3 mt-1" id="spinner"
                                      role="status" aria-hidden="true">
                            </span> @lang('generate.searchFor')
                            </button>
                        </div>
                    </div>
                </form>
                @if(empty($hotelBook))
                    <p class="alert alert-danger mt-5"><span>aucun résultat ne correspond à votre recherche</span><i
                        class="far fa-times-circle"></i></p>
                @endif
                <form method="post" id="bookForm" action="{{route("front.frontHotels.booking")}}">
                    @csrf
                    @php $priceSupplement=0 @endphp

                    <input name="night" value="{{$hotelBook ? $hotelBook["nights"] : 0}}" type="hidden">
                    <input name="nameHotel" value="{{$hotelName}}" type="hidden">
                    <input name="category" value="{{$hotel->category}}" type="hidden">

                    <div class="container detail-hotel__rooms pb-3">
                        <h2 style="font-size: 22px;">@lang('generate.room')s</h2>
                        <div class="mb-3 p-3" id="roomData">
                        </div>
                    </div>
                    @if(!empty($supplements->first()))
                        <h2>@lang("generate.supplement")s</h2>
                        <table class="table table-bordered table-striped" style="color: #2d3e50">
                            <thead>
                            <tr>
                                <th>@lang("generate.supplement")</th>
                                <th class="text-center">@lang("generate.price")</th>
                                <th class="text-center">@lang("generate.person")s</th>
                                <th class="text-center">@lang("generate.total")</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $priceSupplement=0 @endphp
                            @foreach($supplements as $supplement)
                                @php $commission=$supplement->marge @endphp
                                <tr>
                                    <td>
                                        {{$supplement->title}}<br>
                                        @if($supplement->isObligatory==1)
                                            <span class="badge badge-success">@lang("generate.obligatory")</span>
                                        @else
                                            <span class="badge badge-warning">@lang("generate.optional")</span>
                                        @endif

                                    </td>
                                    <td>
                                        @php $price_adult=0 @endphp
                                        @php $price_minor=0 @endphp
                                        @php $price_child=0 @endphp
                                        @php $price_baby=0 @endphp
                                        @if($supplement->type_supplement== "pax")
                                            @if(isset($supplement->price_adult))
                                                @if ($supplement->type_marge == 1)
                                                    @php $commission = ($supplement->price_adult * $supplement->marge) / 100 @endphp
                                                @endif
                                                @php $price_adult=$supplement->price_adult+$commission @endphp
                                                <p class="mb-0">
                                                    <b>@lang("generate.adult"):</b>
                                                    {{$supplement->price_adult==0?__("generate.free"):($price_adult*$currency)." ".$currencyText}}

                                                </p>
                                            @endif
                                            @php $priceInfant["Baby"]=!empty($supplement->price_baby)?$supplement->price_baby:"" @endphp
                                            @php $priceInfant["Minor"]=!empty($supplement->price_minor)?$supplement->price_minor:"" @endphp
                                            @php $priceInfant["Child"]=!empty($supplement->price_child)?$supplement->price_child:"" @endphp
                                            @foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant)
                                                @if($hotelBook["passengers"][$ageEnfant->TypeEnfant]>0)

                                                    <p class="mb-0">
                                                        <b>@lang("generate.".$ageEnfant->TypeEnfant):</b>
                                                        @if(isset($priceInfant[$ageEnfant->TypeEnfant]))
                                                            @if ($supplement->type_marge == 1)
                                                                @php $commission = ($priceInfant[$ageEnfant->TypeEnfant] * $supplement->marge) / 100 @endphp
                                                            @endif
                                                            @php $price_minor=$priceInfant[$ageEnfant->TypeEnfant]+$commission @endphp

                                                            {{$priceInfant[$ageEnfant->TypeEnfant]==0?__("generate.free"):($price_minor*$currency)." ".$currencyText}}


                                                        @endif
                                                        @lang("generate.notApply")
                                                    </p>
                                                @endif
                                            @endforeach
                                        @else
                                            @if ($supplement->type_marge == 1)
                                                @php $commission = ($supplement->price_prestation * $supplement->marge) / 100 @endphp
                                            @endif
                                            @php $price_adult=$supplement->price_prestation+$commission @endphp
                                            {{$supplement->price_prestation==0?__("generate.free"):($price_adult*$currency)." ".$currencyText}}

                                        @endif
                                    </td>
                                    <td>


                                        <div style="display: flex;justify-content: space-around;align-items: center">
                                            <span>{{strtolower($supplement->type_supplement) != "pax"?"":__("generate.adult")}}</span>
                                            <select name="supplement[{{$supplement->id}}][adult]" class="supplement"
                                                    data-type="adults"
                                                    data-id="supp{{$supplement->id}}"
                                                    data-obligatory="{{$supplement->isObligatory}}"
                                                    @if($supplement->isObligatory==1) disabled @endif
                                                    data-price="{{$price_adult*$currency}}">
                                                @php $a=0 @endphp
                                                @if($price_adult==0 or $supplement->isObligatory==1 or strtolower($supplement->type_supplement) != "pax")

                                                    <option selected
                                                            value="{{$hotelBook["passengers"]["adults"]}}">{{$hotelBook["passengers"]["adults"]}}</option>
                                                @else
                                                    <option value="0">0</option>

                                                    @for($i=0;$i<$hotelBook["passengers"]["adults"];$i++)
                                                        @php $a++ @endphp
                                                        <option value="{{$a}}">{{$a}}</option>
                                                    @endfor

                                                @endif
                                            </select>
                                        </div>
                                        @foreach($hotel->tlPoliciesAgeEnfants as $ageEnfant)
                                            @if($hotelBook["passengers"][$ageEnfant->TypeEnfant]>0)
                                                <div
                                                        style="display: flex;justify-content: space-around;align-items: center">
                                                    <span>@lang("generate.".$ageEnfant->TypeEnfant)</span>
                                                    <select
                                                            name="supplement[{{$supplement->id}}][{{$ageEnfant->TypeEnfant}}]"
                                                            data-id="supp{{$supplement->id}}"
                                                            class="supplement" data-type="{{$ageEnfant->TypeEnfant}}"
                                                            data-obligatory="{{$supplement->isObligatory}}"
                                                            @if($supplement->isObligatory==1) disabled @endif
                                                            data-price="{{$price_minor*$currency}}">
                                                        @php $a=0 @endphp
                                                        @if($price_minor==0 or $supplement->isObligatory==1 or strtolower($supplement->type_supplement) != "pax")

                                                            <option selected
                                                                    value="{{$hotelBook["passengers"][$ageEnfant->TypeEnfant]}}">{{$hotelBook["passengers"][$ageEnfant->TypeEnfant]}}</option>

                                                        @endif
                                                    </select>
                                                </div>
                                            @endif
                                        @endforeach

                                    </td>
                                    <td style="text-align: center">
                                        <span id="supp{{$supplement->id}}"></span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif

                    <div id="input-room"></div>

                    <div class="d-flex justify-content-between align-items-center" style="
                    position: sticky;
                    bottom: 0;
                    background: #fff;
                    box-shadow: 0 -2px 10px 0 #b5b5b5;
                    border: 1px solid #d7dce3;
                    padding: 15px;margin-top: -46px !important;">
                        <input type="submit" disabled id="book" class="btn bg-my rounded-0"
                               value="{{ __('generate.confirmBook') }}">
                        <input type="hidden" id="totalPrice" name="total">
                        <div id="roomSelected"></div>
                        <span class="price" id="total" data-total="0"
                              data-price="{{$priceSupplement*$currency}}">Total:
                              {{ number_format($priceSupplement*$currency, 2, ',', ' ') }}
                              {{$currencyText}} </span>
                    </div>
                </form>
            </div>


        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('assets/OwlCarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset("js/select2.min.js")}}"></script>

    <script>

        $('.owl-slid').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
        });

    </script>
    <script>
        window.addEventListener("pageshow", function (event) {
            var historyTraversal = event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
            if (historyTraversal) {
                window.location.reload();
            }
        });

        $('.owl-img').owlCarousel({
            items: 1,
            lazyLoad: true,
            loop: true,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 4000,
            margin: 10
        });
    </script>

    <script>
        $(document).ready(function () {
            currency = parseFloat("{{$currency}}");
            currencyText = "{{$currencyText}}";
            $priceTotal = 0;
            $roomSelected = [];
            $("#bookForm").hide();
            rooms();
            const formatPrice = (n) => {
                return new Intl.NumberFormat('fr-FR').format(n);
            }
            function rooms() {
                $.ajax({
                    url: '{{route('ajax.room.hotel')}}',
                    type: 'get',
                    data: $("#form").serializeArray(),
                    datatype: 'json',
                    success: function (data) {

                        $tr = '';
                        $('body').removeClass('busy');
                        $.each(data, function (key, val) {
                            console.log(val);
                            $typeStay = '';

                            if (val[0].typeBay == 2) {

                                if (val[0].typeRoom == 1)
                                    $typeStay = `<span class="fs-12">>@lang("generate.room") @lang("generate.for") @lang("generate.The") @lang("generate.man") </span><br>`;
                                else
                                    $typeStay = `<span class="fs-12">@lang("generate.room") @lang("generate.for") @lang("generate.The") @lang("generate.waman") </span><br>`;
                            }

                            $capacityroom = "";
                            $capacity = "";
                            for (i = 0; i < val[0].capacity; i++) {
                                $capacityroom += `<i class="fa fa-user" title="@lang("generate.adult")"></i>`;
                            }

                            $capacity += `<div class='col-12'> <i class='fa fa-male fa-lg' title='@lang("generate.adult")'></i>
                                ${ val[0].passengers.adults } ${val[0].passengers.adults > 1 ? 'Adultes' : 'Adulte'} </div>`;

                            infantNb = val[0].passengers.Minor + val[0].passengers.Baby + val[0].passengers.Child;
                            if (infantNb > 0) {
                                $capacity += "<div class='col-12'> <i class='fa fa-child fa-lg' title='@lang("generate.Child")'></i> " + infantNb + " @lang("generate.Child") </div>";
                            }

                            $bed = 0;
                            $.each(val[0].bed, function (b, bed) {
                                $bed += bed.nb;
                            });
                            //$bed+=bed.supp;
                            $bed = `<div class="col-12"> <i class="fas fa-bed"></i> ${$bed > 0 ? $bed : 1} ${$bed > 0 ? 'Lits' : 'Lit' } </div>`;

                            pathImg = "{{config('services.pathImg')}}";
                            $service = "";
                            $.each(val[0].services, function (s, service) {
                                $service += `<div class="pb-2"> <img src="${pathImg + service.icon}" style="width: 20px"><span class="fs-12"> ${service.name}<span> </div>  `;
                            });
                            pathImg += val[0].img;

                            if (val[0].img) {
                                pathImg = `<img src="${pathImg}" class="mb-2" style="width:100%;">`;
                            } else {
                                pathImg = '<img src="{{asset("img-loading.gif")}}" class="mb-2" style="width:100%;">';
                            }

                            $condition = "";
                            $.each(val[0].cancels, function (c, condition) {
                                console.log('condition', condition);
                                if ($condition === "") {
                                        $condition = "<p class='fs-12 font-weight-bold text-success mt-2 mb-0' >" + condition.condition +"</p>";
                                }
                            });
                            $condition = $condition !== "" ? $condition : "<p class='fs-12 font-weight-bold text-success mt-2 mb-0' ><i class='fa fa-check'></i> Annulation GRATUITE </p>";


                            sizeRooms = $("#room").val();
                            $reserve = ``;
                            $discount = ``;


                            roomlist = ""
                            $.each(val, function (e, element) {
                                priceRoom = element.price;
                                console.log('priceRoom',priceRoom)
                                optionPension = '';
                                $.each(element.pensions, function (p, pension) {
                                    if (pension.price == 0 && pension.code !== "RO"){
                                        t = "inclus"
                                        select = `selected`;
                                    }else {
                                        if (pension.code !== "RO"){
                                            t = pension.price + currencyText;
                                            select = ``;

                                        }else{
                                            t = "";
                                            select = `selected`;
                                        }
                                    }
                                    optionPension += `<option value="${pension.code}" data-price="${pension.price}" ${select}>${pension.name} ${t}</option>`;
                                })
                                pr = 0;
                                if(element.conditionStay){
                                    if (element.discount) {
                                        $discount = `<b>compris</b> : - ${element.discount} ${element.type} de remise<br>`;
                                        if (element.type == '%') {
                                            $disc = (priceRoom * element.discount) / 100;
                                            $priceR = priceRoom - $disc;
                                        } else {
                                            $priceR = priceRoom - (element.discount * val[0].nights);
                                        }
                                        $price = ` <div class="text-center" style = "color: red; font-weight: bold; font-size: 12px;">
                                                    <strike><span class=""> ${formatPrice(priceRoom * currency)} ${currencyText}
                                                    </span></strike>
                                                </div>
                                                <div class="text-center" style = "color: #db1018; font-weight: bold; font-size: 16px;">
                                                    <span class="price" id="${e + "-" + key}" data-price=" ${$priceR * currency}"> ${formatPrice($priceR * currency)} ${currencyText}
                                                    </span>
                                                </div>
                                                `;
                                        pr = $priceR * currency;
                                    } else {

                                        $price = `<div class="text-center" style = "color: #db1018; font-weight: bold; font-size: 16px;">
                                                    <span class="price" id="${e + "-" + key}" data-price=" ${priceRoom * currency}">  ${formatPrice(priceRoom * currency)} ${currencyText} </span>
                                               </div>`;

                                        pr = priceRoom * currency;
                                    }
                                }else{
                                    nbreStay = element.stayMin;
                                    if (element.discount) {
                                        $discount = `<b>compris</b> : - ${element.discount} ${element.type} de remise<br>`;
                                        if (element.type == '%') {
                                            $disc = (priceRoom * element.discount) / 100;
                                            $priceR = priceRoom - $disc;
                                        } else {
                                            $priceR = priceRoom - (element.discount * val[0].nights);
                                        }
                                        $price = ` <div class="text-center" style = "color: red; font-weight: bold; font-size: 12px;">
                                                        <strike><span class="price"> ${formatPrice(priceRoom * currency)} ${currencyText}
                                                        </span></strike>
                                                    </div>

                                                    <div class="price" id="${e + "-" + key}" data-price=" ${$priceR * currency}">${formatPrice($priceR * currency)}<span class="currency"> ${currencyText}</span></div>
                                                    <p class="price" style="line-height: 20px;">
                                                        <span style="font-size: 11px; line-height: 13px; height: 13px; margin: 0;color: green;">
                                                            Minimum Séjour est ${nbreStay} nuits
                                                            <br>
                                                            Du ${element.chickIn} au ${element.chickOut}
                                                        </span>
                                                    </p>`;
                                        pr = $priceR * currency;
                                    } else {

                                        $price = `<div class="price" id="${e + "-" + key}" data-price=" ${priceRoom * currency}">${formatPrice(priceRoom * currency)}<span class="currency"> ${currencyText}</span></div>
                                                    <p class="price" style="line-height: 20px;">
                                                        <span style="font-size: 11px; line-height: 13px; height: 13px; margin: 0;color: green;">
                                                            Minimum Séjour est ${nbreStay} nuits
                                                            <br>
                                                            Du ${element.chickIn} au ${element.chickOut}
                                                        </span>
                                                    </p>`;

                                        pr = priceRoom * currency;
                                    }

                                }
                                roomlist +=
                                    `<div class="row border">
                                        <div class="col-12 col-md-8 py-2">
                                            <p><b>Chambre pour : ${element.passengers.adults} ${element.passengers.adults > 1 ? 'Adultes' : 'Adulte' }  ${infantNb > 0 ? infantNb : ""} ${ infantNb > 1 ? " Enfants" : ""} ${ infantNb === 1 ? " Enfant" : ""}</b></p>
                                            <select class="form-control pension" data-id="${e + "-" + key}" name="pension[${element.id}]" >
                                                ${optionPension}
                                            </select>
                                            ${$condition}
                                        </div>
                                        <div class="col-12 col-md-4 pr-0">
                                            <div class="d-flex flex-column align-items-center h-100" style="background: #f1f1f1" >
                                                <span> ${val[0].nights}  ${val[0].nights > 1 ? " nuits" : " nuit"} </span>
                                                ${$price}
                                                <div class="form-check">
                                                    <input class="form-check-input room-selected" data-price="${pr}" value="${element.id}" type="radio" name="room[${e}]" id="room-${e + "-" + key}">
                                                    <label class="form-check-label" for="room-${e + "-" + key}"></label>
                                                </div>
                                                <span>Taxes {{$hotel->tax_inclus==1?"inclus":"non inclus"}}</span>
                                            </div>
                                        </div>
                                    </div>`
                            });

                            $tr += `
                                    <div class="mb-3 p-3 bg-white">
                                        <div class="row">
                                            <div class="col-12">
                                                <span>${val[0].name} ${$capacityroom} </span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mx-3 p-2 border">
                                                    <div class="image-room">
                                                        ${pathImg}
                                                    </div>
                                                    <div class="p-1">

                                                        <div class="row">
                                                            ${$capacity} ${$bed}
                                                        </div>
                                                        ${$service != "" ? "<hr>" : ""}

                                                        <p class="services">
                                                            <a data-toggle="collapse" href="#collapseExample${val[0].id}" role="button" aria-expanded="false" aria-controls="collapseExample${val[0].id}">
                                                                Services <i class="fa fa-chevron-down fs-10"></i></a>
                                                            <div class="collapse" id="collapseExample${val[0].id}">
                                                                ${$service}
                                                            </div>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-9">
                                                ${roomlist}
                                            </div>
                                        </div>
                                    </div>
                                  `
                        })

                        if ($tr !== ``) {
                            $("#bookForm").show();

                        }
                        $("#roomData").html($tr)
                        init()
                    }
                })
            }


            $(".find").click(function () {
                $('body').addClass('busy');
                total = $("#total");
                total.html("Total : {{ number_format($priceSupplement*$currency, 2, ',', ' ') }} {{$currencyText}}");
                $("#totalPrice").val(`${totalSome() }`);
                $("#book").attr('disabled', true);
                $priceTotal = 0;
                $roomSelected = [];
                rooms();
            })

            function init() {

                $(".room-selected").change(function () {
                    $("#total").html(`Total : ${totalSome() } {{$currencyText}}`);
                    $("#totalPrice").val(`${totalSome() }`);
                });

                $(".pension").change(function () {

                    price = $(this).find(':selected').data('price');
                    id = $(this).data('id');

                    total = parseFloat($("#" + id).data("price")) + parseFloat(price);
                    $("#" + id).html(total + " {{$currencyText}}");
                    $("#room-" + id).data("price", total);
                    $("#total").html(`Total : ${totalSome() } {{$currencyText}}`);
                    $("#totalPrice").val(`${totalSome() }`);


                })

            }

            function totalSome() {
                total = 0;
                c = 0;
                $(".room-selected").each(function (key, val) {
                    if ($(this).is(":checked")) {
                        c++;
                        total += $(this).data('price');
                    }
                });
                if (c == $("#room").val())
                    $("#book").attr('disabled', false);


                return formatPrice(total);
            }

        });


    </script>

    <script>

        $(document).ready(function () {
            let scrollTop = 0;
            let lastScrollTop = 0;
            $('.web').addClass('bg-header-blue');
            $(document).scroll(function (event) {
                let scrolltop = $(this).scrollTop();
                if (scrolltop > lastScrollTop) {

                    $('.web').addClass('bg-header-scroll').removeClass('bg-header-blue');
                    $('.web').css({'boxShadow': '0 0 20px rgba(0, 0, 0, .1)'});

                    $('.web').css({'transition': '.2s'});
                    $('#logo-jmb').css({'width': '95px'});
                    $('#logo-jmb').css({'height': '95px'});
                    $('#logo-jmb').css({'transition': '.2s'});
                } else {
                    /*au début*/
                    $('.web').addClass('bg-header-blue').removeClass('bg-header-scroll');
                    $('.web').css({'boxShadow': 'none'});
                    $('#logo-jmb').css({'width': '120px'});
                    $('#logo-jmb').css({'height': '120px'});
                }
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            //google-map
            lightGallery(document.getElementById('google-map'), {
                selector: 'this',
                iframeMaxWidth: '80%'
            });

        })
    </script>

<script>
    paths = [];

    $(document).ready(function () {
        $(".box-count").click(function () {
            paths = {!! json_encode($photos) !!};
            pathImg = {!! json_encode($pathImg) !!};

            var genEls = function(arr)
            {
                var els = [];
                for(i = 0; i <= (arr.length - 1); i++)
                {
                    els.push({
                        'src': pathImg + arr[i],
                    });
                }
                return els;
            }

            lightGallery(this, {
                dynamic: true,
                dynamicEl: genEls(paths)
            })

        });

    })
</script>


@endsection
