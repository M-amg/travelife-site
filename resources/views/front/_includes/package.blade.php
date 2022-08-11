<section class="box-monde-service container mt-5">
    <div class="row">
        <div class="col-lg-3 p-1">
            <div class="box-monde-service-item__content">
                <h2>@lang('generate.atUrservice')</h2>
            </div>
        </div>

        @foreach($packages->take(3) as $package)
            <div class="col-lg-3 p-1 card-package">
                <a href="{{route('front.package',['alias'=>$package->alias])}}">
                    <img src="{{config('services.pathImg').$package->picture}}" alt="{{ $package->title }}">
                    <div class="card-package-bg"></div>

                    <div class="card-package-price">
                        {{$package->startPrice*$currency}} <span >{{$currencyText}}</span>
                    </div>

                    <div class="card-package-content">
                        <h3>{{str_limit($package->title, $limit = 30, $end = '...')}}</h3>

                        <p class="d-sm-block">@lang('generate.depart') @lang('generate.of')
                            @foreach($cities as $city)
                                @if(!empty($package->departureCity))
                                    {{$package->departureCity==$city->id?$city->name:"" }}
                                @endif
                            @endforeach

                            @php($depart=$package->tlTravels()->whereDate('DepartureDate','>=',Carbon\Carbon::now()->format('Y-m-d'))->orderBy('DepartureDate'))
                            @if(!empty($depart->first()))
                                @lang('generate.in') {{Carbon\Carbon::parse($depart->first()->DepartureDate)->format('F')}}
                            @endif
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
