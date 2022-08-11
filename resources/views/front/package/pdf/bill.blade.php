<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>


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
            font-size: 12px;
            border: 1px solid #e9ecef;
            padding: .75rem;
            vertical-align: top;
        }

        table {
            width: 100%;
        }

        @page {
            margin: 0cm 0cm;
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
<header style="text-align: center">
    <img src="{{config('services.pathImg').$agency->header}}" width="100%"/>
</header>
<div class="container-fluid">

    @php($benefitBook=0)
    @php($priceBenefit=0)
    @if(!empty($book->tlFormulaBenefitBooks()->first()))
        @foreach($book->tlFormulaBenefitBooks as $benefitBook)
            @php($priceBenefit+=$benefitBook->person*$benefitBook->price)
        @endforeach
    @endif
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
    @php($total=$priceBenefit+$priceRoom)
    <table style="font-size: 12px;margin-top: 120px;">
        <tr>
            <td colspan="2"><h1 style="text-align: center">@lang('generate.bill')</h1></td>
        </tr>
        <tr>
            <td style="width: 50%">
                <b>N° Facture</b> : #FA{{\Carbon\Carbon::parse($bill->created_at)->format('ym').'-'.sprintf('%04u', $bill->id)}}<br/>
                <b>Date Réservation :</b> {{\Carbon\Carbon::parse($book->created_at)->format('d/m/Y')}}<br/>
            </td>
            <td style="width: 50%;border: 1px solid rgba(255,255,255,0.74);">
                <b>{{$customer->civility}} {{$customer->lastName}} {{$customer->firstName}}</b><br>
                @if($customer->address) {{$customer->address}} <br> @endif
                @if($customer->tel) {{$customer->tel}} <br> @endif
                {{$customer->email}}
            </td>
        </tr>
    </table>

    {{-- <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="table-label color-grey">@lang('generate.travel')</td>
            <td class="table-label color-dark-2">
                <strong>{{$book->tlTravel()->first()->tlPackage()->first()->title}}</strong>
            </td>
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
            <td class="table-label color-grey">Date Réservation</td>
            <td class="table-label color-dark-2">
                <strong>{{\Carbon\Carbon::parse($bill->created_at)->format('d/m/Y')}}</strong>
            </td>
        </tr>

        </tbody>

    </table> --}}


</div>
<div style="position: relative;bottom: 0;">
    <p style="font-size: 10px;margin-bottom: 0;margin-top: 10px;text-align: right">@lang('Montants exprimés en Dirhams')</p>
    <table class="table table-bordered">
        <thead>
        <tr style="font-size: 10px">
            <th style="padding: 3px;width: 50%;font-size:12px;">@lang('generate.designation')</th>
            <th style="padding: 3px;width: 20%;font-size:12px;">Qte</th>
            <th style="padding: 3px;width: 15%;font-size:12px;">@lang('generate.price') TTC</th>
        </tr>
        </thead>
        <tbody>
            @php(   $formula=\App\models\package\TlFormula::all()->where('id', $book->tl_formula_id))
            @php(   $rooms = \App\models\package\TlPackageRoom::all()->whereIn("id", unserialize($formula->first()->room)))
            <tr style="font-size: 10px">
                @php($rowspan=0)
                <td>
                    @foreach($rooms as $room)
                        @php( $stay = $room->tlPackageHotelInfo()->first()->tlStays()->where('tl_travel_id', $book->tl_travel_id)->first())

                        {{$room->tlPackageHotelInfo()->first()->name." ".$room->tlPackageHotelInfo()->first()->category}}*,
                        {{ $room->tlPackageHotelInfo()->first()->tlCity()->first()->name }}<br/>
                        {{$room->tlPackageHotelInfo()->first()->pension?"pension: ".$room->tlPackageHotelInfo()->first()->pension:"Hébergement Seul"}}
                        <br/> du {{ \Carbon\Carbon::parse($stay->checkIn)->format("d-m-Y") }} a
                        {{ \Carbon\Carbon::parse($stay->checkOut)->format("d-m-Y") }}<br/>
                        {{$room->name}}
                        - {{$room->isOpen==1?"Ouverte":""}} {{$room->typeLodging=="man"?"pour les hommes":"pour les femmes"}}
                        @php($rowspan++)
                    @endforeach
                </td>
                <td>   {{$book->tlPassengers()->count()}} personne(s)</td>
                <td>    {{ number_format($cmd->price-$priceBenefit, 0, ',', ' ') }}        </td>
            </tr>
            @foreach($book->tlFormulaBenefitBooks as $benefitBook)
                @php($s=$benefitBook->person*$benefitBook->price)

                <tr style="font-size: 10px">
                    <td>
                        {{$benefitBook->tlBenefit()->first()->title}}
                    </td>
                    <td>{{ $benefitBook->person}}</td>
                    <td>{{ number_format($s, 0, ',', ' ') }}</td>
                </tr>
            @endforeach
            @php($discount=0)
            @if(!empty($cmd->remise))
                <tr style="font-size: 10px">
                    <td>{{$cmd->desc_remise}}</td>
                    <td>
                        {{$cmd->remise}}
                        {{$cmd->price_remise==2?"MAD":"%"}}
                    </td>
                    <td>
                        @if($cmd->price_remise==2)
                            -{{$cmd->remise}}
                            @php($discount=$cmd->remise)
                        @else
                            -{{($cmd->price*$cmd->remise)/100}}
                            @php($discount=$cmd->price*$cmd->remise)
                        @endif
                    </td>
                </tr>
            @endif

            <tr style="font-size: 10px">
                <td style="border:none;width: 80%">
                </td>
                <td style="background: #ececec;width: 20%">Total</td>
                <td><b>{{ number_format($cmd->price-$discount, 0, ',', ' ') }}</b></td>
            </tr>

        </tbody>
    </table>
    @php($nb= new \NumberFormatter('fr' , \NumberFormatter::SPELLOUT ))
    <span style="font-size: 10px">Arrêtée la présente facture à la somme de :</span><br>
    <span style="font-size: 10px;font-weight: bold">{{$nb->format($cmd->price)}} MAD</span><br>

    <table style="margin-bottom: 100px;font-size: 12px">

    </table>

    <table style="margin:0 0 10px;font-size: 14px;line-height: 1.2;">

    </table>


</div>
<footer style="text-align: center">
    <img src="{{config('services.pathImg').$agency->footer}}" width="100%"/>
</footer>
</body>
</html>
