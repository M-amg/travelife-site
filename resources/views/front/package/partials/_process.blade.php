@php

    use Illuminate\Support\Str;
    $dateDepart=Carbon\Carbon::parse($travel->DepartureDate);
    $dateReturn=Carbon\Carbon::parse($travel->arrivedDate);

@endphp



    <!-- Choix d'hôtel -->
    <div class="row process">
        <div class="col-12 order-1 order-md-0 col-md-8">
            <!-- Infos voyageur(s) -->
            <section class="box-shadow p-3 mb-5">

                <div class="row">
                    <div class="col-md-5 col-12">
                        <p class="title-card-flight">@lang('generate.verifyPackage')</p>
                    </div>
                    <div class="col-md col-12">
                        <h3 class="title-card-flight pt-3">{{$package->title}}</h3>
                    </div>
                </div>

                <div class="row p-1">
                    <div class="col-md col-12">
                        <p class="mb-0">@lang('generate.depart')</p>
                        <time class="bui-date bui-date--large" aria-describedby="bp-checkin-date__label">
                            <span class="bui-date__title color-blue" style="
                                font-size: 13px;
                                line-height: 20px;
                                font-weight: bold;
                            ">
                            @lang('generate.'.$dateDepart->formatLocalized('%A'))
        
                            {{ $dateDepart->formatLocalized('%d') }}
        
                            @lang('generate.'.$dateDepart->formatLocalized('%B'))
        
                            {{ $dateDepart->formatLocalized('%Y') }}
                        </span>
                        </time>
                    </div>
                    <div class="col-md col-12">
                        <p class="mb-0">@lang('generate.return')</p>
                        <time class="bui-date bui-date--large" aria-describedby="bp-checkout-date__label">
                            <span class="bui-date__title color-blue" style="
                                font-size: 13px;
                                line-height: 20px;
                                font-weight: bold;
                            ">
                            @lang('generate.'.$dateReturn->formatLocalized('%A'))
        
                            {{ $dateReturn->formatLocalized('%d') }}
        
                            @lang('generate.'.$dateReturn->formatLocalized('%B'))
        
                            {{ $dateReturn->formatLocalized('%Y') }}
                        </span>
                        </time>
                    </div>
                    <div class="col-md col-12">
                        <p class="mb-0">@lang('generate.totalDurationPackage')</p>
                        <span class="bui-date__title color-blue" style="
                            font-size: 13px;
                            line-height: 20px;
                            font-weight: bold;
                        ">
                        {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn)+1:''}}
                        {{str_plural('jour', $dateDepart->diffInDays($dateReturn)+1)}} / {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}}
                        {{str_plural('nuit', $dateDepart->diffInDays($dateReturn))}}
                        </span>
                    </div>
                </div>
        
        
                <hr class="bordure-center">
                <div class="row p-1">
                    <div class="col-md col-12">
        
                        <p class="mb-0">@lang('generate.passenger')s  </p>
                        <p class="bold">
                            @php($sum=0)
        
                            @php($sumBebe=0)
                            @php($sumChild=0)
                            @php($sum+=$adults)
                            @foreach ($package->tlPoliticAgeEnfantPackages as $k=>$ageInfant)
                                @isset($infants)
        
                                    @if(is_numeric($infants[$ageInfant->TypeEnfant]))
                                        @php($nbe=$infants[$ageInfant->TypeEnfant])
                                    @else
                                        @php($nbe=0)
                                    @endif
                                    @if($ageInfant->TypeEnfant=='Child')
                                        @php($sumChild+=$nbe)
                                    @else
                                        @php($sumBebe+=$nbe)
                                    @endif
                                @endisset
        
                            @endforeach
        
        
                            {{ $sum }} {{str_plural('adulte', $sum)}}
        
                            @if($sumChild>0)
                                ,
                                {{$sumChild}} {{str_plural('enfant', $sumChild)}}
                            @endif
        
                            @if($sumBebe>0)
                                , {{$sumChild}}  {{ __('generate.Baby') }}(s)  {{str_plural('bébé', $sumChild)}}
                            @endif
                        </p>
        
                    </div>
                </div>
        
            </section>

            <!-- Authentification -->
            @include('front._includes.signIn')
            
            <form action="{{route('front.package.confirmBooking')}}" method="post">
                @csrf    
                <!-- Coordonnées -->
                @include('front._includes.customer')

                <!-- Benefits -->
                @if(!empty($package->tlBenefits()->first()))
                    <section class="box-shadow p-3 mb-5 pt-2 pb-0 px-3">

                        <p class="title-card-flight">@lang('generate.the') extras</p>
                        <div class="table-responsive">
                            <table class="table table-inverse table-bordered">
                                <thead>
                                <tr class="custom-panel" style="background: linear-gradient(#db1018,#b9242a);color: white;">
                                    <th class="text-center" style="font-size: 14px; font-weight:400">@lang('generate.title')</th>
                                    <th class="text-center"
                                        style="font-size: 14px; font-weight:400">@lang('generate.price') @lang('generate.Perperson')</th>
                                    <th class="text-center"
                                        style="font-size: 14px; font-weight:400">@lang('generate.NBPassenger')</th>
                                    <th class="text-center" style="font-size: 14px; font-weight:400">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($package->tlBenefits as $benefit)
                                    <tr>
                                        <td>{{$benefit->title}}</td>
                                        <td class="text-center">
                                            {{$benefit->priceSelling>0?$benefit->priceSelling. ' ' .$currencyText : "Gratuite"}}</td>
                                        <td class="text-center">
                                            <select data-benefit="{{$benefit->id}}"
                                                    data-price="{{$benefit->priceSelling}}"
                                                    class="benefit form-control"
                                                    name="nbPassenger[]"
                                                    style="text-align-last: center;">
                                                @php($v=1)
                                                <option value="0">0</option>


                                                @for($i=0;$i<$adults;$i++)
                                                    <option value="{{$v}}">{{$v}}</option>
                                                    @php($v++)
                                                @endfor

                                            </select>
                                            <input type="hidden" name="benefit[]"
                                                    id="benefit{{$benefit->id}}">
                                        </td>
                                        <td class="text-center">
                                            <span id="priceBenefit{{$benefit->id}}" class="benefitPrice"
                                                    data-price="0"></span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </section>
                @endif

                <!-- Passengers -->
                <section class="box-shadow p-3 mb-5">
                    <div class="py-2 px-3">


                        <div class="color-blue bold mb-3" style="font-size: 20px;">
                            {{ __('generate.room') }} </div>
                        @for($i=0;$i<$adults;$i++)

                            <div>
                                <p class="title-card-flight">@lang('generate.Adult') {{$i+1}}</p>
                                <div class="d-flex justify-content-start my-3">
                                    <span class="fw-normal mr-md-5 mr-0">@lang('generate.civility')
                                        *</span>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" checked
                                                id="mrA{{$i}}"
                                                name="adult[{{$i}}][civility]" value="Mr">
                                        <label class="custom-control-label" for="mrA{{$i}}">M.</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="mmeA{{$i}}"
                                                name="adult[{{$i}}][civility]" value="Mme">
                                        <label class="custom-control-label" for="mmeA{{$i}}">Mme</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="msA{{$i}}"
                                                name="adult[{{$i}}][civility]" value="Mlle">
                                        <label class="custom-control-label" for="msA{{$i}}">Mlle</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md col-12">
                                        <label class="fw-normal color-blue"
                                                for="Prenom-passager">@lang('generate.firstname')
                                            *</label>
                                        <input type="text" required id="Prenom-passager"
                                                placeholder="@lang('generate.firstname')"
                                                class="form-control rounded-0 firstName-passager{{$i}} wizard-required"
                                                name="adult[{{$i}}][lastName]">
                                    </div>

                                    <div class="form-group col-md col-12">
                                        <label class="fw-normal color-blue"
                                                for="nom-passager">@lang('generate.lastname') *</label>
                                        <input type="text" required id="nom-passager"
                                                placeholder="@lang('generate.lastname')"
                                                class="form-control rounded-0 lastName-passager{{$i}} wizard-required"
                                                name="adult[{{$i}}][firstName]">
                                    </div>

                                    <div class="form-group col-md col-12">
                                        <label class="fw-normal color-blue"
                                                for="dob-passager">@lang('generate.dob')</label>
                                        <input type="date" max="2100-01-01" required id="dob-passager"
                                                class="form-control rounded-0 wizard-required"
                                                name="adult[{{$i}}][dob]">
                                    </div>
                                </div>
                            </div>

                            @if (!($i === ($adults-1)))
                                <hr class="bordure-center">
                            @endif
                        @endfor

                        @foreach ($package->tlPoliticAgeEnfantPackages as $k=>$ageInfant)

                            @for($i=0;$i<$infants[$ageInfant->TypeEnfant];$i++)

                                <div>
                                    <p class="title-card-flight">{{ __('generate.'.$ageInfant->TypeEnfant) }}  {{$i+1}}</p>
                                    <div class="d-flex justify-content-start my-3">
                                        <span class="fw-normal mr-md-5 mr-0">@lang('generate.civility')
                                            *</span>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" checked
                                                    id="mr{{$i}}" value="Mr"
                                                    name="{{$ageInfant->TypeEnfant}}[{{$i}}][civility]">
                                            <label class="custom-control-label"
                                                    for="mr{{$i}}">M.</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input"
                                                    id="mme{{$i}}" value="Mme"
                                                    name="{{$ageInfant->TypeEnfant}}[{{$i}}][civility]">
                                            <label class="custom-control-label"
                                                    for="mme{{$i}}">Mme</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input"
                                                    id="ms{{$i}}" value="Mlle"
                                                    name="{{$ageInfant->TypeEnfant}}[{{$i}}][civility]">
                                            <label class="custom-control-label"
                                                    for="ms{{$i}}">Mlle</label>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md col-12">
                                            <label class="fw-normal color-blue"
                                                    for="Prenom-passager">@lang('generate.firstname')
                                                *</label>
                                            <input type="text" required id="Prenom-passager"
                                                    placeholder="@lang('generate.firstname')"
                                                    class="form-control rounded-0 wizard-required"
                                                    name="{{$ageInfant->TypeEnfant}}[{{$i}}][lastName]">
                                        </div>

                                        <div class="form-group col-md col-12">
                                            <label class="fw-normal color-blue"
                                                    for="nom-passager">@lang('generate.lastname')
                                                *</label>
                                            <input type="text" required id="nom-passager"
                                                    placeholder="@lang('generate.lastname')"
                                                    class="form-control rounded-0 wizard-required"
                                                    name="{{$ageInfant->TypeEnfant}}[{{$i}}][firstName]">
                                        </div>

                                        <div class="form-group col-md col-12">
                                            <label class="fw-normal color-blue"
                                                    for="dob-passager">@lang('generate.dob')</label>
                                            <input type="date" max="2100-01-01" required id="dob-passager"
                                                    class="form-control rounded-0 wizard-required"
                                                    name="{{$ageInfant->TypeEnfant}}[{{$i}}][dob]">
                                        </div>
                                    </div>
                                </div>

                                @if (!($i === ($infants[$ageInfant->TypeEnfant]-1)))
                                    <hr class="bordure-center">
                                @endif
                            @endfor
                        @endforeach


                    </div>
                </section>

                <!-- Méthode De paiement-->
                @include('front._includes.payment', ['module' => "Package"])

                    
            </form>
        </div>
        <div class="col-12 col-md ml-md-3 ml-0">
            <section class="box-shadow p-3 mb-5">
                <!--Item-->
                <p class="title-card-flight">@lang('generate.your') package</p>

                <h3 class="title-hotel">{{$package->title}}</h3>


                <div class="py-4">
                    <p class="mb-1"><span class="bold">@lang('generate.category') :</span>
                         {{$package->tlCategory()->first()->title}}</p>
                    <p class="mb-1"><span class="bold">@lang('generate.depart') @lang('generate.of') :</span>
                        {{ ucfirst(request()->input('depart')) }} </p>
                    
                    <p class="mb-1"><span class="bold">Destinations :</span>
                        @foreach($package->tlDestinations as $key=> $destination)
                            @if($key!=0 ),@endif {{$destination->name}}
                        @endforeach
                    </p>

                    <hr class="bordure-center">

                    <p class="color-blue" style="
                        margin: 0 0 4px;
                        font-size: 14px;
                        line-height: 20px;
                    "><span class="bold">@lang('generate.depart') :</span>
                        @lang('generate.'.$dateDepart->formatLocalized('%A'))
                        {{ $dateDepart->formatLocalized('%d') }}

                        @lang('generate.'.$dateDepart->formatLocalized('%B'))

                        {{ $dateDepart->formatLocalized('%Y') }}
                    </p>

                    <p class="color-blue mb-0" style="
                        font-size: 14px;
                        line-height: 20px;
                    "><span class="bold">@lang('generate.return') :</span>
                        @lang('generate.'.$dateReturn->formatLocalized('%A'))
                        {{ $dateReturn->formatLocalized('%d') }}

                        @lang('generate.'.$dateReturn->formatLocalized('%B'))

                        {{ $dateReturn->formatLocalized('%Y') }}
                    </p>

                </div>

            </section>
            <section class="box-shadow p-3 mb-5">
                <p class="title-card-flight">@lang('generate.priceSummary')</p>
    
                <!--Prices-->
                <div class="row p-2">
                    <div class="col-md col">
                        <strong>@lang('generate.totalAmount'): </strong>
                    </div>
                    <div class="col-md col">
    
                        <p class="bold text-right" id="total" data-price="{{ $price*$currency }}">
                            {{ number_format($price*$currency, 2, ',', ' ') . " " . $currencyText }}
                        </p>
                        <p class="bold text-right">@lang('generate.for')
                            {{!empty($dateDepart)?$dateDepart->diffInDays($dateReturn):''}}
                            {{ Str::plural('nuit', $dateDepart->diffInDays($dateReturn)) }}</p>
    
                    </div>
                </div>
            </section>
        </div>
    </div>

{{-- </form> --}}



