<form action="{{route('front.flights.list')}}" method="get" autocomplete="off">
    <div class="container py-3">
        <div class="row">
                <div class="form-group col-md-3">
                    <select id="type-vol" class="form-control-typFlight lesclasses" name="typeVol">
                        <option value="AR">@lang('generate.roundTrip')</option>
                        <option value="AS">@lang('generate.oneWayTicket')</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <select id="class-flight" class="form-control-typFlight lesclasses" name="class">
                        <option value="Economy">Economique</option>
                        <option value="Business">Business</option>
                        <option value="PremiumEconomy">Premium</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <div class="position-relative">
                        <div class="d-flex sw-passengers-input lesclasses" id="Flight-passenger-input">
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
                                        <button class="fl-passenger"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                        <input class="quantity" min="1" name="adult" id="adult"
                                               value="1" max="10" type="number">
                                        <button class="fl-passenger plus"
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
                                        <button class="fl-passenger"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                        <input class="quantity" min="0" id="infant" name="infant"
                                               value="0" max="4" type="number">
                                        <button class="fl-passenger plus"
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
                                        <button class="fl-passenger"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                        <input class="quantity" id="baby" min="0" name="baby"
                                               value="0" max="4" type="number">
                                        <button class="fl-passenger plus"
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
            <div class="form-group col-lg-3 col-md-2 p-1">
                <i class="fas fa-plane-departure" style="position: absolute; top: 22px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                <input type="text" placeholder="Départ de ..." autocomplete="off" class="form-control-new ville" id="villeR" required style="position: relative; padding-left: 33px;">

                <input type="hidden" name="dep" id="villeRID" required>
                <div id="villeR_data" class="data-city" style="position: relative;"></div>
            </div>

            <div class="form-group col-lg-3 col-md-2 p-1 ">
                <i class="fas fa-plane-arrival" style="position: absolute; top: 22px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
               <input type="text" placeholder="Arrivée à ..." autocomplete="off"  class="form-control-new ville" id="villeD" required style="position: relative; padding-left: 33px;">

                <input type="hidden" name="arr" id="villeDID" required>
                <div id="villeD_data" class="data-city" style="position: relative;"></div>
            </div>

            <div class="form-group col-md-3 p-1 d-none " id="date-as-content">
                <input type="text" class="form-control-new date-as" name="dateDepart" id="date-as" style="background: #fff url(https://beautifulvoyages.com/img/icon-clandar.png) no-repeat scroll 95% 50%;">
            </div>

            <div class="form-group col-md-3 p-1 " id="date-ar-content">
                <i class="fas fa-calendar-alt" style="position: absolute; top: 22px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                <input type="text" class="form-control-new date-ar date-flight" name="dateFlight" id="date-ar" style="position: relative; padding-left: 30px;">
            </div>

            <div class="col-lg-3 col-md-2 p-1 ">
                <button class="btn bg-my btn-block rounded-0 " style=" height: 50px;" type="submit">
                    @lang('generate.searchFor')
                </button>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</form>
