<div class="flt p-3 mt-0 mt-md-5">
    <span class="filter open-call d-md-none d-block mt-3">
        <i class="fas fa-bars mr-1"></i><span class="title">Filtres</span>
    </span>
    <div id="wrap">
        <div class="content d-md-block d-none">
            <div class="p-3">

                <div class="mb-3 py-3">
                    <input type="text" class="form-control mx-auto" id="hotelNameInput"
                           aria-describedby="hotelNameInput" placeholder="Recherche par nom d'hôtel"
                           autocomplete="off">
                </div>
                <div class="mb-3 py-3 alignMobil">
                    <h3 class="title-search">@lang('generate.nbrStars')</h3>

                    @for($j=5; $j > 1; $j--)
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input"
                                   checked name="starFilter" data-stars="{{$j}}"
                                   id="star-{{$j}}">
                            <label class="custom-control-label" for="star-{{$j}}">
                                @for($i=0; $i < 5; $i++)
                                    @if($i < $j)
                                        <i class="fas fa-star" style="color: #cfaa3d;"></i>
                                    @endif
                                @endfor
                            </label>
                        </div>
                    @endfor

                </div>
                <div class="mb-3 py-3 alignMobil" style="color: #28356c;">
                    <h3 class="title-search">@lang('generate.ForfaitRepas')</h3>
                    @php($boards=[ "RO"=>"accommodationOnly","BB"=>"Breakfast","HB"=>"Halfpension","FB"=>"Fullboard","AI"=>"AllInclusive"])

                    @foreach($boards as $key=>$board)
                        <div class="custom-control custom-checkbox mr-sm-2">

                            <input type="checkbox" id="check-{{$key}}" checked data-board="{{$key}}" name="pension"
                                   class="custom-control-input"/>
                            <label class="custom-control-label" for="check-{{$key}}">{{ __('generate.'.$board) }}
                            </label>
                        </div>
                    @endforeach

                </div>
                <div class="mb-3 py-3 alignMobil">
                    <h4 class="title-search">@lang('generate.conditionOfCancel')</h4>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="gratuite" type="checkbox"
                                name="cancelFilter" data-cancels="Annulation gratuite" value="annulation gratuite">
                        <label class="custom-control-label" for="gratuite">Annulation gratuite</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="Non" type="checkbox"
                            name="cancelFilter" data-cancels="Non remboursable" value="non remboursable">
                        <label class="custom-control-label" for="Non">Non remboursable</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="Flexible" type="checkbox"
                            name="cancelFilter" data-cancels="Flexible" value="flexible">
                        <label class="custom-control-label" for="Flexible">Flexible</label>
                    </div>
                </div>

                <div class="mb-3 py-3 alignMobil">
                    <h4 class="title-search">Promo</h4>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="promo" type="checkbox"
                            name="promo" >
                        <label class="custom-control-label" for="promo">Afficher les hôtels en promo</label>
                    </div>
                </div>

                <div class="mb-3 py-3 alignMobil">
                    <h4 class="title-search">@lang('generate.TypeOfEstablishment')</h4>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="hotel" type="checkbox"
                            name="etablissement" value="hotel" data-etablissement="hotel">
                        <label class="custom-control-label" for="hotel">Hôtel</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="villa" type="checkbox"
                            name="etablissement" value="villa" data-etablissement="villa">
                        <label class="custom-control-label" for="villa">Villa</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="riad" type="checkbox"
                            name="etablissement" value="riad" data-etablissement="riad">
                        <label class="custom-control-label" for="riad">Riad</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="maison" type="checkbox"
                            name="etablissement" data-etablissement="maison">
                        <label class="custom-control-label" for="maison">Maison d'hôtes</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="bungalow" type="checkbox"
                            name="etablissement" value="bungalow" data-etablissement="bungalow">
                        <label class="custom-control-label" for="bungalow">Bungalow</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="residence" type="checkbox"
                            name="etablissement" value="residence" data-etablissement="residence">
                        <label class="custom-control-label" for="residence">Résidence</label>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
