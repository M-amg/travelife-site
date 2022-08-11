<?php

namespace App\models\ATSFlight;

class FlightAPI extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfstring' => 'App\\models\\ATSFlight\\ArrayOfstring',
      'ArrayOfint' => 'App\\models\\ATSFlight\\ArrayOfint',
      'ArrayOfanyType' => 'App\\models\\ATSFlight\\ArrayOfanyType',
      'ArrayOfInternalPaymentDetail' => 'App\\models\\ATSFlight\\ArrayOfInternalPaymentDetail',
      'InternalPaymentDetail' => 'App\\models\\ATSFlight\\InternalPaymentDetail',
      'Version' => 'App\\models\\ATSFlight\\Version',
      'LoginData' => 'App\\models\\ATSFlight\\LoginData',
      'BackOfficeData' => 'App\\models\\ATSFlight\\BackOfficeData',
      'AllotmentAccount' => 'App\\models\\ATSFlight\\AllotmentAccount',
      'CRS' => 'App\\models\\ATSFlight\\CRS',
      'CalculationData' => 'App\\models\\ATSFlight\\CalculationData',
      'CalculationRequestData' => 'App\\models\\ATSFlight\\CalculationRequestData',
      'ManualCalculationData' => 'App\\models\\ATSFlight\\ManualCalculationData',
      'CharterAccount' => 'App\\models\\ATSFlight\\CharterAccount',
      'Contact' => 'App\\models\\ATSFlight\\Contact',
      'ArrayOfPhoneDetails' => 'App\\models\\ATSFlight\\ArrayOfPhoneDetails',
      'PhoneDetails' => 'App\\models\\ATSFlight\\PhoneDetails',
      'SharedPrice' => 'App\\models\\ATSFlight\\SharedPrice',
      'Agent' => 'App\\models\\ATSFlight\\Agent',
      'ArrayOfEnhancedRemark' => 'App\\models\\ATSFlight\\ArrayOfEnhancedRemark',
      'EnhancedRemark' => 'App\\models\\ATSFlight\\EnhancedRemark',
      'AllotmentRequest' => 'App\\models\\ATSFlight\\AllotmentRequest',
      'AllotmentResponse' => 'App\\models\\ATSFlight\\AllotmentResponse',
      'ArrayOfAPISDetails' => 'App\\models\\ATSFlight\\ArrayOfAPISDetails',
      'APISDetails' => 'App\\models\\ATSFlight\\APISDetails',
      'ArrayOfPassengerBoarding' => 'App\\models\\ATSFlight\\ArrayOfPassengerBoarding',
      'PassengerBoarding' => 'App\\models\\ATSFlight\\PassengerBoarding',
      'FormOfIdentification' => 'App\\models\\ATSFlight\\FormOfIdentification',
      'PaymentDefinitionData' => 'App\\models\\ATSFlight\\PaymentDefinitionData',
      'ArrayOfSKRequestData' => 'App\\models\\ATSFlight\\ArrayOfSKRequestData',
      'SKRequestData' => 'App\\models\\ATSFlight\\SKRequestData',
      'ArrayOfSSRRequestData' => 'App\\models\\ATSFlight\\ArrayOfSSRRequestData',
      'SSRRequestData' => 'App\\models\\ATSFlight\\SSRRequestData',
      'ArrayOfServiceRequest' => 'App\\models\\ATSFlight\\ArrayOfServiceRequest',
      'ServiceRequest' => 'App\\models\\ATSFlight\\ServiceRequest',
      'ArrayOfDiscountData' => 'App\\models\\ATSFlight\\ArrayOfDiscountData',
      'DiscountData' => 'App\\models\\ATSFlight\\DiscountData',
      'ModuleResponseData' => 'App\\models\\ATSFlight\\ModuleResponseData',
      'CalculationResponseData' => 'App\\models\\ATSFlight\\CalculationResponseData',
      'CalculationInfoData' => 'App\\models\\ATSFlight\\CalculationInfoData',
      'ArrayOfTaxDetail' => 'App\\models\\ATSFlight\\ArrayOfTaxDetail',
      'TaxDetail' => 'App\\models\\ATSFlight\\TaxDetail',
      'SurchargeData' => 'App\\models\\ATSFlight\\SurchargeData',
      'ResponseInfoDetails' => 'App\\models\\ATSFlight\\ResponseInfoDetails',
      'ArrayOfRaisedException' => 'App\\models\\ATSFlight\\ArrayOfRaisedException',
      'RaisedException' => 'App\\models\\ATSFlight\\RaisedException',
      'ArrayOfDiscountResponseData' => 'App\\models\\ATSFlight\\ArrayOfDiscountResponseData',
      'DiscountResponseData' => 'App\\models\\ATSFlight\\DiscountResponseData',
      'ArrayOfOSIRequestData' => 'App\\models\\ATSFlight\\ArrayOfOSIRequestData',
      'OSIRequestData' => 'App\\models\\ATSFlight\\OSIRequestData',
      'ArrayOfSeatRequestData' => 'App\\models\\ATSFlight\\ArrayOfSeatRequestData',
      'SeatRequestData' => 'App\\models\\ATSFlight\\SeatRequestData',
      'ArrayOfResponseContact' => 'App\\models\\ATSFlight\\ArrayOfResponseContact',
      'ResponseContact' => 'App\\models\\ATSFlight\\ResponseContact',
      'ArrayOfResponseOSI' => 'App\\models\\ATSFlight\\ArrayOfResponseOSI',
      'ResponseOSI' => 'App\\models\\ATSFlight\\ResponseOSI',
      'ArrayOfResponseRemark' => 'App\\models\\ATSFlight\\ArrayOfResponseRemark',
      'ResponseRemark' => 'App\\models\\ATSFlight\\ResponseRemark',
      'ArrayOfResponseSK' => 'App\\models\\ATSFlight\\ArrayOfResponseSK',
      'ResponseSK' => 'App\\models\\ATSFlight\\ResponseSK',
      'ArrayOfResponseSSR' => 'App\\models\\ATSFlight\\ArrayOfResponseSSR',
      'ResponseSSR' => 'App\\models\\ATSFlight\\ResponseSSR',
      'ArrayOfResponseSeat' => 'App\\models\\ATSFlight\\ArrayOfResponseSeat',
      'ResponseSeat' => 'App\\models\\ATSFlight\\ResponseSeat',
      'ArrayOfResponseService' => 'App\\models\\ATSFlight\\ArrayOfResponseService',
      'ResponseService' => 'App\\models\\ATSFlight\\ResponseService',
      'EnhancedFeederSearch' => 'App\\models\\ATSFlight\\EnhancedFeederSearch',
      'ArrayOfPaymentFilterDetails' => 'App\\models\\ATSFlight\\ArrayOfPaymentFilterDetails',
      'PaymentFilterDetails' => 'App\\models\\ATSFlight\\PaymentFilterDetails',
      'XtremePricer' => 'App\\models\\ATSFlight\\XtremePricer',
      'ArrayOfBookingClasses' => 'App\\models\\ATSFlight\\ArrayOfBookingClasses',
      'BookingClasses' => 'App\\models\\ATSFlight\\BookingClasses',
      'CRSData' => 'App\\models\\ATSFlight\\CRSData',
      'Vayant' => 'App\\models\\ATSFlight\\Vayant',
      'ArrayOfCacheConfigurationData' => 'App\\models\\ATSFlight\\ArrayOfCacheConfigurationData',
      'CacheConfigurationData' => 'App\\models\\ATSFlight\\CacheConfigurationData',
      'ArrayOfCharterAccount' => 'App\\models\\ATSFlight\\ArrayOfCharterAccount',
      'ArrayOfTouroperator' => 'App\\models\\ATSFlight\\ArrayOfTouroperator',
      'Touroperator' => 'App\\models\\ATSFlight\\Touroperator',
      'GDSFares' => 'App\\models\\ATSFlight\\GDSFares',
      'ArrayOfPercentageConfig' => 'App\\models\\ATSFlight\\ArrayOfPercentageConfig',
      'PercentageConfig' => 'App\\models\\ATSFlight\\PercentageConfig',
      'RequestVayantData' => 'App\\models\\ATSFlight\\RequestVayantData',
      'ArrayOfAgent' => 'App\\models\\ATSFlight\\ArrayOfAgent',
      'BookingOnHoldData' => 'App\\models\\ATSFlight\\BookingOnHoldData',
      'CacheInfoData' => 'App\\models\\ATSFlight\\CacheInfoData',
      'FareTypeData' => 'App\\models\\ATSFlight\\FareTypeData',
      'ArrayOfServicePriceData' => 'App\\models\\ATSFlight\\ArrayOfServicePriceData',
      'ServicePriceData' => 'App\\models\\ATSFlight\\ServicePriceData',
      'ArrayOfSurchargeDetail' => 'App\\models\\ATSFlight\\ArrayOfSurchargeDetail',
      'SurchargeDetail' => 'App\\models\\ATSFlight\\SurchargeDetail',
      'ArrayOfServiceData' => 'App\\models\\ATSFlight\\ArrayOfServiceData',
      'ServiceData' => 'App\\models\\ATSFlight\\ServiceData',
      'RuleModificationInfo' => 'App\\models\\ATSFlight\\RuleModificationInfo',
      'ArrayOfRuleInfo' => 'App\\models\\ATSFlight\\ArrayOfRuleInfo',
      'RuleInfo' => 'App\\models\\ATSFlight\\RuleInfo',
      'TotalPrice' => 'App\\models\\ATSFlight\\TotalPrice',
      'ArrayOfEntryClient' => 'App\\models\\ATSFlight\\ArrayOfEntryClient',
      'EntryClient' => 'App\\models\\ATSFlight\\EntryClient',
      'ArrayOfDatabaseCode' => 'App\\models\\ATSFlight\\ArrayOfDatabaseCode',
      'DatabaseCode' => 'App\\models\\ATSFlight\\DatabaseCode',
      'ArrayOfPaymentFilter' => 'App\\models\\ATSFlight\\ArrayOfPaymentFilter',
      'PaymentFilter' => 'App\\models\\ATSFlight\\PaymentFilter',
      'ArrayOfQuoteTax' => 'App\\models\\ATSFlight\\ArrayOfQuoteTax',
      'QuoteTax' => 'App\\models\\ATSFlight\\QuoteTax',
      'ArrayOfQuoteResponseExchangeRate' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponseExchangeRate',
      'QuoteResponseExchangeRate' => 'App\\models\\ATSFlight\\QuoteResponseExchangeRate',
      'ArrayOfBlackoutDateData' => 'App\\models\\ATSFlight\\ArrayOfBlackoutDateData',
      'BlackoutDateData' => 'App\\models\\ATSFlight\\BlackoutDateData',
      'FreeBaggageAllowanceDetails' => 'App\\models\\ATSFlight\\FreeBaggageAllowanceDetails',
      'ArrayOfCRSData' => 'App\\models\\ATSFlight\\ArrayOfCRSData',
      'ArrayOfAirportMCT' => 'App\\models\\ATSFlight\\ArrayOfAirportMCT',
      'AirportMCT' => 'App\\models\\ATSFlight\\AirportMCT',
      'ArrayOfCacheInfoData' => 'App\\models\\ATSFlight\\ArrayOfCacheInfoData',
      'ArrayOfCRS' => 'App\\models\\ATSFlight\\ArrayOfCRS',
      'ArrayOfStatusData' => 'App\\models\\ATSFlight\\ArrayOfStatusData',
      'StatusData' => 'App\\models\\ATSFlight\\StatusData',
      'UserAccessData' => 'App\\models\\ATSFlight\\UserAccessData',
      'ArrayOfUserPccData' => 'App\\models\\ATSFlight\\ArrayOfUserPccData',
      'UserPccData' => 'App\\models\\ATSFlight\\UserPccData',
      'ArrayOfUserPCCQueue' => 'App\\models\\ATSFlight\\ArrayOfUserPCCQueue',
      'UserPCCQueue' => 'App\\models\\ATSFlight\\UserPCCQueue',
      'ArrayOfCacheDurationDefinition' => 'App\\models\\ATSFlight\\ArrayOfCacheDurationDefinition',
      'CacheDurationDefinition' => 'App\\models\\ATSFlight\\CacheDurationDefinition',
      'UserCalculationData' => 'App\\models\\ATSFlight\\UserCalculationData',
      'CharterFaresSettings' => 'App\\models\\ATSFlight\\CharterFaresSettings',
      'EnhancedFeederSearchSetting' => 'App\\models\\ATSFlight\\EnhancedFeederSearchSetting',
      'GDSServerSettings' => 'App\\models\\ATSFlight\\GDSServerSettings',
      'GetFareRestrictionData' => 'App\\models\\ATSFlight\\GetFareRestrictionData',
      'PreferenceSettings' => 'App\\models\\ATSFlight\\PreferenceSettings',
      'WebFaresSettings' => 'App\\models\\ATSFlight\\WebFaresSettings',
      'ArrayOfWebCarrier' => 'App\\models\\ATSFlight\\ArrayOfWebCarrier',
      'WebCarrier' => 'App\\models\\ATSFlight\\WebCarrier',
      'XtremePricerSettings' => 'App\\models\\ATSFlight\\XtremePricerSettings',
      'ExtenalCounting' => 'App\\models\\ATSFlight\\ExtenalCounting',
      'ArrayOfCommandIPData' => 'App\\models\\ATSFlight\\ArrayOfCommandIPData',
      'CommandIPData' => 'App\\models\\ATSFlight\\CommandIPData',
      'ArrayOfVersionData' => 'App\\models\\ATSFlight\\ArrayOfVersionData',
      'VersionData' => 'App\\models\\ATSFlight\\VersionData',
      'ArrayOfPaymentDefinitionData' => 'App\\models\\ATSFlight\\ArrayOfPaymentDefinitionData',
      'ArrayOfContact' => 'App\\models\\ATSFlight\\ArrayOfContact',
      'ArrayOfTicketedServiceData' => 'App\\models\\ATSFlight\\ArrayOfTicketedServiceData',
      'TicketedServiceData' => 'App\\models\\ATSFlight\\TicketedServiceData',
      'ArrayOfServiceTicketCouponData' => 'App\\models\\ATSFlight\\ArrayOfServiceTicketCouponData',
      'ServiceTicketCouponData' => 'App\\models\\ATSFlight\\ServiceTicketCouponData',
      'BookRequestData' => 'App\\models\\ATSFlight\\BookRequestData',
      'BookRequestBackOffice' => 'App\\models\\ATSFlight\\BookRequestBackOffice',
      'BookRequestConfiguration' => 'App\\models\\ATSFlight\\BookRequestConfiguration',
      'BookRequestCRSConfiguration' => 'App\\models\\ATSFlight\\BookRequestCRSConfiguration',
      'BookRequestCharter' => 'App\\models\\ATSFlight\\BookRequestCharter',
      'BookRequestWebFare' => 'App\\models\\ATSFlight\\BookRequestWebFare',
      'BookRequestFare' => 'App\\models\\ATSFlight\\BookRequestFare',
      'BookRequestCorporate' => 'App\\models\\ATSFlight\\BookRequestCorporate',
      'ArrayOfBookRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfBookRequestLeg',
      'BookRequestLeg' => 'App\\models\\ATSFlight\\BookRequestLeg',
      'ArrayOfBookRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfBookRequestSegment',
      'BookRequestSegment' => 'App\\models\\ATSFlight\\BookRequestSegment',
      'ArrayOfBookRequestOSI' => 'App\\models\\ATSFlight\\ArrayOfBookRequestOSI',
      'BookRequestOSI' => 'App\\models\\ATSFlight\\BookRequestOSI',
      'ArrayOfBookRequestPassenger' => 'App\\models\\ATSFlight\\ArrayOfBookRequestPassenger',
      'BookRequestPassenger' => 'App\\models\\ATSFlight\\BookRequestPassenger',
      'ArrayOfBookRequestSeatData' => 'App\\models\\ATSFlight\\ArrayOfBookRequestSeatData',
      'BookRequestSeatData' => 'App\\models\\ATSFlight\\BookRequestSeatData',
      'BookRequestPayment' => 'App\\models\\ATSFlight\\BookRequestPayment',
      'ArrayOfBookRequestRemark' => 'App\\models\\ATSFlight\\ArrayOfBookRequestRemark',
      'BookRequestRemark' => 'App\\models\\ATSFlight\\BookRequestRemark',
      'CreditCardData' => 'App\\models\\ATSFlight\\CreditCardData',
      'CreditCardRequest' => 'App\\models\\ATSFlight\\CreditCardRequest',
      'AccountData' => 'App\\models\\ATSFlight\\AccountData',
      'CustomerData' => 'App\\models\\ATSFlight\\CustomerData',
      'PriceData' => 'App\\models\\ATSFlight\\PriceData',
      'Response' => 'App\\models\\ATSFlight\\Response',
      'WebResponseDetails' => 'App\\models\\ATSFlight\\WebResponseDetails',
      'ArrayOfDetailedPaymentMethod' => 'App\\models\\ATSFlight\\ArrayOfDetailedPaymentMethod',
      'DetailedPaymentMethod' => 'App\\models\\ATSFlight\\DetailedPaymentMethod',
      'PaymentMethods' => 'App\\models\\ATSFlight\\PaymentMethods',
      'ArrayOfBookResponseSeatReservation' => 'App\\models\\ATSFlight\\ArrayOfBookResponseSeatReservation',
      'BookResponseSeatReservation' => 'App\\models\\ATSFlight\\BookResponseSeatReservation',
      'BookResponseData' => 'App\\models\\ATSFlight\\BookResponseData',
      'BookResponseBookingOnHold' => 'App\\models\\ATSFlight\\BookResponseBookingOnHold',
      'ArrayOfBookResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfBookResponseLeg',
      'BookResponseLeg' => 'App\\models\\ATSFlight\\BookResponseLeg',
      'ArrayOfBookResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfBookResponseSegment',
      'BookResponseSegment' => 'App\\models\\ATSFlight\\BookResponseSegment',
      'ArrayOfBookResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfBookResponsePassenger',
      'BookResponsePassenger' => 'App\\models\\ATSFlight\\BookResponsePassenger',
      'ArrayOfBookResponseTicketData' => 'App\\models\\ATSFlight\\ArrayOfBookResponseTicketData',
      'BookResponseTicketData' => 'App\\models\\ATSFlight\\BookResponseTicketData',
      'BookResponseSurcharges' => 'App\\models\\ATSFlight\\BookResponseSurcharges',
      'BrowseRequestData' => 'App\\models\\ATSFlight\\BrowseRequestData',
      'ArrayOfBrowseRequestQueueStruct' => 'App\\models\\ATSFlight\\ArrayOfBrowseRequestQueueStruct',
      'BrowseRequestQueueStruct' => 'App\\models\\ATSFlight\\BrowseRequestQueueStruct',
      'BrowseResponseData' => 'App\\models\\ATSFlight\\BrowseResponseData',
      'ArrayOfBrowseResponseQueueItem' => 'App\\models\\ATSFlight\\ArrayOfBrowseResponseQueueItem',
      'BrowseResponseQueueItem' => 'App\\models\\ATSFlight\\BrowseResponseQueueItem',
      'ArrayOfBrowseResponseRecordLocatorItem' => 'App\\models\\ATSFlight\\ArrayOfBrowseResponseRecordLocatorItem',
      'BrowseResponseRecordLocatorItem' => 'App\\models\\ATSFlight\\BrowseResponseRecordLocatorItem',
      'CancelRequestData' => 'App\\models\\ATSFlight\\CancelRequestData',
      'CancelRequestCharter' => 'App\\models\\ATSFlight\\CancelRequestCharter',
      'CancelRequestConfiguration' => 'App\\models\\ATSFlight\\CancelRequestConfiguration',
      'ArrayOfCancelRequestContactData' => 'App\\models\\ATSFlight\\ArrayOfCancelRequestContactData',
      'CancelRequestContactData' => 'App\\models\\ATSFlight\\CancelRequestContactData',
      'ArrayOfCancelRequestPassengerData' => 'App\\models\\ATSFlight\\ArrayOfCancelRequestPassengerData',
      'CancelRequestPassengerData' => 'App\\models\\ATSFlight\\CancelRequestPassengerData',
      'CancelRequestPaymentData' => 'App\\models\\ATSFlight\\CancelRequestPaymentData',
      'CancelRequestWeb' => 'App\\models\\ATSFlight\\CancelRequestWeb',
      'CRSProfileData' => 'App\\models\\ATSFlight\\CRSProfileData',
      'ArrayOfQueueData' => 'App\\models\\ATSFlight\\ArrayOfQueueData',
      'QueueData' => 'App\\models\\ATSFlight\\QueueData',
      'ArrayOfCRSProfileData' => 'App\\models\\ATSFlight\\ArrayOfCRSProfileData',
      'MultiChannelQueryRequestData' => 'App\\models\\ATSFlight\\MultiChannelQueryRequestData',
      'ArrayOfQueryRuleData' => 'App\\models\\ATSFlight\\ArrayOfQueryRuleData',
      'QueryRuleData' => 'App\\models\\ATSFlight\\QueryRuleData',
      'BaseRuleData' => 'App\\models\\ATSFlight\\BaseRuleData',
      'ArrayOfQueryActionData' => 'App\\models\\ATSFlight\\ArrayOfQueryActionData',
      'QueryActionData' => 'App\\models\\ATSFlight\\QueryActionData',
      'ArrayOfCarrierData' => 'App\\models\\ATSFlight\\ArrayOfCarrierData',
      'CarrierData' => 'App\\models\\ATSFlight\\CarrierData',
      'QuerySearchCriteriaData' => 'App\\models\\ATSFlight\\QuerySearchCriteriaData',
      'ArrayOfResponseFareData' => 'App\\models\\ATSFlight\\ArrayOfResponseFareData',
      'ResponseFareData' => 'App\\models\\ATSFlight\\ResponseFareData',
      'ResponseFlightData' => 'App\\models\\ATSFlight\\ResponseFlightData',
      'ResponseLegFareInfo' => 'App\\models\\ATSFlight\\ResponseLegFareInfo',
      'ResponseRule' => 'App\\models\\ATSFlight\\ResponseRule',
      'ResponseTicket' => 'App\\models\\ATSFlight\\ResponseTicket',
      'ArrayOfResponseUserData' => 'App\\models\\ATSFlight\\ArrayOfResponseUserData',
      'ResponseUserData' => 'App\\models\\ATSFlight\\ResponseUserData',
      'ArrayOfResponsePassengerData' => 'App\\models\\ATSFlight\\ArrayOfResponsePassengerData',
      'ResponsePassengerData' => 'App\\models\\ATSFlight\\ResponsePassengerData',
      'ResponsePassengerPrices' => 'App\\models\\ATSFlight\\ResponsePassengerPrices',
      'ArrayOfResponsePassengerPrices' => 'App\\models\\ATSFlight\\ArrayOfResponsePassengerPrices',
      'ArrayOfCommonResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfCommonResponseLeg',
      'CommonResponseLeg' => 'App\\models\\ATSFlight\\CommonResponseLeg',
      'ArrayOfCommonSegmentData' => 'App\\models\\ATSFlight\\ArrayOfCommonSegmentData',
      'CommonSegmentData' => 'App\\models\\ATSFlight\\CommonSegmentData',
      'ArrayOfCommonResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfCommonResponsePassenger',
      'CommonResponsePassenger' => 'App\\models\\ATSFlight\\CommonResponsePassenger',
      'CommonBookSurcharges' => 'App\\models\\ATSFlight\\CommonBookSurcharges',
      'ArrayOfLegData' => 'App\\models\\ATSFlight\\ArrayOfLegData',
      'LegData' => 'App\\models\\ATSFlight\\LegData',
      'ArrayOfLegConnectionData' => 'App\\models\\ATSFlight\\ArrayOfLegConnectionData',
      'LegConnectionData' => 'App\\models\\ATSFlight\\LegConnectionData',
      'ArrayOfFareSegmentData' => 'App\\models\\ATSFlight\\ArrayOfFareSegmentData',
      'FareSegmentData' => 'App\\models\\ATSFlight\\FareSegmentData',
      'SegmentData' => 'App\\models\\ATSFlight\\SegmentData',
      'CancelResponseData' => 'App\\models\\ATSFlight\\CancelResponseData',
      'ArrayOfCancelResponsePNR' => 'App\\models\\ATSFlight\\ArrayOfCancelResponsePNR',
      'CancelResponsePNR' => 'App\\models\\ATSFlight\\CancelResponsePNR',
      'ArrayOfCancelResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfCancelResponsePassenger',
      'CancelResponsePassenger' => 'App\\models\\ATSFlight\\CancelResponsePassenger',
      'CancelTicketRequestData' => 'App\\models\\ATSFlight\\CancelTicketRequestData',
      'ArrayOfCancelTicketEMD' => 'App\\models\\ATSFlight\\ArrayOfCancelTicketEMD',
      'CancelTicketEMD' => 'App\\models\\ATSFlight\\CancelTicketEMD',
      'ArrayOfCancelTicketRequestTicket' => 'App\\models\\ATSFlight\\ArrayOfCancelTicketRequestTicket',
      'CancelTicketRequestTicket' => 'App\\models\\ATSFlight\\CancelTicketRequestTicket',
      'CancelTicketPricePercentage' => 'App\\models\\ATSFlight\\CancelTicketPricePercentage',
      'CancelTicketResponseData' => 'App\\models\\ATSFlight\\CancelTicketResponseData',
      'ArrayOfCancelTicketResponseTicket' => 'App\\models\\ATSFlight\\ArrayOfCancelTicketResponseTicket',
      'CancelTicketResponseTicket' => 'App\\models\\ATSFlight\\CancelTicketResponseTicket',
      'ChangeFlightRequestData' => 'App\\models\\ATSFlight\\ChangeFlightRequestData',
      'ChangeFlightConfiguration' => 'App\\models\\ATSFlight\\ChangeFlightConfiguration',
      'ChangeFlightWebFare' => 'App\\models\\ATSFlight\\ChangeFlightWebFare',
      'ArrayOfChangeFlightSegment' => 'App\\models\\ATSFlight\\ArrayOfChangeFlightSegment',
      'ChangeFlightSegment' => 'App\\models\\ATSFlight\\ChangeFlightSegment',
      'ChangeFlightSurcharge' => 'App\\models\\ATSFlight\\ChangeFlightSurcharge',
      'CurrencyData' => 'App\\models\\ATSFlight\\CurrencyData',
      'ResponseCurrencyData' => 'App\\models\\ATSFlight\\ResponseCurrencyData',
      'ArrayOfRequestCarrierData' => 'App\\models\\ATSFlight\\ArrayOfRequestCarrierData',
      'RequestCarrierData' => 'App\\models\\ATSFlight\\RequestCarrierData',
      'RequestConfigurationData' => 'App\\models\\ATSFlight\\RequestConfigurationData',
      'RequestCRSConfigData' => 'App\\models\\ATSFlight\\RequestCRSConfigData',
      'RequestFareData' => 'App\\models\\ATSFlight\\RequestFareData',
      'RequestCharterData' => 'App\\models\\ATSFlight\\RequestCharterData',
      'RequestGDSData' => 'App\\models\\ATSFlight\\RequestGDSData',
      'ArrayOfRequestFareGroupBag' => 'App\\models\\ATSFlight\\ArrayOfRequestFareGroupBag',
      'RequestFareGroupBag' => 'App\\models\\ATSFlight\\RequestFareGroupBag',
      'ArrayOfRequestFareGroup' => 'App\\models\\ATSFlight\\ArrayOfRequestFareGroup',
      'RequestFareGroup' => 'App\\models\\ATSFlight\\RequestFareGroup',
      'ArrayOfRequestFareTypeFareBase' => 'App\\models\\ATSFlight\\ArrayOfRequestFareTypeFareBase',
      'RequestFareTypeFareBase' => 'App\\models\\ATSFlight\\RequestFareTypeFareBase',
      'RequestNetData' => 'App\\models\\ATSFlight\\RequestNetData',
      'RequestWebData' => 'App\\models\\ATSFlight\\RequestWebData',
      'ArrayOfRequestLegData' => 'App\\models\\ATSFlight\\ArrayOfRequestLegData',
      'RequestLegData' => 'App\\models\\ATSFlight\\RequestLegData',
      'RequestToleranceData' => 'App\\models\\ATSFlight\\RequestToleranceData',
      'ArrayOfRequestPassengerData' => 'App\\models\\ATSFlight\\ArrayOfRequestPassengerData',
      'RequestPassengerData' => 'App\\models\\ATSFlight\\RequestPassengerData',
      'AvailabilityRequestData' => 'App\\models\\ATSFlight\\AvailabilityRequestData',
      'AvailabilityRequestCharter' => 'App\\models\\ATSFlight\\AvailabilityRequestCharter',
      'ArrayOfAvailabilityRequestLegType' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityRequestLegType',
      'AvailabilityRequestLegType' => 'App\\models\\ATSFlight\\AvailabilityRequestLegType',
      'ArrayOfAvailabilityRequestCarrier' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityRequestCarrier',
      'AvailabilityRequestCarrier' => 'App\\models\\ATSFlight\\AvailabilityRequestCarrier',
      'ArrayOfAvailabilityRequestSegmentType' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityRequestSegmentType',
      'AvailabilityRequestSegmentType' => 'App\\models\\ATSFlight\\AvailabilityRequestSegmentType',
      'ArrayOfAvailabilityRequestPassengerType' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityRequestPassengerType',
      'AvailabilityRequestPassengerType' => 'App\\models\\ATSFlight\\AvailabilityRequestPassengerType',
      'AvailabilityResponseData' => 'App\\models\\ATSFlight\\AvailabilityResponseData',
      'ArrayOfAvailabilityResponseLegType' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityResponseLegType',
      'AvailabilityResponseLegType' => 'App\\models\\ATSFlight\\AvailabilityResponseLegType',
      'ArrayOfAvailabilityResponseAlternativeType' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityResponseAlternativeType',
      'AvailabilityResponseAlternativeType' => 'App\\models\\ATSFlight\\AvailabilityResponseAlternativeType',
      'ArrayOfAvailabilityResponseSegmentType' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityResponseSegmentType',
      'AvailabilityResponseSegmentType' => 'App\\models\\ATSFlight\\AvailabilityResponseSegmentType',
      'ArrayOfAvailabilityResponseDatePair' => 'App\\models\\ATSFlight\\ArrayOfAvailabilityResponseDatePair',
      'AvailabilityResponseDatePair' => 'App\\models\\ATSFlight\\AvailabilityResponseDatePair',
      'BoardingRequestData' => 'App\\models\\ATSFlight\\BoardingRequestData',
      'BoardingRequestConfiguration' => 'App\\models\\ATSFlight\\BoardingRequestConfiguration',
      'BoardingRequestCharterFare' => 'App\\models\\ATSFlight\\BoardingRequestCharterFare',
      'BoardingRequestWebFare' => 'App\\models\\ATSFlight\\BoardingRequestWebFare',
      'BoardingResponseData' => 'App\\models\\ATSFlight\\BoardingResponseData',
      'ArrayOfBoardingResponseDetail' => 'App\\models\\ATSFlight\\ArrayOfBoardingResponseDetail',
      'BoardingResponseDetail' => 'App\\models\\ATSFlight\\BoardingResponseDetail',
      'ArrayOfBoardingResponseBaggageDetail' => 'App\\models\\ATSFlight\\ArrayOfBoardingResponseBaggageDetail',
      'BoardingResponseBaggageDetail' => 'App\\models\\ATSFlight\\BoardingResponseBaggageDetail',
      'CalendarRequestData' => 'App\\models\\ATSFlight\\CalendarRequestData',
      'CalendarRequestConfigData' => 'App\\models\\ATSFlight\\CalendarRequestConfigData',
      'CalendarResponseData' => 'App\\models\\ATSFlight\\CalendarResponseData',
      'ArrayOfCalendarResponseCell' => 'App\\models\\ATSFlight\\ArrayOfCalendarResponseCell',
      'CalendarResponseCell' => 'App\\models\\ATSFlight\\CalendarResponseCell',
      'CorporateRequestData' => 'App\\models\\ATSFlight\\CorporateRequestData',
      'CorporateResponseData' => 'App\\models\\ATSFlight\\CorporateResponseData',
      'ArrayOfCorporateCarrierData' => 'App\\models\\ATSFlight\\ArrayOfCorporateCarrierData',
      'CorporateCarrierData' => 'App\\models\\ATSFlight\\CorporateCarrierData',
      'ArrayOfCorporateQuoteData' => 'App\\models\\ATSFlight\\ArrayOfCorporateQuoteData',
      'CorporateQuoteData' => 'App\\models\\ATSFlight\\CorporateQuoteData',
      'DisplayRequestData' => 'App\\models\\ATSFlight\\DisplayRequestData',
      'ArrayOfDisplayRequestCarrier' => 'App\\models\\ATSFlight\\ArrayOfDisplayRequestCarrier',
      'DisplayRequestCarrier' => 'App\\models\\ATSFlight\\DisplayRequestCarrier',
      'DisplayRequestConfiguration' => 'App\\models\\ATSFlight\\DisplayRequestConfiguration',
      'DisplayRequestFare' => 'App\\models\\ATSFlight\\DisplayRequestFare',
      'DisplayRequestCharter' => 'App\\models\\ATSFlight\\DisplayRequestCharter',
      'DisplayRequestGDSFares' => 'App\\models\\ATSFlight\\DisplayRequestGDSFares',
      'DisplayRequestNet' => 'App\\models\\ATSFlight\\DisplayRequestNet',
      'DisplayRequestWeb' => 'App\\models\\ATSFlight\\DisplayRequestWeb',
      'ArrayOfDisplayRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfDisplayRequestLeg',
      'DisplayRequestLeg' => 'App\\models\\ATSFlight\\DisplayRequestLeg',
      'ArrayOfDisplayRequestConnection' => 'App\\models\\ATSFlight\\ArrayOfDisplayRequestConnection',
      'DisplayRequestConnection' => 'App\\models\\ATSFlight\\DisplayRequestConnection',
      'ArrayOfDisplayRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfDisplayRequestSegment',
      'DisplayRequestSegment' => 'App\\models\\ATSFlight\\DisplayRequestSegment',
      'DisplayRequestStay' => 'App\\models\\ATSFlight\\DisplayRequestStay',
      'ArrayOfDisplayRequestPassenger' => 'App\\models\\ATSFlight\\ArrayOfDisplayRequestPassenger',
      'DisplayRequestPassenger' => 'App\\models\\ATSFlight\\DisplayRequestPassenger',
      'DisplayResponseData' => 'App\\models\\ATSFlight\\DisplayResponseData',
      'ArrayOfDisplayResponseFare' => 'App\\models\\ATSFlight\\ArrayOfDisplayResponseFare',
      'DisplayResponseFare' => 'App\\models\\ATSFlight\\DisplayResponseFare',
      'DisplayResponseFlight' => 'App\\models\\ATSFlight\\DisplayResponseFlight',
      'ArrayOfDisplayResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfDisplayResponseLeg',
      'DisplayResponseLeg' => 'App\\models\\ATSFlight\\DisplayResponseLeg',
      'DisplayResponseAdvancedPurchase' => 'App\\models\\ATSFlight\\DisplayResponseAdvancedPurchase',
      'DisplayResponseCodeValuePair' => 'App\\models\\ATSFlight\\DisplayResponseCodeValuePair',
      'DisplayResponseRouting' => 'App\\models\\ATSFlight\\DisplayResponseRouting',
      'ArrayOfDisplayResponseCodeValuePair' => 'App\\models\\ATSFlight\\ArrayOfDisplayResponseCodeValuePair',
      'DisplayResponseRule' => 'App\\models\\ATSFlight\\DisplayResponseRule',
      'ArrayOfDisplayResponseUserInfo' => 'App\\models\\ATSFlight\\ArrayOfDisplayResponseUserInfo',
      'DisplayResponseUserInfo' => 'App\\models\\ATSFlight\\DisplayResponseUserInfo',
      'DisplayResponseTicket' => 'App\\models\\ATSFlight\\DisplayResponseTicket',
      'ArrayOfDisplayResponsePassengerTicket' => 'App\\models\\ATSFlight\\ArrayOfDisplayResponsePassengerTicket',
      'DisplayResponsePassengerTicket' => 'App\\models\\ATSFlight\\DisplayResponsePassengerTicket',
      'ArrayOfDisplayResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfDisplayResponsePassenger',
      'DisplayResponsePassenger' => 'App\\models\\ATSFlight\\DisplayResponsePassenger',
      'DisplayResponseETicket' => 'App\\models\\ATSFlight\\DisplayResponseETicket',
      'DisplayResponsePTicket' => 'App\\models\\ATSFlight\\DisplayResponsePTicket',
      'QuoteRequestData' => 'App\\models\\ATSFlight\\QuoteRequestData',
      'ArrayOfQuoteRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfQuoteRequestLeg',
      'QuoteRequestLeg' => 'App\\models\\ATSFlight\\QuoteRequestLeg',
      'ArrayOfQuoteRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfQuoteRequestSegment',
      'QuoteRequestSegment' => 'App\\models\\ATSFlight\\QuoteRequestSegment',
      'ArrayOfQuoteRequestFarebase' => 'App\\models\\ATSFlight\\ArrayOfQuoteRequestFarebase',
      'QuoteRequestFarebase' => 'App\\models\\ATSFlight\\QuoteRequestFarebase',
      'ArrayOfQuoteRequestNetData' => 'App\\models\\ATSFlight\\ArrayOfQuoteRequestNetData',
      'QuoteRequestNetData' => 'App\\models\\ATSFlight\\QuoteRequestNetData',
      'ArrayOfQuoteRequestPasType' => 'App\\models\\ATSFlight\\ArrayOfQuoteRequestPasType',
      'QuoteRequestPasType' => 'App\\models\\ATSFlight\\QuoteRequestPasType',
      'QuoteRequestWebFareData' => 'App\\models\\ATSFlight\\QuoteRequestWebFareData',
      'QuoteResponseData' => 'App\\models\\ATSFlight\\QuoteResponseData',
      'ArrayOfQuoteResponseFare' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponseFare',
      'QuoteResponseFare' => 'App\\models\\ATSFlight\\QuoteResponseFare',
      'ArrayOfCancelation' => 'App\\models\\ATSFlight\\ArrayOfCancelation',
      'Cancelation' => 'App\\models\\ATSFlight\\Cancelation',
      'PaxValues' => 'App\\models\\ATSFlight\\PaxValues',
      'ArrayOfQuoteResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponseLeg',
      'QuoteResponseLeg' => 'App\\models\\ATSFlight\\QuoteResponseLeg',
      'QuoteResponseLegInfo' => 'App\\models\\ATSFlight\\QuoteResponseLegInfo',
      'ArrayOfSeasonDateData' => 'App\\models\\ATSFlight\\ArrayOfSeasonDateData',
      'SeasonDateData' => 'App\\models\\ATSFlight\\SeasonDateData',
      'ArrayOfQuoteResponseSegmentData' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponseSegmentData',
      'QuoteResponseSegmentData' => 'App\\models\\ATSFlight\\QuoteResponseSegmentData',
      'ArrayOfQuoteResponseUserData' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponseUserData',
      'QuoteResponseUserData' => 'App\\models\\ATSFlight\\QuoteResponseUserData',
      'ArrayOfQuoteResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponsePassenger',
      'QuoteResponsePassenger' => 'App\\models\\ATSFlight\\QuoteResponsePassenger',
      'ArrayOfQuoteResponseSurcharge' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponseSurcharge',
      'QuoteResponseSurcharge' => 'App\\models\\ATSFlight\\QuoteResponseSurcharge',
      'ArrayOfQuoteResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfQuoteResponseSegment',
      'QuoteResponseSegment' => 'App\\models\\ATSFlight\\QuoteResponseSegment',
      'QuoteResponseTicket' => 'App\\models\\ATSFlight\\QuoteResponseTicket',
      'ArrayOfQuoteTicketResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfQuoteTicketResponseLeg',
      'QuoteTicketResponseLeg' => 'App\\models\\ATSFlight\\QuoteTicketResponseLeg',
      'ArrayOfQuoteTicketResponseSeg' => 'App\\models\\ATSFlight\\ArrayOfQuoteTicketResponseSeg',
      'QuoteTicketResponseSeg' => 'App\\models\\ATSFlight\\QuoteTicketResponseSeg',
      'QuoteResponseRuleData' => 'App\\models\\ATSFlight\\QuoteResponseRuleData',
      'FareRequestData' => 'App\\models\\ATSFlight\\FareRequestData',
      'ArrayOfFareRequestCarrier' => 'App\\models\\ATSFlight\\ArrayOfFareRequestCarrier',
      'FareRequestCarrier' => 'App\\models\\ATSFlight\\FareRequestCarrier',
      'FareRequestConfiguration' => 'App\\models\\ATSFlight\\FareRequestConfiguration',
      'FareRequestFare' => 'App\\models\\ATSFlight\\FareRequestFare',
      'FareRequestCharter' => 'App\\models\\ATSFlight\\FareRequestCharter',
      'FareRequestNet' => 'App\\models\\ATSFlight\\FareRequestNet',
      'FareRequestVayant' => 'App\\models\\ATSFlight\\FareRequestVayant',
      'FareRequestWeb' => 'App\\models\\ATSFlight\\FareRequestWeb',
      'ArrayOfFareRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfFareRequestLeg',
      'FareRequestLeg' => 'App\\models\\ATSFlight\\FareRequestLeg',
      'ArrayOfFareRequestConnection' => 'App\\models\\ATSFlight\\ArrayOfFareRequestConnection',
      'FareRequestConnection' => 'App\\models\\ATSFlight\\FareRequestConnection',
      'ArrayOfFareRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfFareRequestSegment',
      'FareRequestSegment' => 'App\\models\\ATSFlight\\FareRequestSegment',
      'FareRequestStay' => 'App\\models\\ATSFlight\\FareRequestStay',
      'ArrayOfFareRequestPassenger' => 'App\\models\\ATSFlight\\ArrayOfFareRequestPassenger',
      'FareRequestPassenger' => 'App\\models\\ATSFlight\\FareRequestPassenger',
      'FareRequestPricing' => 'App\\models\\ATSFlight\\FareRequestPricing',
      'FareResponseData' => 'App\\models\\ATSFlight\\FareResponseData',
      'ArrayOfFareResponseFare' => 'App\\models\\ATSFlight\\ArrayOfFareResponseFare',
      'FareResponseFare' => 'App\\models\\ATSFlight\\FareResponseFare',
      'FareResponseFlight' => 'App\\models\\ATSFlight\\FareResponseFlight',
      'ArrayOfFareResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfFareResponseLeg',
      'FareResponseLeg' => 'App\\models\\ATSFlight\\FareResponseLeg',
      'ArrayOfFareResponseConnection' => 'App\\models\\ATSFlight\\ArrayOfFareResponseConnection',
      'FareResponseConnection' => 'App\\models\\ATSFlight\\FareResponseConnection',
      'ArrayOfFareResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfFareResponseSegment',
      'FareResponseSegment' => 'App\\models\\ATSFlight\\FareResponseSegment',
      'ArrayOfFareResponseDatePair' => 'App\\models\\ATSFlight\\ArrayOfFareResponseDatePair',
      'FareResponseDatePair' => 'App\\models\\ATSFlight\\FareResponseDatePair',
      'FareResponseLegFareInfo' => 'App\\models\\ATSFlight\\FareResponseLegFareInfo',
      'FareResponseRouting' => 'App\\models\\ATSFlight\\FareResponseRouting',
      'FareResponseRule' => 'App\\models\\ATSFlight\\FareResponseRule',
      'FareResponseTicket' => 'App\\models\\ATSFlight\\FareResponseTicket',
      'ArrayOfFareResponseLegPassenger' => 'App\\models\\ATSFlight\\ArrayOfFareResponseLegPassenger',
      'FareResponseLegPassenger' => 'App\\models\\ATSFlight\\FareResponseLegPassenger',
      'ArrayOfFareResponseUserData' => 'App\\models\\ATSFlight\\ArrayOfFareResponseUserData',
      'FareResponseUserData' => 'App\\models\\ATSFlight\\FareResponseUserData',
      'ArrayOfFareResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfFareResponsePassenger',
      'FareResponsePassenger' => 'App\\models\\ATSFlight\\FareResponsePassenger',
      'FareResponseETicket' => 'App\\models\\ATSFlight\\FareResponseETicket',
      'FareResponsePTicket' => 'App\\models\\ATSFlight\\FareResponsePTicket',
      'FareComplexRequestData' => 'App\\models\\ATSFlight\\FareComplexRequestData',
      'ArrayOfFareComplexConfiguration' => 'App\\models\\ATSFlight\\ArrayOfFareComplexConfiguration',
      'FareComplexConfiguration' => 'App\\models\\ATSFlight\\FareComplexConfiguration',
      'ArrayOfFareComplexFare' => 'App\\models\\ATSFlight\\ArrayOfFareComplexFare',
      'FareComplexFare' => 'App\\models\\ATSFlight\\FareComplexFare',
      'MCTData' => 'App\\models\\ATSFlight\\MCTData',
      'ArrayOfFareComplexPassengeGroup' => 'App\\models\\ATSFlight\\ArrayOfFareComplexPassengeGroup',
      'FareComplexPassengeGroup' => 'App\\models\\ATSFlight\\FareComplexPassengeGroup',
      'ArrayOfFareComplexTicketGroup' => 'App\\models\\ATSFlight\\ArrayOfFareComplexTicketGroup',
      'FareComplexTicketGroup' => 'App\\models\\ATSFlight\\FareComplexTicketGroup',
      'ArrayOfFareComplexLeg' => 'App\\models\\ATSFlight\\ArrayOfFareComplexLeg',
      'FareComplexLeg' => 'App\\models\\ATSFlight\\FareComplexLeg',
      'FareComplexResponseData' => 'App\\models\\ATSFlight\\FareComplexResponseData',
      'ArrayOfFareComplexResponseFare' => 'App\\models\\ATSFlight\\ArrayOfFareComplexResponseFare',
      'FareComplexResponseFare' => 'App\\models\\ATSFlight\\FareComplexResponseFare',
      'ArrayOfFareComplexResponseFareItem' => 'App\\models\\ATSFlight\\ArrayOfFareComplexResponseFareItem',
      'FareComplexResponseFareItem' => 'App\\models\\ATSFlight\\FareComplexResponseFareItem',
      'FareComplexResponseFareDetails' => 'App\\models\\ATSFlight\\FareComplexResponseFareDetails',
      'DetailsRequestData' => 'App\\models\\ATSFlight\\DetailsRequestData',
      'ArrayOfDetailsRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfDetailsRequestLeg',
      'DetailsRequestLeg' => 'App\\models\\ATSFlight\\DetailsRequestLeg',
      'ArrayOfDetailsRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfDetailsRequestSegment',
      'DetailsRequestSegment' => 'App\\models\\ATSFlight\\DetailsRequestSegment',
      'DetailsResponseData' => 'App\\models\\ATSFlight\\DetailsResponseData',
      'ArrayOfDetailsResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfDetailsResponseLeg',
      'DetailsResponseLeg' => 'App\\models\\ATSFlight\\DetailsResponseLeg',
      'ArrayOfDetailsResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfDetailsResponseSegment',
      'DetailsResponseSegment' => 'App\\models\\ATSFlight\\DetailsResponseSegment',
      'PaymentRequestData' => 'App\\models\\ATSFlight\\PaymentRequestData',
      'PaymentRequestCharter' => 'App\\models\\ATSFlight\\PaymentRequestCharter',
      'PaymentRequestWeb' => 'App\\models\\ATSFlight\\PaymentRequestWeb',
      'PreferenceRequestData' => 'App\\models\\ATSFlight\\PreferenceRequestData',
      'ArrayOfPreferenceTravelDates' => 'App\\models\\ATSFlight\\ArrayOfPreferenceTravelDates',
      'PreferenceTravelDates' => 'App\\models\\ATSFlight\\PreferenceTravelDates',
      'PreferenceResponseData' => 'App\\models\\ATSFlight\\PreferenceResponseData',
      'ArrayOfPreferenceResponseItem' => 'App\\models\\ATSFlight\\ArrayOfPreferenceResponseItem',
      'PreferenceResponseItem' => 'App\\models\\ATSFlight\\PreferenceResponseItem',
      'RoutingRequestData' => 'App\\models\\ATSFlight\\RoutingRequestData',
      'RoutingResponseData' => 'App\\models\\ATSFlight\\RoutingResponseData',
      'ArrayOfRoutingResponseInformation' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponseInformation',
      'RoutingResponseInformation' => 'App\\models\\ATSFlight\\RoutingResponseInformation',
      'ArrayOfRoutingResponseRouting' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponseRouting',
      'RoutingResponseRouting' => 'App\\models\\ATSFlight\\RoutingResponseRouting',
      'ArrayOfRoutingResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponseSegment',
      'RoutingResponseSegment' => 'App\\models\\ATSFlight\\RoutingResponseSegment',
      'ArrayOfRoutingResponseLocation' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponseLocation',
      'RoutingResponseLocation' => 'App\\models\\ATSFlight\\RoutingResponseLocation',
      'ArrayOfRoutingResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponsePassenger',
      'RoutingResponsePassenger' => 'App\\models\\ATSFlight\\RoutingResponsePassenger',
      'ArrayOfRoutingResponseTime' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponseTime',
      'RoutingResponseTime' => 'App\\models\\ATSFlight\\RoutingResponseTime',
      'ArrayOfRoutingResponseStop' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponseStop',
      'RoutingResponseStop' => 'App\\models\\ATSFlight\\RoutingResponseStop',
      'ArrayOfRoutingResponseVia' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponseVia',
      'RoutingResponseVia' => 'App\\models\\ATSFlight\\RoutingResponseVia',
      'RoutingsRequestData' => 'App\\models\\ATSFlight\\RoutingsRequestData',
      'RoutingsResponseData' => 'App\\models\\ATSFlight\\RoutingsResponseData',
      'ArrayOfRoutingsResponseRouting' => 'App\\models\\ATSFlight\\ArrayOfRoutingsResponseRouting',
      'RoutingsResponseRouting' => 'App\\models\\ATSFlight\\RoutingsResponseRouting',
      'ArrayOfRoutingResponsePeriod' => 'App\\models\\ATSFlight\\ArrayOfRoutingResponsePeriod',
      'RoutingResponsePeriod' => 'App\\models\\ATSFlight\\RoutingResponsePeriod',
      'RuleRequestData' => 'App\\models\\ATSFlight\\RuleRequestData',
      'RuleResponseData' => 'App\\models\\ATSFlight\\RuleResponseData',
      'ArrayOfRuleResponseInformation' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseInformation',
      'RuleResponseInformation' => 'App\\models\\ATSFlight\\RuleResponseInformation',
      'ArrayOfRuleResponseRule' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseRule',
      'RuleResponseRule' => 'App\\models\\ATSFlight\\RuleResponseRule',
      'ArrayOfRuleResponseLocation' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseLocation',
      'RuleResponseLocation' => 'App\\models\\ATSFlight\\RuleResponseLocation',
      'ArrayOfRuleResponseBlackoutDate' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseBlackoutDate',
      'RuleResponseBlackoutDate' => 'App\\models\\ATSFlight\\RuleResponseBlackoutDate',
      'ArrayOfRuleResponseBlackoutNumber' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseBlackoutNumber',
      'RuleResponseBlackoutNumber' => 'App\\models\\ATSFlight\\RuleResponseBlackoutNumber',
      'ArrayOfRuleResponseCarrier' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseCarrier',
      'RuleResponseCarrier' => 'App\\models\\ATSFlight\\RuleResponseCarrier',
      'ArrayOfRuleResponseExtendedTicketInfo' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseExtendedTicketInfo',
      'RuleResponseExtendedTicketInfo' => 'App\\models\\ATSFlight\\RuleResponseExtendedTicketInfo',
      'ArrayOfRuleResponseTicketType' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseTicketType',
      'RuleResponseTicketType' => 'App\\models\\ATSFlight\\RuleResponseTicketType',
      'ArrayOfRuleResponsePassengerType' => 'App\\models\\ATSFlight\\ArrayOfRuleResponsePassengerType',
      'RuleResponsePassengerType' => 'App\\models\\ATSFlight\\RuleResponsePassengerType',
      'RuleResponseUserDefinedField' => 'App\\models\\ATSFlight\\RuleResponseUserDefinedField',
      'ArrayOfRuleResponseWeekdaySurcharge' => 'App\\models\\ATSFlight\\ArrayOfRuleResponseWeekdaySurcharge',
      'RuleResponseWeekdaySurcharge' => 'App\\models\\ATSFlight\\RuleResponseWeekdaySurcharge',
      'RuleTextRequestData' => 'App\\models\\ATSFlight\\RuleTextRequestData',
      'RuleTextRequestCharter' => 'App\\models\\ATSFlight\\RuleTextRequestCharter',
      'ArrayOfRuleTextRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfRuleTextRequestLeg',
      'RuleTextRequestLeg' => 'App\\models\\ATSFlight\\RuleTextRequestLeg',
      'ArrayOfRuleTextRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfRuleTextRequestSegment',
      'RuleTextRequestSegment' => 'App\\models\\ATSFlight\\RuleTextRequestSegment',
      'ArrayOfRuleTextRequestPassenger' => 'App\\models\\ATSFlight\\ArrayOfRuleTextRequestPassenger',
      'RuleTextRequestPassenger' => 'App\\models\\ATSFlight\\RuleTextRequestPassenger',
      'RuleTextResponseData' => 'App\\models\\ATSFlight\\RuleTextResponseData',
      'ArrayOfEnhancedRules' => 'App\\models\\ATSFlight\\ArrayOfEnhancedRules',
      'EnhancedRules' => 'App\\models\\ATSFlight\\EnhancedRules',
      'ArrayOfRuleChapter' => 'App\\models\\ATSFlight\\ArrayOfRuleChapter',
      'RuleChapter' => 'App\\models\\ATSFlight\\RuleChapter',
      'ArrayOfRuleTextResponseRule' => 'App\\models\\ATSFlight\\ArrayOfRuleTextResponseRule',
      'RuleTextResponseRule' => 'App\\models\\ATSFlight\\RuleTextResponseRule',
      'ArrayOfRuleTextResponsePassengerType' => 'App\\models\\ATSFlight\\ArrayOfRuleTextResponsePassengerType',
      'RuleTextResponsePassengerType' => 'App\\models\\ATSFlight\\RuleTextResponsePassengerType',
      'ArrayOfRuleTextResponseTitle' => 'App\\models\\ATSFlight\\ArrayOfRuleTextResponseTitle',
      'RuleTextResponseTitle' => 'App\\models\\ATSFlight\\RuleTextResponseTitle',
      'ArrayOfRuleTextResponseLine' => 'App\\models\\ATSFlight\\ArrayOfRuleTextResponseLine',
      'RuleTextResponseLine' => 'App\\models\\ATSFlight\\RuleTextResponseLine',
      'SeatMapRequestData' => 'App\\models\\ATSFlight\\SeatMapRequestData',
      'ArrayOfSeatMapSegmentData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapSegmentData',
      'SeatMapSegmentData' => 'App\\models\\ATSFlight\\SeatMapSegmentData',
      'ArrayOfSeatMapFrequentFlyerData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapFrequentFlyerData',
      'SeatMapFrequentFlyerData' => 'App\\models\\ATSFlight\\SeatMapFrequentFlyerData',
      'ArrayOfSeatMapPassenger' => 'App\\models\\ATSFlight\\ArrayOfSeatMapPassenger',
      'SeatMapPassenger' => 'App\\models\\ATSFlight\\SeatMapPassenger',
      'SeatMapResponseData' => 'App\\models\\ATSFlight\\SeatMapResponseData',
      'ArrayOfSeatMapExceptionData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapExceptionData',
      'SeatMapExceptionData' => 'App\\models\\ATSFlight\\SeatMapExceptionData',
      'ArrayOfSeatMapData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapData',
      'SeatMapData' => 'App\\models\\ATSFlight\\SeatMapData',
      'ArrayOfSeatMapDetailData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapDetailData',
      'SeatMapDetailData' => 'App\\models\\ATSFlight\\SeatMapDetailData',
      'ArrayOfSeatMapAirRowData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapAirRowData',
      'SeatMapAirRowData' => 'App\\models\\ATSFlight\\SeatMapAirRowData',
      'ArrayOfSeatMapAirSeatData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapAirSeatData',
      'SeatMapAirSeatData' => 'App\\models\\ATSFlight\\SeatMapAirSeatData',
      'SeatMapAvailabilityData' => 'App\\models\\ATSFlight\\SeatMapAvailabilityData',
      'ArrayOfSeatMapCharacteristicData' => 'App\\models\\ATSFlight\\ArrayOfSeatMapCharacteristicData',
      'SeatMapCharacteristicData' => 'App\\models\\ATSFlight\\SeatMapCharacteristicData',
      'ArrayOfSeatPriceIDDATA' => 'App\\models\\ATSFlight\\ArrayOfSeatPriceIDDATA',
      'SeatPriceIDDATA' => 'App\\models\\ATSFlight\\SeatPriceIDDATA',
      'ArrayOfSeatMapSurchargeDetail' => 'App\\models\\ATSFlight\\ArrayOfSeatMapSurchargeDetail',
      'SeatMapSurchargeDetail' => 'App\\models\\ATSFlight\\SeatMapSurchargeDetail',
      'SupplierRequestData' => 'App\\models\\ATSFlight\\SupplierRequestData',
      'SupplierResponseData' => 'App\\models\\ATSFlight\\SupplierResponseData',
      'ArrayOfSupplierData' => 'App\\models\\ATSFlight\\ArrayOfSupplierData',
      'SupplierData' => 'App\\models\\ATSFlight\\SupplierData',
      'TaxRequestData' => 'App\\models\\ATSFlight\\TaxRequestData',
      'ArrayOfTaxRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfTaxRequestLeg',
      'TaxRequestLeg' => 'App\\models\\ATSFlight\\TaxRequestLeg',
      'ArrayOfTaxRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfTaxRequestSegment',
      'TaxRequestSegment' => 'App\\models\\ATSFlight\\TaxRequestSegment',
      'ArrayOfTaxRequestPassenger' => 'App\\models\\ATSFlight\\ArrayOfTaxRequestPassenger',
      'TaxRequestPassenger' => 'App\\models\\ATSFlight\\TaxRequestPassenger',
      'TaxResponseData' => 'App\\models\\ATSFlight\\TaxResponseData',
      'ArrayOfTaxResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfTaxResponsePassenger',
      'TaxResponsePassenger' => 'App\\models\\ATSFlight\\TaxResponsePassenger',
      'TaxesAndFeesRequestData' => 'App\\models\\ATSFlight\\TaxesAndFeesRequestData',
      'TaxesAndFeesConfig' => 'App\\models\\ATSFlight\\TaxesAndFeesConfig',
      'TaxesAndFeesCharter' => 'App\\models\\ATSFlight\\TaxesAndFeesCharter',
      'TaxesAndFeesWeb' => 'App\\models\\ATSFlight\\TaxesAndFeesWeb',
      'TaxesAndFeesResponseData' => 'App\\models\\ATSFlight\\TaxesAndFeesResponseData',
      'TermsAndConditionsRequestData' => 'App\\models\\ATSFlight\\TermsAndConditionsRequestData',
      'TermsAndConditionsRequestCharter' => 'App\\models\\ATSFlight\\TermsAndConditionsRequestCharter',
      'TermsAndConditionsResponseData' => 'App\\models\\ATSFlight\\TermsAndConditionsResponseData',
      'TicketRequestData' => 'App\\models\\ATSFlight\\TicketRequestData',
      'TicketResponseData' => 'App\\models\\ATSFlight\\TicketResponseData',
      'ArrayOfTicketResponseInformation' => 'App\\models\\ATSFlight\\ArrayOfTicketResponseInformation',
      'TicketResponseInformation' => 'App\\models\\ATSFlight\\TicketResponseInformation',
      'ArrayOfTicketResponseTicket' => 'App\\models\\ATSFlight\\ArrayOfTicketResponseTicket',
      'TicketResponseTicket' => 'App\\models\\ATSFlight\\TicketResponseTicket',
      'ArrayOfTicketResponseLeg' => 'App\\models\\ATSFlight\\ArrayOfTicketResponseLeg',
      'TicketResponseLeg' => 'App\\models\\ATSFlight\\TicketResponseLeg',
      'ArrayOfTicketResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfTicketResponsePassenger',
      'TicketResponsePassenger' => 'App\\models\\ATSFlight\\TicketResponsePassenger',
      'ModifyRequestData' => 'App\\models\\ATSFlight\\ModifyRequestData',
      'ArrayOfModifyRequestContact' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestContact',
      'ModifyRequestContact' => 'App\\models\\ATSFlight\\ModifyRequestContact',
      'ArrayOfModifyContact' => 'App\\models\\ATSFlight\\ArrayOfModifyContact',
      'ModifyContact' => 'App\\models\\ATSFlight\\ModifyContact',
      'ArrayOfModifyRequestFormOfPayment' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestFormOfPayment',
      'ModifyRequestFormOfPayment' => 'App\\models\\ATSFlight\\ModifyRequestFormOfPayment',
      'ArrayOfModifyRequestLeg' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestLeg',
      'ModifyRequestLeg' => 'App\\models\\ATSFlight\\ModifyRequestLeg',
      'ArrayOfModifyRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestSegment',
      'ModifyRequestSegment' => 'App\\models\\ATSFlight\\ModifyRequestSegment',
      'ArrayOfModifyRequestPassenger' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestPassenger',
      'ModifyRequestPassenger' => 'App\\models\\ATSFlight\\ModifyRequestPassenger',
      'ArrayOfModifyRequestFF' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestFF',
      'ModifyRequestFF' => 'App\\models\\ATSFlight\\ModifyRequestFF',
      'ArrayOfModifyRequestOSI' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestOSI',
      'ModifyRequestOSI' => 'App\\models\\ATSFlight\\ModifyRequestOSI',
      'ArrayOfModifyRequestSSR' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestSSR',
      'ModifyRequestSSR' => 'App\\models\\ATSFlight\\ModifyRequestSSR',
      'ArrayOfModifyBookingClass' => 'App\\models\\ATSFlight\\ArrayOfModifyBookingClass',
      'ModifyBookingClass' => 'App\\models\\ATSFlight\\ModifyBookingClass',
      'ArrayOfModifyStatus' => 'App\\models\\ATSFlight\\ArrayOfModifyStatus',
      'ModifyStatus' => 'App\\models\\ATSFlight\\ModifyStatus',
      'ModifyRequestWebConfig' => 'App\\models\\ATSFlight\\ModifyRequestWebConfig',
      'ArrayOfModifyRequestvFMacro' => 'App\\models\\ATSFlight\\ArrayOfModifyRequestvFMacro',
      'ModifyRequestvFMacro' => 'App\\models\\ATSFlight\\ModifyRequestvFMacro',
      'ModifyBookingResponseData' => 'App\\models\\ATSFlight\\ModifyBookingResponseData',
      'ArrayOfModuleResponseContact' => 'App\\models\\ATSFlight\\ArrayOfModuleResponseContact',
      'ModuleResponseContact' => 'App\\models\\ATSFlight\\ModuleResponseContact',
      'ArrayOfModifyResponseFormOfPayment' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseFormOfPayment',
      'ModifyResponseFormOfPayment' => 'App\\models\\ATSFlight\\ModifyResponseFormOfPayment',
      'ArrayOfModifyResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfModifyResponsePassenger',
      'ModifyResponsePassenger' => 'App\\models\\ATSFlight\\ModifyResponsePassenger',
      'ArrayOfModifyResponseAPIS' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseAPIS',
      'ModifyResponseAPIS' => 'App\\models\\ATSFlight\\ModifyResponseAPIS',
      'ArrayOfModifyResponseFF' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseFF',
      'ModifyResponseFF' => 'App\\models\\ATSFlight\\ModifyResponseFF',
      'ArrayOfModifyResponseOSI' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseOSI',
      'ModifyResponseOSI' => 'App\\models\\ATSFlight\\ModifyResponseOSI',
      'ArrayOfModifyResponseSSR' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseSSR',
      'ModifyResponseSSR' => 'App\\models\\ATSFlight\\ModifyResponseSSR',
      'ArrayOfModifyResponseSeats' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseSeats',
      'ModifyResponseSeats' => 'App\\models\\ATSFlight\\ModifyResponseSeats',
      'ArrayOfModifyResponseRebookSementStatus' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseRebookSementStatus',
      'ModifyResponseRebookSementStatus' => 'App\\models\\ATSFlight\\ModifyResponseRebookSementStatus',
      'ArrayOfModifyResponseRemark' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseRemark',
      'ModifyResponseRemark' => 'App\\models\\ATSFlight\\ModifyResponseRemark',
      'ArrayOfModifyResponseStatus' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseStatus',
      'ModifyResponseStatus' => 'App\\models\\ATSFlight\\ModifyResponseStatus',
      'ArrayOfModifyResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseSegment',
      'ModifyResponseSegment' => 'App\\models\\ATSFlight\\ModifyResponseSegment',
      'ArrayOfModifyResponseService' => 'App\\models\\ATSFlight\\ArrayOfModifyResponseService',
      'ModifyResponseService' => 'App\\models\\ATSFlight\\ModifyResponseService',
      'ArrayOfModifyResponsevfMacro' => 'App\\models\\ATSFlight\\ArrayOfModifyResponsevfMacro',
      'ModifyResponsevfMacro' => 'App\\models\\ATSFlight\\ModifyResponsevfMacro',
      'NativeRequestData' => 'App\\models\\ATSFlight\\NativeRequestData',
      'NativeResponseData' => 'App\\models\\ATSFlight\\NativeResponseData',
      'PNRResponseData' => 'App\\models\\ATSFlight\\PNRResponseData',
      'ArrayOfPNRResponseInfo' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseInfo',
      'PNRResponseInfo' => 'App\\models\\ATSFlight\\PNRResponseInfo',
      'ArrayOfPNRResponseLocation' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseLocation',
      'PNRResponseLocation' => 'App\\models\\ATSFlight\\PNRResponseLocation',
      'ArrayOfPNRResponseOSI' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseOSI',
      'PNRResponseOSI' => 'App\\models\\ATSFlight\\PNRResponseOSI',
      'ArrayOfPNRResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfPNRResponsePassenger',
      'PNRResponsePassenger' => 'App\\models\\ATSFlight\\PNRResponsePassenger',
      'ArrayOfPNRResponseSK' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseSK',
      'PNRResponseSK' => 'App\\models\\ATSFlight\\PNRResponseSK',
      'ArrayOfPNRResponseSeatPreferrence' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseSeatPreferrence',
      'PNRResponseSeatPreferrence' => 'App\\models\\ATSFlight\\PNRResponseSeatPreferrence',
      'ArrayOfPNRResponseSSR' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseSSR',
      'PNRResponseSSR' => 'App\\models\\ATSFlight\\PNRResponseSSR',
      'ArrayOfPNRResponseTKNO' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseTKNO',
      'PNRResponseTKNO' => 'App\\models\\ATSFlight\\PNRResponseTKNO',
      'ArrayOfPNRResponsePayment' => 'App\\models\\ATSFlight\\ArrayOfPNRResponsePayment',
      'PNRResponsePayment' => 'App\\models\\ATSFlight\\PNRResponsePayment',
      'ArrayOfPNRResponsePhone' => 'App\\models\\ATSFlight\\ArrayOfPNRResponsePhone',
      'PNRResponsePhone' => 'App\\models\\ATSFlight\\PNRResponsePhone',
      'ArrayOfPNRResponseSKElement' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseSKElement',
      'PNRResponseSKElement' => 'App\\models\\ATSFlight\\PNRResponseSKElement',
      'ArrayOfPNRResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseSegment',
      'PNRResponseSegment' => 'App\\models\\ATSFlight\\PNRResponseSegment',
      'ArrayOfPNRServiceData' => 'App\\models\\ATSFlight\\ArrayOfPNRServiceData',
      'PNRServiceData' => 'App\\models\\ATSFlight\\PNRServiceData',
      'ArrayOfPNRResponseStoredFare' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseStoredFare',
      'PNRResponseStoredFare' => 'App\\models\\ATSFlight\\PNRResponseStoredFare',
      'PNRResponseFareDetails' => 'App\\models\\ATSFlight\\PNRResponseFareDetails',
      'ArrayOfPNRResponseTax' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseTax',
      'PNRResponseTax' => 'App\\models\\ATSFlight\\PNRResponseTax',
      'PNRResponseTicketingDetails' => 'App\\models\\ATSFlight\\PNRResponseTicketingDetails',
      'ArrayOfPNRResponseStoredFareTKTSement' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseStoredFareTKTSement',
      'PNRResponseStoredFareTKTSement' => 'App\\models\\ATSFlight\\PNRResponseStoredFareTKTSement',
      'ArrayOfPNRServiceFareData' => 'App\\models\\ATSFlight\\ArrayOfPNRServiceFareData',
      'PNRServiceFareData' => 'App\\models\\ATSFlight\\PNRServiceFareData',
      'ArrayOfPNRServiceFareCouponData' => 'App\\models\\ATSFlight\\ArrayOfPNRServiceFareCouponData',
      'PNRServiceFareCouponData' => 'App\\models\\ATSFlight\\PNRServiceFareCouponData',
      'ArrayOfPNRResponseTicketInfo' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseTicketInfo',
      'PNRResponseTicketInfo' => 'App\\models\\ATSFlight\\PNRResponseTicketInfo',
      'ArrayOfPNRResponseDocumentInfo' => 'App\\models\\ATSFlight\\ArrayOfPNRResponseDocumentInfo',
      'PNRResponseDocumentInfo' => 'App\\models\\ATSFlight\\PNRResponseDocumentInfo',
      'ArrayOfTicketingDateTypeData' => 'App\\models\\ATSFlight\\ArrayOfTicketingDateTypeData',
      'TicketingDateTypeData' => 'App\\models\\ATSFlight\\TicketingDateTypeData',
      'ProcessingRequestData' => 'App\\models\\ATSFlight\\ProcessingRequestData',
      'ProcessingRequestQueue' => 'App\\models\\ATSFlight\\ProcessingRequestQueue',
      'ArrayOfProcessingRequestProcess' => 'App\\models\\ATSFlight\\ArrayOfProcessingRequestProcess',
      'ProcessingRequestProcess' => 'App\\models\\ATSFlight\\ProcessingRequestProcess',
      'ArrayOfProcessingRequestAction' => 'App\\models\\ATSFlight\\ArrayOfProcessingRequestAction',
      'ProcessingRequestAction' => 'App\\models\\ATSFlight\\ProcessingRequestAction',
      'ArrayOfProcessingRequestRule' => 'App\\models\\ATSFlight\\ArrayOfProcessingRequestRule',
      'ProcessingRequestRule' => 'App\\models\\ATSFlight\\ProcessingRequestRule',
      'ProcessingResponseData' => 'App\\models\\ATSFlight\\ProcessingResponseData',
      'ArrayOfProcessingResponseProcess' => 'App\\models\\ATSFlight\\ArrayOfProcessingResponseProcess',
      'ProcessingResponseProcess' => 'App\\models\\ATSFlight\\ProcessingResponseProcess',
      'ArrayOfProcessingResponseContact' => 'App\\models\\ATSFlight\\ArrayOfProcessingResponseContact',
      'ProcessingResponseContact' => 'App\\models\\ATSFlight\\ProcessingResponseContact',
      'ArrayOfProcessResponseStatus' => 'App\\models\\ATSFlight\\ArrayOfProcessResponseStatus',
      'ProcessResponseStatus' => 'App\\models\\ATSFlight\\ProcessResponseStatus',
      'ArrayOfProcessResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfProcessResponseSegment',
      'ProcessResponseSegment' => 'App\\models\\ATSFlight\\ProcessResponseSegment',
      'ProcessResponseSegmentDetails' => 'App\\models\\ATSFlight\\ProcessResponseSegmentDetails',
      'QueueRequestData' => 'App\\models\\ATSFlight\\QueueRequestData',
      'RebookRequestData' => 'App\\models\\ATSFlight\\RebookRequestData',
      'ArrayOfRebookRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfRebookRequestSegment',
      'RebookRequestSegment' => 'App\\models\\ATSFlight\\RebookRequestSegment',
      'ReissueRequestData' => 'App\\models\\ATSFlight\\ReissueRequestData',
      'ReissueRequestPayment' => 'App\\models\\ATSFlight\\ReissueRequestPayment',
      'ReissueResponseData' => 'App\\models\\ATSFlight\\ReissueResponseData',
      'ReissueResponseTicketNumber' => 'App\\models\\ATSFlight\\ReissueResponseTicketNumber',
      'RemoveRequestData' => 'App\\models\\ATSFlight\\RemoveRequestData',
      'ArrayOfRemovePNRData' => 'App\\models\\ATSFlight\\ArrayOfRemovePNRData',
      'RemovePNRData' => 'App\\models\\ATSFlight\\RemovePNRData',
      'ArrayOfRemoveQueueData' => 'App\\models\\ATSFlight\\ArrayOfRemoveQueueData',
      'RemoveQueueData' => 'App\\models\\ATSFlight\\RemoveQueueData',
      'RemoveResponseData' => 'App\\models\\ATSFlight\\RemoveResponseData',
      'ArrayOfRemoveResponsePNRData' => 'App\\models\\ATSFlight\\ArrayOfRemoveResponsePNRData',
      'RemoveResponsePNRData' => 'App\\models\\ATSFlight\\RemoveResponsePNRData',
      'ArrayOfRemoveResponseQueueData' => 'App\\models\\ATSFlight\\ArrayOfRemoveResponseQueueData',
      'RemoveResponseQueueData' => 'App\\models\\ATSFlight\\RemoveResponseQueueData',
      'PNRRequestData' => 'App\\models\\ATSFlight\\PNRRequestData',
      'PNRRequestCharter' => 'App\\models\\ATSFlight\\PNRRequestCharter',
      'PNRRequestWeb' => 'App\\models\\ATSFlight\\PNRRequestWeb',
      'RevalidateRequestData' => 'App\\models\\ATSFlight\\RevalidateRequestData',
      'RevalidateResponseData' => 'App\\models\\ATSFlight\\RevalidateResponseData',
      'ArrayOfRevalidateResponseTicketNumber' => 'App\\models\\ATSFlight\\ArrayOfRevalidateResponseTicketNumber',
      'RevalidateResponseTicketNumber' => 'App\\models\\ATSFlight\\RevalidateResponseTicketNumber',
      'SeatResRequestData' => 'App\\models\\ATSFlight\\SeatResRequestData',
      'ArrayOfSeatResSegmentData' => 'App\\models\\ATSFlight\\ArrayOfSeatResSegmentData',
      'SeatResSegmentData' => 'App\\models\\ATSFlight\\SeatResSegmentData',
      'ArrayOfSeatResSeatData' => 'App\\models\\ATSFlight\\ArrayOfSeatResSeatData',
      'SeatResSeatData' => 'App\\models\\ATSFlight\\SeatResSeatData',
      'SeatResResponseData' => 'App\\models\\ATSFlight\\SeatResResponseData',
      'ArrayOfSeatResResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfSeatResResponseSegment',
      'SeatResResponseSegment' => 'App\\models\\ATSFlight\\SeatResResponseSegment',
      'ArrayOfSeatResSeatStatus' => 'App\\models\\ATSFlight\\ArrayOfSeatResSeatStatus',
      'SeatResSeatStatus' => 'App\\models\\ATSFlight\\SeatResSeatStatus',
      'TicketBookingRequestData' => 'App\\models\\ATSFlight\\TicketBookingRequestData',
      'ArrayOfTicketBookingRequestAdvanced' => 'App\\models\\ATSFlight\\ArrayOfTicketBookingRequestAdvanced',
      'TicketBookingRequestAdvanced' => 'App\\models\\ATSFlight\\TicketBookingRequestAdvanced',
      'TicketBookingRequestIssue' => 'App\\models\\ATSFlight\\TicketBookingRequestIssue',
      'TicketBookingRequestCommission' => 'App\\models\\ATSFlight\\TicketBookingRequestCommission',
      'TicketBookingRequestPaxText' => 'App\\models\\ATSFlight\\TicketBookingRequestPaxText',
      'ArrayOfTicketBookingRequestPayment' => 'App\\models\\ATSFlight\\ArrayOfTicketBookingRequestPayment',
      'TicketBookingRequestPayment' => 'App\\models\\ATSFlight\\TicketBookingRequestPayment',
      'ArrayOfTicketBookingRequestPassenger' => 'App\\models\\ATSFlight\\ArrayOfTicketBookingRequestPassenger',
      'TicketBookingRequestPassenger' => 'App\\models\\ATSFlight\\TicketBookingRequestPassenger',
      'ArrayOfTicketBookingEMD' => 'App\\models\\ATSFlight\\ArrayOfTicketBookingEMD',
      'TicketBookingEMD' => 'App\\models\\ATSFlight\\TicketBookingEMD',
      'ArrayOfTicketBookingRequestSegment' => 'App\\models\\ATSFlight\\ArrayOfTicketBookingRequestSegment',
      'TicketBookingRequestSegment' => 'App\\models\\ATSFlight\\TicketBookingRequestSegment',
      'TicketBookingResponseData' => 'App\\models\\ATSFlight\\TicketBookingResponseData',
      'ArrayOfTicketBookingResponsePassenger' => 'App\\models\\ATSFlight\\ArrayOfTicketBookingResponsePassenger',
      'TicketBookingResponsePassenger' => 'App\\models\\ATSFlight\\TicketBookingResponsePassenger',
      'TicketBookingResponsePassengerDetails' => 'App\\models\\ATSFlight\\TicketBookingResponsePassengerDetails',
      'TicketBookingResponseTicket' => 'App\\models\\ATSFlight\\TicketBookingResponseTicket',
      'TicketBookingResponseFare' => 'App\\models\\ATSFlight\\TicketBookingResponseFare',
      'ArrayOfTicketBookingResponseSegment' => 'App\\models\\ATSFlight\\ArrayOfTicketBookingResponseSegment',
      'TicketBookingResponseSegment' => 'App\\models\\ATSFlight\\TicketBookingResponseSegment',
      'ValidateFlightDateRequestData' => 'App\\models\\ATSFlight\\ValidateFlightDateRequestData',
      'ValidateFlightDateResponseData' => 'App\\models\\ATSFlight\\ValidateFlightDateResponseData',
      'ArrayOfAirline' => 'App\\models\\ATSFlight\\ArrayOfAirline',
      'Airline' => 'App\\models\\ATSFlight\\Airline',
      'BookFare' => 'App\\models\\ATSFlight\\BookFare',
      'BookFareResponse' => 'App\\models\\ATSFlight\\BookFareResponse',
      'BrowseQueue' => 'App\\models\\ATSFlight\\BrowseQueue',
      'BrowseQueueResponse' => 'App\\models\\ATSFlight\\BrowseQueueResponse',
      'CancelBooking' => 'App\\models\\ATSFlight\\CancelBooking',
      'CancelBookingResponse' => 'App\\models\\ATSFlight\\CancelBookingResponse',
      'CancelTicket' => 'App\\models\\ATSFlight\\CancelTicket',
      'CancelTicketResponse' => 'App\\models\\ATSFlight\\CancelTicketResponse',
      'ChangeFlightBooking' => 'App\\models\\ATSFlight\\ChangeFlightBooking',
      'ChangeFlightBookingResponse' => 'App\\models\\ATSFlight\\ChangeFlightBookingResponse',
      'ConvertCurrency' => 'App\\models\\ATSFlight\\ConvertCurrency',
      'ConvertCurrencyResponse' => 'App\\models\\ATSFlight\\ConvertCurrencyResponse',
      'DoCreditCardPayment' => 'App\\models\\ATSFlight\\DoCreditCardPayment',
      'DoCreditCardPaymentResponse' => 'App\\models\\ATSFlight\\DoCreditCardPaymentResponse',
      'GetAvailability' => 'App\\models\\ATSFlight\\GetAvailability',
      'GetAvailabilityResponse' => 'App\\models\\ATSFlight\\GetAvailabilityResponse',
      'GetBoardingDetails' => 'App\\models\\ATSFlight\\GetBoardingDetails',
      'GetBoardingDetailsResponse' => 'App\\models\\ATSFlight\\GetBoardingDetailsResponse',
      'GetCalendarDisplay' => 'App\\models\\ATSFlight\\GetCalendarDisplay',
      'GetCalendarDisplayResponse' => 'App\\models\\ATSFlight\\GetCalendarDisplayResponse',
      'GetCorpCodes' => 'App\\models\\ATSFlight\\GetCorpCodes',
      'GetCorpCodesResponse' => 'App\\models\\ATSFlight\\GetCorpCodesResponse',
      'GetEntryClients' => 'App\\models\\ATSFlight\\GetEntryClients',
      'GetEntryClientsResponse' => 'App\\models\\ATSFlight\\GetEntryClientsResponse',
      'GetFareDisplay' => 'App\\models\\ATSFlight\\GetFareDisplay',
      'GetFareDisplayResponse' => 'App\\models\\ATSFlight\\GetFareDisplayResponse',
      'GetFareQuote' => 'App\\models\\ATSFlight\\GetFareQuote',
      'GetFareQuoteResponse' => 'App\\models\\ATSFlight\\GetFareQuoteResponse',
      'GetFares' => 'App\\models\\ATSFlight\\GetFares',
      'GetFaresResponse' => 'App\\models\\ATSFlight\\GetFaresResponse',
      'GetFaresComplex' => 'App\\models\\ATSFlight\\GetFaresComplex',
      'GetFaresComplexResponse' => 'App\\models\\ATSFlight\\GetFaresComplexResponse',
      'GetFlightDetails' => 'App\\models\\ATSFlight\\GetFlightDetails',
      'GetFlightDetailsResponse' => 'App\\models\\ATSFlight\\GetFlightDetailsResponse',
      'GetMultiChannelQueryInformation' => 'App\\models\\ATSFlight\\GetMultiChannelQueryInformation',
      'GetMultiChannelQueryInformationResponse' => 'App\\models\\ATSFlight\\GetMultiChannelQueryInformationResponse',
      'GetPaymentMethods' => 'App\\models\\ATSFlight\\GetPaymentMethods',
      'GetPaymentMethodsResponse' => 'App\\models\\ATSFlight\\GetPaymentMethodsResponse',
      'GetPreferenceSearch' => 'App\\models\\ATSFlight\\GetPreferenceSearch',
      'GetPreferenceSearchResponse' => 'App\\models\\ATSFlight\\GetPreferenceSearchResponse',
      'GetRoutingInformation' => 'App\\models\\ATSFlight\\GetRoutingInformation',
      'GetRoutingInformationResponse' => 'App\\models\\ATSFlight\\GetRoutingInformationResponse',
      'GetRoutings' => 'App\\models\\ATSFlight\\GetRoutings',
      'GetRoutingsResponse' => 'App\\models\\ATSFlight\\GetRoutingsResponse',
      'GetRuleInformation' => 'App\\models\\ATSFlight\\GetRuleInformation',
      'GetRuleInformationResponse' => 'App\\models\\ATSFlight\\GetRuleInformationResponse',
      'GetRuleInformationText' => 'App\\models\\ATSFlight\\GetRuleInformationText',
      'GetRuleInformationTextResponse' => 'App\\models\\ATSFlight\\GetRuleInformationTextResponse',
      'GetSeatMaps' => 'App\\models\\ATSFlight\\GetSeatMaps',
      'GetSeatMapsResponse' => 'App\\models\\ATSFlight\\GetSeatMapsResponse',
      'GetStatus' => 'App\\models\\ATSFlight\\GetStatus',
      'GetStatusResponse' => 'App\\models\\ATSFlight\\GetStatusResponse',
      'GetSupplier' => 'App\\models\\ATSFlight\\GetSupplier',
      'GetSupplierResponse' => 'App\\models\\ATSFlight\\GetSupplierResponse',
      'GetTax' => 'App\\models\\ATSFlight\\GetTax',
      'GetTaxResponse' => 'App\\models\\ATSFlight\\GetTaxResponse',
      'GetTaxesAndFees' => 'App\\models\\ATSFlight\\GetTaxesAndFees',
      'GetTaxesAndFeesResponse' => 'App\\models\\ATSFlight\\GetTaxesAndFeesResponse',
      'GetTermsAndConditions' => 'App\\models\\ATSFlight\\GetTermsAndConditions',
      'GetTermsAndConditionsResponse' => 'App\\models\\ATSFlight\\GetTermsAndConditionsResponse',
      'GetTicketInformation' => 'App\\models\\ATSFlight\\GetTicketInformation',
      'GetTicketInformationResponse' => 'App\\models\\ATSFlight\\GetTicketInformationResponse',
      'GetUserConfigurationData' => 'App\\models\\ATSFlight\\GetUserConfigurationData',
      'GetUserConfigurationDataResponse' => 'App\\models\\ATSFlight\\GetUserConfigurationDataResponse',
      'GetVersions' => 'App\\models\\ATSFlight\\GetVersions',
      'GetVersionsResponse' => 'App\\models\\ATSFlight\\GetVersionsResponse',
      'ModifyBooking' => 'App\\models\\ATSFlight\\ModifyBooking',
      'ModifyBookingResponse' => 'App\\models\\ATSFlight\\ModifyBookingResponse',
      'NativeCommand' => 'App\\models\\ATSFlight\\NativeCommand',
      'NativeCommandResponse' => 'App\\models\\ATSFlight\\NativeCommandResponse',
      'PNRProcessing' => 'App\\models\\ATSFlight\\PNRProcessing',
      'PNRProcessingResponse' => 'App\\models\\ATSFlight\\PNRProcessingResponse',
      'QueueBooking' => 'App\\models\\ATSFlight\\QueueBooking',
      'QueueBookingResponse' => 'App\\models\\ATSFlight\\QueueBookingResponse',
      'Rebook' => 'App\\models\\ATSFlight\\Rebook',
      'RebookResponse' => 'App\\models\\ATSFlight\\RebookResponse',
      'ReissueTicket' => 'App\\models\\ATSFlight\\ReissueTicket',
      'ReissueTicketResponse' => 'App\\models\\ATSFlight\\ReissueTicketResponse',
      'RemoveBookingFromQueue' => 'App\\models\\ATSFlight\\RemoveBookingFromQueue',
      'RemoveBookingFromQueueResponse' => 'App\\models\\ATSFlight\\RemoveBookingFromQueueResponse',
      'RetrievePassengerNameRecord' => 'App\\models\\ATSFlight\\RetrievePassengerNameRecord',
      'RetrievePassengerNameRecordResponse' => 'App\\models\\ATSFlight\\RetrievePassengerNameRecordResponse',
      'RevalidateTicket' => 'App\\models\\ATSFlight\\RevalidateTicket',
      'RevalidateTicketResponse' => 'App\\models\\ATSFlight\\RevalidateTicketResponse',
      'SeatReservation' => 'App\\models\\ATSFlight\\SeatReservation',
      'SeatReservationResponse' => 'App\\models\\ATSFlight\\SeatReservationResponse',
      'TicketBooking' => 'App\\models\\ATSFlight\\TicketBooking',
      'TicketBookingResponse' => 'App\\models\\ATSFlight\\TicketBookingResponse',
      'UpdateUserAgreementList' => 'App\\models\\ATSFlight\\UpdateUserAgreementList',
      'UpdateUserAgreementListResponse' => 'App\\models\\ATSFlight\\UpdateUserAgreementListResponse',
      'UpdateUserList' => 'App\\models\\ATSFlight\\UpdateUserList',
      'UpdateUserListResponse' => 'App\\models\\ATSFlight\\UpdateUserListResponse',
      'ValidateFlightDate' => 'App\\models\\ATSFlight\\ValidateFlightDate',
      'ValidateFlightDateResponse' => 'App\\models\\ATSFlight\\ValidateFlightDateResponse',
      'LoadAirlines' => 'App\\models\\ATSFlight\\LoadAirlines',
      'LoadAirlinesResponse' => 'App\\models\\ATSFlight\\LoadAirlinesResponse',
      'FlightAPIFault' => 'App\\models\\ATSFlight\\FlightAPIFault',
      'ServiceRequestSegment' => 'App\\models\\ATSFlight\\ServiceRequestSegment',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        //$wsdl = config('services.ats.wsdl');
        $wsdl = "http://81.169.224.131:8827/FlightAPI?wsdl";
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param BookFare $parameters
     * @return BookFareResponse
     */
    public function BookFare(BookFare $parameters)
    {
      return $this->__soapCall('BookFare', array($parameters));
    }

    /**
     * @param BrowseQueue $parameters
     * @return BrowseQueueResponse
     */
    public function BrowseQueue(BrowseQueue $parameters)
    {
      return $this->__soapCall('BrowseQueue', array($parameters));
    }

    /**
     * @param CancelBooking $parameters
     * @return CancelBookingResponse
     */
    public function CancelBooking(CancelBooking $parameters)
    {
      return $this->__soapCall('CancelBooking', array($parameters));
    }

    /**
     * @param CancelTicket $parameters
     * @return CancelTicketResponse
     */
    public function CancelTicket(CancelTicket $parameters)
    {
      return $this->__soapCall('CancelTicket', array($parameters));
    }

    /**
     * @param ChangeFlightBooking $parameters
     * @return ChangeFlightBookingResponse
     */
    public function ChangeFlightBooking(ChangeFlightBooking $parameters)
    {
      return $this->__soapCall('ChangeFlightBooking', array($parameters));
    }

    /**
     * @param ConvertCurrency $parameters
     * @return ConvertCurrencyResponse
     */
    public function ConvertCurrency(ConvertCurrency $parameters)
    {
      return $this->__soapCall('ConvertCurrency', array($parameters));
    }

    /**
     * @param DoCreditCardPayment $parameters
     * @return DoCreditCardPaymentResponse
     */
    public function DoCreditCardPayment(DoCreditCardPayment $parameters)
    {
      return $this->__soapCall('DoCreditCardPayment', array($parameters));
    }

    /**
     * @param GetAvailability $parameters
     * @return GetAvailabilityResponse
     */
    public function GetAvailability(GetAvailability $parameters)
    {
      return $this->__soapCall('GetAvailability', array($parameters));
    }

    /**
     * @param GetBoardingDetails $parameters
     * @return GetBoardingDetailsResponse
     */
    public function GetBoardingDetails(GetBoardingDetails $parameters)
    {
      return $this->__soapCall('GetBoardingDetails', array($parameters));
    }

    /**
     * @param GetCalendarDisplay $parameters
     * @return GetCalendarDisplayResponse
     */
    public function GetCalendarDisplay(GetCalendarDisplay $parameters)
    {
      return $this->__soapCall('GetCalendarDisplay', array($parameters));
    }

    /**
     * @param GetCorpCodes $parameters
     * @return GetCorpCodesResponse
     */
    public function GetCorpCodes(GetCorpCodes $parameters)
    {
      return $this->__soapCall('GetCorpCodes', array($parameters));
    }

    /**
     * @param GetEntryClients $parameters
     * @return GetEntryClientsResponse
     */
    public function GetEntryClients(GetEntryClients $parameters)
    {
      return $this->__soapCall('GetEntryClients', array($parameters));
    }

    /**
     * @param GetFareDisplay $parameters
     * @return GetFareDisplayResponse
     */
    public function GetFareDisplay(GetFareDisplay $parameters)
    {
      return $this->__soapCall('GetFareDisplay', array($parameters));
    }

    /**
     * @param GetFareQuote $parameters
     * @return GetFareQuoteResponse
     */
    public function GetFareQuote(GetFareQuote $parameters)
    {
      return $this->__soapCall('GetFareQuote', array($parameters));
    }

    /**
     * @param GetFares $parameters
     * @return GetFaresResponse
     */
    public function GetFares(GetFares $parameters)
    {
      return $this->__soapCall('GetFares', array($parameters));
    }

    /**
     * @param GetFaresComplex $parameters
     * @return GetFaresComplexResponse
     */
    public function GetFaresComplex(GetFaresComplex $parameters)
    {
      return $this->__soapCall('GetFaresComplex', array($parameters));
    }

    /**
     * @param GetFlightDetails $parameters
     * @return GetFlightDetailsResponse
     */
    public function GetFlightDetails(GetFlightDetails $parameters)
    {
      return $this->__soapCall('GetFlightDetails', array($parameters));
    }

    /**
     * @param GetMultiChannelQueryInformation $parameters
     * @return GetMultiChannelQueryInformationResponse
     */
    public function GetMultiChannelQueryInformation(GetMultiChannelQueryInformation $parameters)
    {
      return $this->__soapCall('GetMultiChannelQueryInformation', array($parameters));
    }

    /**
     * @param GetPaymentMethods $parameters
     * @return GetPaymentMethodsResponse
     */
    public function GetPaymentMethods(GetPaymentMethods $parameters)
    {
      return $this->__soapCall('GetPaymentMethods', array($parameters));
    }

    /**
     * @param GetPreferenceSearch $parameters
     * @return GetPreferenceSearchResponse
     */
    public function GetPreferenceSearch(GetPreferenceSearch $parameters)
    {
      return $this->__soapCall('GetPreferenceSearch', array($parameters));
    }

    /**
     * @param GetRoutingInformation $parameters
     * @return GetRoutingInformationResponse
     */
    public function GetRoutingInformation(GetRoutingInformation $parameters)
    {
      return $this->__soapCall('GetRoutingInformation', array($parameters));
    }

    /**
     * @param GetRoutings $parameters
     * @return GetRoutingsResponse
     */
    public function GetRoutings(GetRoutings $parameters)
    {
      return $this->__soapCall('GetRoutings', array($parameters));
    }

    /**
     * @param GetRuleInformation $parameters
     * @return GetRuleInformationResponse
     */
    public function GetRuleInformation(GetRuleInformation $parameters)
    {
      return $this->__soapCall('GetRuleInformation', array($parameters));
    }

    /**
     * @param GetRuleInformationText $parameters
     * @return GetRuleInformationTextResponse
     */
    public function GetRuleInformationText(GetRuleInformationText $parameters)
    {
      return $this->__soapCall('GetRuleInformationText', array($parameters));
    }

    /**
     * @param GetSeatMaps $parameters
     * @return GetSeatMapsResponse
     */
    public function GetSeatMaps(GetSeatMaps $parameters)
    {
      return $this->__soapCall('GetSeatMaps', array($parameters));
    }

    /**
     * @param GetStatus $parameters
     * @return GetStatusResponse
     */
    public function GetStatus(GetStatus $parameters)
    {
      return $this->__soapCall('GetStatus', array($parameters));
    }

    /**
     * @param GetSupplier $parameters
     * @return GetSupplierResponse
     */
    public function GetSupplier(GetSupplier $parameters)
    {
      return $this->__soapCall('GetSupplier', array($parameters));
    }

    /**
     * @param GetTax $parameters
     * @return GetTaxResponse
     */
    public function GetTax(GetTax $parameters)
    {
      return $this->__soapCall('GetTax', array($parameters));
    }

    /**
     * @param GetTaxesAndFees $parameters
     * @return GetTaxesAndFeesResponse
     */
    public function GetTaxesAndFees(GetTaxesAndFees $parameters)
    {
      return $this->__soapCall('GetTaxesAndFees', array($parameters));
    }

    /**
     * @param GetTermsAndConditions $parameters
     * @return GetTermsAndConditionsResponse
     */
    public function GetTermsAndConditions(GetTermsAndConditions $parameters)
    {
      return $this->__soapCall('GetTermsAndConditions', array($parameters));
    }

    /**
     * @param GetTicketInformation $parameters
     * @return GetTicketInformationResponse
     */
    public function GetTicketInformation(GetTicketInformation $parameters)
    {
      return $this->__soapCall('GetTicketInformation', array($parameters));
    }

    /**
     * @param GetUserConfigurationData $parameters
     * @return GetUserConfigurationDataResponse
     */
    public function GetUserConfigurationData(GetUserConfigurationData $parameters)
    {
      return $this->__soapCall('GetUserConfigurationData', array($parameters));
    }

    /**
     * @param GetVersions $parameters
     * @return GetVersionsResponse
     */
    public function GetVersions(GetVersions $parameters)
    {
      return $this->__soapCall('GetVersions', array($parameters));
    }

    /**
     * @param ModifyBooking $parameters
     * @return ModifyBookingResponse
     */
    public function ModifyBooking(ModifyBooking $parameters)
    {
      return $this->__soapCall('ModifyBooking', array($parameters));
    }

    /**
     * @param NativeCommand $parameters
     * @return NativeCommandResponse
     */
    public function NativeCommand(NativeCommand $parameters)
    {
      return $this->__soapCall('NativeCommand', array($parameters));
    }

    /**
     * @param PNRProcessing $parameters
     * @return PNRProcessingResponse
     */
    public function PNRProcessing(PNRProcessing $parameters)
    {
      return $this->__soapCall('PNRProcessing', array($parameters));
    }

    /**
     * @param QueueBooking $parameters
     * @return QueueBookingResponse
     */
    public function QueueBooking(QueueBooking $parameters)
    {
      return $this->__soapCall('QueueBooking', array($parameters));
    }

    /**
     * @param Rebook $parameters
     * @return RebookResponse
     */
    public function Rebook(Rebook $parameters)
    {
      return $this->__soapCall('Rebook', array($parameters));
    }

    /**
     * @param ReissueTicket $parameters
     * @return ReissueTicketResponse
     */
    public function ReissueTicket(ReissueTicket $parameters)
    {
      return $this->__soapCall('ReissueTicket', array($parameters));
    }

    /**
     * @param RemoveBookingFromQueue $parameters
     * @return RemoveBookingFromQueueResponse
     */
    public function RemoveBookingFromQueue(RemoveBookingFromQueue $parameters)
    {
      return $this->__soapCall('RemoveBookingFromQueue', array($parameters));
    }

    /**
     * @param RetrievePassengerNameRecord $parameters
     * @return RetrievePassengerNameRecordResponse
     */
    public function RetrievePassengerNameRecord(RetrievePassengerNameRecord $parameters)
    {
      return $this->__soapCall('RetrievePassengerNameRecord', array($parameters));
    }

    /**
     * @param RevalidateTicket $parameters
     * @return RevalidateTicketResponse
     */
    public function RevalidateTicket(RevalidateTicket $parameters)
    {
      return $this->__soapCall('RevalidateTicket', array($parameters));
    }

    /**
     * @param SeatReservation $parameters
     * @return SeatReservationResponse
     */
    public function SeatReservation(SeatReservation $parameters)
    {
      return $this->__soapCall('SeatReservation', array($parameters));
    }

    /**
     * @param TicketBooking $parameters
     * @return TicketBookingResponse
     */
    public function TicketBooking(TicketBooking $parameters)
    {
      return $this->__soapCall('TicketBooking', array($parameters));
    }

    /**
     * @param UpdateUserAgreementList $parameters
     * @return UpdateUserAgreementListResponse
     */
    public function UpdateUserAgreementList(UpdateUserAgreementList $parameters)
    {
      return $this->__soapCall('UpdateUserAgreementList', array($parameters));
    }

    /**
     * @param UpdateUserList $parameters
     * @return UpdateUserListResponse
     */
    public function UpdateUserList(UpdateUserList $parameters)
    {
      return $this->__soapCall('UpdateUserList', array($parameters));
    }

    /**
     * @param ValidateFlightDate $parameters
     * @return ValidateFlightDateResponse
     */
    public function ValidateFlightDate(ValidateFlightDate $parameters)
    {
      return $this->__soapCall('ValidateFlightDate', array($parameters));
    }

    /**
     * @param LoadAirlines $parameters
     * @return LoadAirlinesResponse
     */
    public function LoadAirlines(LoadAirlines $parameters)
    {
      return $this->__soapCall('LoadAirlines', array($parameters));
    }

}
