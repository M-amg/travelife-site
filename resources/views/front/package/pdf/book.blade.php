<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        p.text-center {
            text-align: center;
        }

        .table-label {
            width: 50%;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
            border: 1px solid #e9ecef;
        }

        .table th {
            vertical-align: bottom;
            border: 1px solid #e9ecef;
            border-bottom: 2px solid #e9ecef;
            font-size: 12px;

        }

        .table td {
            border: 1px solid #e9ecef;
            padding: .75rem;
            vertical-align: top;
            font-size: 12px;
        }

        .text-right {
            text-align: right;
        }

        table {
            width: 100%;
        }

        .img-fluid {
            height: 100%;
        }

        /* Define now the real margins of every page in the PDF */
        body {
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
            font-family: Verdana, Arial, sans-serif;
        }

        /* Define the header rules */
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            width: 100%;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 4cm;
            width: 100%;

        }
    </style>
</head>
<body>

    @if (!empty($agency->header))
        <header style="text-align: center">
            <img src="{{config('services.pathImg').$agency->header}}" width="100%"/>
        </header>
    @endif

<div class="container-fluid">


    <table style="font-size: 12px;margin-top: 80px;">
        <tr>
            <td style="width: 50%;border: solid rgba(255,255,255,0.74) 1px;">

                <div>
                    <b style="text-transform: capitalize">{{$customer->civility}} {{$customer->lastName}} {{$customer->firstName}}</b>
                    <address>
                        {{$customer->address}}<br>
                        {{$customer->tel}}<br>
                        @if(!empty($customer->tel2))
                            {{$customer->tel2}}<br>
                        @endif
                        {{$customer->email}}
                    </address>

                </div>

            </td>
            <td style="width: 50%">
                <span style="font-weight: 600">Réf : CO{{\Carbon\Carbon::parse($book->created_at)->format('ym').'-'.sprintf('%04u', $bookID)}}</span><br/>
                Date Reservation : {{Carbon\Carbon::parse($book->created_at)->format('d/m/Y')}}<br/>
                @lang('generate.bookingStatus')
                @if($book->etat==1)
                    <span style="color:green;">@lang('generate.confirmed')</span>
                @else
                    <span style="color:orange;">@lang('generate.waitConfirmation')</span>
                @endif

            </td>
        </tr>
    </table>
    <p class="text-right" style="font-size: 12px;margin: 0">@lang('Montants exprimés en Dirham')</p>
    <table class="table table-bordered">

        <tbody>

        <tr>
            <td class="table-label color-grey">@lang('generate.travel)</td>
            <td class="table-label color-dark-2">
                <strong>{{$book->tlTravel()->first()->tlPackage()->first()->title}}</strong>
            </td>
        </tr>

        <tr>
            <td class="table-label color-grey">@lang('generate.bookingDate')</td>
            <td class="table-label color-dark-2">
                @lang('generate.oF')
                <strong>{{Carbon\Carbon::parse($book->tlTravel()->first()->DepartureDate)->format('d/m/Y')}}</strong>
                @lang('generate.at')
                <strong>{{Carbon\Carbon::parse($book->tlTravel()->first()->arrivedDate )->format('d/m/Y')}}</strong>
            </td>
        </tr>
        @php($priceBenefit=0)
        @foreach($book->tlFormulaBenefitBooks as $benefitBook)
            @php($priceBenefit+=$benefitBook->person*$benefitBook->price)
        @endforeach
        @php($adult=0)
        @php($baby=0)
        @php($infant=0)
        @php($priceRoom=0)
        @foreach($book->tlFormulaRoomBooks as $roomBook)
            @php($adult+=$roomBook->adult)
            @php($baby+=$roomBook->infant)
            @php($infant+=$roomBook->baby)
            @php($priceRoom+=$roomBook->price)
        @endforeach
        <tr>
            <td class="table-label color-grey">{{$book->tlFormula()->first()->name}} </td>
            <td class="table-label color-dark-2"><strong>
                    @if($adult>0)
                        {{$adult}} {{__('generate.Adult')}}
                    @endif
                    @if($baby>0)
                        , {{$baby}} {{__('generate.Baby')}}
                    @endif
                    @if($infant>0)
                        , {{$infant}} {{__('generate.Infant')}}
                    @endif
                </strong></td>
        </tr>


        </tbody>

    </table>


</div>
@if(!empty($book->tlPassengers()->first()))
    <div style="position: relative;bottom: 0;">
        <h3 class="block-title">{{ __('generate.passenger') }}</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Civileté</th>
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
                    <td>{{ $passenger->lastName}}</td>
                    <td>{{ $passenger->firstName }}</td>
                    <td>{{ $passenger->dob }}</td>
                    <td>{{ $passenger->passport }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        @endif
        @if(!empty($book->tlFormulaBenefitBooks()->first()))
            <h3 class="block-title">{{ __('generate.benefit') }}</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>{{ __('generate.title') }}</th>
                    <th>NB {{ __('generate.passenger') }}</th>
                    <th>{{ __('generate.price') }}</th>

                </tr>
                </thead>
                <tbody>
                @php($priceBenefit=0)
                @foreach($book->tlFormulaBenefitBooks as $benefitBook)
                    <tr>
                        <td>
                            {{$benefitBook->tlBenefit()->first()->title}}
                        </td>
                        <td>{{ $benefitBook->person}} Bénéficiaires</td>
                        <td>{{ $benefitBook->person*$benefitBook->price }}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        <p style="float: right;margin-bottom: 100px;">
            <span style="font-size: 14px;font-weight: 700;">Total</span>
            <span style="font-size: 14px;font-weight: 700;">{{$priceBenefit+$priceRoom}} {{ $currencyText }}</span>
        </p>


    </div>
    @if (!empty($agency->footer))
        <footer style="text-align: center">
            <img src="{{config('services.pathImg').$agency->footer}}" width="100%"/>
        </footer>
    @endif

</body>
</html>
