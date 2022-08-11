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

    @php
     setlocale(LC_TIME, 'fr_FR.utf8','fra');
    @endphp

    @isset($slides)
        <header class="position-relative">
            <div class="owl-carousel owl-theme owl-slid d-none d-md-block">

                @foreach($slides as $key => $slide)
                    <div class="item" style="max-height: 500px; height: 500px;
                        background-image: url({{config('services.pathImg').$slide->picture}});
                        background-size: cover; background-repeat: no-repeat; background-position: center;">

                        <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                            <h1 class="text-center w-80 pt-4 bold c-white mt-5">{{$slide->title}}</h1>
                        </div>
                    </div>
                @endforeach

            </div>
        </header>
    @endisset

<div class="thematics">


<section class="bg-w pt-5">
    <div class="container">
        <p class="text-center color-dore title mt-5 pb-4">@lang('generate.ourArticls')</p>

        <div class="row">
            @foreach(App\models\page\TlBlog::orderBy('orderList')->get() as $article)
                <div class="col-md-3 col-12 mb-5 p-3 blog">
                    <a href="{{ route('front.blog.article', ['id' => $article->id ]) }}">
                        <img src="{{config('services.pathImg').$article->img}}" class="img-fluid w-100">
                    </a>

                    @php
                        $dateCreation = Carbon\Carbon::parse($article->created_at);
                    @endphp

                    <p class="mt-3 color-blue">
                        {{ $dateCreation->formatLocalized('%d') }}

                        @lang('generate.'.$dateCreation->formatLocalized('%B'))

                        {{ $dateCreation->formatLocalized('%Y') }}
                    </p>

                    <a href="{{ route('front.blog.article', ['id' => $article->id ]) }}">
                        <p class="fs-15 mt-3 bold color-blue">{{ $article->title }}</p>
                    </a>

                    <div class="color-blue fs-12">
                        {!! str_limit($article->description, $limit = 250, $end = '...') !!}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


{{-- @include('front.thematic._raisons-de-choisir') --}}

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
