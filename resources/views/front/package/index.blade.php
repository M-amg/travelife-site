@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <!-- animation -->
    <link rel='stylesheet' href='{{asset('assets/animatecss/animate.css')}}'/>
@endsection
@section('body')


    <header class="position-relative">
        <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

            <video
                loop="" autoplay="" muted="" height="500" 
                class="item" style="max-height: 500px; height: 500px;
                background-size: cover; background-repeat: no-repeat; background-position: center;">
                    <source src="{{ asset('video/video-slider.mp4') }}"
                            type="video/mp4">
            
                Sorry, your browser doesn't support embedded videos.
            </video>

        </div>
        
        <div class="container motor-search-web">
            <div class="row" style="padding-top: 22px">
                <div class="w-100 col-md-12">
                    <div class="tab-content" id="nav-tabContent" style="margin-top: 274px;">
                        <div class="tab-pane fade show active" id="package" role="tabpanel" aria-labelledby="nav-home-tab">
                            @include('front.package.partials._packageSearch')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- TOUR-ITEM -->
    <div class="mt-5 pt-2 box-voyages" style="width: 90%; margin:auto;">
        <h2 class="h2 pt-5 text-center">@lang('generate.TakeAdvantagePromotions')</h2>
        <p class="subtitle pb-2 text-center">@lang('generate.bestOffers')</p>
        <div class="row">
            @foreach($packages as $package)
                <div class="col-md-4 col-12  mb-5 px-0 card-package">
                        <a href="{{route('front.package',['alias'=>$package->alias])}}">
                            <img src="{{config('services.pathImg').$package->picture}}">
                        </a>
                    {{-- <div class="flex-grow-1  pb-0 d-flex flex-column">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-7 col-12">
                                <a href="{{route('front.package',['alias'=>$package->alias])}}">
                                    <h5 class="px-2 pt-2 title-package">
                                    @php($p = \App\models\package\TlPackageTranslation::where('tl_package_id', $package->id)->first())
                                        {{$p->title}}
                                    </h5>
                                </a>
                            </div>
                            <div class="col-md-5 col-12 text-right p-2 pr-5">
                                <span class="color-blue bold" style="font-size: 12px">à partir de </span>
                                <span class="c-txt-or font-weight-bold" style="font-size: 16px">
                                    {{number_format(($package->startPrice*$currency), 0, ',', ' ')}}
                                    <span style="font-size: 14px"> {{$currencyText}}</span>
                                </span>
                            </div>
                        </div>

                        @foreach($package->tlTravels as $travel)
                            @if (Carbon\Carbon::now() < Carbon\Carbon::parse($travel->DepartureDate))
                                @php($duree=Carbon\Carbon::parse($travel->first()->DepartureDate)->diffInDays(Carbon\Carbon::parse($travel->first()->arrivedDate)) + 1)
                                <p style="color: rgb(160, 194, 248)" class="p-2"> {{$duree}} Jours</p>
                                @break
                            @endif
                        @endforeach


                        <div class="fs-12 mb-auto px-2 pt-2 color-blue">
                            {!!  str_limit($package->shortDescription, $limit = 250, $end = '...') !!}
                        </div>
                        <div class="d-flex justify-content-end mr-3 btn-decouvrir">
                            <p class="btn bg-my rounded-0 mb-2">
                                <a href="{{route('front.package',['alias'=>$package->alias])}}" style="color: white">
                                    Découvrir</a>
                            </p>
                        </div>

                    </div> --}}
                </div>
                <div class="bg-white mt-5 d-block d-md-none position-relative">
                    <div class="">
                        <img src="{{config('services.pathImg').$package->picture}}" class="img-fluid">
                    </div>
                    {{-- <div class="px-2 pt-2 pb-0 d-flex title-phone">
                        <h5>{{str_limit($package->title, $limit = 27, $end = '...')}}</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="p-2"><h6>@lang('generate.fromP')
                                <strong>{{$package->startPrice*$currency}}{{$currencyText}}</strong></h6></div>
                        <div class="p-2"><a href="{{route('front.package',['alias'=>$package->alias])}}"
                                            class="btn bg-my btn-sm rounded-0">@lang('generate.continue')</a></div>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('js')

    <script src="{{asset("assets/OwlCarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("js/select2.min.js")}}"></script>
    <script src="{{asset('js/header-scroll.js')}}"></script>

    <script>

        $('.owl-slid').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
        });

    </script>

    {{-- <script>
        getDestinationOfType($("#type").val());

        $("#type").change(function () {
            getDestinationOfType($(this).val());
        })
        function getDestinationOfType(id) {
            $.ajax({
                type:'get',
                url:'{{route('ajax.getDestinationType')}}',
                data:{'id':id},
                success:function (data) {
                    $options=``;
                    $.each(data,function (key, val) {
                        $options+=`<option value="${val.id}">${val.name}</option>`
                    });
                    $("#destination").html($options)
                }
            })
        }
    </script> --}}

    
@endsection
