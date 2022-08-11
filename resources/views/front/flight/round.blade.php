

@foreach ($data["fares"] as $fares)
    @for($i=0;$i<sizeof($fares["legs"]["list"]);$i++)
        @if($i+1<sizeof($fares["legs"]["list"]))
            @foreach ($fares["legs"]["list"][$i]['connections'] as $connections)
                @foreach ($fares["legs"]["list"][$i+1]['connections'] as $connections2)
                    <form method="post" action="{{route('displayFare')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="adults"
                               value="{{app('request')->input('adult')}}">
                        <input type="hidden" name="bebe"
                               value="{{app('request')->input('baby')}}">
                        <input type="hidden" name="enfant"
                               value="{{app('request')->input('infant')}}">
                        <input type="hidden" value="{{$fares["legs"]["RecordSet"]}}"
                               name="RecordSet">
                        <input type="hidden" value="{{ $fares["legs"]["list"][$i]["AvailString"] }}"
                               name="AvailString[]">
                        <input type="hidden" value="{{ $fares["legs"]["list"][$i]["carrierCode"]}}"
                               name="carrierCode[]">
                        <input type="hidden" value="{{ $fares["legs"]["list"][$i+1]["AvailString"] }}"
                               name="AvailString[]">
                        <input type="hidden" value="{{ $fares["legs"]["list"][$i+1]["carrierCode"]}}"
                               name="carrierCode[]">

                        <div id="vol-{{$key}}" class="bg-light pt-2 pb-0 px-3 mt-5 row">

                            @php
                                $carrier=\App\models\flight\TlCarrier::all()->where('code',$fares["legs"]["list"][0]["connections"][0]["segments"][0]["carrier"])->first();
                            @endphp



                                <div class="modal flight-{{$key}} animate" data-backdrop="true" tabindex="-1"
                                     role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="background-color: #f1f1f1;">
                                            <div class="container">

                                                <button type="button" class="close px-3" data-dismiss="modal" aria-label="Close" style="margin-top:10px; outline: none;">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                                <div class="container p-2" style="margin-top: 50px;">
                                                    <div class="row" style="background-color: #dee1e4; border-radius: 3px; color: #28356c; width: 95%; margin: auto;  padding: 10px">
                                                        <div class="col-md-6"><strong>@lang('generate.depart') : </strong>
                                                            {{ date("D. d M.", strtotime($connections["segments"][0]["dep_date"])) }}
                                                        </div>
                                                        <div class="col-md-6"><strong>@lang('generate.traveltime') : </strong>
                                                            {{ strtolower(substr($connections["segments"][0]["travel_time"], 2)) }}
                                                        </div>
                                                    </div>
                                                    <div class="row" style="background-color: white; border-radius: 3px; color: #28356c; width: 95%; margin: auto; min-height: 100px; padding: 10px">
                                                        <div class="col-md-7">
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

                                                                <p class="m-0 ">
                                                                    <strong>
                                                                        <i class="fas fa-circle" style="color: #28356c; font-size:8px"></i>
                                                                        {{ date("H : i", strtotime($connections["segments"][0]["dep_date"])) }}
                                                                    </strong>

                                                                    <span class="{{ $connections["segments"][0]["dep_airport"] }}"></span>
                                                                    <span class="{{ $connections["segments"][0]["dep_airport"] }}-name"></span>
                                                                    ({{ $connections["segments"][0]["dep_airport"] }})
                                                                </p>
                                                                <p class="m-0 p-3">
                                                                <i class="fas fa-plane-departure "></i>
                                                                    {{ strtolower(substr($connections["segments"][0]["travel_time"], 2))}}
                                                                </p>

                                                                <p class="m-0">
                                                                    <strong>
                                                                        <i class="fas fa-circle" style="color: #28356c; font-size:8px"></i>
                                                                        {{ date("H:i", strtotime($connections["segments"][0]["arr_date"])) }}</strong>

                                                                    <span class="{{ $connections["segments"][0]["arr_airport"] }}"></span>
                                                                    <span class="{{ $connections["segments"][0]["arr_airport"] }}-name"></span>
                                                                    ({{ $connections["segments"][0]["arr_airport"] }})

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4" style="text-align: right; margin-top: 55px;">
                                                            <strong>
                                                                {{ $connections["segments"][0]["cabin_class"] }}
                                                                {{ $connections["segments"][0]["booking_class"] }}
                                                            </strong>
                                                            <p class="m-0 "><i class="fas fa-suitcase"></i> <span
                                                                class="font-size-12"> {{ $connections2["segments"][0]["baggage"] }}
                                                            </span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </div>

                                                <div class="container p-2" style="margin-top: 25px; margin-bottom: 40px;">
                                                    <div class="row" style="background-color: #dee1e4; border-radius: 3px; color: #28356c; width: 95%; margin: auto;  padding: 10px">
                                                        <div class="col-md-6"><strong>@lang('generate.arrival') :
                                                        </strong>
                                                            {{ date("D. d M.", strtotime($connections2["segments"][0]["arr_date"])) }}</div>
                                                        <div class="col-md-6"><strong>@lang('generate.traveltime') :
                                                        </strong>
                                                            {{ strtolower(substr($connections2["segments"][0]["travel_time"], 2)) }}
                                                        </div>
                                                    </div>
                                                    <div class="row" style="background-color: white; border-radius: 3px; color: #28356c; width: 95%; margin: auto; min-height: 100px; padding: 10px">
                                                        <div class="col-md-7">
                                                            @php
                                                                $carrier=\App\models\flight\TlCarrier::all()->where('code', $connections2["segments"][0]["carrier"])->first();
                                                            @endphp
                                                            @if(!empty($carrier))
                                                                <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" style="width: 38px;">
                                                                <strong>{{$carrier->name}} - {{ $connections2["segments"][0]["flight_number"] }}</strong>
                                                            @endif
                                                            <br><br>
                                                            <div class="col-md col-6">
                                                                <input type="hidden" class="airportCode"
                                                                       value="{{ $connections2["segments"][0]["dep_airport"] }}">

                                                                <p class="m-0 ">

                                                                    <strong>
                                                                        <i class="fas fa-circle" style="color: #28356c; font-size:8px"></i>
                                                                        {{ date("H:i", strtotime($connections2["segments"][0]["dep_date"])) }}</strong>


                                                                    <span class="{{ $connections2["segments"][0]["dep_airport"] }}"></span>
                                                                    <span class="{{ $connections2["segments"][0]["dep_airport"] }}-name"></span>
                                                                    ({{ $connections2["segments"][0]["dep_airport"] }})
                                                                </p>
                                                                <p class="m-0 p-3">
                                                                    <i class="fas fa-plane-departure fa-flip-horizontal"></i>
                                                                    {{ strtolower(substr($connections2["segments"][0]["travel_time"], 2)) }}
                                                                </p>

                                                                <p class="m-0">
                                                                    <strong>
                                                                        <i class="fas fa-circle" style="color: #28356c; font-size:8px"></i>
                                                                        {{ date("H:i", strtotime($connections2["segments"][0]["arr_date"])) }}</strong>

                                                                    <span class="{{ $connections2["segments"][0]["arr_airport"] }}"></span>
                                                                    <span class="{{ $connections2["segments"][0]["arr_airport"] }}-name"></span>
                                                                    ({{ $connections2["segments"][0]["arr_airport"] }})

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4" style="text-align: right; margin-top: 55px;">
                                                            <strong>
                                                                {{ $connections2["segments"][0]["cabin_class"] }}
                                                                {{ $connections2["segments"][0]["booking_class"] }}
                                                            </strong>
                                                            <p class="m-0 "><i class="fas fa-suitcase"></i> <span
                                                                class="font-size-12"> {{ $connections2["segments"][0]["baggage"] }}
                                                            </span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </div>


                                                <!--Escal-->
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
                                                    @php
                                                        $carrier=\App\models\flight\TlCarrier::all()->where('code',$segment["carrier"])->first();
                                                        $d1 = new DateTime($segment["dep_date"]);
                                                        $d2 = new DateTime($segment["arr_date"]);
                                                        $dure = $d1->diff($d2);
                                                    @endphp
                                                    <input type="hidden" name="duree[]"
                                                           value="{{$dure->format("%Hh%Imin")}}">

                                                @endforeach



                                                <!--Escal-->
                                                <input type="hidden"
                                                       value="{{sizeof($connections2["segments"])}}"
                                                       name="escale[]">
                                                @foreach ($connections2["segments"] as $segment)
                                                    <input type="hidden" name="flight[1][]"
                                                           value="{{$segment["flight_number"]}}">
                                                    <input type="hidden" name="carrier[1][]"
                                                           value="{{$segment["carrier"]}}">
                                                    <input type="hidden" class="airportCode"
                                                           name="airportDep[1][]"
                                                           value="{{ $segment["dep_airport"] }}">
                                                    <input type="hidden" name="dep[1][]"
                                                           value="{{$segment["dep_date"]}}">
                                                    <input type="hidden" name="airportArr[1][]"
                                                           class="airportCode"
                                                           value="{{ $segment["arr_airport"] }}">
                                                    <input type="hidden" name="arr[1][]"
                                                           value="{{$segment["arr_date"]}}">
                                                    <input type="hidden" name="class[1][]"
                                                           value="{{ $segment["booking_class"] }}">
                                                    <input type="hidden" name="cabineClass[1][]"
                                                           value="{{ $segment["cabin_class"] }}">
                                                    <input type="hidden" name="baggage[1][]"
                                                           value="{{ $segment["baggage"] }}">
                                                    @php
                                                        $carrier=\App\models\flight\TlCarrier::all()->where('code',$segment["carrier"])->first();
                                                        $d1 = new DateTime($segment["dep_date"]);
                                                        $d2 = new DateTime($segment["arr_date"]);
                                                        $dure = $d1->diff($d2);
                                                    @endphp
                                                    <input type="hidden" name="duree[]"
                                                           value="{{$dure->format("%Hh%Imin")}}">

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-10">
                                <!--first way-->
                                <div class="row align-items-center border-bottom border-dots border-darck py-4">
                                    @php
                                        $last = sizeof($connections["segments"]);
                                    @endphp
                                    <div class="col-md-1 d-md-block d-none"><strong>@lang('generate.depart')</strong></div>
                                    <div class="col-md col-6">
                                        <p class="m-0 " style="text-align:center">@if(!empty($carrier))
                                            <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" style="width: 38px;">
                                        @endif</p>
                                        <p class="m-0  font-size-12" style="text-align:center; color: #28356c;">
                                            @php
                                                $carrier=\App\models\flight\TlCarrier::all()->where('code',$connections["segments"][0]["carrier"])->first();
                                            @endphp
                                            @if(!empty($carrier))
                                                {{$carrier->name}}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="hidden" class="airportCode"
                                            value="{{ $connections["segments"][0]["dep_airport"] }}">
                                        <p class="m-0 " style="text-align:center; color: #28356c;">

                                            <strong>{{ date("H:i", strtotime($connections["segments"][0]["dep_date"])) }}</strong>
                                        </p>
                                        <p class="m-0 " style="text-align:center; color: #28356c;">
                                            {{ $connections["segments"][0]["dep_airport"] }}
                                        </p>

                                    </div>

                                    <div class="col-md col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="text-grey font-size-9"><i class="fas fa-circle"></i></div>
                                            <div class="flex-grow-1 d-none d-md-block line"></div>
                                            <div class="text-grey font-size-9"><i class="fas fa-circle"></i></div>
                                        </div>
                                        <p class="m-0  text-center" style="color: #28356c;"><strong>
                                                @if ($last - 1 == 0)
                                                    Direct
                                                @else
                                                    {{$last - 1}}  @lang('generate.escale')(s)
                                                @endif
                                            </strong>
                                            <input type="hidden" id="escale-{{$key}}" value="{{$last-1}}">
                                        </p>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="hidden" class="airportCode"
                                            value="{{ $connections["segments"][$last - 1]["dep_airport"] }}">
                                        <p class="m-0 " style="text-align:center; color: #28356c;">
                                            <strong>{{ date("H:i", strtotime($connections["segments"][$last - 1]["arr_date"]))}}</strong>

                                        </p>
                                        <p class="m-0 " style="text-align:center; color: #28356c;">
                                            {{ $connections["segments"][$last - 1]["arr_airport"] }}
                                        </p>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="m-0 "><i class="fas fa-suitcase"></i> <span
                                                    class="font-size-12"> X {{ $connections["segments"][0]["baggage"] }}
                                                </span>
                                        </p>
                                    </div>
                                </div>

                                <!--second way-->
                                <div class="row align-items-center border-bottom border-dots border-darck py-4">
                                    @php
                                        $last = sizeof($connections2["segments"]);
                                    @endphp
                                    <div class="col-md-1 d-md-block d-none"><strong>@lang('generate.return')</strong></div>
                                    <div class="col-md col-6">
                                        <p class="m-0 " style="text-align:center">@if(!empty($carrier))
                                            <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" style="width: 38px;">
                                        @endif</p>
                                        <p class="m-0  font-size-12" style="text-align:center; color: #28356c;">
                                            @php
                                                $carrier=\App\models\flight\TlCarrier::all()->where('code',$connections2["segments"][0]["carrier"])->first();
                                            @endphp
                                            @if(!empty($carrier))
                                                {{$carrier->name}}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="hidden" class="airportCode"
                                            value="{{ $connections2["segments"][0]["dep_airport"] }}">
                                        <p class="m-0 " style="text-align:center; color: #28356c;">

                                            <strong>{{ date("H:i", strtotime($connections2["segments"][0]["dep_date"])) }}</strong>
                                        </p>
                                        <p class="m-0 " style="text-align:center; color: #28356c;">
                                            {{ $connections2["segments"][0]["dep_airport"] }}
                                        </p>
                                    </div>

                                    <div class="col-md col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="text-grey font-size-9"><i class="fas fa-circle"></i></div>
                                            <div class="flex-grow-1 d-none d-md-block line"></div>
                                            <div class="text-grey font-size-9"><i class="fas fa-circle"></i></div>
                                        </div>
                                        <p class="m-0  text-center" style="color: #28356c;"><strong>
                                                @if ($last - 1 == 0)
                                                    Direct
                                                @else
                                                    {{$last - 1}}  @lang('generate.escale')(s)
                                                @endif
                                            </strong></p>
                                    </div>
                                    <div class="col-md col-6">
                                        <input type="hidden" class="airportCode"
                                            value="{{ $connections2["segments"][$last - 1]["dep_airport"] }}">
                                        <p class="m-0 " style="text-align:center; color: #28356c;">
                                            <strong>{{ date("H:i", strtotime($connections2["segments"][$last - 1]["arr_date"]))}}</strong>

                                        </p>
                                        <p class="m-0 " style="text-align:center; color: #28356c;">
                                        {{ $connections2["segments"][$last - 1]["arr_airport"] }}
                                        </p>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="m-0 " style="color: #28356c;"><i class="fas fa-suitcase"></i> <span
                                                    class="font-size-12"> X {{ $connections2["segments"][0]["baggage"] }}
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="align-items-center border-bottom border-left border-darck pt-5 col-md-2 p-0">
                                <div class="p-2" style="text-align:center"><h2 class="c-txt-or font-weight-bol">
                                    <strong>{{ number_format(($fares["price"]*$currency), 0, ',', ' ') }} {{ $currencyText }}</strong>
                                    </h2>
                                    <span style="font-size: 10px; color: #28356c;">@lang('generate.Perperson')</span>
                                </div>
                                <div style="text-align:center;">
                                    <a href="#" class="btn btn-link" data-ui-class="a-zoom" data-toggle="modal" data-target=".flight-{{$key}}" style="color: #28356c; text-decoration: underline;">@lang('generate.details') </a>
                                </div>


                                <input id="" type="hidden" name="source" value="{{ $fares["source"] }}">
                                <input type="hidden" name="prix"  value="{{$fares["price"]*$currency}}" class="prix" id="{{$key}}">
                                <button type="submit" class="btn bg-my rounded-0">@lang('generate.continue')</button>

                            </div>

                        </div>
                    </form>
                    @php($key++)
                @endforeach
            @endforeach
        @endif
    @endfor
@endforeach
