@extends('base.front')

@section('body')
    @php $agency=\App\models\agency\TlAgency::all()->first(); @endphp

    <header class="position-relative">
        <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

            @php($slides=\App\models\page\TlSlider::all()->where('property', 'pub')->where('status', 1)->take(3))

            @isset($slides)
                @foreach($slides as $key => $slide)
                    <div class="item">
                        <img class="item-{{$key}} img-fluid w-100" src="{{config('services.pathImg').$slide->picture}}" title=""
                        style="height: 380px;object-fit:cover;"/>
                        <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                            <h1 class="text-center w-80 pt-4" style="color: white; margin-top: 10px; font-weight: bold;">{{$slide->title}}</h1>
                        </div>
                    </div>
                @endforeach
            @endisset

        </div>
    </header>

<style>
    #agences .title{
        font-size: 28px;
        font-weight: 600;
    }
    #agences .title span{
        color: #db1018
    }
    #agences .subtitle, #agences .tel .subtitle{
        font-size: 17px;
        font-weight: 500;
    }
    #agences .infos{
        color: #666; 
        font-size: 12px;
        font-weight: 400;
    }
    #agences .tel .infos{
        color: #cd0f16;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 1px;
    }
    #agences img{
        height: 90px; 
        width: 100px;
        object-fit:cover;
    }
    #agences hr{
        border-top: 1px solid #db1018;
        width: 237px;
        position: relative;
        right: 127px;
    }
    @media(max-width: 420px) {
        #agences hr {
            right: 25px;
        }
        #agences img {
            display: none;
        }
    }
    @media(max-width: 320px) {
        #agences hr {
            right: 5px;
        }

    }

</style>

<div id="agences" class="container">
    <div style="" class="title my-5 pt-5">
        Bienvenue chez votre agence de <span>voyages {{$agency->name}} !</span> <br>
        Découvrez le monde <span>en bonne compagnie.</span> 
    </div>
    <div class="row mt-3">

        @foreach($branchs as $branch)
            <div class="col-md-6 col-12">
                <div class="box-shadow pt-4 m-2 p-3">
                    <p class="fs-22 mb-0">{{$branch->name}}</p>
                    <hr>
                    <div class="row p-2">
                        <div class="col-md-4 col-6">
                            <p class="subtitle">Adresse</p>
                            <p class="infos">{{$branch->address}}</p>
                        </div>
                        <div class="col-md-5 col-6">
                            <p class="subtitle">Horaires</p>
                            <p class="infos"> Lundi au Vendredi : <br> De 8h30 à 12h30 <br> 
                                <span style="padding-left: 15px;">14h30 à 18h30</span> </p>
                        </div>
                        <div class="col-3 text-right pr-5">
                            <img src="{{config('services.pathImg').$branch->logo}}" alt="{{$branch->name}}">
                        </div>
                    </div>
                    <div class="tel">
                        <p class="subtitle">Tél.</p>
                        <p class="infos"> {{$branch->gsm}} <br> {{$branch->phone}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


