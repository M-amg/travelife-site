@php
    $x = 1;
    $z = 1;
    $total_items = count($PromoHotels);
@endphp
<section class="deal_section">

    <h2 class="h2 pt-5 text-center">Découvrez nos offres du moment</h2>
    <p class="subtitle pb-2 text-center">Meilleurs offres du moment</p>

    <div class="container">
@foreach ($PromoHotels as $PromoHotel)
    @php 
        $x = ($x > 3) ? 1 : $x;
    @endphp
    @if ($x == 1)
        <div class="row line1">
    @endif

    <div class="col-md-4 col-sm-12 my-2 px-2">
        <div class="bg-w border-radius-10px rounded-10px border-0">
            @if($PromoHotel['startDate'] == null && $PromoHotel['endDate'] == null  ||  $PromoHotel['endDate'] < date("Y-m-d H:i:s"))
                <a href="{{route('front.hotel',['name'=>$PromoHotel['title'],"id"=>$PromoHotel['tl_hotel_id'],"chickIn"=>date('d/m/Y', strtotime('+1 day')),"chickOut"=>date('d/m/Y', strtotime('+2 day')),"room"=>1,"room[0][adults]"=>2,"room[0][children]"=>0])}}" target="_blank">
            @else
                <a href="{{route('front.hotel',['name'=>$PromoHotel['title'],"id"=>$PromoHotel['tl_hotel_id'],"chickIn"=>date('d/m/Y', strtotime($PromoHotel['startDate'])),"chickOut"=>date('d/m/Y', strtotime($PromoHotel['endDate'])),"room"=>1,"room[0][adults]"=>2,"room[0][children]"=>0])}}" target="_blank">
            @endif
            <div class="card-line-1">
                <input type="hidden" name="id" value="{{$PromoHotel['id']}}">
                <input type="hidden" name="chickIn" value="{{date('Y-m-d', strtotime('+1 day'))}}">
                <input type="hidden" name="chickOut" value="{{date('Y-m-d', strtotime('+2 day'))}}">
                <input type="hidden" name="room" value="1">
                <input type="hidden" name="rooms[{{$x-1}}][adults]" value="2">
                <input type="hidden" name="rooms[{{$x-1}}][children]" value="0">
                <img class="img-fluid img-fluid-promo-hotel w-100" src="{{config('services.pathImg').$PromoHotel['img']}}" alt="{{ $PromoHotel['title'] }}" />    
            </div>
            </a>
            <div class="infos">
                <h6 class="title text-black bold">{{ $PromoHotel['title'] }}</h6>
                <div class="row">
                    <div class="col-md col-sm-12 mt-1 text-left">
                        @if($PromoHotel->old_price)
                            @php
                                $tauxRemise = 100 * (($PromoHotel->old_price - $PromoHotel->price) / $PromoHotel->old_price);
                            @endphp
                            <h4 class="font-weight-bold main-color">- {{ floor($tauxRemise) }} %</h4>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <span class="font-weight-bold main-color">À Partir de</span>
                        <h6 class="price bold text-black">{{ $PromoHotel['price'] }} {{ $currencyText }}</h6>
                    </div>
                </div>
                <p class="short_desc text-gray">{{ $PromoHotel['short_desc'] }}</p>
                <div class="row justify-content-between align-items-center border-top px-0 py-3">
                    <div class="col-md justify-content-center">
                        <h6 class="text-black text-19px font-weight-semibold">1 J. 7 H. 21 Min.</h6>
                    </div>
                    <div class="col-md justify-content-center">
                        <a class="btn btn-booking">Voir le Deal</a>
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


