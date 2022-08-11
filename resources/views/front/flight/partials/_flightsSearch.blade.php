<div class="container pt-xs-0" id="search">
    <div class="py-3 booking-search">
        <form action="{{route('front.flights.list')}}" method="get" autocomplete="off" id="form-flight">
            <div class="py-3" style="width: 82%; margin: auto;">
                <div class="row">
                    <div class="form-group col-md-3 pr-1">
                        <select id="type-vol" class="form-control-typFlight lesclasses" name="typeVol"
                            style="color: #28356c !important;">
                            <option value="AR" @if(request()->query('typeVol')=="AR" ) selected @endif style="color: #28356c;">@lang('generate.roundTrip')</option>
                            <option value="AS" @if(request()->query('typeVol')=="AS" ) selected @endif style="color: #28356c;">@lang('generate.oneWayTicket')</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3 pr-1">
                        <select id="class-flight" class="form-control-typFlight lesclasses" name="class"
                            style="color: #28356c !important;">
                            <option @if(request()->query('class')=="All" ) selected @endif  value="All" style="color: #28356c;">@lang('generate.allClass')</option>
                            <option @if(request()->query('class')=="Economy" ) selected @endif  value="Economy" style="color: #28356c;">Economique</option>
                            <option @if(request()->query('class')=="Business" ) selected @endif  value="Business" style="color: #28356c;">Business</option>
                            <option @if(request()->query('class')=="PremiumEconomy" ) selected @endif  value="PremiumEconomy" style="color: #28356c;">Premium</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3 pr-1" style="z-index: 200">
                        <div class="position-relative">
                            <div class="d-flex sw-passengers-input lesclasses" id="Flight-passenger-input">
                                <div class="p-2">
                                    <i class="fas fa-users" style="color: #28356c !important;"></i>
                                </div>
                                <div class="p-2 bd-highlight passengers-text" style="color: #28356c !important;">
                                    {{ $passengers }}</div>
                                <div class="ml-auto p-2 bd-highlight"><i class="fa fa-caret-down"></i></div>
                            </div>
                            <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none"
                                    id="Flight-passenger">
                                <i class="fa fa-caret-up text-white"></i>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <span class="text-dark">@lang('generate.Adult')(s) </span><br>
                                        <span class="text-secondary">(+12)</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="number-input">
                                            <button class="fl-passenger" type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                            <input class="quantity" min="1" name="passengers[adults]" id="adult"
                                                    value="{{request()->get('passengers')['adults']}}" max="10" type="number">
                                            <button class="fl-passenger plus" type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            ></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <span class="text-dark">@lang('generate.Child')(s)</span><br>
                                        <span class="text-secondary">(2-11)</span>
                                    </div>
                                    <div class="number-input">
                                        <button class="fl-passenger" type="button"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                        <input class="quantity" min="0" id="infant" name="passengers[children]"
                                                value="{{request()->get('passengers')['children']}}" max="4" type="number">
                                        <button class="fl-passenger plus" type="button"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        ></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <span class="text-dark">@lang('generate.bebe')(s)</span><br>
                                        <span class="text-secondary">(0-23m)</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="number-input">
                                            <button class="fl-passenger" type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                            <input class="quantity" id="baby" min="0" name="passengers[infants]"
                                                    value="{{request()->get('passengers')['infants']}}" max="4" type="number">
                                            <button class="fl-passenger plus" type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            ></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 5px">
                    <div class="form-group col-lg-3 col-md-3 p-1 ">
                        <i class="fas fa-plane-departure" style="position: absolute; top: 22px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                        <input type="text" placeholder="Départ de ..." autocomplete="off" class="form-control-new ville" name="destination[0][departureName]" id="villeR" required style="position: relative; padding-left: 33px;" value="{{ request()->get('destination')?request()->get('destination')[0]["departureName"]:"" }} ">

                        <input type="hidden"  value="{{ request()->get('destination')?request()->get('destination')[0]["departure"]:"" }} " name="destination[0][departure]" id="villeRID" required>
                        <div id="villeR_data" class="data-city" style="position: relative;"></div>
                    </div>

                    <div class="form-group col-lg-3 col-md-3 p-1">
                        <i class="fas fa-plane-arrival" style="position: absolute; top: 22px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                        <input type="text" placeholder="Arrivée à ..." autocomplete="off" class="form-control-new ville" name="destination[0][arrivalName]" id="villeD" required style="position: relative; padding-left: 33px;" value="{{ request()->get('destination')?request()->get('destination')[0]["arrivalName"]:"" }} ">

                        <input type="hidden" value="{{ request()->get('destination')?request()->get('destination')[0]["arrival"]:"" }} " name="destination[0][arrival]" id="villeDID" required>
                        <div id="villeD_data" class="data-city" style="position: relative;"></div>
                    </div>

                    <div class="form-group col-md-3 p-1 @if(request()->query('typeVol')=="AR" ) d-none @endif  " id="date-as-content">
                        <i class="fas fa-calendar-alt" style="position: absolute; top: 22px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                        <input type="text" class="form-control-new date-as" value="{{request()->get('destination')?request()->get('destination')[0]["date"]:""}}" name="destination[0][date]" id="date-as" style="position: relative; padding-left: 30px;">
                    </div>

                    <div class="form-group col-md-3 p-1  @if(request()->query('typeVol')=="AS" ) d-none @endif " id="date-ar-content">
                        <i class="fas fa-calendar-alt" style="position: absolute; top: 22px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                        <input type="text" class="form-control-new date-ar-flight" name="dateFlight" id="date-ar" style="position: relative; padding-left: 30px;" value="{{request()->get('dateFlight')?request()->get('dateFlight'):""}}">
                    </div>

                    <div class="col-lg-3 col-md-3 p-1">
                        <button class="btn bg-my btn-block rounded-0 submit" style="height: 50px;" type="button" data-submit="form-flight">
                            @lang('generate.searchFor')
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
