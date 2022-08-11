@extends('base.front')
@section('style')


@endsection


@section('body')

@php
    $agency=\App\models\agency\TlAgency::all()->first();

@endphp


<div class="thematics">
    @if (!empty($thematic))
    <div class="item" style="max-height: 500px; height: 500px;
    background-image: url({{config('services.pathImg').$thematic->cover}});
     background-size: cover; background-repeat: no-repeat; background-position: center;">

            <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 120px;">
                <h1 class="text-center w-80 pt-4 bold c-white">{{$thematic->title}}</h1>
            </div>
        </div>

        <section class="bg-w pt-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h1 class="color-dore bold text-uppercase text-right">{{$thematic->subtitle}}</h1>
                    </div>
                    <div class="col-md-6 col-12 pl-5">
                        <p class="color-blue">{{$thematic->description}}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-w pt-5">
            <div class="container">
                <p class="text-center color-blue fs-20 bold mt-5 pb-5">@lang('generate.travelIdeas') {{$thematic->title}}</p>

                <div class="row mt-5">
                    @foreach( $thematic->tlPackages as $package)
                        @if ($package->isAlaCarte == 1)

                            @foreach( $package->tlTravels as $travel)
                                @php($dateDepart=Carbon\Carbon::parse($travel->DepartureDate))
                                @php($dateReturn=Carbon\Carbon::parse($travel->arrivedDate))
                            @endforeach

                            <div class="col-md-4 mb-5">
                                <a href="{{ route('front.cartes.inspiration', ['id' => $package->id ]) }}">

                                    <img src="{{config('services.pathImg').$package->tlPackagePhotos->random()->path}}" style="position: relative; width: 280px; height: 280px" class="img-fluid">

                                </a>

                                <p class="box-thematic__text fs-16 mt-3 bold" style="max-width: 280px">
                                    <a href="{{ route('front.cartes.inspiration', ['id' => $package->id ]) }}" class="color-blue">
                                        {{ $package->title }}</a>
                                </p>

                                @if (!empty($dateDepart))
                                    <p class="color-blue mb-1 pb-1">
                                        {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn)+1:''}}
                                        {{str_plural('jour', $dateDepart->diffInDays($dateReturn)+1)}}
                                        / {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}}
                                        {{str_plural('nuit', $dateDepart->diffInDays($dateReturn))}}
                                    </p>
                                @endif

                                <p class="color-blue mt-0 pt-0">@lang('generate.fromP') <span class="bold">
                                    {{number_format(($package->startPrice), 0, ',', ' ')}}
                                    {{$currencyText}}</span> </p>


                                <a href="{{ route('front.cartes.inspiration', ['id' => $package->id ]) }}" class="btn bg-my text-white rounded-0 my-2" style="width: 280px;">Découvrir ce voyage</a>

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="container p-5">
        <div class="row">
            <div class="col-md-3 col-12">
                <img src="{{asset("img/conseil.jpg")}}" alt="" class="img-fluid ml-5" style="width: 160px; height: 160px; border-radius: 50%; background-size: cover;">
            </div>
            <div class="col-md-5 col-12 text-center">
                <p class="color-blue bold" style="font-size: 26px">@lang('generate.needAdvice') ? </p>
                <a href="{{ route('front.cartes.index') }}#formulaire" class="btn bg-my text-white rounded-0" style="width: 280px;">@lang('generate.askfordevis')</a>
                <p class="color-blue fs-20 pt-3">@lang('generate.contactus') <br>{{$agency->phone}}</p>
            </div>
            <div class="col-md-4 col-12">
                <p class="bold mb-2">Envie d'évasion? Vous souhaitez planifier vos congés ou partir en vacances?</p>
                <p>Faites nous part de vos envies de voyage afin qu'un de nos spécialistes puisse vous conseiller.</p>
            </div>
        </div>
    </section>

</div>



@endsection
