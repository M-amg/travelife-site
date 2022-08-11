<?php

namespace App\models\ATSFlight;

class CancelationType
{
    const __default = 'CNX_BeforeTicketing';
    const CNX_BeforeTicketing = 'CNX_BeforeTicketing';
    const CNX_AfterTicketing = 'CNX_AfterTicketing';
    const CNX_AfterDeparture = 'CNX_AfterDeparture';
    const CNX_Itinerary = 'CNX_Itinerary';
    const CNX_DateChange = 'CNX_DateChange';
    const RBK_BeforeTicketing = 'RBK_BeforeTicketing';
    const RBK_AfterTicketing = 'RBK_AfterTicketing';
    const RBK_BeforeDeparture = 'RBK_BeforeDeparture';
    const RBK_NoShow = 'RBK_NoShow';
    const RBK_Refund = 'RBK_Refund';
    const RBK_RefundAfterDeparture = 'RBK_RefundAfterDeparture';


}
