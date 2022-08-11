<?php

namespace App\models\ATSFlight;

class TaskTypeEnum
{
    const __default = 'None';
    const None = 'None';
    const SegmentCancellation = 'SegmentCancellation';
    const ScheduleChange = 'ScheduleChange';
    const QueueReplacement = 'QueueReplacement';
    const AddRemaks = 'AddRemaks';
    const AddOSI = 'AddOSI';
    const StatusChanged = 'StatusChanged';
    const NoScheduleChange = 'NoScheduleChange';
    const ConfirmWaitlist = 'ConfirmWaitlist';


}
