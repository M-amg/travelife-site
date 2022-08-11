<?php

namespace App\models\ATSFlight;

class CancelModeEnum
{
    const __default = 'None';
    const None = 'None';
    const CancelSameFlightNumberAndDate = 'CancelSameFlightNumberAndDate';
    const CancelSameAirlineAndRouteAndDate = 'CancelSameAirlineAndRouteAndDate';


}
