@if(isset($hotelLocal['list']))
    @foreach(array_slice($hotelLocal['list'], 0, 10) as $key => $hotel)

        <form method="get" action="{{route('front.hotel',['name'=>$hotel['name']])}}">
            <input type="hidden" name="id" value="{{$hotel['id']}}">
            <input type="hidden" name="chickIn" value="{{$hotel['chickIn']}}">
            <input type="hidden" name="chickOut" value="{{$hotel['chickOut']}}">
            <input type="hidden" name="room" value="{{sizeof($hotel['roomsSearch'])}}">
            <input type="hidden" name="room[{{$key}}][adults]" value="{{$hotel['roomsSearch'][0]['adults']}}">
            <input type="hidden" name="room[{{$key}}][children]" value="{{$hotel['roomsSearch'][0]['children']}}">
            <div class="bg-white mt-5 d-none d-md-flex" style="border: none !important;">
                <div class="position-relative">
                    <div style="background: #2fed0cb0;color: #fff;position: absolute;padding: 5px 20px;border-radius: 0 3px 3px 0;margin: 10px 0;">
                        @lang('generate.recommended')
                    </div>
                    <img src="{{config('services.pathImg').$hotel['img']}}" alt="" style="width: 290px; height: 172px">
                </div>
                <div class="flex-grow-1 pb-0 d-flex flex-column">
                    <h5 class="px-2 pt-2">
                        <a href="#"
                           target="_blank" class="title-hotel">{{$hotel['name'] ?? 'Hotel Name'}}</a>
                    </h5>
                    <p class="fs-12 mb-2 px-2" style="color:#cfaa3d">
                        @for($i=0; $i < 5; $i++)
                            @if($i < $hotel['category'])
                                <i class="fas fa-star text-warning"></i>
                            @else
                                <i class="far fa-star-o text-warning"></i>
                            @endif
                        @endfor
                    </p>
                    <p class="fs-12 mb-2 px-2 " style="color: #2e7ead; font-weight: bold;">
                        <i class="fas fa-map-marker-alt"></i> <span>{{$hotel['address']}}</span>
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <button type="submit" class="btn-cet-hotel">@lang('generate.seeHotel')</button>
                        </div>
                        <div class="col-md-6">
                            <h2 class="c-txt-or font-weight-bold float-right mr-4">
                                {{$hotel['price']}} {{ $currencyText }} <br>
                                <span class="float-right mr-4"
                                      style="font-size: 10px; color: #28356c;">@lang('generate.for') {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}}
                                      {{ lcfirst(trans('generate.nights')) }}</span>

                            </h2>


                        </div>
                    </div>


                </div>
            </div>

            <div class="bg-white mt-5 d-block d-md-none position-relative">
                <div class="">
                    <img src="{{config('services.pathImg').$hotel['img']}}" class="img-fluid"
                         style="width:328px; height: 172px;">
                </div>
                <div class="px-2 pt-2 pb-0 d-flex title-phone">
                    <h5>{{$hotel['name'] ?? 'Hotel Name'}}</h5>
                    <small>
                        @for($i=0; $i < 5; $i++)
                            @if($i < $hotel['category'])
                                <i class="fas fa-star text-warning"></i>
                            @else
                                <i class="far fa-star-o text-warning"></i>
                            @endif
                        @endfor
                    </small>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="p-2"><h6>@lang('generate.fromP')
                            <strong> {{$hotel['price']}} {{ $currencyText }}</strong>
                        </h6></div>
                    <div class="p-2">
                        <button type="submit" class="btn bg-my btn-sm rounded-0">@lang('generate.seeHotel')</button>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endif


