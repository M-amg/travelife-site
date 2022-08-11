@extends('base.front')
@section('style')


@endsection


@section('body')


    <div style="background: #f4f3ee; padding-bottom: 30px; margin-top:150px">
        <div class="container pt-xs-0">
            <div class="row mt-5" >
                <div class="col-12 col-md-8">
                    <div style="height: 488px; background-color: white; margin-top: 24px">

                        <h1 class="title-hotel mt-4" style="font-size: 22px; padding-top: 28px;
                    padding-left: 14px;">
                            {{ ucwords(strtolower($package->title)) }}
                        </h1>
                        <div class="container p-4">
                            <div class="row">

                                @if($package->tlPackagePhotos->count() > 0)
                                    <div class="col-md-3 col-3 pr-2 d-sm-block d-none">

                                        @foreach($package->tlPackagePhotos->take(3)  as $key => $photo)
                                            @if ($loop->iteration >= 2)
                                                <img src="{{config('services.pathImg').$photo->path}}" alt="" class="img-left">
                                            @endif
                                        @endforeach

                                        @foreach($package->tlPackagePhotos->take(4)  as $key => $photo)
                                            @if ($loop->last)
                                                <div>
                                                    <img src="{{config('services.pathImg').$photo->path}}" alt="" class="img-left">
                                                    <strong class="count_photos">+ {{ ($package->tlPackagePhotos->count()) - 4 }} photos</strong>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif


                                <div class="col-md-9 col-12 w-100 m-0 p-0" style="height: 375px; background: #e7e7e7; background-image: url({{ asset('img/image-placeholder-350x350.png') }}); background-position: center; background-repeat: no-repeat;">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block img_slider"
                                                     @if(!empty($package->tlPackagePhotos->first()->path))
                                                     src="{{ config('services.pathImg').$package->tlPackagePhotos->first()->path }}"@else src="" @endif
                                                     alt="">
                                            </div>

                                            @if($package->tlPackagePhotos->count() > 0)
                                                @foreach($package->tlPackagePhotos as $key => $photo)
                                                    <div class="carousel-item ">
                                                        <img class="d-block img_slider" src="{{config('services.pathImg').$photo->path}}" alt="">
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="bg-control">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </span>
                                            <span class="sr-only">@lang('generate.previous')</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="bg-control">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </span>
                                            <span class="sr-only">@lang('generate.next')</span>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4" style="padding-top: 24px;">


                    <div class="detail-hotel__price">
                        <p style="padding-bottom: 0; margin-bottom: 0;">@lang('generate.fromP')</p>

                        <p class="font-weight-bold; margin-bottom: 0rem;" >
                        <span style="font-weight: bold; font-size: 22px">

                            {{number_format(($package->startPrice), 0, ',', ' ')}}
                            {{$currencyText}}

                        </span>
                            <span>@lang('generate.Perperson')</span>
                        </p>
                    </div>
                    <div class="text-center pt-5" style="background-color: #e5e5e5; height: 388px;">
                        <a href="{{ route('front.cartes.thematicDevis') }}" class="btn bg-my text-white rounded-0 mt-2 mb-4 mt-5" style="width: 280px;">Demander un devis</a>
                        <p class="color-blue fs-20 pt-3">@lang('generate.orcontact') <br> @lang('generate.specialistes') @lang('generate.at') <br>
                            <span class="mt-3 bold">05 22 94 28 28</span></p>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <div class="container mb-5">
        @include('front.thematic._descriptif-a-la-carte')
    </div>

    {{-- <div class="thematics mt-5">
        @include('front.thematic._raisons-de-choisir')
    </div> --}}




@endsection

@section('js')

    <script>

        $(document).ready(function(){
            let scrollTop = 0;
            let lastScrollTop = 0;
            $('.web').addClass('bg-header-blue');
            $(document).scroll(function(event){
                let scrolltop = $(this).scrollTop();
                if (scrolltop > lastScrollTop){

                    $('.web').addClass('bg-header-scroll').removeClass('bg-header-blue');
                    $('.web').css({'boxShadow': '0 0 20px rgba(0, 0, 0, .1)'});

                    $('.web').css({'transition': '.2s'});
                    $('#logo-jmb').css({'width': '95px'});
                    $('#logo-jmb').css({'height': '95px'});
                    $('#logo-jmb').css({'transition': '.2s'});
                } else {
                    /*au début*/
                    $('.web').addClass('bg-header-blue').removeClass('bg-header-scroll');
                    $('.web').css({'boxShadow': 'none'});
                    $('#logo-jmb').css({'width': '120px'});
                    $('#logo-jmb').css({'height': '120px'});
                }
            });
        });

    </script>

@endsection
