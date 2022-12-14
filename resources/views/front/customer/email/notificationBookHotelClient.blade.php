<!DOCTYPE html>
@php($agency=\App\models\agency\TlAgency::all()->first())

<html>
<head>
    <style>
        .banner-color {
            background-color: {{$agency->color}};
        }

        .title-color {
            color: {{$agency->color}};
        }

        .button-color {
            background-color: {{$agency->color}};
        }

        @media screen and (min-width: 500px) {
            .banner-color {
                background-color: {{$agency->color}};
            }

            .title-color {
                color: #eb681f;
            }

            .button-color {
                background-color: {{$agency->color}};
            }
        }
    </style>
</head>
<body>
<div style="background-color:#ececec;padding:0;margin:0 auto;font-weight:200;width:100%!important">
    <table align="center" border="0" cellspacing="0" cellpadding="0"
           style="table-layout:fixed;font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
        <tbody>

        <tr>
            <td align="center">
                <div style="text-align: center;width:100%">
                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0"
                           style="margin:0 auto;max-width:512px;font-weight:200;width:inherit;font-family:Helvetica,Arial,sans-serif"
                           width="512">
                        <tbody>

                        <tr>
                            <td align="left">
                                <table border="0" cellspacing="0" cellpadding="0"
                                       style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                    <tbody>
                                    <tr>
                                        <td width="100%">
                                            <table border="0" cellspacing="0" cellpadding="0"
                                                   style="font-weight:200;font-family:Helvetica,Arial,sans-serif"
                                                   width="100%">
                                                <tbody>
                                                <tr>
                                                    <td align="center" bgcolor="#8BC34A"
                                                        style="padding:20px 48px;color:#ffffff" class="banner-color">
                                                        <table border="0" cellspacing="0" cellpadding="0"
                                                               style="font-weight:200;font-family:Helvetica,Arial,sans-serif"
                                                               width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" width="100%">
                                                                    <h1 style="padding:0;margin:0;color:#ffffff;font-weight:500;font-size:20px;line-height:24px">
                                                                        Bienvenue ?? {{$agency->name}} !</h1>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="padding:20px 0 10px 0">
                                                        <table border="0" cellspacing="0" cellpadding="0"
                                                               style="font-weight:200;font-family:Helvetica,Arial,sans-serif"
                                                               width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" width="100%"
                                                                    style="padding: 0 15px;text-align: justify;color: rgb(76, 76, 76);font-size: 12px;line-height: 18px;">
                                                                    <h3 style="font-weight: 600; padding: 0px; margin: 0px; font-size: 16px; line-height: 24px; text-align: center;"
                                                                        class="title-color">
                                                                        {{$customer->civility}} {{$customer->firstName}} {{$customer->lastName}}
                                                                        ,</h3>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: center;">
                                                                        @if($book->status==1)
                                                                            Votre r??servation a ??t?? bien confirm??e et
                                                                            nous vous remercions de votre confiance.
                                                                        @else
                                                                            Nous avons bien re??u votre r??servation et
                                                                            nous vous remercions de votre confiance.
                                                                        @endif
                                                                    </p>
                                                                    <table class="table table-bordered">
                                                                        <tbody style="font-size: 14px;">
                                                                        <tr>
                                                                            <td class="table-label color-grey">Commande
                                                                                #R??f
                                                                            </td>
                                                                            <td class="table-label color-dark-2">
                                                                                <strong>CO{{\Carbon\Carbon::parse($book->created_at)->format('ym').'-'.sprintf('%04u', $bookID)}}</strong>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Hotel
                                                                            </td>
                                                                            <td class="table-label color-dark-2">
                                                                                <strong>{{$book->tlHotel()->first()->name}} {{$book->tlHotel()->first()->category}}
                                                                                    *</strong>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Adresse
                                                                            </td>
                                                                            <td class="table-label color-dark-2">
                                                                                <strong>
                                                                                    {{$book->tlHotel()->first()->address}}
                                                                                </strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Date de
                                                                                r??servation
                                                                            </td>
                                                                            <td class="table-label color-dark-2">
                                                                                Du
                                                                                <strong>{{$book->checkIn}}</strong>
                                                                                au
                                                                                <strong>{{$book->checkOut}}</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Etat de
                                                                                r??servation
                                                                            </td>
                                                                            <td class="table-label color-dark-2">
                                                                                <strong>
                                                                                    @if($book->status==0)<span
                                                                                            style="color: orange"> En attente de confirmation</span>
                                                                                    @elseif($book->status==1)<span
                                                                                            style="color: green"> Confirm??</span>
                                                                                    @elseif($book->status==2)<span
                                                                                            style="color: orange"> En attente d'annulation</span>
                                                                                    @else<span style="color: red"> Annul??</span>
                                                                                    @endif
                                                                                </strong></td>
                                                                        </tr>
                                                                        <tr style="line-height: 24px;font-weight:bold;">
                                                                            <td class="table-label title-color">Total:</td>
                                                                            <td class="table-label title-color"><strong>{{$book->price}} {{$currencyText}}
                                                                                </strong></td>
                                                                        </tr>

                                                                        @if($book->status==1)
                                                                            <tr>
                                                                                <td class="table-label">
                                                                                    <a href="{{route('front.hotel.EmailVoucher',['id'=>$bookID,'token'=>$customer->email_token])}}"
                                                                                       style="text-align:center;padding:0.6em 1em;border-radius:600px;color:#ffffff;font-size:14px;text-decoration:none;font-weight:bold"
                                                                                       class="button-color">Voucher</a></td>
                                                                                <td class="table-label">
                                                                                    <a href="{{route('front.hotel.EmailBill',['id'=>$bookID,'token'=>$customer->email_token])}}"
                                                                                       style="text-align:center;padding:0.6em 1em;border-radius:600px;color:#ffffff;font-size:14px;text-decoration:none;font-weight:bold"
                                                                                       class="button-color">Facture</a></td>
                                                                            </tr>
                                                                        @endif

                                                                        </tbody>
                                                                    </table>
                                                                    @if($book->status!=1)

                                                                    <div>
                                                                        <h3>{{!empty($book->tlPayment()->first())?$book->tlPayment()->first()->titre:""}}</h3>
                                                                        <p class="color-grey">{!! !empty($book->tlPayment()->first())?$book->tlPayment()->first()->description:"" !!}</p>
                                                                    </div>
                                                                    @endif

                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0"
                                       style="padding:0 24px;color:#999999;font-weight:200;font-family:Helvetica,Arial,sans-serif"
                                       width="100%">
                                    <tbody>
                                    <tr>
                                        <td align="center" width="100%">
                                            <table border="0" cellspacing="0" cellpadding="0"
                                                   style="font-weight:200;font-family:Helvetica,Arial,sans-serif"
                                                   width="100%">
                                                <tbody>
                                                <tr>
                                                    <td align="center" valign="middle" width="100%"
                                                        style="border-top:1px solid #d9d9d9;padding:12px 0px 20px 0px;text-align:center;color:#4c4c4c;font-weight:200;font-size:12px;line-height:18px">
                                                        <p>
                                                             <span>{{$agency->address}}
                                                            </span><br>
                                                            <span>{{$agency->phone}}</span>
                                                            |<span>{{$agency->fix}}</span> |
                                                            <span>{{$agency->email}}</span><br>
                                                            <span><a href="https://{{$agency->domain_name}}/">{{$agency->domain_name}}</a>  &copy; {{Carbon\Carbon::now()->format('Y')}} </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" width="100%">
                                            <table border="0" cellspacing="0" cellpadding="0"
                                                   style="font-weight:200;font-family:Helvetica,Arial,sans-serif"
                                                   width="100%">
                                                <tbody>
                                                <tr>
                                                    <td align="center" style="padding:0 0 8px 0" width="100%"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
