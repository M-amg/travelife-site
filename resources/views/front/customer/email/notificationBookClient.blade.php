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
                <div  style="text-align: center;width:100%">
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
                                                                        Bienvenue à {{$agency->name}} !</h1>
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
                                                                        {{$customer->civility}} {{$customer->firstName}} {{$customer->lastName}},</h3>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: center;">
                                                                        @if($book->status==1)
                                                                            Votre réservation a été bien confirmée et
                                                                            nous vous remercions de votre confiance.
                                                                        @else
                                                                            Nous avons bien reçu votre réservation et
                                                                            nous vous remercions de votre confiance.
                                                                        @endif
                                                                    </p>
                                                                    <table class="table table-bordered">

                                                                        <tbody style="font-size: 14px;">
                                                                        <tr>
                                                                            <td class="table-label color-grey">Numéro commande</td>
                                                                            <td class="table-label color-dark-2"><strong>CO{{\Carbon\Carbon::parse($book->created_at)->format('ym').'-'.sprintf('%04u', $bookID)}}</strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Voyage:</td>
                                                                            <td class="table-label color-dark-2">
                                                                                <strong>{{$book->tlTravel()->first()->tlPackage()->first()->title}}</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Date:</td>
                                                                            <td class="table-label color-dark-2">
                                                                                Du <strong>{{Carbon\Carbon::parse($book->tlTravel()->first()->DepartureDate)->format('d/m/Y')}}</strong>
                                                                                au
                                                                                <strong>{{Carbon\Carbon::parse($book->tlTravel()->first()->arrivedDate )->format('d/m/Y')}}</strong>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="table-label color-grey">Date Réservation :</td>
                                                                            <td class="table-label color-dark-2">
                                                                                <strong> {{Carbon\Carbon::parse($book->created_at)->format('d/m/Y')}}</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">L'état de réservation :</td>
                                                                            <td class="table-label color-dark-2">
                                                                                @if($book->status==0)<span
                                                                                        style="color: orange"> En attente de confirmation</span>
                                                                                @elseif($book->status==1)<span
                                                                                        style="color: green"> Confirmé</span>
                                                                                @elseif($book->status==2)<span
                                                                                        style="color: orange"> En attente d'annulation</span>
                                                                                @else<span style="color: red"> Annulé</span>
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Nombre de participant :</td>
                                                                            <td class="table-label color-dark-2">
                                                                                <strong>{{$book->tlPassengers()->count()}} personne(s)</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="table-label color-grey">Extra :
                                                                            </td>
                                                                            <td class="table-label color-dark-2">
                                                                                @php($priceBenefit=0)
                                                                                @foreach($book->tlFormulaBenefitBooks as $benefitBook)
                                                                                    @php($priceBenefit+=$benefitBook->person*$benefitBook->price)
                                                                                    {{$benefitBook->tlBenefit()->first()->title}} (<strong>{{$benefitBook->person}} Bénéficiaires</strong>),
                                                                                @endforeach
                                                                            </td>
                                                                        </tr>

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
                                                                            <td class="table-label color-grey">Formule</td>
                                                                            <td class="table-label color-dark-2">
                                                                                {{$book->tlFormula()->first()->name}}
                                                                                <strong>
                                                                                    @if($adult>0 or $baby>0 or $infant>0)
                                                                                        (
                                                                                        @if($adult>0)
                                                                                            {{$adult}} {{__('generate.Adult')}}
                                                                                        @endif
                                                                                        @if($baby>0)
                                                                                            , {{$baby}} {{__('generate.Baby')}}
                                                                                        @endif
                                                                                        @if($infant>0)
                                                                                            , {{$infant}} {{__('generate.Infant')}}
                                                                                        @endif
                                                                                        )
                                                                                    @endif
                                                                                </strong></td>
                                                                        </tr>
                                                                        <tr style="line-height: 24px;font-weight:bold;">
                                                                            <td class="table-label title-color">Total:</td>
                                                                            <td class="table-label title-color"><strong>{{$commandLine->price*$currency}} {{$currencyText}}
                                                                                </strong></td>
                                                                        </tr>
                                                                        @if($book->etat==1)
                                                                            <tr>
                                                                                <td class="table-label">
                                                                                    <a href="{{route('front.package.EmailVoucher',['id'=>$bookID,'token'=>$customer->email_token])}}"
                                                                                    style="text-align:center;padding:0.6em 1em;border-radius:600px;color:#ffffff;font-size:14px;text-decoration:none;font-weight:bold"
                                                                                    class="button-color">Voucher</a></td>
                                                                                <td class="table-label">
                                                                                    <a href="{{route('front.package.EmailBill',['id'=>$bookID,'token'=>$customer->email_token])}}"
                                                                                    style="text-align:center;padding:0.6em 1em;border-radius:600px;color:#ffffff;font-size:14px;text-decoration:none;font-weight:bold"
                                                                                    class="button-color">Facture</a></td>
                                                                            </tr>
                                                                        @endif

                                                                        </tbody>

                                                                    </table>
                                                                    <div >
                                                                        <h3>{{!empty($book->tlPayment()->first())?$book->tlPayment()->first()->titre:"-"}}</h3>
                                                                        <p class="color-grey">{!! !empty($book->tlPayment()->first())?$book->tlPayment()->first()->description:"-" !!}</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
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
                                                            <span>{{$agency->mail}}</span><br>
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
