

    <li><a
        href="{{route('front.frontHotels')}}" class="disabled">@lang('generate.hotels') </a>
        @if(
            'front.frontHotels'==Route::current()->getName() ||
            'api.hotel'==Route::current()->getName() ||
            'api.hotels'==Route::current()->getName()
            )
            <span class="active"></span>
        @endif
    </li>

    <li><a href="{{route('front.flights.home')}}">@lang('generate.vols')</a>
                @if(
                    'front.flights.home'==Route::current()->getName() ||
                    'front.flights.list'==Route::current()->getName() ||
                    'displayFare'==Route::current()->getName()
                    )
                    <span class="active"></span>
                @endif
    </li>

    <li class="@if('front.hotels.index'==Route::current()->getName()) active @endif"><a
        href="{{route('front.hotels.index')}}">@lang('generate.evasion')</a>
    </li>

    <li><a
        href="{{route('home')}}">@lang('generate.aLaCarte')</a>
        @if(''==Route::current()->getName())
            <span class="active"></span>
        @endif
    </li>

    <li><a href="#">Blog</a></li>

    @if(Auth::guard("customer")->check())
        <li>
            <a href="{{route('customer.login')}}">
            <i class="far fa-user-circle item-dark text-white"></i> {{auth()->guard("customer")->user()->firstName}} {{auth()->guard("customer")->user()->lastName}}
            </a>
        </li>
    @else
        <li><a
            href="{{route('front.mon.compte')}}">
            <i class="far fa-user-circle" style="color: white;"></i>
            @lang('generate.my') @lang('generate.acc')</a>
            @if('front.mon.compte'==Route::current()->getName())
                <span class="active"></span>
            @endif
        </li>
    @endif


