<?php

namespace App\models\ATSFlight;

class PaymentTypeEnum
{
    const __default = 'None';
    const None = 'None';
    const CreditCard = 'CreditCard';
    const ElectronicBanking = 'ElectronicBanking';
    const AgencyInkasso = 'AgencyInkasso';
    const AgencyDebit = 'AgencyDebit';
    const Cash = 'Cash';
    const Check = 'Check';
    const Invoice = 'Invoice';
    const eNett = 'eNett';
    const Refundable = 'Refundable';
    const NonRefundable = 'NonRefundable';
    const Wirecard = 'Wirecard';
    const Wex = 'Wex';
    const VirtualPayment = 'VirtualPayment';


}
