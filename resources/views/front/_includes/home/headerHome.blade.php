<!-- header -->
<header class=" position-relative">
    <div class="owl-carousel owl-theme owl-slid d-none d-md-block">
    @php($slides=\App\models\page\TlSlider::all()->where('property', 'home')->where('status', 1)->all())

        @foreach($slides as $key => $slide)


            <div class="item">
                <img class="item-{{$key}}" src="{{config('services.pathImg').$slide->picture}}" title="" style="height: 500px; "/>
                <div class="container w-100 d-none d-md-block div-text-slider">
                    <h1 class="text-center w-100">

          
                    </h1>
                </div>
            </div>
        @endforeach
    </div>


    <div class="container pt-1">
        <div class="w-100 col-12 p-headerHomer" style="margin-top: -390px;">
            <nav>
                <div class="nav nav-tabs newNavSearch px-4" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                    aria-controls="nav-profile" aria-selected="false"><span class="d-md-inline d-none">
                        <i class="fas fa-bed"></i>
                        Je réserve un @lang('generate.hotel')</span>
                    <span class="d-md-none"> @lang('generate.hotels')</span></a>

                    <a class="nav-item nav-link" id="nav-vol-tab" data-toggle="tab" href="#vol" role="tab"
                    aria-controls="nav-contact" aria-selected="false">
                    <span class="d-md-inline d-none">
                        <i class="fas fa-plane" style="transform: rotate(-50deg);"></i>Je réserve un billet d'avion</span>
                        <span class="d-md-none"> @lang('generate.vols')</span></a>

                    <a class="nav-item nav-link " id="nav-package-tab" data-toggle="tab" href="#package"
                    role="tab"
                    aria-controls="nav-home" aria-selected="true"><span class=" d-md-inline d-none">
                        <i class="fas fa-globe-europe"></i> Je réserve un @lang('generate.travel')</span>
                        <span class="d-md-none">@lang('generate.travels')</span></a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                
                <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="nav-home-tab">
                    

                    @include('front._includes.search.packageSearch')
                </div>

                <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="nav-profile-tab">

                        @include('front._includes.search.hotelSearch')
                   

                </div>
                <div class="tab-pane fade" id="vol" role="tabpanel" aria-labelledby="nav-contact-tab">
                   @include('front._includes.search.volSearch')
                </div>
                <div class="tab-pane fade" id="hotel-vol" role="tabpanel" aria-labelledby="nav-contact-tab">

                </div>
            </div>
        </div>
    </div>
</header>
<!--/header -->