

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


                            <div class="col-md-9 col-12 w-100 m-0 p-0">
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
                            {{ number_format($package->startPrice*$currency, 0, ',', ' ') }}
                            {{$currencyText}}</span>
                        <span>@lang('generate.Perperson')</span>
                    </p>
                </div>
                <div class="detail-hotel__adress" style="height: 388px">
                    <iframe frameborder="0" style="border:0;width: 100%;height: 300px"
                            src="https://maps.google.com/maps?q={{ $package->maps }}&hl=es;z=14&amp;output=embed"
                            allowfullscreen></iframe>
                </div>

            </div>

        </div>
    </div>
</div>
