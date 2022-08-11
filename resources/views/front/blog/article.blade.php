@extends('base.front')
@section('style')


@endsection


@section('body')

@php
$agency=\App\models\agency\TlAgency::all()->first();
@endphp

<div class="thematics">
    @if (!empty($article))
        <div class="item" style="max-height: 500px; height: 500px;
        background-image: url({{config('services.pathImg').$article->img}});
        background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 120px;">
                <h1 class="text-center w-80 pt-4 bold c-white">{{$article->title}}</h1>
            </div>
        </div>

        <section class="bg-w pt-5 mb-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8 col-12 pl-5 mx-auto color-blue fs-16 pb-5" style="text-align: justify;">
                        {!! $article->description !!}
                    </div>
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
                <a href="{{ route('front.cartes.thematicDevis') }}" class="btn bg-my text-white rounded-0" style="width: 280px;">@lang('generate.askfordevis')</a>
                <p class="color-blue fs-20 pt-3">@lang('generate.contactus') <br> {{$agency->phone}}</p>
            </div>
            <div class="col-md-4 col-12">
                <p class="color-blue">@lang('generate.thisIdeas') <br>
                    @lang('generate.demand')
                </p>
            </div>
        </div>
    </section>

</div>



@endsection
