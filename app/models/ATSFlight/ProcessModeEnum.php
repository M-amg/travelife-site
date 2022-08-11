<?php

namespace App\models\ATSFlight;

class ProcessModeEnum
{
    const __default = 'ScheduleChange';
    const ScheduleChange = 'ScheduleChange';
    const ConfirmWaitlist = 'ConfirmWaitlist';
    const ConfirmWaitlistAndCancelProtection = 'ConfirmWaitlistAndCancelProtection';
    const ConfirmSSR = 'ConfirmSSR';
    const RemoveCancelled = 'RemoveCancelled';


}
