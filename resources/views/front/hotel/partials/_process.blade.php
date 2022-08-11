
@php
    use Illuminate\Support\Str;
    $adults = 0;
    $children = 0;
    $baby = 0;
    $minor = 0;
   foreach ($book['rooms'] as $room) {
        $adults += $room["passengers"]["adults"];
        $children += $room["passengers"]["Child"];
        $baby += $room["passengers"]["Baby"];
        $minor += $room["passengers"]["Minor"];
    }
    $voyageurs = $adults + $children;
@endphp


<form action="{{route('front.hotel.booking')}}" method="post" id="formHotelApi" class="process">
    @csrf

    <div class="row">
        <div class="col-12 order-1 order-md-0 col-md-8">
            <!-- Infos séjour -->
            <section class="box-shadow p-3 mb-5">
                <div class="row">
                    <div class="col-md col-12">
                        <p class="title-card-flight">@lang('generate.verifyUrStay')</p>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-md col-12">
                        <p class="mb-0">@lang('generate.arrival')</p>
                        <time class="bui-date bui-date--large" aria-describedby="bp-checkin-date__label">
                            <span class="bui-date__title color-blue" style="
                                font-size: 13px;
                                line-height: 20px;
                                font-weight: bold;
                            ">

                            @lang('generate.'.$checkIn->formatLocalized('%A'))
                            {{ $checkIn->formatLocalized('%d') }}

                            @lang('generate.'.$checkIn->formatLocalized('%B'))

                            {{ $checkIn->formatLocalized('%Y') }}
                        </span>
                            <span class="bui-date__subtitle color-blue" style="
                                display: block;
                                font-size: 13px;
                                font-weight: 400;
                                line-height: 20px;
                            ">14h00</span>
                        </time>
                    </div>
                    <div class="col-md col-12">
                        <p class="mb-0">@lang('generate.depart')</p>
                        <time class="bui-date bui-date--large" aria-describedby="bp-checkout-date__label">
                            <span class="bui-date__title color-blue" style="
                                font-size: 13px;
                                line-height: 20px;
                                font-weight: bold;
                            ">

                            @lang('generate.'.$checkOut->formatLocalized('%A'))
                            {{ $checkOut->formatLocalized('%d') }}

                            @lang('generate.'.$checkOut->formatLocalized('%B'))

                            {{ $checkOut->formatLocalized('%Y') }}
                        </span>

                            <span class="bui-date__subtitle color-blue" style="
                                display: block;
                                font-size: 13px;
                                font-weight: 400;
                                line-height: 20px;
                            ">12h00</span>
                        </time>
                    </div>
                    <div class="col-md col-12">
                        <p class="mb-0">@lang('generate.totalDuration')</p>
                        @if (!empty($checkIn))
                            <span class="bui-date__title color-blue" style="
                                font-size: 13px;
                                line-height: 20px;
                                font-weight: bold;
                            ">
                            {{$checkIn->diffInDays($checkOut)}}
                            {{ Str::plural('nuit', $checkIn->diffInDays($checkOut)) }}</span>
                        @endif
                    </div>
                </div>
                <hr class="bordure-center">
                <div class="row p-1">
                    <div class="col-md col-12">
                        <p class="mb-1">@lang('generate.your') @lang('generate.group')</p>

                        <p class="bold">{{ $adults }} {{ Str::plural('adulte', $adults) }}
                            @if ($children > 0)
                                <span>{{ $children }} {{ Str::plural('enfant', $children) }} </span>
                            @endif
                            @if ($baby > 0)
                                <span>{{ $baby }} {{ Str::plural('bébé', $baby) }} </span>
                            @endif
                            @if ($minor > 0)
                                <span>{{ $minor }} {{ Str::plural('minor', $minor) }} </span>
                            @endif

                        </p>

                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-md col-12">
                        <p class="mb-1">@lang('generate.uHaveSelected')</p>
                        @foreach ($book["rooms"] as $room)

                            <div class="row">
                                <div class="col-md col-12">
                                    <div class="row">
                                        <div class="col-md-2 bold pr-0">1 x</div>
                                        <div class="col-md pl-0">
                                            <p class="bold mb-0 ml-3"> {{ $room['name'] }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="offset-md-2 col-md pl-0">
                                            <p class="mb-0 ml-3"> {{ $room['board'] }}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md col-12">
                                    <a href="#" data-toggle="modal" class="cancel-conditions color-blue"
                                    data-target="#cancel_conditions">@lang('generate.conditionOfCancel')</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="cancel_conditions"
                                        tabindex="-1" role="dialog"
                                        aria-labelledby="cancel_conditions_Label"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <table width="100%">
                                                        <tr>
                                                            <th class="text-center bold text-blue" style="padding-top: 0; padding-bottom: 15px;">
                                                                @lang('generate.conditionOfCancel')
                                                            </th>
                                                        </tr>
                                                        <br>

                                                        <tr>
                                                            <td>@lang('generate.forCancelation') :
                                                                @lang('generate.beBilled')
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <br>
                                                    <span style="color: #cfaa3d; font-weight:bold">
                                                        @lang('generate.freeCancelation') </span>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-my"
                                                            data-dismiss="modal">OK
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        @endforeach
                    </div>


                </div>
            </section>

            <!-- Authentification -->
            @include('front._includes.signIn')

            <!-- Coordonnées -->
            @include('front._includes.customer')

            <!-- Passengers -->
            <section class="box-shadow p-3 mb-5">
                @foreach($book["rooms"] as $key=>$room)

                    @for($i=0;$i<$room["passengers"]["adults"];$i++)
                        <input type="hidden" value="Adult"
                            name="room[{{$key}}][Adult][{{$i}}][type]">
                        <input type="hidden" name="room[{{$key}}][Adult][{{$i}}][nb]"
                            value="{{$key}}">
                        <div class="p-2">
                            <p class="title-card-flight">@lang('generate.Adult') {{$i+1}}</p>

                            <div class="d-flex justify-content-start my-3">
                                <span class="fw-normal mr-md-5 mr-0">@lang('generate.civility')
                                    *</span>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" checked
                                        id="mr{{$key}}{{$i}}"
                                        name="room[{{$key}}][Adult][{{$i}}][civility]" value="Mr">
                                    <label class="custom-control-label"
                                        for="mr{{$key}}{{$i}}">M.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"
                                        id="mme{{$key}}{{$i}}"
                                        name="room[{{$key}}][Adult][{{$i}}][civility]" value="Mme">
                                    <label class="custom-control-label"
                                        for="mme{{$key}}{{$i}}">Mme</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"
                                        id="ms{{$key}}{{$i}}"
                                        name="room[{{$key}}][Adult][{{$i}}][civility]" value="Mlle">
                                    <label class="custom-control-label"
                                        for="ms{{$key}}{{$i}}">Mlle</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="Prenom-passager">@lang('generate.firstname')
                                        *</label>
                                    <input type="text" required id="Prenom-passager"
                                        placeholder="@lang('generate.firstname')"
                                        class="form-control rounded-0 firstName-passager{{$key}}{{$i}} wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Adult][{{$i}}][lastName]">
                                </div>
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="nom-passager">@lang('generate.lastname') *</label>
                                    <input type="text" required id="nom-passager"
                                        class="form-control rounded-0 lastName-passager{{$key}}{{$i}} wizard-required"
                                        autocomplete="off"
                                        placeholder="@lang('generate.lastname')"
                                        name="room[{{$key}}][Adult][{{$i}}][firstName]">
                                </div>

                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="dob-passager">@lang('generate.dob') *</label>
                                    <input type="date" max="2100-01-01"  max="2100-01-01" id="dob-passager"
                                        class="form-control rounded-0 color-blue"
                                        autocomplete="off"
                                        name="room[{{$key}}][Adult][{{$i}}][dob]">
                                </div>
                            </div>
                        </div>


                        @if (!($i === ($room["passengers"]["adults"]-1)))
                            <hr class="bordure-center">
                        @endif

                    @endfor
                    <div class="p-2">
                        @for($i=0;$i<$room["passengers"]["Minor"];$i++)

                            @if (!($i === ($room["passengers"]["Minor"]-1)))
                                <hr class="bordure-center">
                            @endif
                            <input type="hidden" value="Minor"
                                name="room[{{$key}}][Minor][{{$i}}][type]">
                            <input type="hidden" name="room[{{$key}}][Minor][{{$i}}][nb]"
                                value="{{$key}}">

                            <p class="title-card-flight">@lang('generate.Minor') {{$i+1}}</p>

                            <div class="d-flex justify-content-start my-3">
                                <span class="fw-normal mr-md-5 mr-0">@lang('generate.civility') *</span>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" checked
                                        id="mmr{{$key}}{{$i}}"
                                        name="room[{{$key}}][Minor][{{$i}}][civility]" value="Mr">
                                    <label class="custom-control-label"
                                        for="mmr{{$key}}{{$i}}">M.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"
                                        id="mms{{$key}}{{$i}}"
                                        name="room[{{$key}}][Minor][{{$i}}][civility]" value="Mlle">
                                    <label class="custom-control-label"
                                        for="mms{{$key}}{{$i}}">Mlle</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="Prenom-passager">@lang('generate.firstname') *</label>
                                    <input type="text" required id="Prenom-passager"
                                        placeholder="@lang('generate.firstname')"
                                        class="form-control rounded-0 wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Minor][{{$i}}][lastName]">
                                </div>
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="nom-passager">@lang('generate.lastname') *</label>
                                    <input type="text" required id="nom-passager"
                                        placeholder="@lang('generate.lastname')"
                                        class="form-control rounded-0 wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Minor][{{$i}}][firstName]">
                                </div>
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="dob-passager">@lang('generate.dob') *</label>
                                    <input type="date" max="2100-01-01" required id="dob-passager"
                                        class="form-control rounded-0 color-blue wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Minor][{{$i}}][dob]">
                                </div>
                            </div>

                            @if (!($i === ($room["passengers"]["Child"]-1)))
                                <hr class="bordure-center">
                            @endif
                        @endfor
                    </div>

                    <div class="p-2">
                        @for($i=0;$i<$room["passengers"]["Child"];$i++)

                            @if (!($i === ($room["passengers"]["Child"]-1)))
                                <hr class="bordure-center">
                            @endif
                            <input type="hidden" value="Child"
                                name="room[{{$key}}][Child][{{$i}}][type]">
                            <input type="hidden" name="room[{{$key}}][Child][{{$i}}][nb]"
                                value="{{$key}}">

                                <p class="title-card-flight">@lang('generate.child') {{$i+1}}</p>

                            <div class="d-flex justify-content-start my-3">
                            <span class="fw-normal mr-md-5 mr-0">@lang('generate.civility')
                                *</span>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" checked
                                        id="emr{{$key}}{{$i}}"
                                        name="room[{{$key}}][Child][{{$i}}][civility]" value="Mr">
                                    <label class="custom-control-label"
                                        for="emr{{$key}}{{$i}}">M.</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"
                                        id="ems{{$key}}{{$i}}"
                                        name="room[{{$key}}][Child][{{$i}}][civility]" value="Mlle">
                                    <label class="custom-control-label"
                                        for="ems{{$key}}{{$i}}">Mlle</label>
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
                                        autocomplete="off"
                                        name="room[{{$key}}][Child][{{$i}}][lastName]">
                                </div>
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="nom-passager">@lang('generate.lastname') *</label>
                                    <input type="text" required id="nom-passager"
                                        placeholder="@lang('generate.lastname')"
                                        class="form-control rounded-0 wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Child][{{$i}}][firstName]">
                                </div>
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="dob-passager">@lang('generate.dob') *</label>
                                    <input type="date" max="2100-01-01" required id="dob-passager"
                                        class="form-control rounded-0 color-blue wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Child][{{$i}}][dob]">
                                </div>
                            </div>

                            @if (!($i === ($room["passengers"]["Child"]-1)))
                                <hr class="bordure-center">
                            @endif
                        @endfor
                    </div>

                    <div class="p-2">
                        @for($i=0;$i<$room["passengers"]["Baby"];$i++)

                            @if (!($i === ($room["passengers"]["Baby"]-1)))
                                <hr class="bordure-center">
                            @endif
                            <input type="hidden" value="Baby" name="room[{{$key}}][Baby][{{$i}}][type]">
                            <input type="hidden" name="room[{{$key}}][Baby][{{$i}}][nb]"
                                value="{{$key}}">

                            <p class="title-card-flight">@lang('generate.child') {{$i+1}}</p>
                            <div class="row my-3">
                            <span class="fw-normal mr-md-5 mr-0 ml-3">@lang('generate.civility')
                                *</span>
                                <div class="custom-control custom-radio ml-3">
                                    <input type="radio" class="custom-control-input" checked
                                        id="cmr{{$key}}{{$i}}"
                                        name="room[{{$key}}][Baby][{{$i}}][civility]" value="Mr">
                                    <label class="custom-control-label"
                                        for="cmr{{$key}}{{$i}}">M.</label>
                                </div>
                                <div class="custom-control custom-radio ml-4">
                                    <input type="radio" class="custom-control-input"
                                        id="cms{{$key}}{{$i}}"
                                        name="room[{{$key}}][Baby][{{$i}}][civility]" value="Mlle">
                                    <label class="custom-control-label"
                                        for="cms{{$key}}{{$i}}">Mlle</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="Prenom-passager">@lang('generate.firstname') *</label>
                                    <input type="text" required id="Prenom-passager"
                                        placeholder="@lang('generate.firstname')"
                                        class="form-control rounded-0 wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Baby][{{$i}}][lastName]">
                                </div>
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="nom-passager">@lang('generate.lastname')
                                        *</label>
                                    <input type="text" required id="nom-passager"
                                        placeholder="@lang('generate.lastname')"
                                        class="form-control rounded-0 wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Baby][{{$i}}][firstName]">
                                </div>
                                <div class="form-group col-md col-12">
                                    <label class="fw-normal color-blue"
                                        for="dob-passager">@lang('generate.dob')
                                        *</label>
                                    <input type="date" max="2100-01-01" required id="dob-passager"
                                        class="form-control rounded-0 color-blue wizard-required"
                                        autocomplete="off"
                                        name="room[{{$key}}][Baby][{{$i}}][dob]">
                                </div>
                            </div>

                            @if (!($i === ($room["passengers"]["Baby"]-1)))
                                <hr class="bordure-center">
                            @endif
                        @endfor
                    </div>


                    @if (!($key === (sizeof($book["rooms"])-1)))
                        <hr class="bordure-center">
                    @endif
                @endforeach
                <div class="list-inline d-flex justify-content-center pt-50 bold">
                    @lang('generate.plzEnsure')
                </div>
            </section>

            <!-- Méthode De paiement -->
            @include('front._includes.payment', ['module' => "Hôtel contrat"])
            

        </div>


        <div class="col-12 col-md ml-md-3 ml-0">
            <section class="box-shadow p-3 mb-5">
                <p class="title-card-flight">@lang('generate.your') @lang('generate.stay')</p>

                <h3 class="title-hotel">{{ ucwords(strtolower($book['hotel'])) }}</h3>
                <p>
                    @for($i=0; $i < 5; $i++)
                        @if($i < $book['category'])
                            <i class="fas fa-star text-warning fs-10"></i>
                        @endif
                    @endfor
                </p>

                <div class="color-blue">

                    @if (!empty($book['checkIn']))
                        <p class="color-blue">
                            @lang('generate.staytime') :
                            {{$book['checkIn']->diffInDays($book['checkOut'])}}
                            {{ Str::plural('nuit', $book['checkIn']->diffInDays($book['checkOut'])) }}
                        </p>
                    @endif

                    <p class="color-blue">
                        {{ Str::plural('Voyageur', $voyageurs ) }} :
                        {{ $adults }} {{ Str::plural('adulte', $adults) }}
                        @if ($children > 0)
                            <span>{{ $children }} {{ Str::plural('enfant', $children) }} </span>
                        @endif
                    </p>


                    <hr class="bordure-center">

                    <div>

                        <p class="bold color-blue" style="
                            margin: 0 0 4px;
                            font-size: 14px;
                            line-height: 20px;
                        ">@lang('generate.arrival') :

                            @lang('generate.'.$book['checkIn']->formatLocalized('%A'))
                            {{ $book['checkIn']->formatLocalized('%d') }}

                            @lang('generate.'.$book['checkIn']->formatLocalized('%B'))

                            {{ $book['checkIn']->formatLocalized('%Y') }}
                        </p>

                        <p class="bold color-blue mb-3" style="
                            font-size: 14px;
                            line-height: 20px;
                        ">@lang('generate.depart') :
                            @lang('generate.'.$book['checkOut']->formatLocalized('%A'))
                            {{ $book['checkOut']->formatLocalized('%d') }}

                            @lang('generate.'.$book['checkOut']->formatLocalized('%B'))

                            {{ $book['checkOut']->formatLocalized('%Y') }}
                        </p>

                    </div>

                </div>

            </section>

            <section class="box-shadow p-3 mb-5">
                <!--Item-->
                <div class="pt-2 pb-0" class="position: relative">

                    <p class="title-card-flight mb-3">@lang('generate.priceSummary')</p>

                    <p class="mb-2">
                        <strong>@lang('generate.staytime') :
                            {{$checkIn->diffInDays($checkOut)}}
                            {{ Str::plural('nuit', $checkIn->diffInDays($checkOut)) }}
                        </strong>
                    </p>

                    @php
                        $totalPrice = ceil($book['price'])*$currency;
                    @endphp

                    <div class="row pb-3">
                        <div class="col-md col-6">
                            <strong>@lang('generate.room') x {{ sizeof($roomBooks) }}</strong>
                        </div>
                        <div class="col-md col-6 text-right">
                            <strong>

                                {{ $book['price'] . " " . $currencyText }}
                            </strong>
                        </div>
                    </div>

                    <hr class="bordure-center">

                    <!--Prices-->
                    <div class="row pl-3">
                        <div class="col-md col p-0">
                            <strong>@lang('generate.totalAmount') : </strong>
                        </div>
                        <div class="col-md col">

                            <p class="bold text-right">
                                {{ $book['price']. " " . $currencyText }}
                            </p>
                            @if($book["priceWithoutDisc"] != 0)
                                <p  style="font-size: 13px;color:red;text-align:right;">
                                        <strike>{{ number_format($book['priceWithoutDisc']*$currency, 2, ',', ' ') . " " . $currencyText }}</strike>
                                </p>
                            @endif
                            @if (!empty($checkIn))
                                <p class="bold text-right">@lang('generate.for')
                                {{$checkIn->diffInDays($checkOut)}}
                                {{ Str::plural('nuit', $checkIn->diffInDays($checkOut)) }}</p>
                            @endif
                        </div>
                    </div>

                </div>
                <!--Item-->
            </section>
        </div>
    </div>

</form>

