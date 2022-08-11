@extends('base.front')
@section('style')

    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.carousel.css')}}'/>
    <link rel='stylesheet' href='{{asset('assets/OwlCarousel/assets/owl.theme.default.min.css')}}'/>
    <!-- animation -->
    <link rel='stylesheet' href='{{asset('assets/animatecss/animate.css')}}'/>

    <link rel='stylesheet' href='{{asset('assets/daterangepicker/daterangepicker.css')}}'/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('body')


    @isset($slides)
        <header class="position-relative">
            <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

                @foreach($slides as $key => $slide)
                    <div class="item" style="max-height: 500px; height: 500px;
                        background-image: url({{config('services.pathImg').$slide->picture}});
                        background-size: cover; background-repeat: no-repeat; background-position: center;">

                        <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                            <h1 class="text-center w-80 pt-4 bold c-white">{{$slide->title}}</h1>
                        </div>
                    </div>
                @endforeach

            </div>
        </header>
    @endisset

<div class="thematics">


<section class="bg-w pt-5">
    <div class="container">
        <div class="title mt-5 mb-2 pt-5 text-center" style="font-size: 28px;font-weight: 600;">
            @lang('generate.worldUP') </div>
        <p class="text-center subtitle mb-5 pb-3">@lang('generate.discoverIns')</p>

        <div class="row">
            @foreach($thematics as $thematic)
                <div class="col-md-4 mb-5">
                    <a href="{{ route('front.cartes.thematic', ['id' => $thematic->id ]) }}">
                        <div class="thematic ml-md-0 mx-auto">
                            <img src="{{config('services.pathImg').$thematic->picture}}" style="position: relative;" class="img-fluid w-100">
                            <p style="word-break: break-word;">{{ $thematic->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <h3 id="formulaire" class="text-center my-5 pt-5 title-form-thematic">Décrivez votre projet de voyage à l'aide du formulaire ci-dessous, un conseiller spécialiste vous contactera dans les meilleurs délais pour en discuter.</h3>

        <form action="{{ route('contact.thematic') }}" method="post" class="formThematic">
            @csrf
            <input type="hidden" name="package" value="{{ $package }}">
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="fullname" placeholder="Nom et prénom" required
                            name="fullname">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="email" placeholder="Email" required
                            name="email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="tel" placeholder="Téléphone" required name="tel">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="adults" placeholder="Nombre d’Adulte(s)" name="adults" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="childs" placeholder="Nombre d’Enfant(s): moins de 12 ans" name="childs" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="duree" placeholder="Durée en Jours :" name="duree" required>
                    </div>
                </div>
                <div class="col-12">
                    <textarea class="form-control" id="description" rows="12"  name="description" required
                    placeholder="Décrivez votre projet : Notez ici toute information utile, vos envies pour ce voyage, une date de départ approximative, Catégorie d’hôtel, …"></textarea>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Demander un devis" class="btn bg-my text-white rounded-0 my-5"
                style="width: 280px;">
            </div>
        </form>

    </div>
</section>


</div>



@endsection

@section('js')

    <script src="{{asset("assets/OwlCarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/daterangepicker/moment.min.js")}}"></script>
    <script src="{{asset("assets/daterangepicker/daterangepicker.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
   <script>
        $('.owl-slid').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            smartSpeed: 450,
            autoplay: true,
            loop: true,
        });
        $('.owl-hotel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            items: 1,
            smartSpeed: 450,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })


        $(".submit").click(function () {
            $("#loading-wrapper").show();
            id = $(this).data("submit");
            $("#" + id).submit();
        });
    </script>


@endsection
