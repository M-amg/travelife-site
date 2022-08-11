@extends('base.front')
@section('style')
@endsection
@section('body')

    @include('front.customer.userheader')
    <div class="container mt-5 pt-5">
        @if($error)
            <div class="alert alert-danger">
                <p>@lang('generate.paymentTraitment')</p>
            </div>
        @endif
        <div class="row">
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
                    @if($book['status']==0)
                        <div class="bg-white  p-4" style="margin-top: 168px;">
                            <h3 class="small-title">{{ __('generate.bookingConfirmation') }}</h3>
                            <div class="confirm-label bg-dr-blue-2 radius-5">
                                <img class="confirm-img" src="{{asset('assets/img/thx_icon.png')}}" alt="">
                                <div class="confirm-title color-white">{{ __('generate.thankYou') }}.
                                </div>
                                <div class="confirm-text color-white-light">{{ __('generate.confirmationSendEmail') }}
                                    .
                                </div>
                                <a href="{{route('customer.pdf.book.hotel',['id'=>$book['idCommande']])}}"
                                class="confirm-print c-button b-40 bg-white hv-white-o">{{ __('generate.printDetails') }}</a>
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
                                        <td class="table-label color-grey">@lang('generate.order') #Réf</td>
                                        <td class="table-label color-dark-2">
                                            <strong>{{$book['command']}}</strong>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.hotel')</td>
                                        <td class="table-label color-dark-2">
                                            <strong>{{$book['name']}}</strong>
                                            <div class="rate">
                                                @for($i=1;$i<=5;$i++)
                                                    <span class="fa fa-star @if($i<=$book['category']) color-yellow @endif"></span>
                                                @endfor
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.adresse')</td>
                                        <td class="table-label color-dark-2"><strong>
                                                {{$book['address']}}
                                            </strong></td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.bookingDate')</td>
                                        <td class="table-label color-dark-2">
                                            @lang('generate.oF')
                                            <strong>{{$book['checkIn']}}</strong>
                                            @lang('generate.at')
                                            <strong>{{$book['checkOut']}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">@lang('generate.bookingStatus')</td>
                                        <td class="table-label color-dark-2"><strong>
                                                @if($book['status']==0)<span
                                                        style="color: orange"> @lang('generate.waitConfirmation')</span>
                                                @elseif($book['status']==1)<span
                                                        style="color: green"> @lang('generate.confirmed')</span>
                                                @elseif($book['status']==2)<span
                                                        style="color: orange"> @lang('generate.waitCancel')</span>
                                                @else<span style="color: red"> @lang('generate.canceled')</span>
                                                @endif

                                            </strong></td>
                                    </tr>
                                    <tr>
                                        <td class="table-label color-grey">Total</td>
                                        <td class="table-label color-dark-2">
                                            <strong>{{$book['price']}} {{ $currencyText }}</strong>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- passenger -->
                        <div class="bg-white p-4 mt-3">
                            <h3 class="small-title">@lang('generate.passengers')</h3>

                            <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>{{ __('generate.lastname') }}</th>
                                    <th>{{ __('generate.firstname') }}</th>
                                    <th>{{ __('generate.dob') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($book['passengersCommande'] as $passenger)
                                    <tr>
                                        <td>{{ $passenger['type']}}</td>
                                        <td>{{ $passenger['firstName']}}</td>
                                        <td>{{ $passenger['lastName']}}</td>
                                        <td>{{ $passenger['dob']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END passenger -->

                        <!-- Room -->
                        <div class="bg-white p-4 mt-3">
                            <h3 class="small-title">@lang('generate.rooms')</h3>

                            <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                <thead>
                                <tr>
                                    <th>@lang('generate.room')</th>
                                    <th>Pension</th>
                                    <th>{{ __('generate.Adult') }}</th>
                                    <th>{{__('generate.Child')}}</th>
                                    <th>@lang('generate.price')</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($book['rooms'] as $room)
                                    <tr>
                                        <td>{{ $room['name']}}</td>
                                        <td>{{ $room['pension']}}</td>
                                        <td>{{ $room['adult']}}</td>
                                        <td>{{ $room['infant']>0?$room['infant']:'-'}}</td>
                                        <td>{{ $room['price']}} {{ $currencyText }}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        @if($book['supplements'])
                            @if($book['supplements']->first())
                                <div class="bg-white p-4 mt-3">
                                    <h3 class="small-title">@lang('generate.supplements')</h3>

                                    <table class="table table-bordered table-striped js-dataTable-full-pagination">
                                        <thead>
                                        <tr>
                                            <th>@lang('generate.supplement')</th>
                                            <th>{{ __('generate.Adult') }}</th>
                                            <th>{{__('generate.Child')}}</th>
                                            <th>@lang('generate.price')</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($book['supplements'] as $supplement)
                                            <tr>
                                                <td>{{ $supplement->tlSupplement()->first()->title}}</td>
                                                <td>{{ $supplement->adult}}</td>
                                                <td>{{($supplement->Child+$supplement->Minor+$supplement->Baby)>0?($supplement->Child+$supplement->Minor+$supplement->Baby):'-'}}</td>
                                                <td>{{ $supplement->price}} {{ $currencyText }}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        @endif
                        <!-- END passenger -->
                    </div>
                    <div class="bg-white p-4 mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                @if($book['status']==1)
                                    <a class="btn btn-primary"
                                        href="{{route('front.hotel.voucher',['id'=>$book['idCommande']])}}">@lang('generate.voucher')</a>
                                    <a class="btn btn-secondary"
                                        href="{{route('front.hotel.bill',['id'=>$book['idCommande']])}}">@lang('generate.bill')</a>
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
