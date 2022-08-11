@extends('base.front')
@section('style')
@endsection
@section('body')
    <!-- DETAIL WRAPPER -->
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
                <div class="detail-content-block my-5">
                    <div class="bg-white p-4 mt-3">
                            @if($error)
                                <div class="alert alert-danger">
                                    <p>Le traitement du paiement a échoué. Veuillez réessayer ou prendre contact avec notre service
                                        client</p>
                                </div>
                            @endif
                            <h3 class="block-title">@lang('generate.bookingInformations')</h3>
                            <div class="table-responsive">
                                <table class="table style-1 type-2 striped">
                                    <tbody>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.hotel')</td>
                                        <td class="table-label color-dark-2">
                                            <strong>{{$book->hotelName}}</strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.bookingDate')</td>
                                        <td class="table-label color-dark-2">
                                            @lang('generate.oF')
                                            <strong>{{Carbon\Carbon::parse($book->checkIn)->format('d/m/Y')}}</strong>
                                            @lang('generate.at')
                                            <strong>{{Carbon\Carbon::parse($book->checkOut)->format('d/m/Y')}}</strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.adresse')</td>
                                        <td class="table-label color-dark-2"><strong>
                                                {{$book->hotelAddress}}
                                            </strong></td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.passager')s</td>
                                        <td class="table-label color-dark-2"><strong>
                                                @php($adult=$book->tlPassengers()->count())
                                                @if($adult>0)
                                                    {{$adult}} {{__('generate.Adult')}}
                                                @endif

                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">Total</td>
                                        <td class="table-label color-dark-2">
                                            <strong>{{$book->price}} {{ $currencyText }}</strong>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                    </div>
                    @if(!empty($book->rooms()->first()))
                    <div class="bg-white p-4 mt-3">
                            <h3 class="block-title">@lang('generate.rooms')</h3>
                            <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                                <th>@lang('generate.room')</th>
                                                <th>{{ __('generate.Adult') }}</th>
                                                <th>{{ __('generate.Child') }}</th>
                                                <th>Pension</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($book->rooms as $passenger)
                                        <tr>
                                            <td>
                                                {{ $passenger->roomDescription }}
                                            </td>
                                            <td>{{ $passenger->adultCount }}</td>
                                            <td>{{ $passenger->childCount }}</td>
                                            <td>{{ $passenger->board }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    @endif
                    @if(!empty($book->tlPassengers()->first()))
                    <div class="bg-white p-4 mt-3">
                        <h3 class="block-title">@lang('generate.passengers')</h3>
                        <table class="table table-bordered table-striped js-dataTable-full-pagination">
                            <thead>
                                <tr>
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
                                        <td>{{Carbon\Carbon::parse($passenger->dob)->format('d/m/Y')}} </td>
                                        <td>{{ $passenger->passport }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                @if($command->status==1)
                    <div class="bg-white p-4 mt-3">
                        <a class="btn btn-primary"
                        href="{{route('front.hotelApi.voucher',['id'=>$command->id])}}" >@lang('generate.voucher')</a>
                        <a class="btn btn-secondary"
                        href="{{route('front.hotelApi.bill',['id'=>$command->id])}}" >@lang('generate.bill')</a>
                    </div>
                @endif
            </div>
        </div>
@endsection
@section('js')
@endsection

