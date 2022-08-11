
@php
    use Illuminate\Support\Str;

    $depart = $reservation['vol'][0];
    $retour = $reservation['vol'][1] ?? null;

    $escalsDepart = (sizeof(($depart["escal"])) - 1);
    if (isset($depart["escal"])) {

        $typeVolDepart = ($escalsDepart == 0) ?
                'Vol direct' :
                $escalsDepart .' '.Str::plural('escale', $escalsDepart);

        $carrierDepart=\App\models\flight\TlCarrier::all()->where('code', $depart["escal"][0]["carrier"])->first();


        $dep = new DateTime($depart["escal"][0]["dep"]);
        $arr = new DateTime($depart["escal"][0]["arr"]);
        $dureDepart = $dep->diff($arr);

        $depV = new DateTime($depart["escal"][0]["dep"]);
        $arrV = new DateTime($depart["escal"][$escalsDepart]["arr"]);
        $dureVoyage = $depV->diff($arrV);
    }


    $adults = $reservation['adults'];
    $enfant = $reservation['enfant'];
    $bebe = $reservation['bebe'];
    $voyageurs = $adults + $enfant + $bebe;
@endphp


<form action="{{route('front.BookingFares')}}" method="post" class="process">

    @csrf
    <div class="row">
        <div class="col-12 order-1 order-md-0 col-md-8">
            <!-- Vérification du voyage -->
            <section class="box-shadow p-3 mb-5">
                @include('front.flight.partials._flightVerify')
            </section>


            <!-- Authentification -->
            @include('front._includes.signIn')

            <!-- Coordonnées -->
            @include('front._includes.customer')

            <!-- Passengers --> 
            <section class="box-shadow p-3 mb-5">

                @for($i=0;$i<$reservation['adults'];$i++)

                    <p class="title-card-flight">@lang('generate.Adult') {{$i+1}}</p>
                
                    <div class="d-flex justify-content-start my-3">
                        <span class="fw-normal mr-md-5 mr-0" style="min-width: 90px;">@lang('generate.civility') *</span>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" checked id="mr{{$i}}"
                                    name="passengers[adult][{{$i}}][civility]" value="Mr">
                            <label class="custom-control-label" for="mr{{$i}}">M.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="mme{{$i}}"
                                    name="passengers[adult][{{$i}}][civility]" value="Mme">
                            <label class="custom-control-label" for="mme{{$i}}">Mme</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="ms{{$i}}"
                                    name="passengers[adult][{{$i}}][civility]" value="Mlle">
                            <label class="custom-control-label" for="ms{{$i}}">Mlle</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md col-12">
                            <label for="Prenom-passager" class="fw-normal color-blue">@lang('generate.firstname') *</label>
                            <input type="text" required id="Prenom-passager" placeholder="@lang('generate.firstname')"
                                    class="form-control rounded-0 firstName-passager{{$i}} wizard-required"
                                    name="passengers[adult][{{$i}}][lastName]">
                        </div>


                        <div class="form-group col-md col-12">
                            <label for="nom-passager" class="fw-normal color-blue">@lang('generate.lastname') *</label>
                            <input type="text" required id="nom-passager" placeholder="@lang('generate.lastname')"
                                    class="form-control rounded-0 lastName-passager{{$i}} wizard-required"
                                    name="passengers[adult][{{$i}}][firstName]">
                        </div>


                        <div class="form-group col-md col-12">
                            <label for="dob-passager" class="fw-normal color-blue">@lang('generate.dob') *</label>
                            <input type="date" max="2100-01-01" max="2100-01-01" required id="dob-passager"
                                    class="form-control rounded-0 wizard-required"
                                    name="passengers[adult][{{$i}}][dob]">
                        </div>
                    </div>
                    @if (!($i === ($reservation['adults'])))
                        <hr class="bordure-center">
                    @endif
                @endfor

                @for($i=0;$i<$reservation['enfant'];$i++)
                 
                    <p class="title-card-flight">@lang('generate.child') {{$i+1}}</p>
                    
                    <div class="d-flex justify-content-start my-3">
                        <span class="fw-normal mr-md-5 mr-0" style="min-width: 90px;">@lang('generate.civility') *</span>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" checked id="childmr{{$i}}"
                                    name="passengers[child][{{$i}}][civility]" value="Mr">

                            <label class="custom-control-label" for="childmr{{$i}}">M.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="childms{{$i}}"
                                    name="passengers[child][{{$i}}][civility]" value="Mlle">
                            <label class="custom-control-label" for="childms{{$i}}">Mlle</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md col-12">
                            <label class="fw-normal color-blue" for="nom-passager">@lang('generate.lastname') *</label>
                            <input type="text" required id="nom-passager"
                                    placeholder="@lang('generate.lastname')"
                                    class="form-control rounded-0 wizard-required"
                                    name="passengers[child][{{$i}}][firstName]">
                        </div>
                        <div class="form-group col-md col-12">
                            <label class="fw-normal color-blue" for="Prenom-passager">@lang('generate.firstname') *</label>
                            <input type="text" required id="Prenom-passager"
                                    placeholder="@lang('generate.firstname')"
                                    class="form-control rounded-0 wizard-required"
                                    name="passengers[child][{{$i}}][lastName]">
                        </div>
                        <div class="form-group col-md col-12">
                            <label class="fw-normal color-blue" for="dob-passager">@lang('generate.dob') *</label>
                            <input type="date" max="2100-01-01" max="2100-01-01" required id="dob-passager"
                                    class="form-control rounded-0 wizard-required"
                                    name="passengers[child][{{$i}}][dob]">
                        </div>
                    </div>
                    @if (!($i === ($reservation['enfant'])))
                        <hr class="bordure-center">
                    @endif
                @endfor

                @for($i=0;$i<$reservation['bebe'];$i++)
                    
                    <p class="title-card-flight">@lang('generate.bebe') {{$i+1}}</p>
                     
                    <div class="d-flex justify-content-start my-3">
                        <span class="fw-normal mr-md-5 mr-0">@lang('generate.civility') *</span>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" checked id="bebe-mr{{$i}}"
                                    name="passengers[baby][{{$i}}][civility]" value="Mr">
                            <label class="custom-control-label" for="bebe-mr{{$i}}">M.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="bebe-mlle{{$i}}"
                                    name="passengers[baby][{{$i}}][civility]" value="Mlle">
                            <label class="custom-control-label" for="bebe-mlle{{$i}}">Mlle</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md col-12">
                            <label class="fw-normal color-blue" for="nom-passager">@lang('generate.lastname') *</label>
                            <input type="text" required id="nom-passager"
                                    placeholder="@lang('generate.lastname')"
                                    class="form-control rounded-0 wizard-required"
                                    name="passengers[baby][{{$i}}][firstName]">
                        </div>
                        <div class="form-group col-md col-12">
                            <label class="fw-normal color-blue" for="Prenom-passager">@lang('generate.firstname') *</label>
                            <input type="text" required id="Prenom-passager"
                                    placeholder="@lang('generate.firstname')"
                                    class="form-control rounded-0 wizard-required"
                                    name="passengers[baby][{{$i}}][lastName]">
                        </div>
                        <div class="form-group col-md col-12">
                            <label class="fw-normal color-blue" for="dob-passager">@lang('generate.dob') *</label>
                            <input type="date" max="2100-01-01" max="2100-01-01" required id="dob-passager"
                                    class="form-control rounded-0 wizard-required"
                                    name="passengers[baby][{{$i}}][dob]">
                        </div>
                    </div>
                    @if (!($i === ($reservation['bebe'])))
                        <hr class="bordure-center">
                    @endif
                @endfor

                <div class="list-inline d-flex justify-content-center pt-50 bold">
                    @lang('generate.plzEnsure')
                </div>
            </section>    

            <!-- Méthode De paiement -->
            @include('front._includes.payment', ['module' => "Flight"])
            

        </div>

        <div class="col-12 col-md ml-md-3 ml-0">

            
            <div class="box-shadow p-3 mb-5">
                <p class="title-card-flight">Récapitulatif du voyage</p>

                @if (isset($reservation['vol'][0]["escal"]))

                    <div class="d-flex row justify-content-between">
                        <!--PopUp Vol-->
                        <div class="modal fade Flight-mob  animate" data-backdrop="true" tabindex="-1"
                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="container">
                                        <div class="d-flex row justify-content-between border-bottom border-darck">
                                            <div class="p-2">
                                                @php
                                                    $carrier=\App\models\flight\TlCarrier::all()->where('code', ($reservation['vol'][0]["escal"][0]["carrier"] ?? ''))->first();
                                                @endphp
                                                @if(!empty($carrier))
                                                    {{$carrier->name}}
                                                @endif</div>
                                            <button type="button" class="close px-3" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <!--first way-->
                                        <div class="row align-items-center border-bottom border-dots border-darck py-4">
                                            @php
                                                $last = sizeof($reservation['vol'][0]["escal"]);
                                            @endphp
                                            <div class="col-md-1 d-md-block d-none"><i
                                                        class="fas fa-plane-departure ml-md-0 ml-4"></i></div>
                                            <div class="col-md col-6">
                                                <p class="m-0 text-dark"><strong>@lang('generate.go')</strong></p>
                                                <p class="m-0 text-dark">{{ date("d/m/Y", strtotime($reservation['vol'][0]["escal"][0]["dep"])) }}</p>
                                                <p class="m-0 text-dark fs-12">
                                                    @php
                                                        $carrier=\App\models\flight\TlCarrier::all()->where('code',$reservation['vol'][0]["escal"][0]["carrier"])->first();
                                                    @endphp
                                                    @if(!empty($carrier))
                                                        {{$carrier->name}}
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-md col-6">
                                                <input type="hidden" class="airportCode"
                                                    value="{{ $reservation['vol'][0]["escal"][0]["airportDep"] }}">
                                                <p class="m-0 text-dark">
                                                    {{ $reservation['vol'][0]["escal"][0]["airportDep"] }}
                                                    <strong>{{ date("H:i", strtotime($reservation['vol'][0]["escal"][0]["dep"])) }}</strong>
                                                </p>
                                                <p class="m-0 text-dark">
                                                    <span class="{{ $reservation['vol'][0]["escal"][0]["airportDep"] }}"></span>
                                                </p>
                                                <p class="m-0 text-dark fs-12">
                                                    <span class="{{ $reservation['vol'][0]["escal"][0]["airportDep"] }}-name"></span>
                                                </p>
                                            </div>

                                            <div class="col-md col-12">
                                                <div class="d-flex align-items-center">
                                                    <div class="text-grey fs-9"><i class="fas fa-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1 d-none d-md-block line"></div>
                                                    <div class="text-grey fs-9"><i class="fas fa-circle"></i>
                                                    </div>
                                                </div>
                                                <p class="m-0 text-dark text-center">
                                                    <strong>
                                                        @if ($last - 1 == 0)
                                                            Direct
                                                        @else
                                                            {{$last - 1}}  @lang('generate.escale')(s)
                                                        @endif
                                                    </strong>

                                                </p>
                                            </div>
                                            <div class="col-md col-6">
                                                <input type="hidden" class="airportCode"
                                                    value="{{ $reservation['vol'][0]["escal"][$last - 1]["airportDep"] }}">
                                                <p class="m-0 text-dark">
                                                    <strong>{{ date("H:i", strtotime($reservation['vol'][0]["escal"][$last - 1]["arr"]))}}</strong>
                                                    {{ $reservation['vol'][0]["escal"][$last - 1]["airportArr"] }}
                                                </p>
                                                <p class="m-0 text-dark">
                                                    <span class="{{ $reservation['vol'][0]["escal"][$last - 1]["airportDep"] }}"></span>
                                                </p>
                                                <p class="m-0 text-dark fs-12">
                                                    <span class="{{ $reservation['vol'][0]["escal"][$last - 1]["airportDep"] }}-name"></span>
                                                </p>
                                            </div>
                                            <div class="col-md col-6">
                                                {{--<p class="m-0 text-dark"> 3h.15m</p>--}}
                                                <p class="m-0 text-dark">{{ $reservation['vol'][0]["escal"][0]["cabineClass"] }} {{ $reservation['vol'][0]["escal"][0]["class"] }}</p>
                                                <p class="m-0 text-dark"><i class="fa fa-suitcase-rolling"></i> <span
                                                            class="fs-12"> {{ $reservation['vol'][0]["escal"][0]["baggage"] }}
                                                        .</span>
                                                </p>
                                            </div>
                                        </div>
                                        <!--Escal-->

                                        @foreach ($reservation['vol'][0]["escal"] as $segment)

                                            @php
                                                $carrier=\App\models\flight\TlCarrier::all()->where('code',$segment["carrier"])->first();
                                                $d1 = new DateTime($segment["dep"]);
                                                $d2 = new DateTime($segment["arr"]);
                                                $dure = $d1->diff($d2);
                                            @endphp

                                            <div class="row bg-dark py-4">
                                                <div class="col-md-4 col-6">
                                                    <p class="m-0 text-white"><strong>
                                                            @if(!empty($carrier))
                                                                {{$carrier->name}}
                                                            @endif
                                                            {{$segment['flight']}}</strong></p>
                                                    <p class="m-0 text-white fs-12">
                                                        {{ $segment["cabineClass"] }} {{ $segment["class"] }}
                                                    </p>
                                                </div>
                                                <div class="col-md-1 col-6">
                                                    <p class="mb-5 text-white">
                                                        <strong> {{ date("H:i", strtotime($segment["arr"])) }}</strong>
                                                        <span
                                                                class="line-h d-none d-md-inline"></span> <i
                                                                class="fa-line-h fas fa-circle"></i></p>
                                                    <p class="m-0 text-white">
                                                        <strong> {{ date("H:i", strtotime($segment["arr"])) }}</strong>
                                                        <i
                                                                class="fa-line-b fas fa-circle"></i></p>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <p class="mb-5 text-white">
                                                        <strong>
                                                            <span class="{{ $segment["airportDep"] }}"></span>
                                                            <span class="{{ $segment["airportDep"] }}-name"></span>
                                                        </strong>
                                                    </p>
                                                    <p class="m-0 text-white">
                                                        <span class="{{ $segment["airportArr"] }}"></span>
                                                        <span class="{{ $segment["airportArr"] }}-name"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <p class="mb-5 text-white">
                                                        <strong>{{ date("d/m/Y", strtotime($segment["dep"])) }}</strong>
                                                    </p>
                                                    <p class="m-0 text-white">
                                                        <strong>{{ date("d/m/Y", strtotime($segment["arr"])) }}</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if(isset($reservation['vol'][1]))
                                        <!--second way-->
                                            <div class="row align-items-center border-bottom border-dots border-darck py-4">
                                                @php
                                                    $last = sizeof($reservation['vol'][1]["escal"]);
                                                @endphp
                                                <div class="col-md-1 d-md-block d-none"><i
                                                            class="fas fa-plane-arrival ml-md-0 ml-4"></i></div>
                                                <div class="col-md col-6">
                                                    <p class="m-0 text-dark"><strong>@lang('generate.return')</strong></p>
                                                    <p class="m-0 text-dark">{{ date("d/m/Y", strtotime($reservation['vol'][1]["escal"][0]["dep"])) }}</p>
                                                    <p class="m-0 text-dark fs-12">
                                                        @php
                                                            $carrier=\App\models\flight\TlCarrier::all()->where('code',$reservation['vol'][1]["escal"][0]["carrier"])->first();
                                                        @endphp
                                                        @if(!empty($carrier))
                                                            {{$carrier->name}}
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="col-md col-6">
                                                    <input type="hidden" class="airportCode"
                                                        value="{{ $reservation['vol'][1]["escal"][0]["airportDep"] }}">
                                                    <p class="m-0 text-dark">
                                                        {{ $reservation['vol'][1]["escal"][0]["airportDep"] }}
                                                        <strong>{{ date("H:i", strtotime($reservation['vol'][1]["escal"][0]["dep"])) }}</strong>
                                                    </p>
                                                    <p class="m-0 text-dark">
                                                        <span class="{{ $reservation['vol'][1]["escal"][0]["airportDep"] }}"></span>
                                                    </p>
                                                    <p class="m-0 text-dark fs-12">
                                                        <span class="{{ $reservation['vol'][1]["escal"][0]["airportDep"] }}-name"></span>
                                                    </p>
                                                </div>

                                                <div class="col-md col-12">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-grey fs-9"><i class="fas fa-circle"></i>
                                                        </div>
                                                        <div class="flex-grow-1 d-none d-md-block line"></div>
                                                        <div class="text-grey fs-9"><i class="fas fa-circle"></i>
                                                        </div>
                                                    </div>
                                                    <p class="m-0 text-dark text-center"><strong>
                                                            @if ($last - 1 == 0)
                                                                Direct
                                                            @else
                                                                {{$last - 1}}  @lang('generate.escale')(s)
                                                            @endif
                                                        </strong></p>
                                                </div>
                                                <div class="col-md col-6">
                                                    <input type="hidden" class="airportCode"
                                                        value="{{ $reservation['vol'][1]["escal"][$last - 1]["airportDep"] }}">
                                                    <p class="m-0 text-dark">
                                                        <strong>{{ date("H:i", strtotime($reservation['vol'][1]["escal"][$last - 1]["arr"]))}}</strong>
                                                        {{ $reservation['vol'][1]["escal"][$last - 1]["airportArr"] }}
                                                    </p>
                                                    <p class="m-0 text-dark">
                                                        <span class="{{ $reservation['vol'][1]["escal"][$last - 1]["airportDep"] }}"></span>
                                                    </p>
                                                    <p class="m-0 text-dark fs-12">
                                                        <span class="{{ $reservation['vol'][1]["escal"][$last - 1]["airportDep"] }}-name"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md col-6">
                                                    {{--<p class="m-0 text-dark"> 3h.15m</p>--}}

                                                    <p class="m-0 text-dark">{{ $reservation['vol'][0]["escal"][0]["cabineClass"] }} {{ $reservation['vol'][1]["escal"][0]["class"] }}</p>
                                                    <p class="m-0 text-dark"><i class="fa fa-suitcase-rolling"></i>
                                                        <span
                                                                class="fs-12"> {{ $reservation['vol'][1]["escal"][0]["baggage"] }}
                                                            .</span>
                                                    </p>
                                                </div>
                                            </div>

                                            @foreach ($reservation['vol'][1]["escal"] as $segment)
                                                @php
                                                    $carrier=\App\models\flight\TlCarrier::all()->where('code',$segment["carrier"])->first();
                                                    $d1 = new DateTime($segment["dep"]);
                                                    $d2 = new DateTime($segment["arr"]);
                                                    $dure = $d1->diff($d2);
                                                @endphp
                                                <input type="hidden" name="duree[]"
                                                    value="{{$dure->format("%Hh%Imin")}}">
                                                <div class="row bg-dark py-4">
                                                    <div class="col-md-4 col-6">
                                                        <p class="m-0 text-white"><strong>
                                                                @if(!empty($carrier))
                                                                    {{$carrier->name}}
                                                                @endif
                                                                {{$segment['flight']}}</strong></p>
                                                        <p class="m-0 text-white fs-12">
                                                            {{ $segment["cabineClass"] }} {{ $segment["class"] }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-1 col-6">
                                                        <p class="mb-5 text-white">
                                                            <strong> {{ date("H:i", strtotime($segment["arr"])) }}</strong>
                                                            <span
                                                                    class="line-h d-none d-md-inline"></span> <i
                                                                    class="fa-line-h fas fa-circle"></i></p>
                                                        <p class="m-0 text-white">
                                                            <strong> {{ date("H:i", strtotime($segment["arr"])) }}</strong>
                                                            <i
                                                                    class="fa-line-b fas fa-circle"></i></p>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                        <p class="mb-5 text-white">
                                                            <strong>
                                                                <span class="{{ $segment["airportDep"] }}"></span>
                                                                <span class="{{ $segment["airportDep"] }}-name"></span>
                                                            </strong>
                                                        </p>
                                                        <p class="m-0 text-white">
                                                            <span class="{{ $segment["airportArr"] }}"></span>
                                                            <span class="{{ $segment["airportArr"] }}-name"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <p class="mb-5 text-white">
                                                            <strong>{{ date("d/m/Y", strtotime($segment["dep"])) }}</strong>
                                                        </p>
                                                        <p class="m-0 text-white">
                                                            <strong>{{ date("d/m/Y", strtotime($segment["arr"])) }}</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--first way-->
                    <div class="py-4">
                        <div>
                            <div>
                                <p class="m-0 mb-3"><span class="bold">@lang('generate.ticket') :
                                    </span>  @if($retour) @lang('generate.roundTrip') @else @lang('generate.oneWayTicket') @endif </p>
                                <p class="m-0 color-blue">
                                    <span class="bold">{{ Str::plural('Voyageur', $voyageurs ) }} :</span>
                                    {{ $adults }} {{ Str::plural('adulte', $adults) }}
                                        @if ($enfant > 0)<span>, {{ $enfant}} {{ Str::plural('enfant', $enfant) }} </span>
                                        @endif 
                                        @if ($bebe > 0)<span>, {{ $bebe}} {{ Str::plural('bébé', $bebe) }} </span>
                                        @endif
                                </p>
                                <hr class="bordure-center">
                                <input type="hidden" class="airportCode"
                                    value="{{ $reservation['vol'][0]["escal"][0]["airportDep"] }}">
                                <div>
                                    <br>
                                    <p class="m-0">
                                        <strong>Aller :

                                            <span class="{{ $reservation['vol'][0]["escal"][0]["airportDep"] }}"></span>
                                            ({{ $reservation['vol'][0]["escal"][0]["airportDep"] }}) -
                                                <span class="{{ $reservation['vol'][0]["escal"][$escalsDepart]["airportArr"] }}"></span>
                                                ({{ $reservation['vol'][0]["escal"][$escalsDepart]["airportArr"] }})

                                        </strong>

                                    </p>
                                    @php
                                        $depAller = Carbon\Carbon::parse($reservation['vol'][0]["escal"][0]["dep"]);
                                        // setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                    @endphp


                                    <p class="m-0">
                                        {{-- {{ $depAller->formatLocalized('%A %d %B %Y') }} --}}
                                        @lang('generate.'.$depAller->formatLocalized('%A'))

                                        {{ $depAller->formatLocalized('%d') }}

                                        @lang('generate.'.$depAller->formatLocalized('%B'))

                                        {{ $depAller->formatLocalized('%Y') }}
                                    </p>
                                    @php
                                        $carrier=\App\models\flight\TlCarrier::all()->where('code',$reservation['vol'][0]["escal"][0]["carrier"])->first();
                                        $d1 = new DateTime($reservation['vol'][0]["escal"][0]["dep"]);

                                        $d2 = new DateTime($reservation['vol'][0]["escal"][$escalsDepart]["arr"]);
                                        $dure = $d1->diff($d2);
                                    @endphp
                                    <p class="m-0">
                                        {{ date("H:i", strtotime($reservation['vol'][0]["escal"][0]["dep"]))}} -
                                        {{ date("H:i", strtotime($reservation['vol'][0]["escal"][$escalsDepart]["arr"]))}}
                                        ({{$dure->format("%hh %Imin")}})
                                    </p>
                                    <p class="m-0 fs-12">
                                        @php
                                            $carrier=\App\models\flight\TlCarrier::all()->where('code',$reservation['vol'][0]["escal"][0]["carrier"])->first();
                                        @endphp
                                        @if(!empty($carrier))
                                            {{$carrier->name}}
                                        @endif
                                    </p>
                                </div>

                                @if(isset($reservation['vol'][1]))
                                <br>
                                <div>
                                    <p class="m-0">
                                        <strong>@lang('generate.return') :
                                            <span class="{{ $reservation['vol'][1]["escal"][0]["airportDep"] }}"></span>
                                            ({{ $reservation['vol'][1]["escal"][0]["airportDep"] }}) -
                                            <span class="{{ $reservation['vol'][1]["escal"][$last - 1]["airportArr"] }}"></span>
                                            ({{ $reservation['vol'][1]["escal"][$last - 1]["airportArr"] }})
                                        </strong>
                                    </p>
                                    @php
                                        $depRetour = Carbon\Carbon::parse($reservation['vol'][1]["escal"][0]["dep"]);
                                        // setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                    @endphp

                                    <p class="m-0">
                                        {{-- {{ $depRetour->formatLocalized('%A %d %B %Y') }} --}}
                                        @lang('generate.'.$depRetour->formatLocalized('%A'))

                                        {{ $depRetour->formatLocalized('%d') }}

                                        @lang('generate.'.$depRetour->formatLocalized('%B'))

                                        {{ $depRetour->formatLocalized('%Y') }}
                                    </p>
                                    @php
                                        $carrier=\App\models\flight\TlCarrier::all()->where('code',$reservation['vol'][1]["escal"][0]["carrier"])->first();
                                        $d1 = new DateTime($reservation['vol'][1]["escal"][0]["dep"]);
                                        $d2 = new DateTime($reservation['vol'][1]["escal"][$last - 1]["arr"]);
                                        $dure = $d1->diff($d2);
                                    @endphp


                                    <p class="m-0">
                                        {{ date("H:i", strtotime($reservation['vol'][1]["escal"][0]["dep"]))}} -
                                        {{ date("H:i", strtotime($reservation['vol'][1]["escal"][$last - 1]["arr"]))}}
                                        ({{$dure->format("%hh %Imin")}})
                                    </p>
                                    <p class="m-0 fs-12">
                                        @php
                                            $carrier=\App\models\flight\TlCarrier::all()->where('code',$reservation['vol'][1]["escal"][0]["carrier"])->first();
                                        @endphp
                                        @if(!empty($carrier))
                                            {{$carrier->name}}
                                        @endif
                                    </p>
                                </div>
                                @endif

                            </div>
                        </div>
                    

                    </div>

                @endif
            </div>

            <section class="box-shadow p-3 mb-5">
                <p class="title-card-flight">@lang('generate.priceSummary')</p>

                <div class="d-flex justify-content-between pb-3">
                    <div>
                        @lang('generate.vol')
                    </div>
                    <div>
                        @php
                            $ht = (($reservation["prix"]) - ($reservation["taxe"]))
                        @endphp
                        {{number_format(($ht*$currency), 0, ',', ' ')}}
                        {{$currencyText}}
                    </div>
                </div>

                <div class="d-flex justify-content-between pb-3">
                    <div>
                        @lang('generate.tax') @lang('generate.and') @lang('generate.fees')
                    </div>
                    <div>
                        {{number_format(($reservation["taxe"]*$currency), 0, ',', ' ')}}
                        {{$currencyText}}
                    </div>
                </div>


                <!--Prices-->
                <hr class="bordure-center">
                
                <div class="d-flex justify-content-between pt-3">
                    <div>
                        <strong>@lang('generate.totalAmount') : </strong>
                    </div>
                    <div class="bold">
                        <strong>
                            {{number_format(($reservation["prix"]*$currency), 0, ',', ' ')}}
                            {{$currencyText}}
                        </strong>
                    </div>
                </div>

            </section>
        </div>
    </div>

</form>
