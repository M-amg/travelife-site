@php
    $slides=\App\models\page\TlSlider::all()->where('property', 'espace-client')->where('status', 1)->take(3);
    $agency=\App\models\agency\TlAgency::first();
@endphp

<header class="position-relative">
    @isset($slides)
        <div class="owl-carousel owl-theme owl-slid d-none d-md-block">
            @foreach($slides as $key => $slide)
                <div class="item">
                    <img class="item-{{$key}} img-fluid w-100" src="{{config('services.pathImg').$slide->picture}}" title="{{$slide->title}}" style="height: 380px;object-fit:cover;">

                    <div class="container w-100 d-none d-md-block div-text-slider" style="margin-top: 80px;">
                        <h1 class="text-center w-80 pt-4 bold" style="color: white">{{$slide->title}}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset

    <div class="container" style="margin-top: -70px; position: relative;  background-color: white; -webkit-box-shadow: 0 2px 4px 2px rgb(0 0 0 / 10%);
    box-shadow: 0 2px 4px 2px rgb(0 0 0 / 10%);">
        <div class="row">
            <div class="col-md">
                <div class="icon-usr" style="background: #fff;
                    display: inline-block;
                    height: 55.5px;
                    width: 111px;
                    border-top-left-radius: 111px;
                    border-top-right-radius: 111px;
                    margin: -48px 0 0 20px;
                    padding-bottom: 25px;">
                    <img title="Jumbo Niveau d’adhésion A" alt="Jumbo d’adhésion A" class="user-niveau-icone"  src="https://c.ekstatic.net/ecl/logos/skywards/membership-tier-skywards-blue-icon-w360x360.png?h=5xdR3D7ZQ5Uvr-9XWALiIA" style="margin: 7px; width: 97px; height: 97px;">
                </div>
                <div style="margin-top: 50px; margin-bottom: 25px;">
                    @lang('generate.welcome') @lang('generate.on') {{ ucwords(strtolower($agency->name))   }}
                    <h2 >{{ Auth::guard('customer')->user()->firstName }} {{ Auth::guard('customer')->user()->lastName }}</h2>
                </div>
            </div>

            <span class="vertical-line col-md-1" style="margin: 2rem 0; border-left: 1px solid #c7c7c7;"></span>
            <div class="col-md" style="margin-top: 30px">
                ID-@lang('generate.customer') : OMS{{ Auth::guard('customer')->user()->id }}<br>

                @lang('generate.member') @lang('generate.since') : {{ Carbon\Carbon::parse(Auth::guard('customer')->user()->created_at)->format('d/m/Y') }}
                <br>

                @lang('generate.fPoints') : 0 Pts
            </div>
        </div>
    </div>
</header>
