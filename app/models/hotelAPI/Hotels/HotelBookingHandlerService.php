<?php

namespace App\models\hotelAPI\Hotels;

class HotelBookingHandlerService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'availableHotelsByAirport' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAirport',
      'AvailableHotelsByAirportRQ' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByAirportRQ',
      'Occupancy' => 'App\\models\\hotelAPI\\Hotels\\Occupancy',
      'AirportLocation' => 'App\\models\\hotelAPI\\Hotels\\AirportLocation',
      'availableHotelsByAirportResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAirportResponse',
      'AvailabilityRS' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityRS',
      'AvailableHotel' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotel',
      'Establishment' => 'App\\models\\hotelAPI\\Hotels\\Establishment',
      'Address' => 'App\\models\\hotelAPI\\Hotels\\Address',
      'Airport' => 'App\\models\\hotelAPI\\Hotels\\Airport',
      'Zone' => 'App\\models\\hotelAPI\\Hotels\\Zone',
      'City' => 'App\\models\\hotelAPI\\Hotels\\City',
      'RoomCombination' => 'App\\models\\hotelAPI\\Hotels\\RoomCombination',
      'Room' => 'App\\models\\hotelAPI\\Hotels\\Room',
      'Amount' => 'App\\models\\hotelAPI\\Hotels\\Amount',
      'Price' => 'App\\models\\hotelAPI\\Hotels\\Price',
      'RoomPriceDetail' => 'App\\models\\hotelAPI\\Hotels\\RoomPriceDetail',
      'CommentsRS' => 'App\\models\\hotelAPI\\Hotels\\CommentsRS',
      'CommentsRSV2' => 'App\\models\\hotelAPI\\Hotels\\CommentsRSV2',
      'Conditions' => 'App\\models\\hotelAPI\\Hotels\\Conditions',
      'CalculationRules' => 'App\\models\\hotelAPI\\Hotels\\CalculationRules',
      'DiscountsExemptions' => 'App\\models\\hotelAPI\\Hotels\\DiscountsExemptions',
      'Tax' => 'App\\models\\hotelAPI\\Hotels\\Tax',
      'PriceExtends' => 'App\\models\\hotelAPI\\Hotels\\PriceExtends',
      'OffersDescription' => 'App\\models\\hotelAPI\\Hotels\\OffersDescription',
      'PriceSaleExtends' => 'App\\models\\hotelAPI\\Hotels\\PriceSaleExtends',
      'availableHotelsByAirportExtends' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAirportExtends',
      'availableHotelsByAirportExtendsResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAirportExtendsResponse',
      'AvailabilityExtendsRS' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityExtendsRS',
      'AvailableHotelExtends' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelExtends',
      'EstablishmentErratas' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentErratas',
      'ErrataRS' => 'App\\models\\hotelAPI\\Hotels\\ErrataRS',
      'RoomCombinationOffers' => 'App\\models\\hotelAPI\\Hotels\\RoomCombinationOffers',
      'availableHotelsByAirportWithErratas' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAirportWithErratas',
      'availableHotelsByAirportWithErratasResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAirportWithErratasResponse',
      'AvailabilityWithErratasRS' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityWithErratasRS',
      'AvailableHotelWithErratas' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelWithErratas',
      'availableHotelsByArea' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByArea',
      'AvailableHotelsByAreaRQ' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByAreaRQ',
      'availableHotelsByAreaResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAreaResponse',
      'availableHotelsByAreaExtends' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAreaExtends',
      'availableHotelsByAreaExtendsResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAreaExtendsResponse',
      'availableHotelsByAreaWithErratas' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAreaWithErratas',
      'availableHotelsByAreaWithErratasResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByAreaWithErratasResponse',
      'availableHotelsByCity' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByCity',
      'AvailableHotelsByCityRQ' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByCityRQ',
      'availableHotelsByCityResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByCityResponse',
      'availableHotelsByCityExtends' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByCityExtends',
      'availableHotelsByCityExtendsResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByCityExtendsResponse',
      'availableHotelsByCityWithErratas' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByCityWithErratas',
      'availableHotelsByCityWithErratasResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByCityWithErratasResponse',
      'availableHotelsById' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsById',
      'AvailableHotelsByIdRQ' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByIdRQ',
      'availableHotelsByIdResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByIdResponse',
      'availableHotelsByIdExtends' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByIdExtends',
      'availableHotelsByIdExtendsResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByIdExtendsResponse',
      'availableHotelsByIdWithErratas' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByIdWithErratas',
      'availableHotelsByIdWithErratasResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByIdWithErratasResponse',
      'availableHotelsByMultiQuery' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQuery',
      'AvailableHotelsByMultiQueryRQ' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByMultiQueryRQ',
      'AvailableHotelsByMultiQueryRQV15' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByMultiQueryRQV15',
      'AvailableHotelsByMultiQueryRQV16' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByMultiQueryRQV16',
      'AvailableHotelsByMultiQueryRQV21' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByMultiQueryRQV21',
      'ExtendedLogin' => 'App\\models\\hotelAPI\\Hotels\\ExtendedLogin',
      'AvailableHotelsByMultiQueryRQV22' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsByMultiQueryRQV22',
      'CoordinatesRQ' => 'App\\models\\hotelAPI\\Hotels\\CoordinatesRQ',
      'PaxNationalitiesRQ' => 'App\\models\\hotelAPI\\Hotels\\PaxNationalitiesRQ',
      'availableHotelsByMultiQueryResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryResponse',
      'AvailabilityMultiRS' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRS',
      'AvailableHotelComments' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelComments',
      'EstablishmentComments' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentComments',
      'availableHotelsByMultiQueryV12' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV12',
      'availableHotelsByMultiQueryV12Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV12Response',
      'availableHotelsByMultiQueryV13' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV13',
      'availableHotelsByMultiQueryV13Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV13Response',
      'AvailabilityMultiRSV12' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRSV12',
      'AvailableHotelSaleComments' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelSaleComments',
      'RoomCombinationSaleOffers' => 'App\\models\\hotelAPI\\Hotels\\RoomCombinationSaleOffers',
      'availableHotelsByMultiQueryV14' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV14',
      'availableHotelsByMultiQueryV14Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV14Response',
      'AvailabilityMultiRSV13' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRSV13',
      'AvailableHotelSaleCommentsV13' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelSaleCommentsV13',
      'EstablishmentCommentsV13' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentCommentsV13',
      'AvailabilityMultiRSV15' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRSV15',
      'availableHotelsByMultiQueryV15' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV15',
      'availableHotelsByMultiQueryV15Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV15Response',
      'availableHotelsByMultiQueryV16' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV16',
      'availableHotelsByMultiQueryV16Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV16Response',
      'AvailabilityMultiRSV16' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRSV16',
      'AvailableHotelV16' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelV16',
      'EstablishmentV16' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentV16',
      'AddressV16' => 'App\\models\\hotelAPI\\Hotels\\AddressV16',
      'availableHotelsByMultiQueryV17' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV17',
      'availableHotelsByMultiQueryV17Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV17Response',
      'AvailabilityMultiRSV17' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRSV17',
      'AvailableHotelV17' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelV17',
      'EstablishmentV17' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentV17',
      'availableHotelsByMultiQueryV20' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV20',
      'availableHotelsByMultiQueryV20Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV20Response',
      'AvailabilityMultiRSV20' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRSV20',
      'AvailableHotelV20' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelV20',
      'EstablishmentV20' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentV20',
      'RoomCombinationRSV20' => 'App\\models\\hotelAPI\\Hotels\\RoomCombinationRSV20',
      'PriceRSV20' => 'App\\models\\hotelAPI\\Hotels\\PriceRSV20',
      'RoomPriceDetailRSV20' => 'App\\models\\hotelAPI\\Hotels\\RoomPriceDetailRSV20',
      'Rates' => 'App\\models\\hotelAPI\\Hotels\\Rates',
      'RoomRSV20' => 'App\\models\\hotelAPI\\Hotels\\RoomRSV20',
      'AvailabilityMultiRSV22' => 'App\\models\\hotelAPI\\Hotels\\AvailabilityMultiRSV22',
      'availableHotelsByMultiQueryV21' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV21',
      'availableHotelsByMultiQueryV21Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV21Response',
      'availableHotelsByMultiQueryV22' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV22',
      'availableHotelsByMultiQueryV22Response' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsByMultiQueryV22Response',
      'availableHotelsCompatibilityQuery' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsCompatibilityQuery',
      'AvailableHotelsCompatibilityQueryRQ' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsCompatibilityQueryRQ',
      'availableHotelsCompatibilityQueryResponse' => 'App\\models\\hotelAPI\\Hotels\\availableHotelsCompatibilityQueryResponse',
      'AvailableHotelsCompatibilityQueryRS' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelsCompatibilityQueryRS',
      'AvailableHotelCompatibility' => 'App\\models\\hotelAPI\\Hotels\\AvailableHotelCompatibility',
      'AvailableRoom' => 'App\\models\\hotelAPI\\Hotels\\AvailableRoom',
      'BoardPrice' => 'App\\models\\hotelAPI\\Hotels\\BoardPrice',
      'confirm' => 'App\\models\\hotelAPI\\Hotels\\confirm',
      'ConfirmRQ' => 'App\\models\\hotelAPI\\Hotels\\ConfirmRQ',
      'RoomOccupancy' => 'App\\models\\hotelAPI\\Hotels\\RoomOccupancy',
      'FlightInfo' => 'App\\models\\hotelAPI\\Hotels\\FlightInfo',
      'FlightNumber' => 'App\\models\\hotelAPI\\Hotels\\FlightNumber',
      'Comment' => 'App\\models\\hotelAPI\\Hotels\\Comment',
      'PaxListItem' => 'App\\models\\hotelAPI\\Hotels\\PaxListItem',
      'ValuationRQ' => 'App\\models\\hotelAPI\\Hotels\\ValuationRQ',
      'ValuationRQV15' => 'App\\models\\hotelAPI\\Hotels\\ValuationRQV15',
      'ConfirmRQV15' => 'App\\models\\hotelAPI\\Hotels\\ConfirmRQV15',
      'confirmResponse' => 'App\\models\\hotelAPI\\Hotels\\confirmResponse',
      'ConfirmRS' => 'App\\models\\hotelAPI\\Hotels\\ConfirmRS',
      'Basket' => 'App\\models\\hotelAPI\\Hotels\\Basket',
      'CancellationTerm' => 'App\\models\\hotelAPI\\Hotels\\CancellationTerm',
      'Commision' => 'App\\models\\hotelAPI\\Hotels\\Commision',
      'HandlingFee' => 'App\\models\\hotelAPI\\Hotels\\HandlingFee',
      'ValuationLine' => 'App\\models\\hotelAPI\\Hotels\\ValuationLine',
      'ValuatedOccupation' => 'App\\models\\hotelAPI\\Hotels\\ValuatedOccupation',
      'ValuatedOccupationV15' => 'App\\models\\hotelAPI\\Hotels\\ValuatedOccupationV15',
      'ValuatedOccupationV16' => 'App\\models\\hotelAPI\\Hotels\\ValuatedOccupationV16',
      'ValuatedOccupationV20' => 'App\\models\\hotelAPI\\Hotels\\ValuatedOccupationV20',
      'ConfirmExtendsRS' => 'App\\models\\hotelAPI\\Hotels\\ConfirmExtendsRS',
      'ConfirmExtendsV12RS' => 'App\\models\\hotelAPI\\Hotels\\ConfirmExtendsV12RS',
      'ConfirmExtendsRSV12' => 'App\\models\\hotelAPI\\Hotels\\ConfirmExtendsRSV12',
      'ConfirmExtendsRSV15' => 'App\\models\\hotelAPI\\Hotels\\ConfirmExtendsRSV15',
      'confirmExtended' => 'App\\models\\hotelAPI\\Hotels\\confirmExtended',
      'confirmExtendedResponse' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendedResponse',
      'confirmExtendsV12' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV12',
      'confirmExtendsV12Response' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV12Response',
      'confirmExtendsV13' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV13',
      'confirmExtendsV13Response' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV13Response',
      'confirmExtendsV15' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV15',
      'confirmExtendsV15Response' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV15Response',
      'confirmExtendsV16' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV16',
      'confirmExtendsV16Response' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV16Response',
      'ConfirmExtendsRSV17' => 'App\\models\\hotelAPI\\Hotels\\ConfirmExtendsRSV17',
      'confirmExtendsV20' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV20',
      'ConfirmRQV20' => 'App\\models\\hotelAPI\\Hotels\\ConfirmRQV20',
      'RoomOccupancyRQV20' => 'App\\models\\hotelAPI\\Hotels\\RoomOccupancyRQV20',
      'ValuationRQV20' => 'App\\models\\hotelAPI\\Hotels\\ValuationRQV20',
      'ValuationRQV21' => 'App\\models\\hotelAPI\\Hotels\\ValuationRQV21',
      'ConfirmRQV22' => 'App\\models\\hotelAPI\\Hotels\\ConfirmRQV22',
      'PaxListRQ' => 'App\\models\\hotelAPI\\Hotels\\PaxListRQ',
      'PaxRQ' => 'App\\models\\hotelAPI\\Hotels\\PaxRQ',
      'ConfirmRQV21' => 'App\\models\\hotelAPI\\Hotels\\ConfirmRQV21',
      'ValuationRQV22' => 'App\\models\\hotelAPI\\Hotels\\ValuationRQV22',
      'confirmExtendsV20Response' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV20Response',
      'ConfirmExtendsRSV20' => 'App\\models\\hotelAPI\\Hotels\\ConfirmExtendsRSV20',
      'ConfirmExtendsRSV22' => 'App\\models\\hotelAPI\\Hotels\\ConfirmExtendsRSV22',
      'confirmExtendsV21' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV21',
      'confirmExtendsV21Response' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV21Response',
      'confirmExtendsV22' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV22',
      'confirmExtendsV22Response' => 'App\\models\\hotelAPI\\Hotels\\confirmExtendsV22Response',
      'getBoardTypes' => 'App\\models\\hotelAPI\\Hotels\\getBoardTypes',
      'GetBoardTypesRQ' => 'App\\models\\hotelAPI\\Hotels\\GetBoardTypesRQ',
      'getBoardTypesResponse' => 'App\\models\\hotelAPI\\Hotels\\getBoardTypesResponse',
      'GetBoardTypesRS' => 'App\\models\\hotelAPI\\Hotels\\GetBoardTypesRS',
      'BoardType' => 'App\\models\\hotelAPI\\Hotels\\BoardType',
      'getBoardTypesV2' => 'App\\models\\hotelAPI\\Hotels\\getBoardTypesV2',
      'GetBoardTypesV2RQ' => 'App\\models\\hotelAPI\\Hotels\\GetBoardTypesV2RQ',
      'GetBoardTypesV22RQ' => 'App\\models\\hotelAPI\\Hotels\\GetBoardTypesV22RQ',
      'getBoardTypesV2Response' => 'App\\models\\hotelAPI\\Hotels\\getBoardTypesV2Response',
      'GetBoardTypesV2RS' => 'App\\models\\hotelAPI\\Hotels\\GetBoardTypesV2RS',
      'BoardTypeV2' => 'App\\models\\hotelAPI\\Hotels\\BoardTypeV2',
      'GetBoardTypesV22RS' => 'App\\models\\hotelAPI\\Hotels\\GetBoardTypesV22RS',
      'getBoardTypesV22' => 'App\\models\\hotelAPI\\Hotels\\getBoardTypesV22',
      'getBoardTypesV22Response' => 'App\\models\\hotelAPI\\Hotels\\getBoardTypesV22Response',
      'getEstablishmentCategories' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentCategories',
      'GetEstablishmentCategoriesRQ' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentCategoriesRQ',
      'getEstablishmentCategoriesResponse' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentCategoriesResponse',
      'GetEstablishmentCategoriesRS' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentCategoriesRS',
      'EstablishmentCategory' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentCategory',
      'getEstablishmentCategoryGroup' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentCategoryGroup',
      'GetEstablishmentCategoryGroupsRQ' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentCategoryGroupsRQ',
      'getEstablishmentCategoryGroupResponse' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentCategoryGroupResponse',
      'GetEstablishmentCategoryGroupsRS' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentCategoryGroupsRS',
      'EstablishmentCategoryGroup' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentCategoryGroup',
      'getEstablishmentData' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentData',
      'EstablishmentDataRQ' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataRQ',
      'EstablishmentDataRQV2' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataRQV2',
      'EstablishmentDataRQV22' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataRQV22',
      'getEstablishmentDataResponse' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataResponse',
      'EstablishmentDataRS' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataRS',
      'ImageGroup' => 'App\\models\\hotelAPI\\Hotels\\ImageGroup',
      'Image' => 'App\\models\\hotelAPI\\Hotels\\Image',
      'PropertiesGroup' => 'App\\models\\hotelAPI\\Hotels\\PropertiesGroup',
      'Property' => 'App\\models\\hotelAPI\\Hotels\\Property',
      'EstablishmentDataRSV2' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataRSV2',
      'Failure' => 'App\\models\\hotelAPI\\Hotels\\Failure',
      'EstablishmentDataExtendsRS' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataExtendsRS',
      'EstablishmentDataExtendsRSV2' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataExtendsRSV2',
      'EstablishmentType' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentType',
      'getEstablishmentDataExtends' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtends',
      'getEstablishmentDataExtendsResponse' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsResponse',
      'getEstablishmentDataExtendsV16' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV16',
      'getEstablishmentDataExtendsV16Response' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV16Response',
      'EstablishmentDataExtendsRSV16' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataExtendsRSV16',
      'EstablishmentDataExtendsRSV22' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentDataExtendsRSV22',
      'getEstablishmentDataExtendsV2' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV2',
      'getEstablishmentDataExtendsV2Response' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV2Response',
      'getEstablishmentDataExtendsV22' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV22',
      'getEstablishmentDataExtendsV22Response' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV22Response',
      'getEstablishmentDataExtendsV3' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV3',
      'getEstablishmentDataExtendsV3Response' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentDataExtendsV3Response',
      'getEstablishmentPlatform' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentPlatform',
      'getEstablishmentPlatformResponse' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentPlatformResponse',
      'getEstablishmentTypes' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentTypes',
      'GetEstablishmentTypesRQ' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentTypesRQ',
      'getEstablishmentTypesResponse' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentTypesResponse',
      'GetEstablishmentTypesRS' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentTypesRS',
      'getEstablishmentsByName' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentsByName',
      'GetEstablishmentsByNameRQ' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentsByNameRQ',
      'GetEstablishmentsByNameRQV22' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentsByNameRQV22',
      'getEstablishmentsByNameResponse' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentsByNameResponse',
      'GetEstablishmentsByNameRS' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentsByNameRS',
      'EstablishmentSearchResult' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentSearchResult',
      'EstablishmentSearchResultV12' => 'App\\models\\hotelAPI\\Hotels\\EstablishmentSearchResultV12',
      'getEstablishmentsByNameV12' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentsByNameV12',
      'getEstablishmentsByNameV12Response' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentsByNameV12Response',
      'GetEstablishmentsByNameRSV12' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentsByNameRSV12',
      'getEstablishmentsByNameV22' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentsByNameV22',
      'getEstablishmentsByNameV22Response' => 'App\\models\\hotelAPI\\Hotels\\getEstablishmentsByNameV22Response',
      'GetEstablishmentsByNameRSV22' => 'App\\models\\hotelAPI\\Hotels\\GetEstablishmentsByNameRSV22',
      'getPO' => 'App\\models\\hotelAPI\\Hotels\\getPO',
      'GetPORQ' => 'App\\models\\hotelAPI\\Hotels\\GetPORQ',
      'getPOResponse' => 'App\\models\\hotelAPI\\Hotels\\getPOResponse',
      'GetPORS' => 'App\\models\\hotelAPI\\Hotels\\GetPORS',
      'PO' => 'App\\models\\hotelAPI\\Hotels\\PO',
      'POPrice' => 'App\\models\\hotelAPI\\Hotels\\POPrice',
      'getPOClassification' => 'App\\models\\hotelAPI\\Hotels\\getPOClassification',
      'GetPOClassificationRQ' => 'App\\models\\hotelAPI\\Hotels\\GetPOClassificationRQ',
      'getPOClassificationResponse' => 'App\\models\\hotelAPI\\Hotels\\getPOClassificationResponse',
      'GetPOClassificationRS' => 'App\\models\\hotelAPI\\Hotels\\GetPOClassificationRS',
      'POClass' => 'App\\models\\hotelAPI\\Hotels\\POClass',
      'getPOClassificationAndPOs' => 'App\\models\\hotelAPI\\Hotels\\getPOClassificationAndPOs',
      'getPOClassificationAndPOsResponse' => 'App\\models\\hotelAPI\\Hotels\\getPOClassificationAndPOsResponse',
      'getPOs' => 'App\\models\\hotelAPI\\Hotels\\getPOs',
      'GetPOsRQ' => 'App\\models\\hotelAPI\\Hotels\\GetPOsRQ',
      'getPOsResponse' => 'App\\models\\hotelAPI\\Hotels\\getPOsResponse',
      'GetPOsRS' => 'App\\models\\hotelAPI\\Hotels\\GetPOsRS',
      'getPrices' => 'App\\models\\hotelAPI\\Hotels\\getPrices',
      'GetPricesRQ' => 'App\\models\\hotelAPI\\Hotels\\GetPricesRQ',
      'getPricesResponse' => 'App\\models\\hotelAPI\\Hotels\\getPricesResponse',
      'GetPricesRS' => 'App\\models\\hotelAPI\\Hotels\\GetPricesRS',
      'CancellationPrice' => 'App\\models\\hotelAPI\\Hotels\\CancellationPrice',
      'SupplementPrice' => 'App\\models\\hotelAPI\\Hotels\\SupplementPrice',
      'Supplement' => 'App\\models\\hotelAPI\\Hotels\\Supplement',
      'RoomPrice' => 'App\\models\\hotelAPI\\Hotels\\RoomPrice',
      'BoardTypePrice' => 'App\\models\\hotelAPI\\Hotels\\BoardTypePrice',
      'RoomType' => 'App\\models\\hotelAPI\\Hotels\\RoomType',
      'getRoomTypes' => 'App\\models\\hotelAPI\\Hotels\\getRoomTypes',
      'GetRoomTypesRQ' => 'App\\models\\hotelAPI\\Hotels\\GetRoomTypesRQ',
      'getRoomTypesResponse' => 'App\\models\\hotelAPI\\Hotels\\getRoomTypesResponse',
      'GetRoomTypesRS' => 'App\\models\\hotelAPI\\Hotels\\GetRoomTypesRS',
      'RoomTypeVO' => 'App\\models\\hotelAPI\\Hotels\\RoomTypeVO',
      'valuate' => 'App\\models\\hotelAPI\\Hotels\\valuate',
      'valuateResponse' => 'App\\models\\hotelAPI\\Hotels\\valuateResponse',
      'ValuationRS' => 'App\\models\\hotelAPI\\Hotels\\ValuationRS',
      'ValuationSupplement' => 'App\\models\\hotelAPI\\Hotels\\ValuationSupplement',
      'ValuationExtendsRS' => 'App\\models\\hotelAPI\\Hotels\\ValuationExtendsRS',
      'valuateExtends' => 'App\\models\\hotelAPI\\Hotels\\valuateExtends',
      'valuateExtendsResponse' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsResponse',
      'valuateExtendsV12' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV12',
      'valuateExtendsV12Response' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV12Response',
      'valuateExtendsV13' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV13',
      'valuateExtendsV13Response' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV13Response',
      'ValuationExtendsRSv12' => 'App\\models\\hotelAPI\\Hotels\\ValuationExtendsRSv12',
      'valuateExtendsV15' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV15',
      'valuateExtendsV15Response' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV15Response',
      'ValuationExtendsRSV15' => 'App\\models\\hotelAPI\\Hotels\\ValuationExtendsRSV15',
      'valuateExtendsV16' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV16',
      'valuateExtendsV16Response' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV16Response',
      'ValuationExtendsRSV17' => 'App\\models\\hotelAPI\\Hotels\\ValuationExtendsRSV17',
      'valuateExtendsV20' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV20',
      'valuateExtendsV20Response' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV20Response',
      'ValuationExtendsRSV20' => 'App\\models\\hotelAPI\\Hotels\\ValuationExtendsRSV20',
      'ValuationExtendsRSV22' => 'App\\models\\hotelAPI\\Hotels\\ValuationExtendsRSV22',
      'valuateExtendsV21' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV21',
      'valuateExtendsV21Response' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV21Response',
      'valuateExtendsV22' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV22',
      'valuateExtendsV22Response' => 'App\\models\\hotelAPI\\Hotels\\valuateExtendsV22Response',
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
        $wsdl = config('services.jumbo.wsdl') .'hotelBookingHandler?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param availableHotelsByAirport $parameters
     * @return availableHotelsByAirportResponse
     */
    public function availableHotelsByAirport(availableHotelsByAirport $parameters)
    {
      return $this->__soapCall('availableHotelsByAirport', array($parameters));
    }

    /**
     * @param availableHotelsByAirportExtends $parameters
     * @return availableHotelsByAirportExtendsResponse
     */
    public function availableHotelsByAirportExtends(availableHotelsByAirportExtends $parameters)
    {
      return $this->__soapCall('availableHotelsByAirportExtends', array($parameters));
    }

    /**
     * @param availableHotelsByAirportWithErratas $parameters
     * @return availableHotelsByAirportWithErratasResponse
     */
    public function availableHotelsByAirportWithErratas(availableHotelsByAirportWithErratas $parameters)
    {
      return $this->__soapCall('availableHotelsByAirportWithErratas', array($parameters));
    }

    /**
     * @param availableHotelsByArea $parameters
     * @return availableHotelsByAreaResponse
     */
    public function availableHotelsByArea(availableHotelsByArea $parameters)
    {
      return $this->__soapCall('availableHotelsByArea', array($parameters));
    }

    /**
     * @param availableHotelsByAreaExtends $parameters
     * @return availableHotelsByAreaExtendsResponse
     */
    public function availableHotelsByAreaExtends(availableHotelsByAreaExtends $parameters)
    {
      return $this->__soapCall('availableHotelsByAreaExtends', array($parameters));
    }

    /**
     * @param availableHotelsByAreaWithErratas $parameters
     * @return availableHotelsByAreaWithErratasResponse
     */
    public function availableHotelsByAreaWithErratas(availableHotelsByAreaWithErratas $parameters)
    {
      return $this->__soapCall('availableHotelsByAreaWithErratas', array($parameters));
    }

    /**
     * @param availableHotelsByCity $parameters
     * @return availableHotelsByCityResponse
     */
    public function availableHotelsByCity(availableHotelsByCity $parameters)
    {
      return $this->__soapCall('availableHotelsByCity', array($parameters));
    }

    /**
     * @param availableHotelsByCityExtends $parameters
     * @return availableHotelsByCityExtendsResponse
     */
    public function availableHotelsByCityExtends(availableHotelsByCityExtends $parameters)
    {
      return $this->__soapCall('availableHotelsByCityExtends', array($parameters));
    }

    /**
     * @param availableHotelsByCityWithErratas $parameters
     * @return availableHotelsByCityWithErratasResponse
     */
    public function availableHotelsByCityWithErratas(availableHotelsByCityWithErratas $parameters)
    {
      return $this->__soapCall('availableHotelsByCityWithErratas', array($parameters));
    }

    /**
     * @param availableHotelsById $parameters
     * @return availableHotelsByIdResponse
     */
    public function availableHotelsById(availableHotelsById $parameters)
    {
      return $this->__soapCall('availableHotelsById', array($parameters));
    }

    /**
     * @param availableHotelsByIdExtends $parameters
     * @return availableHotelsByIdExtendsResponse
     */
    public function availableHotelsByIdExtends(availableHotelsByIdExtends $parameters)
    {
      return $this->__soapCall('availableHotelsByIdExtends', array($parameters));
    }

    /**
     * @param availableHotelsByIdWithErratas $parameters
     * @return availableHotelsByIdWithErratasResponse
     */
    public function availableHotelsByIdWithErratas(availableHotelsByIdWithErratas $parameters)
    {
      return $this->__soapCall('availableHotelsByIdWithErratas', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQuery $parameters
     * @return availableHotelsByMultiQueryResponse
     */
    public function availableHotelsByMultiQuery(availableHotelsByMultiQuery $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQuery', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV12 $parameters
     * @return availableHotelsByMultiQueryV12Response
     */
    public function availableHotelsByMultiQueryV12(availableHotelsByMultiQueryV12 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV12', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV13 $parameters
     * @return availableHotelsByMultiQueryV13Response
     */
    public function availableHotelsByMultiQueryV13(availableHotelsByMultiQueryV13 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV13', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV14 $parameters
     * @return availableHotelsByMultiQueryV14Response
     */
    public function availableHotelsByMultiQueryV14(availableHotelsByMultiQueryV14 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV14', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV15 $parameters
     * @return availableHotelsByMultiQueryV15Response
     */
    public function availableHotelsByMultiQueryV15(availableHotelsByMultiQueryV15 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV15', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV16 $parameters
     * @return availableHotelsByMultiQueryV16Response
     */
    public function availableHotelsByMultiQueryV16(availableHotelsByMultiQueryV16 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV16', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV17 $parameters
     * @return availableHotelsByMultiQueryV17Response
     */
    public function availableHotelsByMultiQueryV17(availableHotelsByMultiQueryV17 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV17', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV20 $parameters
     * @return availableHotelsByMultiQueryV20Response
     */
    public function availableHotelsByMultiQueryV20(availableHotelsByMultiQueryV20 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV20', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV21 $parameters
     * @return availableHotelsByMultiQueryV21Response
     */
    public function availableHotelsByMultiQueryV21(availableHotelsByMultiQueryV21 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV21', array($parameters));
    }

    /**
     * @param availableHotelsByMultiQueryV22 $parameters
     * @return availableHotelsByMultiQueryV22Response
     */
    public function availableHotelsByMultiQueryV22(availableHotelsByMultiQueryV22 $parameters)
    {
      return $this->__soapCall('availableHotelsByMultiQueryV22', array($parameters));
    }

    /**
     * @param availableHotelsCompatibilityQuery $parameters
     * @return availableHotelsCompatibilityQueryResponse
     */
    public function availableHotelsCompatibilityQuery(availableHotelsCompatibilityQuery $parameters)
    {
      return $this->__soapCall('availableHotelsCompatibilityQuery', array($parameters));
    }

    /**
     * @param confirm $parameters
     * @return confirmResponse
     */
    public function confirm(confirm $parameters)
    {
      return $this->__soapCall('confirm', array($parameters));
    }

    /**
     * @param confirmExtended $parameters
     * @return confirmExtendedResponse
     */
    public function confirmExtended(confirmExtended $parameters)
    {
      return $this->__soapCall('confirmExtended', array($parameters));
    }

    /**
     * @param confirmExtendsV12 $parameters
     * @return confirmExtendsV12Response
     */
    public function confirmExtendsV12(confirmExtendsV12 $parameters)
    {
      return $this->__soapCall('confirmExtendsV12', array($parameters));
    }

    /**
     * @param confirmExtendsV13 $parameters
     * @return confirmExtendsV13Response
     */
    public function confirmExtendsV13(confirmExtendsV13 $parameters)
    {
      return $this->__soapCall('confirmExtendsV13', array($parameters));
    }

    /**
     * @param confirmExtendsV15 $parameters
     * @return confirmExtendsV15Response
     */
    public function confirmExtendsV15(confirmExtendsV15 $parameters)
    {
      return $this->__soapCall('confirmExtendsV15', array($parameters));
    }

    /**
     * @param confirmExtendsV16 $parameters
     * @return confirmExtendsV16Response
     */
    public function confirmExtendsV16(confirmExtendsV16 $parameters)
    {
      return $this->__soapCall('confirmExtendsV16', array($parameters));
    }

    /**
     * @param confirmExtendsV20 $parameters
     * @return confirmExtendsV20Response
     */
    public function confirmExtendsV20(confirmExtendsV20 $parameters)
    {
      return $this->__soapCall('confirmExtendsV20', array($parameters));
    }

    /**
     * @param confirmExtendsV21 $parameters
     * @return confirmExtendsV21Response
     */
    public function confirmExtendsV21(confirmExtendsV21 $parameters)
    {
      return $this->__soapCall('confirmExtendsV21', array($parameters));
    }

    /**
     * @param confirmExtendsV22 $parameters
     * @return confirmExtendsV22Response
     */
    public function confirmExtendsV22(confirmExtendsV22 $parameters)
    {
      return $this->__soapCall('confirmExtendsV22', array($parameters));
    }

    /**
     * @param getBoardTypes $parameters
     * @return getBoardTypesResponse
     */
    public function getBoardTypes(getBoardTypes $parameters)
    {
      return $this->__soapCall('getBoardTypes', array($parameters));
    }

    /**
     * @param getBoardTypesV2 $parameters
     * @return getBoardTypesV2Response
     */
    public function getBoardTypesV2(getBoardTypesV2 $parameters)
    {
      return $this->__soapCall('getBoardTypesV2', array($parameters));
    }

    /**
     * @param getBoardTypesV22 $parameters
     * @return getBoardTypesV22Response
     */
    public function getBoardTypesV22(getBoardTypesV22 $parameters)
    {
      return $this->__soapCall('getBoardTypesV22', array($parameters));
    }

    /**
     * @param getEstablishmentCategories $parameters
     * @return getEstablishmentCategoriesResponse
     */
    public function getEstablishmentCategories(getEstablishmentCategories $parameters)
    {
      return $this->__soapCall('getEstablishmentCategories', array($parameters));
    }

    /**
     * @param getEstablishmentCategoryGroup $parameters
     * @return getEstablishmentCategoryGroupResponse
     */
    public function getEstablishmentCategoryGroup(getEstablishmentCategoryGroup $parameters)
    {
      return $this->__soapCall('getEstablishmentCategoryGroup', array($parameters));
    }

    /**
     * @param getEstablishmentData $parameters
     * @return getEstablishmentDataResponse
     */
    public function getEstablishmentData(getEstablishmentData $parameters)
    {
      return $this->__soapCall('getEstablishmentData', array($parameters));
    }

    /**
     * @param getEstablishmentDataExtends $parameters
     * @return getEstablishmentDataExtendsResponse
     */
    public function getEstablishmentDataExtends(getEstablishmentDataExtends $parameters)
    {
      return $this->__soapCall('getEstablishmentDataExtends', array($parameters));
    }

    /**
     * @param getEstablishmentDataExtendsV16 $parameters
     * @return getEstablishmentDataExtendsV16Response
     */
    public function getEstablishmentDataExtendsV16(getEstablishmentDataExtendsV16 $parameters)
    {
      return $this->__soapCall('getEstablishmentDataExtendsV16', array($parameters));
    }

    /**
     * @param getEstablishmentDataExtendsV2 $parameters
     * @return getEstablishmentDataExtendsV2Response
     */
    public function getEstablishmentDataExtendsV2(getEstablishmentDataExtendsV2 $parameters)
    {
      return $this->__soapCall('getEstablishmentDataExtendsV2', array($parameters));
    }

    /**
     * @param getEstablishmentDataExtendsV22 $parameters
     * @return getEstablishmentDataExtendsV22Response
     */
    public function getEstablishmentDataExtendsV22(getEstablishmentDataExtendsV22 $parameters)
    {
      return $this->__soapCall('getEstablishmentDataExtendsV22', array($parameters));
    }

    /**
     * @param getEstablishmentDataExtendsV3 $parameters
     * @return getEstablishmentDataExtendsV3Response
     */
    public function getEstablishmentDataExtendsV3(getEstablishmentDataExtendsV3 $parameters)
    {
      return $this->__soapCall('getEstablishmentDataExtendsV3', array($parameters));
    }

    /**
     * @param getEstablishmentPlatform $parameters
     * @return getEstablishmentPlatformResponse
     */
    public function getEstablishmentPlatform(getEstablishmentPlatform $parameters)
    {
      return $this->__soapCall('getEstablishmentPlatform', array($parameters));
    }

    /**
     * @param getEstablishmentTypes $parameters
     * @return getEstablishmentTypesResponse
     */
    public function getEstablishmentTypes(getEstablishmentTypes $parameters)
    {
      return $this->__soapCall('getEstablishmentTypes', array($parameters));
    }

    /**
     * @param getEstablishmentsByName $parameters
     * @return getEstablishmentsByNameResponse
     */
    public function getEstablishmentsByName(getEstablishmentsByName $parameters)
    {
      return $this->__soapCall('getEstablishmentsByName', array($parameters));
    }

    /**
     * @param getEstablishmentsByNameV12 $parameters
     * @return getEstablishmentsByNameV12Response
     */
    public function getEstablishmentsByNameV12(getEstablishmentsByNameV12 $parameters)
    {
      return $this->__soapCall('getEstablishmentsByNameV12', array($parameters));
    }

    /**
     * @param getEstablishmentsByNameV22 $parameters
     * @return getEstablishmentsByNameV22Response
     */
    public function getEstablishmentsByNameV22(getEstablishmentsByNameV22 $parameters)
    {
      return $this->__soapCall('getEstablishmentsByNameV22', array($parameters));
    }

    /**
     * @param getPO $parameters
     * @return getPOResponse
     */
    public function getPO(getPO $parameters)
    {
      return $this->__soapCall('getPO', array($parameters));
    }

    /**
     * @param getPOClassification $parameters
     * @return getPOClassificationResponse
     */
    public function getPOClassification(getPOClassification $parameters)
    {
      return $this->__soapCall('getPOClassification', array($parameters));
    }

    /**
     * @param getPOClassificationAndPOs $parameters
     * @return getPOClassificationAndPOsResponse
     */
    public function getPOClassificationAndPOs(getPOClassificationAndPOs $parameters)
    {
      return $this->__soapCall('getPOClassificationAndPOs', array($parameters));
    }

    /**
     * @param getPOs $parameters
     * @return getPOsResponse
     */
    public function getPOs(getPOs $parameters)
    {
      return $this->__soapCall('getPOs', array($parameters));
    }

    /**
     * @param getPrices $parameters
     * @return getPricesResponse
     */
    public function getPrices(getPrices $parameters)
    {
      return $this->__soapCall('getPrices', array($parameters));
    }

    /**
     * @param getRoomTypes $parameters
     * @return getRoomTypesResponse
     */
    public function getRoomTypes(getRoomTypes $parameters)
    {
      return $this->__soapCall('getRoomTypes', array($parameters));
    }

    /**
     * @param valuate $parameters
     * @return valuateResponse
     */
    public function valuate(valuate $parameters)
    {
      return $this->__soapCall('valuate', array($parameters));
    }

    /**
     * @param valuateExtends $parameters
     * @return valuateExtendsResponse
     */
    public function valuateExtends(valuateExtends $parameters)
    {
      return $this->__soapCall('valuateExtends', array($parameters));
    }

    /**
     * @param valuateExtendsV12 $parameters
     * @return valuateExtendsV12Response
     */
    public function valuateExtendsV12(valuateExtendsV12 $parameters)
    {
      return $this->__soapCall('valuateExtendsV12', array($parameters));
    }

    /**
     * @param valuateExtendsV13 $parameters
     * @return valuateExtendsV13Response
     */
    public function valuateExtendsV13(valuateExtendsV13 $parameters)
    {
      return $this->__soapCall('valuateExtendsV13', array($parameters));
    }

    /**
     * @param valuateExtendsV15 $parameters
     * @return valuateExtendsV15Response
     */
    public function valuateExtendsV15(valuateExtendsV15 $parameters)
    {
      return $this->__soapCall('valuateExtendsV15', array($parameters));
    }

    /**
     * @param valuateExtendsV16 $parameters
     * @return valuateExtendsV16Response
     */
    public function valuateExtendsV16(valuateExtendsV16 $parameters)
    {
      return $this->__soapCall('valuateExtendsV16', array($parameters));
    }

    /**
     * @param valuateExtendsV20 $parameters
     * @return valuateExtendsV20Response
     */
    public function valuateExtendsV20(valuateExtendsV20 $parameters)
    {
      return $this->__soapCall('valuateExtendsV20', array($parameters));
    }

    /**
     * @param valuateExtendsV21 $parameters
     * @return valuateExtendsV21Response
     */
    public function valuateExtendsV21(valuateExtendsV21 $parameters)
    {
      return $this->__soapCall('valuateExtendsV21', array($parameters));
    }

    /**
     * @param valuateExtendsV22 $parameters
     * @return valuateExtendsV22Response
     */
    public function valuateExtendsV22(valuateExtendsV22 $parameters)
    {
      return $this->__soapCall('valuateExtendsV22', array($parameters));
    }

}
