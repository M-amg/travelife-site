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
        <tr><td colspan="2"><h1 style="text-align: center">{{ strtoupper(trans('generate.voucher')) }}</h1></td></tr>
        <tr>
            <td style="width: 50%;border: solid rgba(255,255,255,0.74) 1px;">

                <div>
                    <div><b>@lang('generate.lastname'): </b> {{$customer->civility}} {{$customer->lastName}} {{$customer->firstName}}</div>
                    <address>
                        <b>Tel: </b> {{$customer->tel}}
                        @if(!empty($customer->tel2))
                            / {{$customer->tel2}}
                        @endif<br>
                        <b>Email: </b> {{$customer->email}}<br>
                        <b>@lang('generate.adresse'): </b>{{$customer->address}}
                    </address>
                </div>
            </td>
            @if(!empty($book['Supplier']))
                <td style="width: 50%">
                    <span style="font-weight: 600">Supplier :{{$book['Supplier']['name'] }}</span><br/>
                    <address>
                        {{$book['Supplier']['address']}}<br>
                        {{$book['Supplier']['phone']}}<br>
                        {{$book['Supplier']['email']}}
                    </address>
                </td>
            @endif
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
            <td class="table-label color-grey">Date Book</td>
            <td class="table-label color-dark-2">
                checkIn :
                <strong>{{$book['checkIn']}}</strong>
                checkOut :
                <strong>{{$book['checkOut']}}</strong>
            </td>
        </tr>


        </tbody>

    </table>


</div>
<div style="position: relative;bottom: 0;">
    <h3 class="block-title">@lang('generate.passager')</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Type</th>
            <th>@lang('generate.firstname')</th>
            <th>@lang('generate.lastname')</th>
            <th>@lang('generate.dob')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($book['passengers'] as $passenger)
            <tr>
                <td>{{ $passenger['type']}}</td>
                <td>{{ $passenger['firstName']}}</td>
                <td>{{ $passenger['lastName']}}</td>
                <td>{{ $passenger['dob']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h3 class="block-title">@lang('generate.rooms')</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@lang('generate.room')</th>
            <th>Pension</th>
            <th>@lang('generate.Adult')</th>
            <th>@lang('generate.Child')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($book['rooms'] as $room)
            <tr>
                <td>{{ $room['name']}}</td>
                <td>{{ $room['pension']}}</td>
                <td>{{ $room['adult']}}</td>
                <td>{{ $room['infant']>0?$room['infant']:'-'}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <table style="margin:0 0 10px;font-size: 14px;line-height: 1.2;">

    </table>


</div>
<footer style="text-align: center">
    <img src="{{asset('img/footer.jpg')}}" width="100%"/>
</footer>
</body>
</html>
