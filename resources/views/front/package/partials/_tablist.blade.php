
<div style="padding-bottom: 30px;" class="package-description">
    <div class="container pt-xs-0 px-0">

        
        <div style="background-color: white;">
            <div class="row">
                <div class="col-md-6 col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <a class="nav-link color-grey active" id="descriptif-tab" data-toggle="tab" href="#descriptif" role="tab" aria-controls="descriptif" aria-selected="true">Descriptif</a>
                        <span class="barre"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                        <a class="nav-link color-grey" id="itineraire-tab" data-toggle="tab" href="#itineraire" role="tab" aria-controls="itineraire" aria-selected="false">Programme</a>
                        <span class="barre"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                        <a class="nav-link color-grey" id="budget-tab" data-toggle="tab" href="#budget" role="tab" aria-controls="budget" aria-selected="false">Inclus / Non inclus</a>
                        <span class="barre"></span>
                        </li>
                    </ul>
                </div>
                @php($agency=\App\models\agency\TlAgency::all()->first())

                
                @if($package->isAlaCarte == 1)
                    <div class="col-md-6 col-12 d-flex justify-content-end align-items-start p-2 pr-4">
                        <p class="mr-4 text-right"><span class="bold">Contacter un de nos spécialistes au </span> <br> 
                            {{ $agency->phone }}</p>
                        <a href="{{ route('front.cartes.index', ['id'=>$package->id]) }}#formulaire" class="btn bg-my rounded-0">Demander un devis</a>
                    </div>
                @else 
                    <div class="col-md-6 col-12 d-flex justify-content-end align-items-start p-2 pr-4">
                        <p class="mr-4 text-right"><span class="bold">VOIR DISPONIBILITE</span> <br> 
                            Choisissez votre package à {{ $package->tlDestinations->first()->name }}</p>
                        <a href="#dispo" class="btn bg-my rounded-0">Réserver</a>
                    </div>
                @endif
                
            </div>
            

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-4 color-blue" id="descriptif" role="tabpanel" aria-labelledby="descriptif-tab" style="text-align: justify;">
                    {!! $package->description !!}
                </div>
                <div class="tab-pane fade p-2" id="itineraire" role="tabpanel" aria-labelledby="itineraire-tab">
                    @if(!empty($package->programPDF))
                        <a href="{{config('services.pathImg').'img/package/programFilePdf/'.$package->programPDF}}"
                        class="btn bg-my btn-block" style="font-size: 15px;"
                        download="{{$package->programPDF}}">
                            <i class="far fa-file-archive"></i>
                            @lang('generate.program') @lang('generate.in') PDF
                        </a>
                    @endif
                    <div class="my-3 p-md-0 px-4">
                        @foreach($package->tlPrograms as $program)
                    
                            <div class="mb-4 px-5">
                                <h6 class="c-dore bold">{{$program->title}}</h6>
            
                                <div class="text-justify">
                                    {!! $program->description !!}
                                </div>
                            </div>
                    
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade p-4 color-blue" id="budget" role="tabpanel" aria-labelledby="budget-tab">
                    @if ($package->inclus)
                        <h4>@lang('generate.included')</h4>
                        {!! $package->inclus !!}
                    @endif
                    <br>
                    @if ($package->noninclus)
                        <h4>@lang('generate.notIncluded')</h4>
                        {!! $package->noninclus !!}
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
