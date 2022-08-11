<section class="mt-3  pb-5 box-voyages">
    <div class="container mb-5">
        {{-- <h2 class="h2 pt-5 text-center">@lang('generate.TakeAdvantagePromotions')</h2>
        <p class="subtitle pb-2 text-center">@lang('generate.bestOffers')</p> --}}
        <div class="row">
             <!--Filter-->
             <div class="col-12 col-md-3">
                <div class="p-3 mx-3 my-5">
                    <form action="{{route('front.packages')}}" method="get" id="PackageForm">
                        <div class="border-bottom border-darck mb-3 py-3">
                            <h3 class="title-search">{{ ucfirst(__('generate.categorie')) }}</h3>
                            @foreach($categories as $key =>$categorie)
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" value="{{$categorie->id}}" name="category[{{$key}}]"
                                           @if(request()->input("category.$key")==$categorie->id) checked
                                           @elseif(request()->input("category")==$categorie->id) checked
                                           @endif class="custom-control-input" id="cate{{$key}}">
                                    <label class="custom-control-label" for="cate{{$key}}">{{$categorie->title}}</label>
                                </div>

                            @endforeach
                        </div>
                        @if($thematics->first())
                            <div class="border-bottom border-darck mb-3 py-3">
                                <h3 class="title-search">{{ ucfirst(__('generate.thematic')) }}</h3>
                                @foreach($thematics as $key =>$thematic)
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" value="{{$thematic->id}}" name="thematic[{{$key}}]"
                                            @if(request()->input("thematic.$key")==$thematic->id) checked
                                            @endif class="custom-control-input" id="them{{$key}}">
                                        <label class="custom-control-label" for="them{{$key}}">{{$thematic->title}}</label>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="border-bottom border-darck mb-3 py-3">
                            <h3 class="title-search">@lang("generate.budget")</h3>
                            <input type="text" id="price-range" name="my_range" value=""/>
                            <input type="hidden" name="minimum_price" id="minimum_price">
                            <input type="hidden" name="maximum_price" id="maximum_price">

                        </div>
                        <div class="border-bottom border-darck mb-3 py-3">
                            <h3 class="title-search">@lang("generate.traveltime")</h3>
                            <input type="text" id="travel-days" name="my_range" value=""/>
                            <input type="hidden" name="minDays" id="minDays">
                            <input type="hidden" name="maxDays" id="maxDays">
                        </div>
                        <div class="mb-3 py-3">
                            <h3 class="title-search">@lang("generate.meal")</h3>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" name="pension[0]" value="AI"
                                       @if(isset(request()->get('pension')[0])) @if(request()->get('pension')[0]=="AI")
                                       checked @endif @endif class="custom-control-input" id="r1">
                                <label class="custom-control-label" for="r1">@lang("generate.AllInclusive")</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="r2"
                                       @if(isset(request()->get('pension')[1])) @if(request()->get('pension')[1]=="FB")
                                       checked @endif @endif  name="pension[1]" value="FB">
                                <label class="custom-control-label" for="r2">@lang("generate.Fullboard")</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="r3"
                                       @if(isset(request()->get('pension')[2])) @if(request()->get('pension')[2]=="HB")
                                       checked @endif @endif value="HB" name="pension[2]">
                                <label class="custom-control-label" for="r3">@lang("generate.Halfpension")</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="r4"
                                       @if(isset(request()->get('pension')[3])) @if(request()->get('pension')[3]=="BB")
                                       checked @endif @endif value="BB" name="pension[3]">

                                <label class="custom-control-label" for="r4">@lang("generate.Breakfast")</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="r5"
                                       @if(isset(request()->get('pension')[4])) @if(request()->get('pension')[4]=="RO")
                                       checked @endif @endif name="pension[4]" value="RO">

                                <label class="custom-control-label" for="r5">@lang("generate.accommodationOnly")</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <section class="box-monde-service mt-5">
                        @foreach($packages as $package)
                            <div class="bg-white mb-5 px-0 d-none d-md-flex" style="border: none !important;">
                                <div class="position-relative">
                                    @if($package->oldPrice*$currency > 0)
                                        <div class="tagPromo">Promo</div>
                                    @endif
                                    {{-- <img src="{{config('services.pathImg').$package->picture}}"
                                        style="width: 290px; height: 172px"> --}}
                                    <img src="{{config('services.pathImg').$package->tlPackagePhotos->random()->path}}"
                                        style="width: 290px; height: 172px; object-fit:cover;">
                                </div>
                                <div class="flex-grow-1  pb-0 d-flex flex-column">
                                    <h5 class="px-2 pt-2" style="text-transform: capitalize ;">{{$package->title}}</h5>
                                    <p class="fs-13 mb-auto px-2 pt-2" style="color: #656566;">
                                    {!!  str_limit($package->shortDescription, $limit = 250, $end = '...') !!}
                                    </p>
                                    <p class="px-2 py-1 mb-1">
                                        @foreach($package->tlThematics as $thematic)
                                            <span class="text-dark badge badge-warning p-2">{{$thematic->title}}</span>
                                        @endforeach
                                    </p>
                                </div>
                                <div class="d-flex flex-column align-items-end col-md-3 pr-2">
                                    <div class="mt-4"><a href="{{route('front.package',['alias'=>$package->alias])}}" target="_blank"
                                        class="btn-cet-hotel">Voir cet offre</a></div>

                                    <div class="p-0 align-items-end" style="display: table-cell; text-align: end; position: absolute; bottom: 10px;">
                                        <p class="mb-0 mx-2" style="font-size: 12px">à partir de</p>
                                        <h2 class="c-txt-or pt-0 bold fs-22 px-0">
                                            @if($package->oldPrice*$currency > 0)
                                                <span style="font-size: 10px; color: red;"><strike> {{$package->oldPrice*$currency}} 
                                                    {{$currencyText}}</strike></span> 
                                            @endif
                                            {{$package->startPrice*$currency}} 
                                            <span style="font-size: 14px">{{$currencyText}}</span> 
                                        </h2>
                                    </div>

                                </div>

                            </div>
                            <div class="bg-white mt-5 d-block d-md-none position-relative">
                                <div class="">
                                    <img src="{{config('services.pathImg').$package->picture}}" class="img-fluid w-100 h-100"
                                    style="max-height: 172px!important;object-fit: cover;">
                                </div>
                                <div class="px-2 pt-2 pb-0 d-flex title-phone" style="bottom: 0px!important;">
                                    <h5 class="box-hotel__title">{{str_limit($package->title, $limit = 27, $end = '...')}}</h5>
                                </div>
                            </div>

                            <div class="bg-white d-flex justify-content-between d-block d-md-none">
                                <div class="p-2 mt-2">
                                    <h6 class="fs-12">à partir de
                                        <strong style="color: #28356c; font-size: 18px;">
                                            {{$package->startPrice*$currency}} {{$currencyText}}
                                        </strong>
                                    </h6>
                                </div>
                                <div class="p-2 mt-2">
                                    <a href="{{route('front.package',['alias'=>$package->alias])}}"
                                        class="btn bg-my btn-sm rounded-0">Voir l'offre</a>
                                </div>
                            </div>
                        @endforeach
                </section>
            </div>
        </div>
    </div>
</section>