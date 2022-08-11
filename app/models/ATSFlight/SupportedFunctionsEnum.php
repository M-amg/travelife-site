<?php

namespace App\models\ATSFlight;

class SupportedFunctionsEnum
{
    const __default = 'None';
    const None = 'None';
    const CancelSegments = 'CancelSegments';
    const CancelEntireBooking = 'CancelEntireBooking';
    const GetPNRFunction = 'GetPNRFunction';
    const RebookingFunctionality = 'RebookingFunctionality';
    const NoEmailConfirmation = 'NoEmailConfirmation';
    const CancelPassenger = 'CancelPassenger';
    const FrequentFlyerProgram = 'FrequentFlyerProgram';
    const SeatSelection = 'SeatSelection';
    const BookingOnHoldWithAutoCancel = 'BookingOnHoldWithAutoCancel';
    const BookingOnHoldWithAutoConfirm = 'BookingOnHoldWithAutoConfirm';


}
