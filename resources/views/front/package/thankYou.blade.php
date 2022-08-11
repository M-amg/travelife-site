@extends('base.front')
@section('style')
@endsection
@section('body')
    @php($package=$travel->tlPackage()->first())
    @include('front.customer.userheader')
    <div class="container  mt-5 pt-5">
        <div class="col-12">
            <div class="row">
                <div class="col-md-4 py-4 mb-1 col bg-lightgrey text-center">
                    <a class="text-dark" href="{{route('customer.login')}}">
                        <p class="m-0 d-flex justify-content-center align-items-center">
                            <i class="far fa-user-circle fa-3x mr-3"></i><strong>@lang('generate.my') @lang('generate.profile')</strong>
                        </p>
                    </a>
                </div>
                <div class="col-md-4 py-4 mb-1 col bg-my text-center">
                    <p class="m-0 d-flex justify-content-center align-items-center">
                        <i class="fas fa-briefcase fa-3x mr-3"></i><strong>@lang('generate.mes') @lang('generate.reservations')</strong>
                    </p>
                </div>
                <div class="col-md-4 py-4 mb-1 col bg-lightgrey text-center">
                    <a class="text-dark" href="{{route('customer.logout')}}">
                    <p class="m-0 d-flex justify-content-center align-items-center">
                        <i class="fas fa-sign-out-alt fa-3x mr-3"></i><strong>@lang('generate.logout')</strong>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12  my-5">
                    @if($book->etat==0)
                    <div class="bg-white p-4" style="margin-top: 168px;">
                        <h3 class="small-title">{{ __('generate.bookingConfirmation') }}</h3>
                        <div class="row">
                            <div class="col-9">{{ __('generate.thankYou') }}.<br>{{ __('generate.confirmationSendEmail') }}.</div>
                            <div class="col-3 text-center">
                                <a href="{{route('customer.pdf.book',['id'=>$book->id])}}"
                                    class="btn btn-primary btn-sm">@lang('generate.print')</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="detail-content-block my-5">
                        <div class="bg-white p-4 mt-3">
                            @if($error)
                                <div class="alert alert-danger">
                                    <p>Le traitement du paiement a échoué. Veuillez réessayer ou prendre contact avec notre service
                                        client</p>
                                </div>
                            @endif
                            <h3 class="small-title">@lang('generate.bookingInformations')</h3>


                            <div class="table-responsive">
                                <table class="table style-1 type-2 striped">
                                    <tbody>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.numero') @lang('generate.of') {{ lcfirst(trans('generate.book')) }} </td>
                                        <td class="table-label color-dark-2">
                                            <strong>CO{{\Carbon\Carbon::parse($book->created_at)->format('ym').'-'.sprintf('%04u', $commandLine->id)}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.travel')</td>
                                        <td class="table-label color-dark-2">
                                            <strong>{{$book->tlTravel()->first()->tlPackage()->first()->title}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">{{ __('generate.firstname') }}</td>
                                        <td class="table-label color-dark-2">
                                            <strong>@if(!empty($customer->firstName)){{$customer->firstName}}@else
                                                    - @endif</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">{{ __('generate.lastname') }}</td>
                                        <td class="table-label color-dark-2">
                                            <strong>@if(!empty($customer->lastName)){{$customer->lastName}}@else
                                                    - @endif</strong></td>
                                    </tr>

                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.depart')</td>
                                        <td class="table-label color-dark-2">
                                            @lang('generate.oF')
                                            <strong>{{Carbon\Carbon::parse($book->tlTravel()->first()->DepartureDate)->format('d/m/Y')}}</strong>
                                            @lang('generate.at')
                                            <strong>{{Carbon\Carbon::parse($book->tlTravel()->first()->arrivedDate )->format('d/m/Y')}}</strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-label color-grey">{{($book->tlFormula()->first()) ? $book->tlFormula()->first()->name : '-'}}</td>
                                        <td class="table-label color-dark-2"><strong>
                                                {{$book->tlPassengers()->count()}} @lang('generate.person')(s)
                                            </strong></td>
                                    </tr>

                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.bookingStatus')</td>
                                        <td class="table-label color-dark-2"><strong>
                                                @if($commandLine->status==0)<span
                                                        style="color: orange"> @lang('generate.waitConfirmation')</span>
                                                @elseif($commandLine->status==1)<span style="color: green"> @lang('generate.confirmed')</span>
                                                @elseif($commandLine->status==2)<span
                                                        style="color: orange"> @lang('generate.waitCancel')</span>
                                                @else<span style="color: red"> @lang('generate.canceled')</span>
                                                @endif

                                            </strong></td>
                                    </tr>

                                    <tr>
                                        <td class="table-label color-grey" style="font-weight: 700;font-size: x-large;text-transform: uppercase;">Total</td>
                                        <td class="table-label color-dark-2" style="font-weight: 700;font-size: x-large;text-transform: uppercase;"><strong>{{$commandLine->price}} {{ $currencyText }}
                                            </strong></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="bg-white p-4 mt-3">
                            <h3 class="block-title">{{ __('generate.passenger') }}</h3><br>
                            <table class="table table-inverse table-bordered">
                                <thead>
                                <tr class="custom-panel bg-dr-blue color-white">
                                    <th>{{ __('generate.civility') }}</th>
                                    <th>{{ __('generate.lastname') }}</th>
                                    <th>{{ __('generate.firstname') }}</th>
                                    <th>{{ __('generate.dob') }}</th>
                                    <th>Passport</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($book->tlPassengers as $passenger)
                                    @php($passenger = $passenger->pivot)
                                    <tr>
                                        <td>
                                            {{ $passenger->civility }}
                                        </td>
                                        <td>{{ $passenger->lastName }}</td>
                                        <td>{{ $passenger->firstName }}</td>
                                        <td>{{ $passenger->dob }}</td>
                                        <td>{{ $passenger->passport }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="bg-white p-4 mt-3">
                            <h3 class="small-title">{{ __('generate.room') }}</h3>
                            @php(   $formula=\App\models\package\TlFormula::all()->where('id', $book->tl_formula_id))



                                <table class="table table-inverse table-bordered">
                                    <thead>
                                    <tr class="custom-panel bg-dr-blue color-white">
                                        <th>@lang('generate.hotel')</th>
                                        <th>@lang('generate.city')</th>
                                        <th>Pension</th>
                                        <th>@lang('generate.room')</th>
                                        <th>Check-in</th>
                                        <th>Check-out</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if($formula->first())
                                            @php(   $rooms = \App\models\package\TlPackageRoom::all()->whereIn("id", unserialize($formula->first()->room)))
                                            @foreach($rooms as $room)
                                                @php( $stay = $room->tlPackageHotelInfo()->first()->tlStays()->where('tl_travel_id', $book->tl_travel_id)->first())
                                                <tr>
                                                    <td>
                                                        {{$room->tlPackageHotelInfo()->first()->name}}
                                                        @for($i = 0; $i < $room->tlPackageHotelInfo()->first()->category; $i++)
                                                            <span class="fa fa-star color-yellow"
                                                                    style="font-size: 14px;color: #ffc80f;"> </span>
                                                        @endfor

                                                    </td>
                                                    <td>{{ $room->tlPackageHotelInfo()->first()->tlCity()->first()->name }}</td>
                                                    <td>{{$room->tlPackageHotelInfo()->first()->pension}}</td>
                                                    <td>{{$room->name}}
                                                        - {{$room->isOpen==1?"Ouverte":"Fermer"}} {{$room->typeLodging=="man"?"pour les hommes":""}} {{$room->typeLodging=="woman"?"pour les femmes":""}}</td>
                                                    <td>{{ \Carbon\Carbon::parse($stay->checkIn)->format("d-m-Y") }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($stay->checkOut)->format("d-m-Y") }}</td>

                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>

                        </div>
                        @if(!empty($book->tlFormulaBenefitBooks()->first()))
                            <div class="bg-white p-4 mt-3">
                                <h3 class="small-title">{{ __('generate.benefit') }}</h3>
                                <table class="table table-inverse table-bordered">
                                    <thead>
                                    <tr class="custom-panel bg-dr-blue color-white">
                                        <th>{{ __('generate.title') }}</th>
                                        <th>NB {{ __('generate.passenger') }}</th>
                                        <th>{{ __('generate.price') }}</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($book->tlFormulaBenefitBooks as $benefitBook)
                                        <tr>
                                            <td>
                                                {{$benefitBook->tlBenefit()->first()->title}}
                                            </td>
                                            <td>{{ $benefitBook->person}} @lang('generate.beneficiaries')</td>
                                            <td>{{ $benefitBook->person*$benefitBook->price }}</td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        @if(!empty($book->tlPayment()->first()))
                            <div class="bg-white p-4 mt-3">
                                <div class="simple-text">

                                    <h3>{{$book->tlPayment()->first()->titre}}</h3>
                                    <p class="color-grey">{!! $book->tlPayment()->first()->description !!}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- @php($validation=\Carbon\Carbon::parse($book->tlTravel()->first()->DepartureDate)>\Carbon\Carbon::now())
                    @if($validation==true)--}}
                        @if($book->etat == 0 or $book->etat == 1)
                            <div class="bg-white p-4 mt-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="canclePackage btn btn-outline-warning" >@lang('generate.cancellationRequest')</a>
                                        <form action="{{route('front.package.cancel',['id'=>$commandLine->id])}}"method="get" id="form-cancel-package">
                                        @csrf
                                        </form>
                                    </div>
                                    <div class="col-md-8">

                                        @if($book->etat == 1)
                                        <a class="btn btn-primary"
                                        href="{{route('front.package.voucher',['id'=>$commandLine->id])}}" >voucher</a>
                                        <a class="btn btn-secondary"
                                        href="{{route('front.package.bill',['id'=>$commandLine->id])}}" >@lang("generate.bill")</a>
                                    @endif
                                    </div>
                                        

                                </div>
                                    
                            </div>
                            
                        @endif
                    {{-- @endif--}}
        </div>


    </div>

@endsection

@section('js')
<script>
    $('.canclePackage').click(function () {

        swal.fire({
                title: "Êtes-vous sûr?",
                text: "Vous allez annuler cette réservation ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Oui, !",
                cancelButtonText: "Non, !",
                })
            .then((check) => {
                if (check.value === true) {
                    $("#form-cancel-package").submit();
                }else{
            

                }
            });

});
</script>


@endsection