<?php

namespace App\models\ATSFlight;

class AcceptSurchargeEnum
{
    const __default = 'DoNotRebook';
    const DoNotRebook = 'DoNotRebook';
    const NoSurcharge = 'NoSurcharge';
    const SurchargePercent = 'SurchargePercent';
    const SurchargeAmount = 'SurchargeAmount';
    const AnySurcharge = 'AnySurcharge';


}
