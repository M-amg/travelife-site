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
            <td style="width: 50%;border: solid rgba(255,255,255,0.74) 1px;">

                <div>
                    <div>{{$customer->civility}} {{$customer->lastName}} {{$customer->firstName}}</div>
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
                <span style="font-weight: 600">Réf : #CO{{ $book['command']}}</span><br/>
                @lang('generate.bookingDate') : {{$book['date']}}<br/>
                La réservation
                @if($book['etat']==1)
                    <span style="color:green;">@lang('generate.confirmed')</span>
                @else
                    <span style="color:orange;">@lang('generate.waitConfirmation')</span>
                @endif

            </td>
        </tr>
    </table>
    <p style="font-size: 10px;margin-bottom: 0;margin-top: 10px;text-align: right">@lang('Montants exprimés en Dirham')</p>

    <table class="table table-bordered">
        <tbody>


        <tr>
            <td class="table-label color-grey">Vol {{$book['type']}}</td>
            <td class="table-label color-dark-2">
                <strong>{{$book['name']}}</strong>

            </td>
        </tr>


        <tr>
            <td class="table-label color-grey">Date de vol</td>
            <td class="table-label color-dark-2">

                <strong>Aller</strong> {{$book['Aller']}}
                <br>
                @if($book['Reteur'])
                    <strong>{{$book['Reteur']}}</strong>
                @endif
            </td>
        </tr>
        <tr>
            <td class="table-label color-grey">passagers</td>
            <td class="table-label color-dark-2">

                {{$book['passager']}}

            </td>
        </tr>


        </tbody>

    </table>


</div>
<div style="position: relative;bottom: 0;">

    <p style="float: right;margin-bottom: 100px;">
        <span style="font-size: 14px;font-weight: 700;">Total</span>
        <span style="font-size: 14px;font-weight: 700;">{{$book['price']}} {{ $currencyText }}</span>
    </p>
    <table style="margin:0 0 10px;font-size: 14px;line-height: 1.2;">

    </table>


</div>
<footer style="text-align: center">
    <img src="{{asset('img/footer.jpg')}}" width="100%"/>
</footer>
</body>
</html>
