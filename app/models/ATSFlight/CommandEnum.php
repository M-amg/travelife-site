<?php

namespace App\models\ATSFlight;

class CommandEnum
{
    const __default = 'None';
    const None = 'None';
    const BookFare = 'BookFare';
    const CancelBooking = 'CancelBooking';
    const GetFares = 'GetFares';
    const GetFareQuote = 'GetFareQuote';
    const GetFlightDetails = 'GetFlightDetails';
    const GetRoutingInformation = 'GetRoutingInformation';
    const GetRuleInformation = 'GetRuleInformation';
    const GetSuppliers = 'GetSuppliers';
    const GetTermsAndCondition = 'GetTermsAndCondition';
    const GetTicketInformation = 'GetTicketInformation';
    const ModifyBooking = 'ModifyBooking';
    const QueueBooking = 'QueueBooking';
    const RetrievePassengerNameRecord = 'RetrievePassengerNameRecord';
    const ValidateFlightDate = 'ValidateFlightDate';
    const GetAvailability = 'GetAvailability';
    const GetFareDisplay = 'GetFareDisplay';
    const GetRuleInformationText = 'GetRuleInformationText';
    const GetTax = 'GetTax';
    const GetBoardingDetails = 'GetBoardingDetails';
    const GetPaymentMethods = 'GetPaymentMethods';
    const GetStatus = 'GetStatus';
    const GetVersions = 'GetVersions';
    const GetRoutings = 'GetRoutings';
    const GetMultiChannelQueryInformation = 'GetMultiChannelQueryInformation';
    const GetMultiChannelBookingInformation = 'GetMultiChannelBookingInformation';
    const DoCreditCardPayment = 'DoCreditCardPayment';
    const GetCalendarDisplay = 'GetCalendarDisplay';
    const GetSeatMaps = 'GetSeatMaps';
    const BrowseQueue = 'BrowseQueue';
    const SeatReservation = 'SeatReservation';
    const Rebook = 'Rebook';
    const GetUserConfigurationData = 'GetUserConfigurationData';
    const GetTaxesAndFees = 'GetTaxesAndFees';
    const GetPreferenceSearch = 'GetPreferenceSearch';
    const GetEntryClients = 'GetEntryClients';
    const TicketBooking = 'TicketBooking';
    const ChangeFlightBooking = 'ChangeFlightBooking';
    const ConvertCurrency = 'ConvertCurrency';
    const GetVirtualCreditCard = 'GetVirtualCreditCard';
    const GetFXQuote = 'GetFXQuote';
    const RemoveBookingFromQueue = 'RemoveBookingFromQueue';
    const PNRProcessing = 'PNRProcessing';
    const CancelTicket = 'CancelTicket';
    const RevalidateTicket = 'RevalidateTicket';
    const CancelVirtualCreditCard = 'CancelVirtualCreditCard';
    const ModifyVirtualCreditCard = 'ModifyVirtualCreditCard';
    const GetFaresComplex = 'GetFaresComplex';
    const ReissueTicket = 'ReissueTicket';
    const GetCorpCodes = 'GetCorpCodes';
    const GetAdditionalServices = 'GetAdditionalServices';
    const ConfirmBooking = 'ConfirmBooking';
    const SmartBooking = 'SmartBooking';
    const NativeCommand = 'NativeCommand';
    const GetAllotmentInfo = 'GetAllotmentInfo';
    const CascadedFareQuote = 'CascadedFareQuote';
    const AllCommands = 'AllCommands';


}
