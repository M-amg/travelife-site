<div class="package-description my-5 py-2 bg-w">
    <div class="container pt-xs-0">

        <div style="background-color: white;">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                <a class="nav-link color-grey active" id="descriptif-tab" data-toggle="tab" href="#descriptif" role="tab" aria-controls="descriptif" aria-selected="true">Descriptif</a>
                <span class="barre"></span>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link color-grey" id="itineraire-tab" data-toggle="tab" href="#itineraire" role="tab" aria-controls="itineraire" aria-selected="false">Itinéraire</a>
                <span class="barre"></span>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link color-grey" id="carte-tab" data-toggle="tab" href="#carte" role="tab" aria-controls="carte" aria-selected="false">À la carte</a>
                    <span class="barre"></span>
                    </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link color-grey" id="budget-tab" data-toggle="tab" href="#budget" role="tab" aria-controls="budget" aria-selected="false">Budget</a>
                <span class="barre"></span>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-4 color-blue" id="descriptif" role="tabpanel" aria-labelledby="descriptif-tab">
                    {!! $package->description !!}
                </div>
                <div class="tab-pane fade" id="itineraire" role="tabpanel" aria-labelledby="itineraire-tab">
                    @if(!empty($package->programPDF))
                        <a href="{{config('services.pathImg').'img/package/programFilePdf/'.$package->programPDF}}"
                        class="btn bg-my btn-block" style="font-size: 15px;"
                        download="{{$package->programPDF}}">
                            <i class="far fa-file-archive"></i>
                            @lang('generate.program') @lang('generate.in') PDF
                        </a>
                    @endif
                </div>
                <div class="tab-pane fade p-4 color-blue" id="carte" role="tabpanel" aria-labelledby="carte-tab">

                </div>
                <div class="tab-pane fade p-4 color-blue" id="budget" role="tabpanel" aria-labelledby="budget-tab">

                </div>
            </div>
        </div>

    </div>
</div>
