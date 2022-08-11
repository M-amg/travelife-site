
<div class="container mt-5 pb-5 px-0">

    <div style="background: #fff;" id="dispo">
        <div class="row py-3 mx-0 d-md-flex d-none" style="background: linear-gradient(#db1018,#b9242a);color: white;">
            <div class="col text-center">Ville de départ</div>
            <div class="col text-center">Date de départ</div>
            <div class="col text-center">Date de retour</div>
            <div class="col text-center">Formule</div>
            <div class="col text-center">Prix ttc/pax</div>
            <div class="col text-center">Réservation</div>
        </div>

        @if($package->tlFormulas()->first())
            @foreach($package->tlTravels()->where('DepartureDate','>',\Carbon\Carbon::now())->orderBy('DepartureDate')->get() as $travel)
                @php($dateDepart=Carbon\Carbon::parse($travel->DepartureDate))
                @php($dateReturn=Carbon\Carbon::parse($travel->arrivedDate))

                <div class="row d-flex justify-content-center align-items-center p-2 px-4 m-0"
                        @if($loop->index % 2 != 0) style="background: #f9f0f1" @endif>

                    <div class="col text-center bold">
                        @isset($travel->tlFlight()->first()->tl_carrier_id)
                            <img src="https://www.gstatic.com/flights/airline_logos/70px/{{ \App\models\flight\TlCarrier::where('id', $travel->tlFlight()
                            ->first()->tl_carrier_id)
                            ->first()->code }}.png" style="width: 38px; margin-left: -12px;" class="mr-1">
                        @endisset
                        @if($travel->tlCity()->first())
                            <span id="cityDepart{{ $travel->id }}" title="{{ $travel->tlCity()->first()->name }}"
                                value="{{ $travel->tlCity()->first()->name }}">{{ $travel->tlCity()->first()->name }}</span>
                        @endif
                    </div>
                    <div class="col text-center">{{$dateDepart->format('d/m/Y')}}</div>
                    <div class="col text-center d-md-block d-none">{{$dateReturn->format('d/m/Y')}}</div>
                    <div class="col-4 text-center bold d-md-none d-block"><span class="priceDepart">
                        {{ $package->tlFormulas()->where('tl_travel_id', $travel->id)->orderBy('priceSale')->first()->priceSale ?? '' }} Dhs
                    </span></div>

                    <div class="col text-center">{{ $package->tlFormulas()->where('tl_travel_id', $travel->id)->orderBy('priceSale')->first()->name ?? '' }}</div>

                    <div class="col text-center bold d-md-block d-none"><span class="priceDepart">
                        {{ $package->tlFormulas()->where('tl_travel_id', $travel->id)->orderBy('priceSale')->first()->priceSale ?? '' }} Dhs
                    </span></div>
                    <div class="col text-center d-md-none d-block pl-0">{{$dateReturn->format('d/m/Y')}}</div>


                    <div class="col px-2 pb-2 text-center">
                        <a id="{{ $travel->id }}" data-toggle="collapse" href="#collapseExample{{ $travel->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $travel->id }}" class="find btn bg-my text-white rounded-0" href="#">Vérifier</a>
                    </div>
                </div>

                <div class="collapse p-1" id="collapseExample{{ $travel->id }}">

                    <input type="hidden" class="travelId" id="{{ $travel->id }}">
                    <div class="row mx-md-5 mx-0 px-5 py-3">
                        <div class="col-12 col-md-5 form-group mb-0 p-md-1 p-0 mb-2">

                            <div class="position-relative" id="Passengers">
                                <div class="d-flex sw-passengers-input myInput clickedInput1" id="Flight-passenger-input{{ $travel->id }}" style="border: 1px solid #0c0c0c;" data-id="{{ $travel->id }}">
                                    <div class="p-2"><i class="fa-solid fa-bed"></i></div>
                                    <div class="p-2 bd-highlight passengers-text">Type chambre</div>
                                    <div class="ml-auto p-2 bd-highlight"><i class="fa fa-chevron-down fs-11"></i></div>
                                </div>
                                <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none clicked1"
                                    id="Flight-passenger{{ $travel->id }}" data-id="{{ $travel->id }}">
                                    <i class="fa fa-caret-up text-white"></i>
                                    <div class="form-group my-2">
                                        <select id="room{{ $travel->id }}" class="rooms form-control" name=""
                                            data-id="{{ $travel->id }}">
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-5 form-group mb-0 p-md-1 p-0 mb-2">

                            <div class="position-relative" id="Passengers">
                                <div class="d-flex sw-passengers-input myInput clickedInput2" id="Flight-passenger-input2{{ $travel->id }}" style="border: 1px solid #0c0c0c;" data-id="{{ $travel->id }}">
                                    <div class="p-2"><i class="fa fa-user"></i></div>
                                    <div class="p-2 bd-highlight passengers-text">Voyageurs</div>
                                    <div class="ml-auto p-2 bd-highlight"><i class="fa fa-chevron-down fs-11"></i></div>
                                </div>
                                <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none clicked2"
                                    id="Flight-passenger2{{ $travel->id }}" data-id="{{ $travel->id }}">
                                    <i class="fa fa-caret-up text-white"></i>

                                    @if($package->tlFormulas()->first())
                                        <div class="">
                                            <div class="row mb-1">

                                                <div class="col-6">
                                                    <span class="text-dark">@lang('generate.Adult')(s) </span><br>
                                                    <span class="text-secondary">(+12)</span>
                                                </div>
                                                <div class="col-6">
                                                    <div class="number-input">
                                                        <button class="fl-passenger" data-id="{{ $travel->id }}"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                        <input class="quantity" min="1" name="adult" id="adult{{ $travel->id }}"
                                                            value="1"
                                                            max="4"
                                                            type="number">
                                                        <button class="fl-passenger plus" data-id="{{ $travel->id }}"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                        ></button>
                                                    </div>
                                                </div>

                                            </div>
                                            @foreach($package->tlPoliticAgeEnfantPackages as $ageEnfant)
                                                @if($package->maxInfant>0)
                                                    <div class="row mb-1">
                                                        <div class="col-6">
                                                            <span class="text-dark">{{__('generate.'.$ageEnfant->TypeEnfant)}}</span><br>
                                                            <span class="text-secondary">({{$ageEnfant->startAge}}
                                                                -{{$ageEnfant->endAge}})</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="number-input">
                                                                <button class="fl-passenger"
                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                                <input class="quantity" min="0"
                                                                    name="{{$ageEnfant->TypeEnfant}}[0]"
                                                                    value="0" id="{{$ageEnfant->TypeEnfant}}-{{ $travel->id }}"
                                                                    max="{{$package->maxInfant}}"
                                                                    type="number">
                                                                <button class="fl-passenger plus"
                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                                ></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-2 form-group mb-0 p-md-1 p-0 mb-2">
                            <button class="btn btn-dark find pb-2 w-100" style="height: 44px" id="{{ $travel->id }}">
                                <i class="fa-solid fa-rotate pt-2"></i> Rechercher
                            </button>
                        </div>


                        {{-- <div class="col-12 col-md form-group mb-0 p-md-1 p-0 mb-2">
                            <a class="btn btn-block text-dark"
                            style="height: 44px;border-radius: 4px;border: 1px solid #0c0c0c;" id="verify" href="#">@lang('generate.verify')</a>
                        </div> --}}

                    </div>

                    <div class="col-10  offset-1 border-blue Tableau-Formule border" style="background-color: white">
                        <div class="row align-items-center pt-2 pb-2">
                            <div class="col-3 border-right text-center bold color-blue">
                                @lang('generate.formula')
                            </div>

                            <div class="col-3 border-right text-center bold color-blue">
                                @lang('generate.passenger')(s)
                            </div>

                            <div class="col-3 border-right text-center bold color-blue">
                                @lang('generate.price') TTC
                            </div>

                            <div class="col-3  text-center bold color-blue">
                                @lang('generate.SecureCreditCardPayment')
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning" style="display: none" id="InfantMsg{{ $travel->id }}">
                        <p class="mb-0 text-center">

                            {{__('generate.msgMaxInfant', [ 'maxInfant' => $package->maxInfant])}}</p>
                    </div>
                    <div id="formulaData{{ $travel->id }}" class="mb-5"></div>

                </div>

            @endforeach
        @endif


    </div>



    {{-- ------------------------------- --}}


    {{-- <div class="col-12 border-blue Tableau-Formule" style="background-color: white">
        <div class="row align-items-center pt-2 pb-2">

            <div class="col-3 border-right text-center bold color-blue">
                @lang('generate.formula')
            </div>

            <div class="col-3 border-right text-center bold color-blue">
                @lang('generate.passenger')(s)
            </div>

            <div class="col-3 border-right text-center bold color-blue">
                @lang('generate.price') TTC
            </div>

            <div class="col-3  text-center bold color-blue">
                @lang('generate.SecureCreditCardPayment')
            </div>

        </div>
    </div> --}}

    {{-- <div class="alert alert-warning" style="display: none" id="InfantMsg">
        <p class="mb-0 text-center">

            {{__('generate.msgMaxInfant', [ 'maxInfant' => $package->maxInfant])}}</p>
    </div> --}}


    @php($agency=\App\models\agency\TlAgency::all()->first())


</div>
