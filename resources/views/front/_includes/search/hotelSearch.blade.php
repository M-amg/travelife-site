<form action="{{route('api.hotels')}}" autocomplete="off" method="get">
    <div class="container py-3 booking-search">
        <div class="col-lg-12 pb-3">Plus de 500 000 hôtels à travers le monde payables en Dirham</div>
        <div class="row">

            <div class="form-group col-md-3 px-1">
                <i class="fas fa-map-marker-alt" style="position: absolute; top: 17px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                <input type="text" placeholder="Destination (ville)" autocomplete="off" class="form-control-new hotel" id="HvilleR" required style="position: relative; padding-left: 30px;" name="cityName">

                <input type="hidden" name="city" id="HvilleRID" required>
                <div id="HvilleR_data" class="data-city" style="position: relative;"></div>
                @if($errors->search->first('city'))
                    <p style="color: red; font-size: 11px;">@lang('generate.selectCity')</p>
                @endif
            </div>

            <div class="form-group col-md-3 px-1">
                <i class="fas fa-calendar-alt" style="position: absolute; top: 17px; left: 16px; color: rgb(40 53 108 / 80%); z-index: 100;"></i>
                <input type="text" placeholder="" required class="date-ar form-control-new " id="Period"
                    value="{{request()->get('period')}}"
                    name="period" style="relative; padding-left: 30px;">
            </div>


            

            <div class="form-group col-md-4 px-1" style="padding: 0">
                <div class="position-relative form-control-new">
                    <div class="d-flex sw-passengers-input " id="Hotel-passenger-input">
                        <div class="p-2">
                            <i class="fas fa-users" style="color: rgb(40 53 108 / 80%);"></i>
                        </div>
                        <div class="p-2 bd-highlight passengers-text">2 @lang('generate.Adult')s,</div>
                        <div class="ml-auto p-2 bd-highlight"><i class="fa fa-caret-down"></i></div>
                    </div>
                    <div class="position-absolute bg-white px-3 py-2 sw-passengers d-none"
                        style="z-index: 500"
                        id="Hotel-passenger">
                        <i class="fa fa-caret-up text-white"></i>
                        <div class="row">
                            <div class="col-6 pt-2">
                                <span class="text-dark">@lang('generate.room')(s)</span><br>
                            </div>
                            <div class="col-6">
                                <div class="number-input">
                                    <button class="hl-room"
                                            type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                    <input class="quantity" id="room" min="1" name="room" type="number"
                                        value="1" max="4">
                                    <button class="hl-room plus"
                                            type="button"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                    ></button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div id="room-list">

                                <div class="row mb-1">
                                    <div class="col-6 pt-2">
                                        <span class="text-dark">@lang('generate.Adult')(s) </span><br>
                                    </div>
                                    <div class="col-6">
                                        <div class="number-input">
                                            <button class="hl-passenger"
                                                    type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                            <input class="quantity" min="1" name="room[0][adults]"
                                                id="adult-0" value="2" max="10"
                                                type="number">
                                            <button class="hl-passenger plus"
                                                    type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            ></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6 pt-2">
                                        <span class="text-dark">@lang('generate.Child')(s)</span><br>
                                    </div>
                                    <div class="col-6">
                                        <div class="number-input">
                                            <button class="infant-age" data-id="0"
                                                    type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                            <input class="quantity" min="0" id="infant-0"
                                                name="room[0][children]"
                                                value="0" max="4" type="number">
                                            <button class="infant-age plus" data-id="0"
                                                    type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            ></button>
                                        </div>
                                    </div>
                                </div>
                                <div id="infant-age-0">

                                </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-2 pr-md-3 pr-0 px-1">
                <button class="btn bg-my btn-block rounded-0 " style="height: 50px;"
                        type="submit">
                        @lang('generate.searchFor')
                </button>
            </div>
        </div>
    </div>
</form>