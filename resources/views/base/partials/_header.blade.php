
<header>

    <!-- Menu web -->
    <div class="web">

        <div class="container" style="margin: 0 auto;">


                <div class="row">

                    <nav class="col-lg-2">
                        <a href="{{route('home')}}" title="" class="mr-auto">
                            <img id="logo-Lfen"  alt="Accueil - {{ config('app.name') }} " src="{{asset("img/logo-white.png")}}" style="width: 150px">
                        </a>


                    </nav>

                    <nav class="col-lg menu">
                        <ul class="d-flex">


                            <li><a
                                href="{{route('front.frontHotels')}}" class="disabled">@lang('generate.hotels') </a>
                                @if(
                                    'front.frontHotels'==Route::current()->getName() ||
                                    'api.hotel'==Route::current()->getName() ||
                                    'api.hotels'==Route::current()->getName() ||
                                    'api.hotel.book'==Route::current()->getName() ||
                                    'front.hotel'==Route::current()->getName() ||
                                    'front.frontHotels.booking'==Route::current()->getName()
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

                            <li class="@if('front.package.index'==Route::current()->getName()) active @endif"><a
                                href="{{route('front.package.index')}}">@lang('generate.travels')</a>

                                @if(
                                    'front.package'==Route::current()->getName() ||
                                    'front.packages'==Route::current()->getName() ||
                                    'front.package.index'==Route::current()->getName() ||
                                    'front.package.book'==Route::current()->getName() ||
                                    'front.package.bookDetail'==Route::current()->getName()
                                    )
                                    <span class="active"></span>
                                @endif

                            </li>

                            

                            <li><a href="{{route('contact')}}">Contact</a>
                                @if(
                                    'contact'==Route::current()->getName()
                                )
                                    <span class="active"></span>
                                @endif
                            </li>

                            
                               
                            </li>

                            @if(Auth::guard("customer")->check())
                                <li class="dropdown navbar-c-items">  
                                    <a href="{{route('customer.login')}}" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown"
                                    aria-expanded="true">
                                        <i class="far fa-user-circle item-dark text-white"></i> {{auth()->guard("customer")->user()->firstName}} {{auth()->guard("customer")->user()->lastName}}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list hi">
                                        <li class="text-center mt-4">
                                            <h4 class="text-center bold"> Hi, {{auth()->guard("customer")->user()->firstName}} {{auth()->guard("customer")->user()->lastName}} </h4>
                                            <p class="fw-500">{{auth()->guard("customer")->user()->email}} </p>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="text-dark" href="{{route('customer.login')}}">
                                                <div class="pl-4"><i class="far fa-user-circle"></i>
                                                Gérer mon compte</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark" href="{{route('customer.reservationList')}}">
                                                <div class="pl-4"><i class="fa fa-briefcase"></i>
                                                    @lang('generate.reservations')</div>
                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="text-dark" href="{{route('customer.logout')}}">
                                                <div class="pl-4"><i class="fa fa-sign-out-alt mr-1" style="transform: rotate(-180deg);"></i>Déconnexion</div>
                                            </a>
                                        </li>
                                    </ul>

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

                        </ul>
                    </nav>
                </div>

        </div>

    </div>
    <!-- /Menu web -->


    <!-- Menu Mobile-->
    <div class="mobil d-md-none d-sm-flex d-flex justify-content-between">
        <div class="line-container">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>

        <div class="logo d-flex align-items-center justify-content-center">
            <a href="{{route('home')}}" title="">
                <img src="{{asset('img/logo-white.png')}}" class="logo-Lfen">
            </a>
        </div>

        <div class="contact">
            <div class="d-flex">
                <div class="border-left p-2">
                    <a href="mailto:{{$agency->email}}"><i class="fa fa-headset"></i></a>
                </div>
                <div class="border-left p-2">
                    @if(Auth::guard("customer")->check())
                        <a href="{{route('customer.login')}}"><i class="far fa-user-circle"></i></a>
                    @else
                        <a href="#" data-ui-class="a-zoom" data-toggle="modal"
                        data-target=".user-login"><i class="far fa-user-circle"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="menu-container">
        <nav class="nav-container">
            <ul class="mt-5 list-unstyled pl-4">
                <li class="@if('home'==Route::current()->getName()) active @endif">
                    <a href="{{route('home')}}">@lang("generate.home")</a>
                </li>
            
                <li class="@if(
                    'front.flights.home'==Route::current()->getName() ||
                    'front.flights.list'==Route::current()->getName() ||
                    'displayFare'==Route::current()->getName()
                    ) active @endif">
                <a href="{{route('front.flights.home')}}">{{ ucfirst(__("generate.flight")) }}@lang("generate.s")</a></li>

                <li class="@if(
                    'front.frontHotels'==Route::current()->getName() ||
                    'api.hotel'==Route::current()->getName() ||
                    'front.hotel'==Route::current()->getName() ||
                    'front.frontHotels.booking'==Route::current()->getName() ||
                    'api.hotel.book'==Route::current()->getName() ||
                    'api.hotels'==Route::current()->getName()
                ) active @endif"><a
                    href="{{route('front.frontHotels')}}">{{ ucfirst(__("generate.hotel")) }}@lang("generate.s")</a></li>

                <li class="">
                    <a href="">{{ ucfirst(__("generate.flight")) }}@lang("generate.s")
                        + {{ ucfirst(__("generate.hotel")) }}@lang("generate.s")</a>
                </li>
                
                <li class="@if(
                    'front.package.index'==Route::current()->getName() ||
                    'front.package'==Route::current()->getName() ||
                    'front.package.book'==Route::current()->getName() ||
                    'front.packages'==Route::current()->getName()
                ) active @endif"><a
                    href="{{route('front.package.index')}}">{{ ucfirst(__("generate.travel")) }}s @lang('generate.organized')</a></li>

                <li class="@if('front.omera.index'==Route::current()->getName()) active @endif">
                    <a href="{{route('front.omera.index')}}">Omra</a>
                </li>

                <li class="@if('contact'==Route::current()->getName()) active @endif">
                    <a href="{{route('contact')}}">{{ ucfirst(__("generate.contact")) }}</a>
                </li>
            </ul>
        </nav>
    </div>
    <!--/Menu Mobile-->

</header>
