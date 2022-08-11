@extends('base.front')
@section('style')
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <!-- animation -->
    <link rel='stylesheet' href='{{asset('assets/animatecss/animate.css')}}'/>
@endsection
@section('body')
    <header class=" position-relative">
    <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

        <div class="item">
            <img src="{{asset("img/omra-slide.jpg")}}" title=""/>
        </div>

    </div>

   <!--  <div class="container w-100 d-none d-md-block div-text-slider">
        <h1 class="text-center w-100">

            <span product="Flight" class=" span-text-slider" style="    ">

        <span id="first-catch-phrase" class="tab-flight first text-center span-text-slider-titre">FLASH INFOS VOYAGEURS : coronavirus / Covid-19 </span>
        <br>
        <span id="second-catch-phrase" class="tab-flight second span-text-slider-2">Informations – Annulations – Reports, cliquez ici &gt;&gt; </span>

            </span>
        </h1></div> -->
        <div class="container motor-search-web">
            <div class="row">
            <div class="w-100 col-md-9">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active p-0" id="nav-vol-tab" data-toggle="tab" href="#vol" role="tab"
                           aria-controls="nav-contact" aria-selected="false"></a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="vol" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <form action="{{route('front.packages')}}" method="get">
                        <div class="container py-3">
                        <div class="row">
                            <div class="form-group col-md-12 ">
                                <select id="type" class="form-control-new " name="type">
                                    @foreach($types as $type)
                                            @if($type->id==46 or $type->id==50)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endif
                                        @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-12 ">
                                <select id="destination" class="form-control-new " name="destination">
                                    @foreach($destinations as $destination)
                                        <option value="{{$destination["id"]}}">{{$destination["country"]}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 ">
                                <select id="Period" class="form-control-new " name="period">
                                    @foreach($periods as $period)
                                        <option value="{{$period}}">{{$period}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md ">
                                <button type="submit" class="btn bg-my btn-block rounded-0 " style="height: 50px">@lang('generate.searchFor')
                                </button>
                            </div>
                        </div>
                    </div>


                    </form>
                    </div>

                </div>
            </div>

            <h1 class="w-100 col-md-3 text-slider-right">

            <span product="" class="" style="    ">

        <p id="first-catch-phrase" class="first span-text-slider-titre">وَأَتِمُّوا الْحَجَّ وَالْعُمْرَةَ لِلَّهِ ۚ <br>
            برامج الحج و العمرة
لموسم : 1441 هـ 2020 م

</p><br>

        <button type="button" class="btn bg-my btn-block rounded-0 " data-pos="6" data-url="#" data-target="_self" style="
    background: #0000;    font-size: 15px;    border: 1px solid #fff;
">
@lang('generate.checkOutPrice')
</button>

            </span>
        </h1>

    </div>
        </div>
    </header>

    <!-- TOUR-ITEM -->
    <div class="container">

       <h1 class="text-muted my-3 text-center my-md-5">@lang('generate.entrustOrganization')</h1>
        <div class="row">
            @foreach($packages as $package)
                 <div class="col-6 col-md-4">
                        <div class="card pack animated bounce delay-5s mb-3 ">
                        <img src="{{config('services.pathImg').$package->picture}}" class="card-img-top" alt="...">
                        <div class="card-body">
                                <div class="d-md-flex d-block">
                                    <div class="mr-md-auto mr-0">
                                        <h4 class="title-card">{{str_limit($package->title, $limit = 25, $end = '...')}}</h4>

                                    <p class="card-text d-sm-block d-none">
                                        @php($depart=$package->tlTravels()->whereDate('DepartureDate','>=',Carbon\Carbon::now()->format('Y-m-d'))->orderBy('DepartureDate'))
                                        @if(!empty($depart->first()))
                                            @lang('generate.travel')
                                            @lang('generate.le') {{Carbon\Carbon::parse($depart->first()->DepartureDate)->format('d/m/Y')}}
                                        @endif
                                        @lang('generate.depart') @lang('generate.of') Casablanca
                                    </p>
                                </div>
                                <a href="{{route('front.package',['alias'=>$package->alias])}}"
                                   class="text-center price-card float-right float-sm-none c-prix-card">
                                    @lang('generate.fromP') <br>
                                    <strong>{{$package->startPrice*$currency}}{{$currencyText}}</strong> <br>@lang('generate.Perperson')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


    </div>
@endsection

@section('js')

    <script src="{{asset("assets/OwlCarousel/owl.carousel.min.js")}}"></script>
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
    <script>
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
    </script>
@endsection

