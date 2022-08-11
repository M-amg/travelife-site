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
            font-size: 10px;
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
    </style>
</head>
<body>
<header style="text-align: center">
    <img src="{{config('services.pathImg').$agency->header}}" width="100%"/>
</header>
<div class="container-fluid">


    <table style="font-size: 12px;margin-top: 80px;">
        <tr>
            <td style="text-align: center" colspan="2"><h1>Voucher</h1></td>
        </tr>
        <tr>
            <td style="text-align: left;width: 33%">
                <b>Voyage: </b> {{$book->tlTravel()->first()->tlPackage()->first()->title}}<br>
                <b>From</b> {{Carbon\Carbon::parse($book->tlTravel()->first()->DepartureDate)->format('d/m/Y')}}<br>
                <b>To</b> {{Carbon\Carbon::parse($book->tlTravel()->first()->arrivedDate )->format('d/m/Y')}}<br>

            </td>
            <td style="text-align: center;width: 33%">
                <h4 style="margin-bottom: 3px"><b>Hôtel: VOUCHER</b></h4>
                <b>Booking ID </b>:
                CO{{\Carbon\Carbon::parse($book->created_at)->format('ym').'-'.sprintf('%04u', $bookID)}} <br>
                <b>Booked On </b>: {{\Carbon\Carbon::parse($book->created_at)->format('d/m/Y')}}
            </td>
            <td style="text-align: right;width: 33%">

                <h4 style="margin-bottom: 3px">
                    <b>{{$customer->civility}} {{$customer->lastName}} {{$customer->firstName}}</b></b></h4>
                {{$customer->address}}<br>
                {{$customer->tel}}<br>
                {{$customer->email}}

            </td>
            @if(!empty($book->tlTravel()->first()->tlPackage()->first()->tlSuppliers()->first()))
                @php($supplier=$book->tlTravel()->first()->tlPackage()->first()->tlSuppliers()->first())
                <td style="width: 50%">
                    <span style="font-weight: 600">Supplier :{{$supplier->name }}</span><br/>
                    <address>
                        {{$supplier->address}}<br>
                        {{$supplier->phone}}<br>
                        {{$supplier->email}}
                    </address>
                </td>
            @endif

        </tr>
    </table>

</div>
<div style="position: relative;bottom: 0;">
    <h3 class="block-title">@lang('generate.passager')</h3>
    <table class="table table-bordered">
        <thead>
        <tr>

            <th>@lang('generate.firstname')</th>
            <th>@lang('generate.lastname')</th>
            <th>@lang('generate.dob')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($book->tlPassengers as $passenger)
            @php($passenger = $passenger->pivot)
            <tr>

                <td>{{ $passenger->firstName }}</td>
                <td>{{ $passenger->lastName }}</td>
                <td>{{ $passenger->dob }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <h3 class="block-title">Hôtel(s) & Room(s)</h3>
    @php(   $formula=\App\models\package\TlFormula::all()->where('id', $book->tl_formula_id))
    @php(   $rooms = \App\models\package\TlPackageRoom::all()->whereIn("id", unserialize($formula->first()->room)))

    <table class="table table-inverse table-bordered">
        <thead>
        <tr>
            <th>Hôtel</th>
            <th>City</th>
            <th>Pension</th>
            <th>Room</th>
            <th>Persons</th>
            <th>Check-in</th>
            <th>Check-out</th>
        </tr>
        </thead>
        <tbody>
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
                    - {{$room->isOpen==1?"Open":"Close"}} {{$room->typeLodging=="man"?"for men":"for women"}}</td>
                <td>{{$book->tlPassengers()->count()}}</td>
                <td>{{ \Carbon\Carbon::parse($stay->checkIn)->format("d-m-Y") }}</td>
                <td>{{ \Carbon\Carbon::parse($stay->checkOut)->format("d-m-Y") }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    @php($tlFormulaBenefitBooks = $book->tlFormulaBenefitBooks()->first())
    @if(!empty($tlFormulaBenefitBooks))
        <h3 class="block-title">Benefit</h3><br>
        <table class="table table-bordered">
            <thead>
            <tr class="custom-panel bg-dr-blue color-white">
                <th>Title</th>
                <th>NB Passenger</th>
            </tr>
            </thead>
            <tbody>
            @foreach($book->tlFormulaBenefitBooks as $benefitBook)
                <tr>
                    <td>
                        {{$benefitBook->tlBenefit()->first()->title}}
                    </td>
                    <td>{{ $benefitBook->person}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

</div>
<footer style="text-align: center">
    <img src="{{config('services.pathImg').$agency->footer}}" width="100%"/>
</footer>
</body>
</html>
