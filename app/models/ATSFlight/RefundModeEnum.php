<?php

namespace App\models\ATSFlight;

class RefundModeEnum
{
    const __default = 'Void';
    const Void = 'Void';
    const FullRefund = 'FullRefund';
    const PartialRefund = 'PartialRefund';
    const EMDRefund = 'EMDRefund';


}
