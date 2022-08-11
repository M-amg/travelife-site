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
                                                                        Vous avez demandé la réinitialisation de votre mot de passe</h1>

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
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: center;">
                                                                        Nous ne pouvons pas simplement vous envoyer votre ancien mot de passe.
                                                                        Un lien unique pour réinitialiser votre mot de passe a été généré pour vous.
                                                                        Pour réinitialiser votre mot de passe,
                                                                        cliquez sur le lien suivant et suivez les instructions.,
                                                                    </p>

                                                                    <table border="0" cellspacing="0" cellpadding="0"
                                                                            style="font-weight:200;font-family:Helvetica,Arial,sans-serif"
                                                                            width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align="center" style="padding:0 0 8px 0" width="100%">
                                                                                    <a href="https://www.jambotours.com/reset-password/{{$token}}"
                                                                                        style="text-align:center;padding:0.6em 1em;border-radius:600px;color:#ffffff;font-size:14px;text-decoration:none;font-weight:bold;"
                                                                                        class="button-color">Réinitialiser Mot de passe</a>
                                                                                </td>
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
