@php
    use Illuminate\Support\Str;
@endphp

@foreach ($data["fares"] as $fares)
    @foreach ($fares["legs"]["list"][0]['connections'] as  $connections)

        <form method="post" action="{{route('displayFare')}}">
            {{csrf_field()}}
            <input type="hidden" name="adults"
                    value="{{app('request')->input('passengers')["adults"]}}">
            <input type="hidden" name="bebe"
                    value="{{app('request')->input('passengers')['infants']}}">
            <input type="hidden" name="enfant"
                    value="{{app('request')->input('passengers')['children']}}">
            <input type="hidden" value="{{$fares["legs"]["RecordSet"]}}"
                   name="RecordSet">
            <input type="hidden" value="{{ $fares["legs"]["list"][0]["AvailString"] }}"
                   name="AvailString[]">
            <input type="hidden" value="{{ $fares["legs"]["list"][0]["carrierCode"]}}"
                   name="carrierCode[]">
            <div id="vol-{{$key}}" class="box-shadow pt-2 pb-0 px-3 mt-5 volFilter">

                <!-- Détails pop up-->
                <div class="modal flight-{{$key}} animate" data-backdrop="true" tabindex="-1"
                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="background-color: #f1f1f1;">
                            <div class="container">

                                <button type="button" class="close px-3" data-dismiss="modal" aria-label="Close" style="margin-top:10px; outline: none;">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <!--Aller-->
                                <section class="aller">
                                    @php
                                        $escalsAller = (sizeof($connections["segments"]) - 1);

                                        $typeVolDepart = ($escalsAller == 0) ?
                                                        'Vol direct' :
                                                        $escalsAller .' '.Str::plural('escale', $escalsAller);

                                        $depAller = new DateTime($connections["segments"][0]["dep_date"]);
                                        $arrAller = new DateTime($connections["segments"][$escalsAller]["arr_date"]);
                                        $dureAller = $depAller->diff($arrAller);
                                    @endphp
                                    <div class="container p-2" style="margin-top: 50px;">
                                        <div class="row" style="background-color: #dee1e4; border-radius: 3px; color: #28356c; width: 95%; margin: auto;  padding: 10px">
                                            <div class="col-md col-12"> <span class="bold">@lang('generate.depart'):</span>
                                                @php
                                                    $dep = Carbon\Carbon::parse($connections["segments"][0]["dep_date"]);
                                                @endphp

                                                @lang('generate.'.$dep->formatLocalized('%A'))

                                                {{ $dep->formatLocalized('%d') }}

                                                @lang('generate.'.$dep->formatLocalized('%B'))

                                                {{ $dep->formatLocalized('%Y') }}
                                            </div>
                                            <div class="col-md col-12 text-md-right"> <span class="bold">@lang('generate.traveltime') :</span>
                                                {{ $dureAller->format("%Hh%Imin") }}
                                            </div>
                                        </div>
                                        @if ($typeVolDepart == 'Vol direct')
                                        <div class="row mb-2" style="background-color: white; border-radius: 3px; color: #28356c; width: 95%; margin: auto; min-height: 100px; padding: 10px">
                                            <div class="col-md">
                                                @php
                                                    $carrier=\App\models\flight\TlCarrier::all()->where('code', $connections["segments"][0]["carrier"])->first();
                                                @endphp
                                                @if(!empty($carrier))
                                                    <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" style="width: 38px;">
                                                    <strong>{{$carrier->name}} - {{ $connections["segments"][0]["flight_number"] }}</strong>
                                                @endif
                                                <br><br>
                                                <div class="col-md col-6">
                                                    <input type="hidden" class="airportCode"
                                                        value="{{ $connections["segments"][0]["dep_airport"] }}">

                                                    <p class="row m-0">
                                                        <strong class="col-md-3 col-12">
                                                            <i class="fas fa-circle" style="color: #28356c; font-size:8px"></i>
                                                            <span class="ml-3 mr-1">{{ date("H:i", strtotime($connections["segments"][0]["dep_date"])) }}</span>
                                                        </strong>
                                                        <span class="col-md col-12">
                                                            <span class="{{ $connections["segments"][0]["dep_airport"] }}"></span>
                                                            <span class="{{ $connections["segments"][0]["dep_airport"] }}-name"></span>
                                                            ({{ $connections["segments"][0]["dep_airport"] }})
                                                        </span>
                                                    </p>
                                                    <hr class="fa-plane-line">
                                                    <p class="m-0 p-3">


                                                    <i class="fas fa-plane fa-lg" style="transform: rotate(-45deg); position: absolute; left: 8px;"></i>
                                                        <span class="fs-12 ml-3">{{ strtolower(substr($connections["segments"][0]["travel_time"], 2))}}</span>
                                                    </p>

                                                    <p class="row m-0">
                                                        <strong class="col-md-3 col-12">
                                                            <i class="fas fa-circle" style="color: #28356c; font-size:8px"></i>
                                                            <span class="ml-3 mr-1">{{ date("H:i", strtotime($connections["segments"][0]["arr_date"])) }}</span>
                                                        </strong>
                                                        <span class="col-md col-12">
                                                            <span class="{{ $connections["segments"][0]["arr_airport"] }}"></span>
                                                            <span class="{{ $connections["segments"][0]["arr_airport"] }}-name"></span>
                                                            ({{ $connections["segments"][0]["arr_airport"] }})
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-right mr-3" style="margin-top: 55px;">

                                                    {{ $connections["segments"][0]["cabin_class"] }}
                                                    {{ $connections["segments"][0]["booking_class"] }}

                                                <p class="m-0 "><i class="fas fa-suitcase"></i>
                                                    <span class="fs-12"> {{ $connections["segments"][0]["baggage"] }}</span>
                                                </p>

                                            </div>
                                        </div>
                                        @else
                                            <div class="bg-w" style="padding: 20px; width: 95%; margin: auto">
                                            <div class="row mt-3 fs-13">
                                                <div class="col-md-2 col-sm-12 ml-1">
                                                    <p class="mt-3">
                                                        {{ $connections["segments"][0]["dep_airport"] }} -
                                                        {{ $connections["segments"][$escalsAller]["arr_airport"] }}
                                                    </p>
                                                    <p class="pb-3">{{ $typeVolDepart }}</p>
                                                </div>

                                                <!--Escals-->



                                                @foreach ($connections["segments"] as $seg => $segment)

                                                    @php
                                                        $carrier=\App\models\flight\TlCarrier::all()->where('code',$segment["carrier"])->first();
                                                        $d1 = new DateTime($segment["dep_date"]);
                                                        $d2 = new DateTime($segment["arr_date"]);
                                                        $dure = $d1->diff($d2);
                                                    @endphp
                                                    <input type="hidden" name="duree[]"
                                                        value="{{$dure->format("%Hh%Imin")}}">


                                                <div class="@if(!$loop->first) offset-md-2 @endif col-md-7 col-sm-12">



                                                    <p class="m-0 pb-3 p-0 pt-2">
                                                        @if(!empty($carrier))
                                                            <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" class="mr-sm-4 logo-flight">
                                                            <span class="bold">{{$carrier->name}} - {{$carrier->code}} {{ $segment["flight_number"] }}</span>
                                                            <span class="bold block">
                                                                (@lang('generate.duration') : {{ $dure->format("%Hh%Imin") }})
                                                            </span>
                                                        @endif
                                                    </p>

                                                    <p class="m-0 pb-3">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <strong>
                                                                    <i class="fas fa-plane-departure ml-sm-0 ml-3 mr-3"></i>
                                                                    <span class="mr-3">{{ date("H:i", strtotime($segment["dep_date"])) }}</span>
                                                                </strong>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <span class="{{ $segment["dep_airport"] }}"></span>
                                                                <span class="{{ $segment["dep_airport"] }}-name"></span>
                                                                ({{ $segment["dep_airport"] }})
                                                            </div>
                                                        </div>
                                                    </p>

                                                    <p class="m-0 pb-3">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <strong>
                                                                    <i class="fas fa-plane-arrival mr-3 ml-sm-0 ml-3"></i>
                                                                    <span class="mr-3">{{ date("H:i", strtotime($segment["arr_date"])) }}</span>
                                                                </strong>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <span class="{{ $segment["arr_airport"] }}"></span>
                                                                <span class="{{ $segment["arr_airport"] }}-name"></span>
                                                                ({{ $segment["arr_airport"] }})
                                                            </div>
                                                        </div>
                                                    </p>

                                                </div>

                                                <div class="col-md col-sm-12 mr-md-3">
                                                        <p class="m-0 pb-3 mt-3 text-md-right baggage">
                                                            {{ $segment["cabin_class"] }} {{ $segment["booking_class"] }}</p>
                                                        <p class="m-0 pb-3 text-md-right mt-2"><i class="fa fa-suitcase-rolling"></i>
                                                            <span class="fs-12"> {{ $segment["baggage"] }} / pers.</span>
                                                        </p>
                                                </div>

                                                <div class="w-100"></div>

                                                @if (!$loop->last)
                                                    <div class="row w-100">
                                                        <div class="offset-md-2 col-md col-12">
                                                            <hr class="bordure w-100 ml-sm-0 ml-3">
                                                        </div>
                                                    </div>

                                                    <div class="row w-100">

                                                        <div class="offset-md-2 col-md col-12 pl-xs-32">
                                                            @php
                                                                $arrDate = new DateTime($connections["segments"][$seg]["arr_date"]);
                                                                $depDate = new DateTime($connections["segments"][$seg+1]["dep_date"]);
                                                                $dureEscal = $arrDate->diff($depDate);
                                                            @endphp
                                                            <p>@lang('generate.escale') : {{ $dureEscal->format("%Hh%Imin") }}</p>
                                                        </div>
                                                        <div class="col-md-7 col-12 text-md-right mr-md-3 pl-xs-32">
                                                            <p>@lang('generate.changePlan')
                                                                <span class="{{ $segment["arr_airport"] }}"></span>
                                                                ({{ $segment["arr_airport"] }})
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row w-100">
                                                        <div class="offset-md-2 col-md col-12">
                                                            <hr class="bordure w-100 ml-sm-0 ml-3">
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="w-100"></div>
                                                @endforeach

                                            </div>
                                            </div>

                                        @endif
                                        <input type="hidden"
                                                    value="{{sizeof($connections["segments"])}}"
                                                    name="escale[]">
                                        @foreach ($connections["segments"] as $segment)
                                        <input type="hidden" name="flight[0][]"
                                            value="{{$segment["flight_number"]}}">
                                        <input type="hidden" name="carrier[0][]"
                                            value="{{$segment["carrier"]}}">
                                        <input type="hidden" class="airportCode"
                                            name="airportDep[0][]"
                                            value="{{ $segment["dep_airport"] }}">
                                        <input type="hidden" name="dep[0][]"
                                            value="{{$segment["dep_date"]}}">
                                        <input type="hidden" name="airportArr[0][]"
                                            class="airportCode"
                                            value="{{ $segment["arr_airport"] }}">
                                        <input type="hidden" name="arr[0][]"
                                            value="{{$segment["arr_date"]}}">
                                        <input type="hidden" name="class[0][]"
                                            value="{{ $segment["booking_class"] }}">
                                        <input type="hidden" name="cabineClass[0][]"
                                            value="{{ $segment["cabin_class"] }}">
                                        <input type="hidden" name="baggage[0][]"
                                            value="{{ $segment["baggage"] }}">
                                            @endforeach
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Détails pop up-->


                @php
                    $escalsAller = (sizeof($connections["segments"]) - 1);

                    $typeVolDepart = ($escalsAller == 0) ?
                                    'Vol direct' :
                                    $escalsAller .' '.Str::plural('escale', $escalsAller);

                    $depAller = new DateTime($connections["segments"][0]["dep_date"]);
                    $arrAller = new DateTime($connections["segments"][$escalsAller]["arr_date"]);
                    $dureAller = $depAller->diff($arrAller);
                @endphp
                <!--first way-->
                <div class="row">
                    <div class="col-md-10">
                        <div class="row align-items-center py-4">
                                        @php
                                            $lastAller = sizeof($connections["segments"]);
                                        @endphp
                                        @php
                                            $carrierAller=\App\models\flight\TlCarrier::all()->where('code',$connections ["segments"][0]["carrier"])->first();
                                            $d1Aller = new DateTime($connections["segments"][0]["dep_date"]);
                                            $d2Aller = new DateTime($connections["segments"][0]["arr_date"]);
                                            $dureAller = $d1Aller->diff($d2Aller);
                                        @endphp
                                        <div class="col-md-1 d-md-block d-none">
                                            <strong>@lang('generate.depart')</strong>
                                        </div>
                                        <div class="col-md col-6 order-1">
                                            @if(!empty($carrierAller))
                                                <input type="hidden" id="carrier-aller-{{$key}}" value="{{$carrierAller->code}}">
                                                <p class="m-0 " style="text-align:center">
                                                    <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrierAller->code}}.png" style="width: 38px;">
                                                </p>
                                                <p class="m-0  fs-12" style="text-align:center; color: #28356c;">{{$carrierAller->name}}</p>
                                            @endif
                                        </div>
                                        <div class="col-md col-6 order-sm-2 order-4">
                                            <input type="hidden" class="airportCode"
                                                value="{{ $connections["segments"][0]["dep_airport"] }}">
                                            <p class="m-0 " style="text-align:center; color: #28356c;">

                                                <strong>{{ date("H:i", strtotime($connections["segments"][0]["dep_date"])) }}</strong>
                                            </p>
                                            <p class="m-0 " style="text-align:center; color: #28356c;">
                                                {{ $connections["segments"][0]["dep_airport"] }}
                                            </p>

                                        </div>

                                        <div class="col-md col-12 d-flex flex-column align-items-center order-3">

                                            <div class="line-trajet"></div>
                                            <p class="m-0 text-center text-blue">
                                                @if ($lastAller - 1 == 0)
                                                    direct
                                                @else
                                                    {{$lastAller - 1}} {{ Str::plural('escale', ($lastAller - 1)) }}
                                                @endif
                                            </p>
                                            <p class="m-0 text-center text-blue fs-11">
                                                    @php
                                                        $depAller = new DateTime($connections["segments"][0]["dep_date"]);
                                                        $arrAller = new DateTime($connections["segments"][$escalsAller]["arr_date"]);
                                                        $VoyageAller= $depAller->diff($arrAller);
                                                    @endphp
                                                    {{$VoyageAller->format("%hh%Imin")}}
                                            </p>
                                            <input type="hidden" id="escale-{{$key}}" value="{{$lastAller-1}}">

                                        </div>
                                        <div class="col-md col-6 order-sm-4 order-5">
                                            <input type="hidden" class="airportCode"
                                                value="{{ $connections["segments"][$lastAller - 1]["dep_airport"] }}">
                                            <p class="m-0 " style="text-align:center; color: #28356c;">
                                                <strong>{{ date("H:i", strtotime($connections["segments"][$lastAller - 1]["arr_date"]))}}</strong>
                                            </p>
                                            <p class="m-0 " style="text-align:center; color: #28356c;">
                                                {{ $connections["segments"][$lastAller - 1]["arr_airport"] }}
                                            </p>
                                        </div>
                                        <div class="col-md col-6 order-sm-5 order-2 pl-xs-60">
                                            <p class="m-0 "><i class="fas fa-suitcase"></i> <span
                                                        class="fs-12"> X {{ $connections["segments"][0]["baggage"] }}
                                                    </span>
                                            </p>
                                        </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center border-bottom border-left border-darck col-md-2 p-2 box-continuer">
                        <div class="text-center">
                            <h2 class="c-txt-or font-weight-bol">
                            <strong>{{ number_format(($fares["price"]*$currency), 0, ',', ' ') }} {{ $currencyText }}</strong>
                            </h2>
                            <span class="color-blue fs-10">{{ $passengers }}</span>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-link" data-ui-class="a-zoom" data-toggle="modal" data-target=".flight-{{$key}}" style="text-decoration: underline; color: #28356c;"
                            class="fs-10">@lang('generate.details') </a>
                        </div>


                        <input id="" type="hidden" name="source" value="{{ $fares["source"] }}">
                        <input type="hidden" name="prix"  value="{{$fares["price"]*$currency}}" class="prix" id="{{$key}}">
                        <div class="text-center">
                            <button type="submit" class="btn bg-my rounded-0">@lang('generate.continue')</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>


        @php($key++)
    @endforeach
@endforeach
