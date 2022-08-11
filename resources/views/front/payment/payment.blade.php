<html>

<head>

    <title>3D PAY HOSTING</title>

    <meta http-equiv="Content-Language" content="tr">


    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">


    <meta http-equiv="Pragma" content="no-cache">


    <meta http-equiv="Expires" content="now">

    <link rel="shortcut icon" href="{{asset('front/favicon.png')}}"/>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('front/css/jquery-ui.structure.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('front/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('front/css/phone.css')}}" rel="stylesheet" type="text/css"/>
</head>


<body onload="javascript:moveWindow()">
<div class="loading">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_four"></div>
            <div class="object object_three"></div>
            <div class="object object_two"></div>
            <div class="object object_one"></div>
        </div>
    </div>
</div>
@php

    $agency = App\models\agency\TlAgency::first();
    $orgClientId  = $agency->cmiId;
    $storeKey = $agency->storyKey;
    $cmiUrl = $agency->cmiUrl;
    $orgAmount = $postParams['amount'];
    $orgOkUrl = "https://".$agency->domain_name."/backBook";
    $orgFailUrl = "https://".$agency->domain_name."/failUrl";
    $shopurl = $postParams['shopurl'];
    $orgTransactionType = "PreAuth";
    $orgRnd =  microtime();
    $orgCallbackUrl = $postParams['callbackUrl'];
    $orgCurrency = "504";
    $oid=(new \DateTime())->format('Y-m-d_H-i-s');

@endphp


<center>

    <form name="pay_form" method="post" action="{{asset('CMI/SendData.php')}}">

        <input type="hidden" name="product" value="{{$postParams['product'] }}">
        <input type="hidden" name="clientid" value="{{$orgClientId }}">
        <input type="hidden" name="storeKey" value="{{$storeKey }}">
        <input type="hidden" name="cmiUrl" value="{{$cmiUrl }}">
        <input type="hidden" name="amount" value="{{$orgAmount }}">
        <input type="hidden" name="okUrl" value="{{$orgOkUrl }}">
        <input type="hidden" name="failUrl" value="{{$orgFailUrl }}">
        <input type="hidden" name="TranType" value="{{$orgTransactionType }}">
        <input type="hidden" name="callbackUrl" value="{{$orgCallbackUrl }}">
        <input type="hidden" name="CallbackResponse" value="true">
        <input type="hidden" name="shopurl" value="{{$shopurl }}">
        <input type="hidden" name="currency" value="{{$orgCurrency }}">
        <input type="hidden" name="rnd" value="{{$orgRnd }}">
        <input type="hidden" name="storetype" value="3D_PAY_HOSTING">
        <input type="hidden" name="hashAlgorithm" value="ver3">
        <input type="hidden" name="lang" value="fr">
        <input type="hidden" name="refreshtime" value="5">
        <input type="hidden" name="BillToName" value="{{$postParams['BillToName']}}">


        {{-- <input type="hidden" name="BillToCountry" value="504"> --}}
        <input type="hidden" name="email" value="{{$postParams['email']}}">

        <input type="hidden" name="encoding" value="UTF-8">
        <input type="hidden" name="oid" value="{{$oid}}">
        <!-- La valeur du paramètre oid doit être unique par transaction -->

    </form>

</center>
<script type="text/javascript" language="javascript">
    function moveWindow() {
        document.pay_form.submit();
    }
</script>
</body>

</html>
