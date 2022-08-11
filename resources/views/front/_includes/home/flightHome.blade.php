
<div class="row">
    <div class="col-12 ">
        {{-- <h1 class="text-muted my-3 text-left my-md-4" style="font-size: 21px; font-weight: 600">Commencez votre planification de vol ici</h1> --}}
        <div class="row">

            
            @foreach($flights as $flight)

             <div class="col-12 col-md-4">
                <span style="font-weight: 600;
    font-size: 16px;
    line-height: 24px;
    margin: 0;">{{$flight->title}}</span>
                @foreach($flight->tlLagPromos as $key => $lagPromo)

                    <a class="link-flight-promo" href="{{asset('img/new-logo-noir.png')}}/flights?{{$lagPromo->url}}" data-type="cars">
                    <span class="pt-1 pb-1"><img src="https://www.gstatic.com/flights/airline_logos/70px/{{$lagPromo->code}}.png" style=" background-color: #fff; padding: 5px; width: 30px"> {{$lagPromo->title}} ({{$lagPromo->type}})</span>
                    <span class="bold">@lang('generate.dès') {{$lagPromo->price*$currency}}{{$currencyText}}*</span>
                    </a>
                @endforeach

        </div>


            @endforeach
        <!--  <div class="col-12 col-md-6">

<img src="{{asset('img/pub-vols.jpg')}}" style="max-width: 100%">


         </div> -->
        </div>
    </div>
</div>
<br><br><br>



<!-- Contien -->
