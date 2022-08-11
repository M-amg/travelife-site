

<input type="hidden" id="last1" value="{{sizeOf($reservation['vol'][0]["escal"]) - 1}}">

@isset($reservation['vol'][1])
    <input type="hidden" id="last2" value="{{sizeOf($reservation['vol'][1]["escal"]) - 1}}">
@endisset

<p class="title-card-flight mb-5">Itinéraire de votre voyage</p>
@if (isset($depart["escal"]))
<!--first way-->
<section class="depart">

    <div class="row">
        <div class="col-md col-sm-12">
            <strong>@lang('generate.depart') :
                @php
                    $dep = Carbon\Carbon::parse($depart["escal"][0]["dep"]);
                    // setlocale(LC_TIME, 'fr_FR.utf8','fra');
                @endphp

                {{-- {{ $dep->formatLocalized('%A %d %B %Y') }} --}}
                @lang('generate.'.$dep->formatLocalized('%A'))

                {{ $dep->formatLocalized('%d') }}

                @lang('generate.'.$dep->formatLocalized('%B'))

                {{ $dep->formatLocalized('%Y') }}

            </strong>
        </div>

        <div class="col-md col-sm-12 text-md-right mr-md-3">
            <strong class="text-md-right">@lang('generate.traveltime') : {{ $dureVoyage->format("%Hh%Imin") }}</strong>
        </div>
    </div>

    @if ($typeVolDepart == 'Vol direct')

        <div class="row mt-3 fs-13">
            <div class="col-md-2 col-sm-12 ml-1">
                <p class="mt-3">
                    {{ $depart["escal"][0]["airportDep"] }} -
                    {{ $depart["escal"][$escalsDepart]["airportArr"] }}
                </p>
                <p class="pb-3">{{ $typeVolDepart }}</p>
            </div>

            <div class="col-md-7 col-sm-12">
                <input type="hidden" class="airportCode"
                value="{{ $depart["escal"][0]["airportDep"] }}">
                <p class="m-0 pb-3">
                    @if(!empty($carrierDepart))
                        <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrierDepart->code}}.png" style="width: 38px; margin-left: -12px;" class="mr-4">
                        <strong>
                            {{$carrierDepart->name}} - {{$carrierDepart->code}} {{ $depart["escal"][0]["flight"] }}
                        </strong>
                    @endif
                </p>
                <p class="m-0 pb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <strong>
                                <i class="fas fa-plane-departure mr-3 ml-md-0 ml-4"></i>
                                <span class="mr-3">{{ date("H:i", strtotime($depart["escal"][0]["dep"])) }}</span>
                            </strong>
                        </div>
                        <div class="col-md-9">
                            <span class="{{ $depart["escal"][0]["airportDep"] }}"></span>
                            <span class="{{ $depart["escal"][0]["airportDep"] }}-name"></span>
                            ({{ $depart["escal"][0]["airportDep"] }})
                        </div>
                    </div>
                </p>

                <p class="m-0 pb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <strong>
                                <i class="fas fa-plane-arrival mr-3 ml-md-0 ml-4"></i>
                                <span class="mr-3">{{ date("H:i", strtotime($depart["escal"][0]["arr"])) }}</span>
                            </strong>
                        </div>
                        <div class="col-md-9">
                            <span class="{{ $depart["escal"][0]["airportArr"] }}"></span>
                            <span class="{{ $depart["escal"][0]["airportArr"] }}-name"></span>
                            ({{ $depart["escal"][0]["airportArr"] }})
                        </div>
                    </div>
                </p>
            </div>

            <div class="col-md col-sm-12 mr-md-3">
                <p class="m-0 pb-3 mt-3 text-md-right">
                    {{ $depart["escal"][0]["cabineClass"] }} {{ $depart["escal"][0]["class"] }}</p>
                <p class="m-0 pb-3 text-md-right"><i class="fa fa-suitcase-rolling"></i>
                    <span class="fs-12"> {{ $depart["escal"][0]["baggage"] }} / pers.</span>
                </p>
            </div>
        </div>

    @else

        @if ($depart["escal"])
        <div class="detaliPan1">
            <div class="row mt-3 fs-13">
                <div class="col-md-2 col-sm-12 ml-1">
                    <p class="mt-3">
                        {{ $depart["escal"][0]["airportDep"] }} -
                        {{ $depart["escal"][$escalsDepart]["airportArr"] }}
                    </p>
                    <p class="pb-3">{{ $typeVolDepart }}</p>
                </div>

                <!--Escals-->
         
                @foreach ($reservation['vol'][0]["escal"] as $seg => $segment)
                <div class="@if(!$loop->first) offset-md-2 @endif col-md-7 col-sm-12">

                    @php
                        $carrier=\App\models\flight\TlCarrier::all()->where('code',$segment["carrier"])->first();
                        $d1 = new DateTime($segment["dep"]);
                        $d2 = new DateTime($segment["arr"]);
                        $dure = $d1->diff($d2);
                    @endphp

                    <p class="m-0 pb-3 p-0">
                        @if(!empty($carrier))
                            <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" style="width: 38px;margin-left: -12px;" class="mr-4">
                            <span class="bold">{{$carrier->name}} - {{$carrier->code}} {{ $segment["flight"] }}</span>
                            <span class="bold block">
                                (@lang('generate.duration') : {{ $dure->format("%Hh%Imin") }})
                            </span>

                        @endif
                    </p>

                    <p class="m-0 pb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <strong>
                                    <i class="fas fa-plane-departure mr-3 ml-md-0 ml-4"></i>
                                    <span class="mr-3">{{ date("H:i", strtotime($segment["dep"])) }}</span>
                                </strong>
                            </div>
                            <div class="col-md-9">
                                <span class="{{ $segment["airportDep"] }}"></span>
                                <span class="{{ $segment["airportDep"] }}-name"></span>
                                ({{ $segment["airportDep"] }})
                            </div>
                        </div>
                    </p>

                    <p class="m-0 pb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <strong>
                                    <i class="fas fa-plane-arrival mr-2 ml-md-0 ml-4"></i>
                                    <span class="mr-3">{{ date("H:i", strtotime($segment["arr"])) }}</span>
                                </strong>
                            </div>
                            <div class="col-md-9">
                                <span class="{{ $segment["airportArr"] }}"></span>
                                <span class="{{ $segment["airportArr"] }}-name"></span>
                                ({{ $segment["airportArr"] }})
                            </div>
                        </div>
                    </p>

                </div>

                <div class="col-md col-sm-12 mr-md-3">
                        <p class="m-0 pb-3 mt-3 text-md-right">
                            {{ $segment["cabineClass"] }} {{ $segment["class"] }}</p>
                        <p class="m-0 pb-3 text-md-right"><i class="fa fa-suitcase-rolling"></i>
                            <span class="fs-12"> {{ $segment["baggage"] }} / pers.</span>
                        </p>
                </div>

                {{-- ************************************ --}}




                <div class="w-100"></div>

                @if (!$loop->last)
                    <div class="row w-100">
                        <div class="offset-md-2 col-md col-12">
                            <hr class="bordure w-100">
                        </div>
                    </div>



                    <div class="row w-100">
                        <div class="offset-md-2 col-md col-12">
                            @php
                                $d1 = new DateTime($reservation['vol'][0]["escal"][$seg]["arr"]);
                                $d2 = new DateTime($reservation['vol'][0]["escal"][$seg+1]["dep"]);
                                $dureEscale = $d1->diff($d2);
                            @endphp
                            <p>@lang('generate.escale') : {{ $dureEscale->format("%Hh%Imin") }}
                            </p>
                        </div>
                        <div class="col-md-6 col-12 text-md-right mr-md-3">
                            <p>@lang('generate.changePlan')
                                <span class="{{ $segment["airportArr"] }}"></span>
                                ({{ $segment["airportArr"] }})
                            </p>
                        </div>
                    </div>

                    <div class="row w-100">
                        <div class="offset-md-2 col-md col-12">
                            <hr class="bordure w-100">
                        </div>
                    </div>
                @endif
                <div class="w-100"></div>
                {{-- ************************************ --}}
                @endforeach
            </div>

        </div>

        @endif

    @endif

</section>
@endif



@if (isset($retour["escal"]))

@if(isset($reservation['vol'][1]))

{{-- {{ pre($reservation['vol'][1]) }} --}}

@php
// $depart = $reservation['vol'][0];
$retour = $reservation['vol'][1];

$escalsRetour = (sizeof($retour["escal"]) - 1);

$typeVolRetour = ($escalsRetour == 0) ?
        'Vol direct' :
        $escalsRetour .' '.Illuminate\Support\Str::plural('escale', $escalsRetour);

$carrierRetour=\App\models\flight\TlCarrier::all()->where('code', $retour["escal"][0]["carrier"])->first();

$dep = new DateTime($retour["escal"][0]["dep"]);
$arr = new DateTime($retour["escal"][0]["arr"]);
$dureRetour = $dep->diff($arr);

$depV = new DateTime($retour["escal"][0]["dep"]);
$arrV = new DateTime($retour["escal"][$escalsRetour]["arr"]);
$dureVoyage = $depV->diff($arrV);

@endphp


<hr class="bordure-center">


<!--second way-->
<section class="retour">

    <div class="row">
        <div class="col-md col-sm-12">
            <strong>@lang('generate.return') :
                @php
                    $dep = Carbon\Carbon::parse($retour["escal"][0]["dep"]);
                    // setlocale(LC_TIME, 'fr_FR.utf8','fra');
                @endphp

                {{-- {{ $dep->formatLocalized('%A %d %B %Y') }} --}}
                @lang('generate.'.$dep->formatLocalized('%A'))

                {{ $dep->formatLocalized('%d') }}

                @lang('generate.'.$dep->formatLocalized('%B'))

                {{ $dep->formatLocalized('%Y') }}

            </strong>
        </div>

        <div class="col-md col-sm-12 text-md-right mr-md-3">
            <strong class="text-md-right">@lang('generate.traveltime') :
                {{ $dureVoyage->format("%Hh%Imin") }}
            </strong>
        </div>
    </div>

    @if ($typeVolRetour == 'Vol direct')
        <div class="row mt-3 fs-13">
            <div class="col-md-2 col-sm-12 ml-1">
                <p class="mt-3">
                    {{ $retour["escal"][0]["airportDep"] }} -
                    {{ $retour["escal"][$escalsRetour]["airportArr"] }}
                </p>
                <p class="pb-3">{{ $typeVolRetour }}</p>
            </div>

            <div class="col-md-7 col-sm-12">
                <input type="hidden" class="airportCode"
                value="{{ $retour["escal"][0]["airportDep"] }}">
                <p class="m-0 pb-3">
                    @if(!empty($carrierRetour))
                        <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrierRetour->code}}.png" style="width: 38px; margin-left: -12px;" class="mr-4">
                        <strong>
                            {{$carrierRetour->name}} - {{$carrierRetour->code}} {{ $retour["escal"][0]["flight"] }}
                        </strong>
                    @endif
                </p>
                <p class="m-0 pb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <strong>
                                <i class="fas fa-plane-departure mr-3 ml-md-0 ml-4"></i>
                                <span class="mr-3">{{ date("H:i", strtotime($retour["escal"][0]["dep"])) }}</span>
                            </strong>
                        </div>
                        <div class="col-md-9">
                            <span class="{{ $retour["escal"][0]["airportDep"] }}"></span>
                            <span class="{{ $retour["escal"][0]["airportDep"] }}-name"></span>
                            ({{ $retour["escal"][0]["airportDep"] }})
                        </div>
                    </div>
                </p>

                <p class="m-0 pb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <strong>
                                <i class="fas fa-plane-arrival mr-3 ml-md-0 ml-4"></i>
                                <span class="mr-3">{{ date("H:i", strtotime($retour["escal"][0]["arr"])) }}</span>
                            </strong>
                        </div>
                        <div class="col-md-9">
                            <span class="{{ $retour["escal"][0]["airportArr"] }}"></span>
                            <span class="{{ $retour["escal"][0]["airportArr"] }}-name"></span>
                            ({{ $retour["escal"][0]["airportArr"] }})
                        </div>
                    </div>
                </p>
            </div>

            <div class="col-md col-sm-12 mr-md-3">
                <p class="m-0 pb-3 mt-3 text-md-right">
                    {{ $retour["escal"][0]["cabineClass"] }} {{ $retour["escal"][0]["class"] }}</p>
                <p class="m-0 pb-3 text-md-right"><i class="fa fa-suitcase-rolling"></i>
                    <span class="fs-12"> {{ $retour["escal"][0]["baggage"] }} / pers.</span>
                </p>
            </div>
        </div>
    @else
        <div class="detaliPan2">
            <div class="row mt-3 fs-13">
                <div class="col-md-2 col-sm-12 ml-1">
                    <p class="mt-3">
                        {{ $retour["escal"][0]["airportDep"] }} -
                        {{ $retour["escal"][$escalsRetour]["airportArr"] }}
                    </p>
                    <p class="pb-3">{{ $typeVolRetour }}</p>
                </div>

                <!--Escals-->
                @php
                    $escales = sizeof($reservation['vol'][1]["escal"]);
                @endphp

            
                @foreach ($reservation['vol'][1]["escal"] as $key => $segment)


                    <div class="@if(!$loop->first) offset-md-2 @endif col-md-7 col-sm-12">

                        @php
                            $carrier=\App\models\flight\TlCarrier::all()->where('code',$segment["carrier"])->first();
                            $d1 = new DateTime($segment["dep"]);
                            $d2 = new DateTime($segment["arr"]);
                            $dure = $d1->diff($d2);
                        @endphp

                        <p class="m-0 pb-3 p-0">
                            @if(!empty($carrier))
                                <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png" style="width: 38px; margin-left: -12px;" class="mr-4">
                                <span class="bold">
                                    {{$carrier->name}} - {{$carrier->code}} {{ $segment["flight"] }}
                                </span>
                                <span class="bold block">(@lang('generate.duration') : {{ $dure->format("%Hh%Imin") }})</span>
                            @endif
                        </p>

                        <p class="m-0 pb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <strong>
                                        <i class="fas fa-plane-departure mr-3 ml-md-0 ml-4"></i>
                                        <span class="mr-3">{{ date("H:i", strtotime($segment["dep"])) }}</span>
                                    </strong>
                                </div>
                                <div class="col-md-9">
                                    <span class="{{ $segment["airportDep"] }}"></span>
                                    <span class="{{ $segment["airportDep"] }}-name"></span>
                                    ({{ $segment["airportDep"] }})
                                </div>
                            </div>
                        </p>

                        <p class="m-0 pb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <strong>
                                        <i class="fas fa-plane-arrival mr-3 ml-md-0 ml-4"></i>
                                        <span class="mr-3">{{ date("H:i", strtotime($segment["arr"])) }}</span>
                                    </strong>
                                </div>
                                <div class="col-md-9">
                                    <span class="{{ $segment["airportArr"] }}"></span>
                                    <span class="{{ $segment["airportArr"] }}-name"></span>
                                    ({{ $segment["airportArr"] }})
                                </div>
                            </div>
                        </p>

                    </div>

                    <div class="col-md col-sm-12 mr-md-3">
                            <p class="m-0 pb-3 mt-3 text-md-right">
                                {{ $segment["cabineClass"] }} {{ $segment["class"] }}</p>
                            <p class="m-0 pb-3 text-md-right"><i class="fa fa-suitcase-rolling"></i>
                                <span class="fs-12"> {{ $segment["baggage"] }} / pers.</span>
                            </p>
                    </div>

                    {{-- ************************************ --}}
                    <div class="w-100"></div>
                    @if (!$loop->last)
                        <div class="row w-100">
                            <div class="offset-md-2 col-md col-12">
                                <hr class="bordure w-100">
                            </div>
                        </div>

                        {{-- @php

                            $dep = Carbon\Carbon::parse($segment["dep"]);
                            $arr = Carbon\Carbon::parse($segment["arr"]);

                            // $dureEscale = $dep->diff($arr);
                            $dureEscale = $arr->diff($dep);

                        @endphp --}}


                        <div class="row w-100">

                            <div class="offset-md-2 col-md col-12">
                                @php
                                    $d1 = new DateTime($reservation['vol'][1]["escal"][$key]["arr"]);
                                    $d2 = new DateTime($reservation['vol'][1]["escal"][$key+1]["dep"]);
                                    $dureEscale = $d1->diff($d2);
                                @endphp
                                <p>@lang('generate.escale') : {{ $dureEscale->format("%Hh%Imin") }}</p>
                            </div>
                            <div class="col-md-6 col-12 text-md-right mr-md-3">
                                <p>@lang('generate.changePlan')
                                    <span class="{{ $segment["airportArr"] }}"></span>
                                    ({{ $segment["airportArr"] }})
                                </p>
                            </div>
                        </div>

                        <div class="row w-100">
                            <div class="offset-md-2 col-md col-12">
                                <hr class="bordure w-100">
                            </div>
                        </div>
                    @endif
                    <div class="w-100"></div>
                    {{-- ************************************ --}}

                @endforeach
            </div>
        </div>
    @endif

</section>

@endif

@endif


<div class="btnPan">
    <i class="fa fa-info-circle fa-lg mt-2 mr-2"></i>Afficher les détails
</div>




