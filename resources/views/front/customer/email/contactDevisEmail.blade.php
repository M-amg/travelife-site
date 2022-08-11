<html>
<head>
    <style>
        .banner-color {
            background-color: #e9d606;
        }

        .title-color {
            color: #e9d606;
        }

        .button-color {
            background-color: #e9d606;
        }

        @media screen and (min-width: 500px) {
            .banner-color {
                background-color: #e9d606;
            }

            .title-color {
                color: #eb681f;
            }

            .button-color {
                background-color: #e9d606;
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
                                                                        @lang('generate.demandeDevis') !</h1>
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
                                                                    <div id=":m9" class="a3s aXjCH ">
                                                                        @lang('generate.fullName'): {{$nom}} {{$prenom}},<br><br>
                                                                        E-mail: <a href="mailto:{{$emailadress}}"
                                                                        target="_blank">{{$emailadress}}</a><br><br>
                                                                        @lang('generate.residenceCoutry'): {{$pays}}<br><br>
                                                                        @lang('generate.phone'): {{$tel}}<br><br>
                                                                        @lang('generate.departCity'): {{$villeDepart}}<br><br>
                                                                        Destination: {{$destination}}<br><br>
                                                                        @lang('generate.dateDepart') : {{$dateDepart}}<br><br>
                                                                        Budget: {{$budget}}<br><br>
                                                                        @lang('generate.durationDays'): {{$duree}}<br><br>
                                                                        @lang('generate.nbAdult')(s): {{$nbrAdulte}}<br><br>
                                                                        @lang('generate.nbChild')(s): {{$nbrEnfant}}<br><br>
                                                                        @lang('generate.travelDesc'): {{$description}}<br><br>
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
                                                            <span>33, AVENUE HASSAN SEGHIR CASABLANCA - MAROC</span><br>
                                                            <span>+212 522 44 82 59</span> | <span>+212 662 10 72 29</span> |
                                                            <span>contact@levoyageur.ma</span><br>
                                                            <span><a href="">levoyageur.ma</a> &copy; 2019 </span>
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
