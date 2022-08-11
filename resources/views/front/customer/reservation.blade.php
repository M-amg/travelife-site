@extends('base.front')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css')}}">
@endsection
@section('body')


@include('front.customer.userheader')

    <div class="container mt-5">

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
            <div class="col-12 my-5">
                <h2 class="p-3">@lang('generate.reservedTravels') !</h2>
                <div class="px-4">

                    @foreach($commandLigne as $command)
                        @if($command)
                            <div class="row border py-3 align-items-center bg-white border-darck">


                                <div class="col-4 col-md-2 d-none d-md-block">
                                    <div class="bg-light b-2 text-center">
                                        <h3 class="mb-1 text-warning">{{Carbon\Carbon::parse($command['dateCreated'])->format('d')}}</h3>
                                        <p class="m-0">{{Carbon\Carbon::parse($command['dateCreated'])->format('M')}}</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <h3 style="font-weight: 800"> {{$command['title']}}</h3>
                                    <div class="d-md-none">
                                        <p class="mb-1 text-warning">{{Carbon\Carbon::parse($command['dateCreated'])->format('d/m/Y')}}</p>
                                    </div>
                                    <p class="m-0 text-uppercase"><strong>{{$command['type']=="AMADEUS"?"VOLS":$command['type']}}</strong></p>
                                    <p class="m-1"><span>@lang('generate.bookingStatus'):</span>
                                        @if($command['status']==0)<span
                                                class="badge badge-warning"> @lang('generate.waitConfirmation')</span>
                                        @elseif($command['status']==1)<span class="badge badge-success"> @lang('generate.confirmed')</span>
                                        @elseif($command['status']==2)<span
                                                class="badge badge-warning"> @lang('generate.waitCancel')</span>
                                        @else
                                            <span class="badge badge-danger"> @lang('generate.canceled')</span>
                                        @endif
                                    </p>
                                    <span class="line"></span>
                                    <p><span>@lang('generate.order'):</span> {{$command['ref']}}
                                        <span class="font-weight-bold">|</span> Total:  {{$command['total']*$currency}} {{$currencyText}}
                                    </p>

                                </div>
                                <div class="col-md-2 col-12">

                                    <a href="{{route($command['frontUrl'],['id'=>$command['command']])}}"
                                    class="btn btn-warning btn-block rounded-0 mb-2 text-white"><i class="fa fa-eye"></i> @lang('generate.details')</a>
                                    @if($command['status'] == 0 && $command["statusPayment"] != 1)
                                        <a href="{{ $command['PaymentUrl']}}" class="btn btn-dark btn-block rounded-0 mb-2"><i
                                                class="fa fa-credit-card"></i> @lang('generate.paid')</a>
                                    @endif

                                </div>


                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
@endsection
