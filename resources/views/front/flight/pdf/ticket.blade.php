<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <style>

        /* .table-label {
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

        .table   th {
            vertical-align: bottom;
            border: 1px solid #e9ecef;
            border-bottom: 2px solid #e9ecef;
            font-size: 10px;
        }

        .table td {
            font-size: 8px;
            border: 1px solid #e9ecef;
            padding: .75rem;
            vertical-align: top;
        }
*/
        table {
            width: 100%;
        }

        @page {
            margin: 0cm 0cm !important;
        }

        /* Define now the real margins of every page in the PDF */
        body {
            margin: 1cm;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* Verdana, Arial, sans-serif; */
            color: #125;
            font-size: 12px;
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
        .bg-blue{
            background-color: #2d376d;
            height: 60px;
            color: white;
        }

        .bg-grey{
            background-color: #b6bbbd;
        }
        .bg-light-grey{
            background-color: #ebeff0;
            font-weight: normal!important;
        }
        .bg-light-grey p{
            padding-top: 0;
            padding-bottom: 0;
            margin-top: 0;
            margin-bottom: 0;
            padding-left: 100px;
        }
        .bold{
            font-weight: bold!important;
        }
        .fs-10{
            font-size: 10px;
        }
        .fs-12{
            font-size: 12px;
        }
        .fs-14{
            font-size: 14px;
        }
        .fs-16{
            font-size: 16px;
        }
        .fs-18{
            font-size: 18px;
        }
        .normal{
            font-weight: normal!important;
        }

        h5{
            font-size: 10px;
            font-weight: bold;
        }

    </style>
</head>
<body>


@php($agency=\App\models\agency\TlAgency::first())

<table style="background-color: {{ $agency->color }}; margin-bottom:10px;">
    <tr>
        <th class="fs-14 mb-2" style="width : 70%; padding: 10px;">
            <h3>Votre voyage</h3>
            <span>Ref. Dossier :</span> {{$booking->recordLocator}}<br>
            <span>Date d’émission : </span>{{Carbon\Carbon::parse($booking->created_at)->format("d F Y")}}
        </th>
        <th style="width : 30%; text-align: right;">
            <div style="width: 70px; height: 70px; padding: 10px; border-radius: 50%; background: white; margin-left: 40px;" >
                <img style="width: 70px; padding-top:20px;" src="{{config('services.pathImg').$agency->logo}}">
            </div>
        </th>
    </tr>
</table>


<section class="mb-2" style="background-color: #b6bbbd!important; height:4cm">
    <div style="width:47%; float: left; background-color: #b6bbbd;">
        <table>
            <tr>
                <th style="padding-left: 10px; width : 300px;">
                    <span style="width: 140px; padding-top: 0; position: relative;
                    top: -7px;" class="normal"> Voyageurs
                    </span>
                </th>
            </tr>
            <tr>
                <th style="padding-left: 70px;">
                    @foreach($tickets as $ticket)
                        {{ $ticket["firstName"] }} {{ $ticket["lastName"] }}
                        <span class="normal fs-10">({{ $ticket["type"] }})</span>  <br>
                    @endforeach
                </th>
            </tr>
        </table>
    </div>
    <div style="width:53%; float: right; background-color: #b6bbbd;">
        <table>
            <tr>
                <th></th>
                <th class="normal">Agence</th>
                <th>{{ $agency->name }}</th>
            </tr>

            <tr>
                <th ></th>
                <th style="vertical-align: top" class="normal">Adresse</th>
                <th style="vertical-align: top">{{ $agency->address }}</th>
            </tr>
            <tr>
                <th ></th>
                <th class="normal">Téléphone</th>
                <th>{{ $agency->phone }}</th>
            </tr>
            <tr>
                <th ></th>
                <th class="normal">Fix</th>
                <th>{{ $agency->fix }}</th>
            </tr>
            <tr>
                <th ></th>
                <th class="normal">E-mail</th>
                <th>{{ $agency->email }}</th>
            </tr>
        </table>
    </div>
</section>


@php($carrier=\App\models\flight\TlCarrier::where('code',$booking->legs[0]->segments[0]->Carrier)->first())


@foreach($booking->legs as $leg)
@foreach($leg->segments as $segment)

    <p class="fs-16">
        @php($date = Carbon\Carbon::parse($segment->DepartureDateTime))

        Le

        {{ $date->formatLocalized('%d') }}

        @lang('generate.'.$date->formatLocalized('%B'))

        {{ $date->formatLocalized('%Y') }}
    </p>

    <table style="width:100%; padding-top: 0; margin-top: 0" class="bg-light-grey mb-2 pb-2">
        <tr style="width:100%; height: 30px;">
            <th style="width: 100px">
                <img class="card-img-top" alt="Card image cap"
                    style="width: 25px; padding-top: 20px; padding-left: 20px;"
                    src="https://manage.travelife.ma/img/aller.png">
            </th>
            <th class="fs-18 bold" >
                {{$carrier?$carrier->name:""}} {{$booking->legs[0]->segments[0]->Carrier}} {{$segment['FlightNumber']}}
            </th>
        </tr>
        <tr>
            <th style="width: 100px" >
                <img src="https://www.gstatic.com/flights/airline_logos/70px/{{$carrier->code}}.png"
                    style="max-width: 40px; padding-top: 20px; padding-left: 20px; margin-top: -10px;"
                    class="tooltip-hover">
            </th>
            <th class="bold"><span style="display: inline-block; width: 60px; margin-top: 3px;">Départ</span>
                {{Carbon\Carbon::parse($segment->DepartureDateTime)->format("d/m/Y")}} -
                {{Carbon\Carbon::parse($segment->DepartureDateTime)->format("H:i")}}
            </th>
            <th class="bold">
                @php($airport = \App\models\flight\Airport::where("AirportCode",$segment->Departure)->first())
                {{ $airport->CityName }}, {{$airport->AirportName}} - {{$segment->Departure}}
                <span class="normal">@if($segment->DepartureTerminal)(Terminal: {{$segment->DepartureTerminal}}) @endif</span>
            </th>
            <th></th>
        </tr>
        <tr>
            <th style="width: 100px"></th>
            <th class="bold"><span style="display: inline-block; width: 60px; margin-top: 3px;">Arrivée</span>
                {{Carbon\Carbon::parse($segment->ArrivalDateTime)->format("d/m/Y")}}
                - {{Carbon\Carbon::parse($segment->ArrivalDateTime)->format("H:i")}}
            </th>
            <th class="bold">
                @php($airport = \App\models\flight\Airport::where("AirportCode",$segment->Arrival)->first())
                {{ $airport->CityName }}, {{$airport->AirportName}} - {{$segment->Arrival}}
                <span class="normal">@if($segment->ArrivalTerminal)(Terminal: {{$segment->ArrivalTerminal}}) @endif</span>
            </th>
            <th></th>
        </tr>
        <tr>
            <th style="width: 100px"></th>
            <th>Durée</th>
            <th>{{gmdate('H:i',Carbon\Carbon::parse($segment->ArrivalDateTime)->diffInSeconds(Carbon\Carbon::parse($segment->DepartureDateTime)))}}</th>
        </tr>
        <tr>
            <th style="width: 100px"></th>
            <th>Statut de la réservation </th>
            <th>
                @foreach($tickets as $ticket)
                    @if($loop->first)
                        @if($ticket["number"])
                            Confirmé
                        @else
                            Réservé
                        @endif
                    @endif
                @endforeach
            </th>
        </tr>
        <tr>
            <th style="width: 100px"></th>
            <th>Classe </th>
            <th> {{$segment->cabineClass}} ({{$segment->BookingClass}})</th>
        </tr>
        <tr>
            <th style="width: 100px"></th>
            <th>Bagages autorisés </th>
            @if(!$segment->bagage || ($segment->bagage == "0P") || ($segment->bagage == "NIL") )
            <th> Baggage à main </th>
            @else
            <th>{{$segment->bagage}}</th>
            @endif
        </tr>
        {{-- <tr>
            <th style="width: 100px"></th>
            <th>Heure limite d'enregistrement</th>
            <th></th>
        </tr>
        <tr>
            <th style="width: 100px"></th>
            <th>Équipement</th>
            <th></th>
        </tr> --}}
    </table>
@endforeach
@endforeach


<div class="boxes">

    <div class="bg-light-grey mb-2">
        <p class="bold fs-12">Passagers et Détail du billet</p>
        @foreach($tickets as $ticket)
            <p class="fs-10">
                @if($ticket["number"])
                    Numéro de billet {{$booking->legs[0]->segments[0]->Carrier}} {{$ticket["number"]}} pour
                @endif
                {{$ticket["lastName"]}} {{$ticket["firstName"]}} ({{$ticket["type"]}})
            </p>
        @endforeach
    </div>

    <div class="bg-light-grey mb-2">
        <p class="bold fs-12">Informations générales</p>
        <p class="fs-10">
            {{ $agency->name }} vous souhaite un agréable voyage <br>
            {{ $agency->name }} wishes you a pleasant trip
        </p>
    </div>

    @php($carrier=\App\models\flight\TlCarrier::where('code',$booking->legs[0]->segments[0]->Carrier)->first())
    <div class="bg-light-grey mb-2">
        <p class="bold fs-12">Référence(s) dossier compagnie aérienne</p>
        <p class="fs-10">
            {{$booking->legs[0]->segments[0]->Carrier}} ({{$carrier?$carrier->name:""}}): {{$booking->recordLocator}}
        </p>
    </div>

    <div class="bg-light-grey mb-2">
        <p class="bold fs-12">Avis de protection des données</p>
        <p style="font-size: 10px; text-align: justify; padding-right:50px;">
            vos données personnelles seront traitées conformément à la politique de protection des données de la compagnie aérienne
            correspondante et, si vous avez réservé via un système global de distribution ("GDS"), avec sa politique de protection des données. Ces politiques sont
            disponibles ici : <a href="http://www.iatatravelcenter.com/privacy" target="_blank" rel="noopener noreferrer">http://www.iatatravelcenter.com/privacy</a> ou auprès de la compagnie aérienne ou du GDS directement. Vous devriez lire cette documentation, qui
            Page 1 de 2
            s'applique à votre réservation et spécifie, par exemple, comment vos données personnelles sont collectées, stockées, utilisées, publiées et transférées.
            (S’applique aussi pour des itinéraires incluant plusieurs compagnies aériennes)
        </p>
    </div>

    <div class="bg-light-grey mb-2">
        <p class="bold fs-12">Conditions</p>
        <p style="font-size: 10px;">
            @if($booking->Source!="GDSSource")
                Ce billet est non modifiable / Non remboursable
            @else
                <span style="font-size: 8px; text-align: left!important;">{!! substr($booking->rules,strpos($booking->rules, "PENALTIES (CAT #16)"),strpos($booking->rules, "TICKET ENDORSEMENT")-strpos($booking->rules, "PENALTIES (CAT #16)")) !!}</span>
                <span style="font-size: 8px; text-align: left!important;">{!! substr($booking->rules,strpos($booking->rules, "PENALTIES"),strpos($booking->rules, "VOLUNTARY CHANGES")-strpos($booking->rules, "PENALTIES")) !!}</span>

            @endif
        </p>
    </div>

</div>

</body>
</html>
