@extends('base.front')
@section('style')
<!--popup delete-->
<link rel="stylesheet" href="{{asset('assets/js/plugins/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('body')
    <!-- DETAIL WRAPPER -->
    @include('front.customer.userheader')
    <div class="container mt-5 pt-5">
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
                <div class="detail-content-block">
                    <div class="confirm-label bg-dr-blue-2 radius-5">
                        <img class="confirm-img" src="{{asset('assets/img/thx_icon.png')}}" alt="">
                        @if($status === "BOOKED")
                        <div class="alert alert-warning row" role="alert">
                            <div class="col-1 p-2"><i class="fas fa-exclamation-triangle"></i></div>
                            <div class="col-11">
                                <div class="confirm-title color-white">{{ __('generate.thankYou') }}.</div>
                                <div class="confirm-text color-white-light">{{ __('generate.confirmationSendEmail') }}.</div>
                            </div>
                        </div>
                        @endif
                        <a href="{{route('customer.pdf.book.flight',['id'=>$command->id])}}"
                            class="btn btn-outline-info"><i class="fas fa-print"></i> Détails de réservation</a>
                    </div>
                </div>
                <div class="detail-content-block">
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
                                    <td class="table-label color-grey">
                                        <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$book->legs()->first()->segments()->first()->Carrier}}.png">
                                    </td>
                                    <td class="table-label color-dark-2">
                                        <strong>
                                            N° de @lang('generate.flight'): {{$book->legs()->first()->segments()->first()->FlightNumber}}
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label color-grey">@lang('generate.order')</td>
                                    <td class="table-label color-dark-2">
                                        <strong>CO{{\Carbon\Carbon::parse($command->created_at)->format('ym').'-'.sprintf('%04u', $command->id)}}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label color-grey">{{ __('generate.bookingNbr') }}</td>
                                    <td class="table-label color-dark-2">
                                        <strong>{{$book->recordLocator}}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label color-grey">  {{ __('generate.vol') }}</td>
                                    <td class="table-label color-dark-2">
                                        <strong> @php ($vol = $book->legs()->count())
                                            @if($vol==1)
                                                @lang('generate.oneWayTicket')
                                            @elseif($vol==2)
                                            @lang('generate.roundTrip')
                                            @else
                                                -
                                            @endif
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label color-grey">Destination</td>
                                    <td class="table-label color-dark-2">
                                        <strong>
                                            <span>{{ $book->legs()->first()->segments()->first()->Departure }}</span>
                                            /
                                            <span>{{ $book->legs()->first()->segments()->orderBy('id', 'DESC')->first()->Arrival }}</span>



                                        </strong>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-label color-grey">@lang('generate.depart')</td>
                                    <td class="table-label color-dark-2">
                                        @lang('generate.oF')
                                        <strong>{{Carbon\Carbon::parse($book->legs()->first()->segments()->first()->DepartureDateTime)->format('d/m/Y H:i')}}</strong>
                                        @lang('generate.at')
                                        <strong>{{Carbon\Carbon::parse($book->legs()->first()->segments()->orderBy('id', 'DESC')->first()->ArrivalDateTime )->format('d/m/Y H:i')}}</strong>
                                    </td>
                                </tr>



                                <tr>
                                    <td class="table-label color-grey">@lang('generate.bookingStatus')</td>
                                    <td class="table-label color-dark-2">
                                        <b class="{{$status=='CANCELLED'?'text-danger':'text-primary'}}">{{$status}}</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-label color-grey">Total</td>
                                    <td class="table-label color-dark-2">
                                        {{$book->tlPassengers()->count()}} @lang('generate.passenger')(s)<br>
                                        <h2 class="c-txt-or pt-0 bold fs-22 px-0">{{$book->price}}
                                            <span class="fs-14">{{ $currencyText }}</span> </h2>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            @if($status === "BOOKED")
                                @if($book->status == 1 && ($statusPayment == 1))
                                    <a style="margin: 5px" href="#" id="Emettre{{$book->id}}" class="FA-Emettre btn btn-outline-success">@lang('generate.ticketE')</a>
                                    <form method="get" action="{{route('flight.ticketBooking',['id' => $book->id])}}" id="form-Emettre">
                                    </form>
                                @else
                                    <a style="margin: 5px" href="{{ $command['PaymentUrl']}}" class="btn btn-outline-primary">@lang('generate.paid')</a>
                                @endif
                                <a style="margin: 5px" href="#" id="cancel{{$book->id}}" class="FA-cancel btn btn-outline-danger">@lang('generate.cancelBooking')</a>
                                <form method="get" action="{{route('flight.cancelBooking',['id' => $book->id])}}" id="form-cancel">
                                </form>
                            @elseif($status === "TICKETED")
                                <a style="margin: 5px" href="{{route('flight.ticket', [" id " => $command->id])}}" class="btn btn-outline-primary">@lang('generate.downloadTicket')</a>
                                <a style="margin: 5px" href="#" id="cancelTicket" class="FA-cancelTICKETED btn btn-outline-danger">@lang('generate.cancelBooking')</a>
                                <form method="get" action="{{route('flight.cancelTicket',['id' => $book->id])}}" id="form-cancelTicket">
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
<script>

        $('.FA-Emettre').click(function () {

            swal.fire({
                    title: "Êtes-vous sûr?",
                    text: "Voulez vous Emettre le billet ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "Oui, Emettre!",
                    cancelButtonText: "Non, Annuler!!",
                    })
                .then((check) => {
                    if (check.value === true) {
                        $("#form-Emettre").submit();
                    }else{


                    }
                });

        });
        $('.FA-cancel').click(function () {

                swal.fire({
                        title: "Êtes-vous sûr?",
                        text: "Vous allez annuler cette réservation",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "Oui!",
                        cancelButtonText: "Non!"
                        })
                    .then((check) => {
                        if (check.value === true) {
                            $("#form-cancel").submit();
                        }else{


                        }
                    });

                });

     $('.FA-cancelTICKETED').click(function () {

            swal.fire({
                    title: "Êtes-vous sûr?",
                    text: "Vous allez annuler cette le billet",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "Oui!",
                    cancelButtonText: "Non!"
                    })
                .then((check) => {
                    if (check.value === true) {
                        $("#form-cancelTicket").submit();
                    }else{


                    }
                });

        });
</script>
@endsection
