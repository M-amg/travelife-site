<section class="box-thematic mt-5 pb-5">
    <div class="container">

        <h2 class="h2 pt-5">Votre plus beau voyage démarre ici !</h2>
        <p class="subtitle">Le plaisir du voyage</p>

        <div class="row">
            <div class="col-lg-12 col-sm-2 wrapper">
                <div class="carousel d-flex justify-content-center">
                    @foreach(App\models\package\TlThematic::all() as $thematic)
                        <a href="{{ route('front.cartes.thematic', ['id' => $thematic->id ]) }}" style='outline:none;'>
                            <div class="d-flex flex-column justify-content-center align-items-center mr-1">
                                <img src="{{config('services.pathImg').$thematic->picture}}" style="position: relative;">
                                {{-- <span class="box-thematic__box-opaque"></span> --}}
                                <p class="box-thematic__text">{{ $thematic->title }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 wrapper">
                <div class="button bounce-to-right rounded" id="button-2">
                    <div id="slide"></div>
                    <a href="{{ route('front.cartes.index') }}">@lang('generate.urInspirations')</a>
                </div>
            </div>
        </div>

    </div>
</section>
