<div class="bg-white py-1">



<div class="container " id="search">
    <form action="{{route('front.flights.list')}}" autocomplete="off" autocorrect="off"
        autocapitalize="none" spellcheck="false" method="get" id="form-vol" style="background: #fff">
        <div class="container py-1">
        <div class="row">

            <div class=" col-md-9 d-flex " style=" padding-top: 10px; padding-bottom: 10px ">
        <span class="p-0 mt-2 w-100 font-weight-bold"> @lang("generate.searchVol")</span>
        <select id="type-vol" class="form-control-typFlight" name="typeVol">
            <option value="AR">@lang('generate.roundTrip')</option>
            <option value="AS">@lang("generate.oneWayTicket")</option>
        </select><span class="p-0 mt-2 w-10 font-weight-bold"> | </span>
        <select id="class-flight" class="form-control-typFlight" name="class">
            <option value="All">@lang("generate.allClass")</option>
            <option value="Economy">@lang("generate.economic")</option>
            <option value="Business">@lang("generate.business")</option>
            <option value="PremiumEconomy">@lang("generate.premium")</option>
        </select>

    </div>
</div>
<div class="row">

    <div class="form-group col-md pr-md-1">
        <input type="text" placeholder="@lang("generate.GoingFrom")" autocomplete="off" autocorrect="off"
        autocapitalize="none" spellcheck="false" class="form-control ville" value="{{request()->get('depName')}}" id="villeR" name="depName" required>
        <input type="hidden" name="dep" id="villeRID" required>
        <div id="villeR_data" class="data-city" style="position: relative;"></div>

    </div>
    <div class="form-group col-md pr-md-1">
        <input type="text" placeholder="@lang("generate.GoingTo")" autocomplete="off" autocorrect="off"
        autocapitalize="none" spellcheck="false" class="form-control ville" id="villeD" value="{{request()->get('arrName')}}" name="arrName" required>
        <input type="hidden" name="arr" id="villeDID" required>
        <div id="villeD_data" class="data-city" style="position: relative;"></div>

    </div>

    <div class="form-group col-md d-none pr-md-1" id="date-as-content">
        <input type="text" class="form-control date-as" value="{{request()->get('dateDepart')}}" name="dateDepart" id="date-as" placeholder="@lang("generate.departIn")" >
    </div>
    <div class="form-group col-md pr-md-1" id="date-ar-content">
        <input type="text" class="form-control date-ar-flight" value="{{request()->get('dateFlight')}}" name="dateFlight" id="date-ar" placeholder="@lang("generate.returnIn")" value="">
    </div>
    <div class="form-group col-md pr-md-1">
        <div class="position-relative">
            <div class="d-flex sw-passengers-input" id="Flight-passenger-input">
                <div class="p-2"><i class="fa fa-user"></i></div>
                <div class="p-2 bd-highlight passengers-text form-control-select">1 @lang("generate.adult"),</div>
                <div class="ml-auto p-2 bd-highlight"><i class="fa fa-caret-down"></i></div>
            </div>
            <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none"
                 id="Flight-passenger">
                <i class="fa fa-caret-up text-white"></i>
                <div class="row mb-1">
                    <div class="col-6">
                        <span class="text-dark">@lang("generate.adult")(s) </span><br>
                        <span class="text-secondary">(+12)</span>
                    </div>
                    <div class="col-6">
                        <div class="number-input">
                            <button class="fl-passenger" type="button"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                            <input class="quantity" min="1" value="1" name="adult" id="adult"
                              max="10" type="number">
                            <button class="fl-passenger plus" type="button"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            ></button>
                        </div>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-6">
                        <span class="text-dark">@lang("generate.Child")(s)</span><br>
                        <span class="text-secondary">(2-11)</span>
                    </div>
                    <div class="col-6">
                        <div class="number-input">
                            <button class="fl-passenger" type="button"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                            <input class="quantity" min="0" id="infant" name="infant"
                                   value="0" max="4" type="number">
                            <button class="fl-passenger plus" type="button"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            ></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <span class="text-dark">@lang("generate.Baby")(s)</span><br>
                        <span class="text-secondary">(0-23m)</span>
                    </div>
                    <div class="col-6">
                        <div class="number-input">
                            <button class="fl-passenger" type="button"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                            <input class="quantity" value="0"  id="baby" min="0" name="baby"
                                    max="4" type="number">
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
<div class="row">
    <div class="col-md-6">
        <button type="button" class="btn bg-my w-100  mt-0 rounded-0 submit" data-submit="form-vol">
            @lang("generate.search")
        </button>

    </div>
    <div class="col-md-6 flights_banner" >@lang("generate.BVPriceGuarantee")
    </div>

</div>
</div>
</form>

</div>
</div>
