<?php

namespace App\models\ATSFlight;

class eQueueFunctionType
{
    const __default = 'BookingQueue';
    const BookingQueue = 'BookingQueue';
    const TicketingSuccessful = 'TicketingSuccessful';
    const AlreadyTicketed = 'AlreadyTicketed';
    const TicketingFailed = 'TicketingFailed';


}
