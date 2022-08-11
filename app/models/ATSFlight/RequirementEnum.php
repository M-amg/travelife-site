<?php

namespace App\models\ATSFlight;

class RequirementEnum
{
    const __default = 'None';
    const None = 'None';
    const Password = 'Password';
    const PassportNumber = 'PassportNumber';
    const CreditCardForCheckIn = 'CreditCardForCheckIn';
    const DOB = 'DOB';
    const APISDuringBooking = 'APISDuringBooking';
    const APISAfterBooking = 'APISAfterBooking';
    const PaxNationality = 'PaxNationality';
    const SameBagsForAllLegs = 'SameBagsForAllLegs';
    const GenderRequired = 'GenderRequired';
    const MunicipalityForPassportRequired = 'MunicipalityForPassportRequired';
    const FullAPISPassportInformation = 'FullAPISPassportInformation';


}
