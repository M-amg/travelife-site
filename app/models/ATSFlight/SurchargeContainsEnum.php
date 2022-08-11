<?php

namespace App\models\ATSFlight;

class SurchargeContainsEnum
{
    const __default = 'Fare';
    const Fare = 'Fare';
    const Tax = 'Tax';
    const AllLegs = 'AllLegs';
    const AllPassenger = 'AllPassenger';
    const IncludingBaggageSurcharges = 'IncludingBaggageSurcharges';
    const IncludingCheckinSurcharges = 'IncludingCheckinSurcharges';
    const IncludeBookingSurcharges = 'IncludeBookingSurcharges';
    const IncludePaymentSurcharges = 'IncludePaymentSurcharges';
    const IncludePrioritySurcharges = 'IncludePrioritySurcharges';
    const IncludeSeatSurcharges = 'IncludeSeatSurcharges';
    const IncludeSMSNotificationFee = 'IncludeSMSNotificationFee';
    const IncludingHandBaggageFee = 'IncludingHandBaggageFee';


}
