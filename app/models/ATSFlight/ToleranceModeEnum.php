<?php

namespace App\models\ATSFlight;

class ToleranceModeEnum
{
    const __default = 'aDefault';
    const aDefault = 'Default';
    const CheckAllDatesSequential = 'CheckAllDatesSequential';
    const CheckAllDatesOutParallelAndInSeq = 'CheckAllDatesOutParallelAndInSeq';
    const CheckAllDateInAndOutParallel = 'CheckAllDateInAndOutParallel';


}
