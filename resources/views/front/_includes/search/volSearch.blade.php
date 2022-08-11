 <form action="{{route('front.flights.list')}}" method="get" autocomplete="off">
    <div class="container py-3 booking-search">

        <div class="row" style="padding-top: 10px;">
            <div class="form-group col-md-3 col-sm-12 pl-1 p-0">
                <select id="type-vol" class="form-control-new  lesclasses " name="typeVol">
                    <option value="AR">@lang('generate.roundTrip')</option>
                    <option value="AS">@lang('generate.oneWayTicket')</option>
                </select>
            </div>

            <div class="form-group col-md-3 col-sm-12 pl-1 p-0">
                <select id="class-flight" class="form-control-new  lesclasses " name="class">
                    <option value="Economy">@lang('generate.Economic')</option>
                    <option value="Business">@lang('generate.Business')</option>
                    <option value="PremiumEconomy">@lang('generate.Premium')</option>
                </select>
            </div>

            <div class="form-group col-md-3 col-sm-12 pl-1 p-0" id="test">
                <div class="position-relative">
                    <div class="d-flex sw-passengers-input form-control-new  lesclasses" id="Flight-passenger-input">
                        <div class="p-2">
                            <i class="fas fa-users" style="font-size: 12px"></i>
                        </div>
                        <div class="p-2 bd-highlight passengers-text">1 @lang('generate.Adult'),</div>
                        <div class="ml-auto p-2 bd-highlight"><i class="fa fa-caret-down"></i></div>
                    </div>
                    <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none"
                            id="Flight-passenger" style="z-index: 200">
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
                                            value="1" max="10" type="number">
                                    <button class="fl-passenger plus" type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                    ></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <span class="text-dark">@lang('generate.child')(s)</span><br>
                                <span class="text-secondary">(2-11)</span>
                            </div>
                            <div class="col-6">
                                <div class="number-input">
                                    <button class="fl-passenger" type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                    <input class="quantity" min="0" id="infant" name="passengers[children]"
                                            value="0" max="4" type="number">
                                    <button class="fl-passenger plus" type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                    ></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <span class="text-dark">@lang('generate.Baby')(s)</span><br>
                                <span class="text-secondary">(0-23m)</span>
                            </div>
                            <div class="col-6">
                                <div class="number-input">
                                    <button class="fl-passenger" type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                    <input class="quantity" id="baby" min="0" name="passengers[infants]"
                                            value="0" max="4" type="number">
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
            <div class="form-group col-md col-sm-12 pl-1 p-0">
                <i class="fas fa-plane-departure" style="position: absolute; top: 17px; left: 16px; z-index: 100;"></i>
                <input type="text" name="destination[0][departureName]" placeholder="Départ de ..." autocomplete="off" class="form-control-new ville" value="{{request()->get('destination')?request()->get('destination')[0]["departureName"]:""}}"
                id="villeR" required style="position: relative; padding-left: 33px;">

                <input type="hidden" name="destination[0][departure]" id="villeRID" required
                value="{{request()->get('destination')?request()->get('destination')[0]["departure"]:""}}">
                <div id="villeR_data" class="data-city" style="position: relative;"></div>
            </div>

            <div class="form-group col-md col-sm-12 pl-1 p-0">
                <i class="fas fa-plane-arrival" style="position: absolute; top: 17px; left: 16px; z-index: 100;"></i>
                <input type="text" name="destination[0][arrivalName]" placeholder="Arrivée à ..." autocomplete="off"  class="form-control-new ville" id="villeD" required style="position: relative; padding-left: 33px;"
                value="{{request()->get('destination')?request()->get('destination')[0]["arrivalName"]:""}}">

                <input type="hidden" name="destination[0][arrival]" id="villeDID" required
                value="{{request()->get('destination')?request()->get('destination')[0]["arrival"]:""}}">
                <div id="villeD_data" class="data-city" style="position: relative;"></div>
            </div>

            <div class="form-group col-md col-sm-12 pl-1 p-0 d-none " id="date-as-content">
                <i class="fas fa-calendar-alt" style="position: absolute; top: 18px; left: 16px; z-index: 100;"></i>
                <input type="text" class="form-control-new date-as"
                value="{{request()->get('destination')?request()->get('destination')[0]["date"]:""}}"
                    name="destination[0][date]" id="date-as" style="position: relative; padding-left: 30px;">
            </div>

            <div class="form-group col-md col-sm-12 pl-1 p-0" id="date-ar-content">
                <i class="fas fa-calendar-alt" style="position: absolute; top: 17px; left: 16px; z-index: 100;"></i>
                <input type="text" class="form-control-new date-ar-flight"
                    value="{{request()->get('destination')?request()->get('destination')[0]["date"]:""}}"
                    name="dateFlight" id="date-ar" style="position: relative; padding-left: 30px;">
            </div>

            <div class="col-md col-sm-12 pl-1 p-0">
                <button class="btn bg-my btn-block rounded-0" style="height: 50px;" type="submit">
                    @lang('generate.searchFor')
                </button>
            </div>
        </div>
    </div>
</form>