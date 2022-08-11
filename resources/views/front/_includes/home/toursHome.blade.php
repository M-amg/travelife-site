@php
    $x = 1;
    $z = 1;
    $total_items = count($packages);
@endphp
<section class="deal_section pb-5">

    <h2 class="h2 pt-5 text-center">Découvrez nos bons plans voyage</h2>
    <p class="subtitle pb-2 text-center">Ne ratez aucune offre !</p>

    <div class="container">
@foreach ($packages as $package)
    @php 
        $x = ($x > 3) ? 1 : $x;
    @endphp
    @if ($x == 1)
        <div class="row line1">
    @endif

    <div class="col-md-4 col-sm-12 my-2 px-2">
        <div class="bg-w border-radius-10px rounded-10px border-0">
            <a href="{{route('front.package',['alias'=>$package->alias])}}">
            <div class="card-line-1">
                <img class="img-fluid img-fluid-promo-hotel w-100" src="{{config('services.pathImg').$package->picture}}" alt="{{ $package->title }}">    
            </div>
            </a>
            <div class="infos">
                <h6 class="title text-black bold">{{ $package->title }}</h6>
                <div class="row">
                    <div class="col-md col-sm-12 mt-1 text-left">
                        @if($package->oldPrice)
                            @php
                                $tauxRemise = 100 * (($package->oldPrice - $package->startPrice) / $package->oldPrice);
                            @endphp
                            <h4 class="font-weight-bold main-color">- {{ floor($tauxRemise) }} %</h4>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <span class="font-weight-bold main-color">À Partir de</span>
                        <h6 class="price bold text-black">{{  number_format($package->startPrice*$currency, 0, ',', ' ') }} {{$currencyText}}</h6>
                    </div>
                </div>
                <div class="short_desc text-gray">{!! $package->voucher !!}</div>
                <div class="row justify-content-between align-items-center border-top px-0 py-3">
                    <div class="col-md justify-content-center">
                        <h6 class="text-black text-19px font-weight-semibold">
                            @php
                                $d1 = new DateTime($package["dep_date"]);
                                $d2 = new DateTime($package["arr_date"]);
                                $dure = $d1->diff($d2);
                            @endphp
                            1 J. 7 H. 21 Min.
                        </h6>
                    </div>
                    <div class="col-md justify-content-center">
                        <a href="{{route('front.package',['alias'=>$package->alias])}}" class="btn btn-booking">Voir le Deal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($x == 3 || ($z == $total_items))
        </div>
    @endif
    @php
        $x++;
        $z++;
    @endphp
@endforeach
</div>
</section>


