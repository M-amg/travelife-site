

<div class="flt p-3 mt-0 mt-md-5">
    <span class="filter open-call d-md-none d-block mt-3">
        <i class="fas fa-bars mr-1"></i><span class="title">Filtres</span>
    </span>
    <div id="wrap">
        <div class="content d-md-block d-none">
            <div class="p-3 mt-5 ml-4">
                <div class="border-bottom mb-3 py-3 alignMobil">
                    <h3 class="title-search">Escales</h3>
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input escaleFilter" id="SansEscale" name="escale[1]"
                                value="1"
                                checked
                                >
                        <label class="custom-control-label" for="SansEscale">Vol direct</label>
                    </div>
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input escaleFilter" id="Escale" name="escale[2]"
                                checked
                                value="2">
                        <label class="custom-control-label" for="Escale">1 escale</label>
                    </div>
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input escaleFilter" id="Escales" name="escale[3]" value="3"
                                checked>
                        <label class="custom-control-label" for="Escales">2+ escales</label>
                    </div>
                </div>
                <div class="mb-3 py-3 border-bottom alignMobil">
                    <form action="{{route('front.flights.list')}}" method="get" id="formFilter">
                        <h3 class="title-search">Classes</h3>
                        <input type="hidden" name="typeVol" value="{{$t}}">
                        <input type="hidden" name="passengers[adults]" value="{{request()->get('passengers')['adults']}}">
                        <input type="hidden" name="passengers[children]" value="{{request()->get('passengers')['children']}}">
                        <input type="hidden" name="passengers[infants]" value="{{request()->get('passengers')['infants']}}">
                        <input type="hidden" name="destination[0][departure]" value="{{request()->get('destination')?request()->get('destination')[0]["departure"]:""}}">
                        <input type="hidden" name="destination[0][departureName]" value="{{request()->get('destination')?request()->get('destination')[0]["departureName"]:""}}">
                        <input type="hidden" name="destination[0][arrival]" value="{{request()->get('destination')?request()->get('destination')[0]["arrival"]:""}}">
                        <input type="hidden" name="destination[0][arrivalName]" value="{{request()->get('destination')?request()->get('destination')[0]["arrivalName"]:""}}">
                        <input type="hidden" name="destination[0][date]" value="{{request()->get('destination')?request()->get('destination')[0]["date"]:""}}">
                        <input type="hidden" name="dateFlight" value="{{request()->get('dateFlight')?request()->get('dateFlight'):""}}">

                        <div class="custom-control custom-radio">
                            <input type="radio" name="class" class="custom-control-input classRadio"
                                    @if(app('request')->input("class")=="All") checked @endif
                                    id="All" value="All">
                            <label class="custom-control-label" for="All">@lang('generate.allClass')</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="class" class="custom-control-input classRadio"
                                    @if(app('request')->input("class")=="Economy") checked @endif
                                    id="Economy" value="Economy">
                            <label class="custom-control-label" for="Economy">@lang('generate.Economic')</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="class" class="custom-control-input classRadio"
                                    @if(app('request')->input("class")=="Business") checked @endif
                                    id="Business" value="Business">
                            <label class="custom-control-label" for="Business">@lang('generate.Business')</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="class" class="custom-control-input classRadio"
                                    @if(app('request')->input("class")=="PremiumEconomy") checked @endif
                                    id="PremiumEconomique" value="PremiumEconomy">
                            <label class="custom-control-label" for="PremiumEconomique">@lang('generate.Premium')</label>
                        </div>
                    </form>
                </div>

                <div class="mb-3 py-3 alignMobil">
                    <h3 class="title-search">@lang('generate.airlinesCompanies')</h3>
                    @php $carriers = [] @endphp
                    @foreach ($data["fares"] as $fares)
                        @for($i=0;$i<sizeof($fares["legs"]["list"]);$i++)
                            @if($i+1<=sizeof($fares["legs"]["list"]))
                                @php
                                    $carrier=\App\models\flight\TlCarrier::all()->where('code', $fares["legs"]["list"][$i]["carrierCode"])->first();
                                @endphp
                                @if(!empty($carrier))
                                    @if(!in_array($carrier->code, $carriers))
                                        <div class="custom-control custom-checkbox mr-sm-2 jBlue" >
                                            <input type="checkbox" class="custom-control-input carrierFilter"
                                                name="carriers-{{$carrier->code}}" id="carrier-{{$carrier->code}}" value="{{$carrier->code}}" >
                                            <label class="custom-control-label" for="carrier-{{$carrier->code}}">{{$carrier->name}}</label>
                                        </div>
                                    @endif
                                    @php array_push($carriers,$carrier->code); @endphp
                                @endif
                            @endif
                        @endfor
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



