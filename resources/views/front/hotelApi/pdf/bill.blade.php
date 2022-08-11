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
    <img src="{{asset('img/header2.jpg')}}" width="100%"/>
</header>
<div class="container-fluid">


    <table style="font-size: 12px;margin-top: 80px;">
        <tr>
            <td colspan="2"><h1 style="text-align: center">@lang('generate.bill')</h1></td>
        </tr>

        <tr>
            <td style="width: 50%;border: solid rgba(255,255,255,0.74) 1px;">

                <div>
                    <div><b>@lang('generate.lastname)</b>: {{$customer->civility}} {{$customer->lastName}} {{$customer->firstName}}</div>
                    <address>
                        <b>Tel</b>: {{$customer->tel}}
                        @if(!empty($customer->tel2))
                            /  {{$customer->tel2}}
                        @endif <br>
                        <b>Email</b>: {{$customer->email}}<br>
                        <b>@lang('generate.adresse')</b>: {{$customer->address}}

                    </address>
                </div>
            </td>
            <td style="width: 50%">
                <span style="font-weight: 600">Réf : #FA{{ $book['command']}}</span><br/>
                @lang('generate.bookingDate') : {{$book['date']}}<br/>



            </td>
        </tr>
    </table>

    <table class="table table-bordered">
        <tbody>


        <tr>
            <td class="table-label color-grey">@lang('generate.hotel')</td>
            <td class="table-label color-dark-2">
                <strong>{{$book['name']}} {{$book['category']}}*</strong>

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


        </tbody>

    </table>


</div>
<div style="position: relative;bottom: 0;">
    <p style="font-size: 10px;margin-bottom: 0;margin-top: 10px;text-align: right">@lang('Montants exprimés en Dirhams')</p>
    <table class="table table-bordered" >
        <thead>
        <tr style="font-size: 10px">
            <th style="padding: 3px;width: 50%">@lang('generate.designation')</th>
            <th style="padding: 3px;width: 20%">Qte</th>
            <th style="padding: 3px;width: 15%">@lang('generate.price') TTC</th>
        </tr>
        </thead>
        <tbody>

        @foreach($book['rooms'] as $room)
            <tr style="font-size: 10px">
                <td>{{ $room['name']}} <br>- Pension: {{ $room['pension']}}</td>
                <td>{{ $room['adult']}} @lang('generate.Adult')s {{ $room['infant']>0?$room['infant'].' Enfants':''}}</td>
                <td>{{ $book['price']}}</td>
            </tr>
        @endforeach

        <tr style="font-size: 10px">
            <td style="border:none;width: 80%" colspan="1">

            </td>
            <td style="width: 20%;text-align: right">Total TTC</td>
            <td><b>{{$book['price']}}</b></td>
        </tr>
        </tbody>
    </table>
    @php($nb= new \NumberFormatter('fr' , \NumberFormatter::SPELLOUT ))
    {{$nb->format($book['price'])}} {{ $currencyText }}


    <table style="margin:0 0 10px;font-size: 14px;line-height: 1.2;">

    </table>


</div>
<footer style="text-align: center">
    <img src="{{asset('img/footer.jpg')}}" width="100%"/>
</footer>
</body>
</html>
