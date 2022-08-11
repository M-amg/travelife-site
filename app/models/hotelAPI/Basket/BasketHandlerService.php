<?php

namespace App\models\hotelAPI\Basket;

class BasketHandlerService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'cancel' => 'App\\models\\hotelAPI\\Basket\\cancel',
      'CancelRQ' => 'App\\models\\hotelAPI\\Basket\\CancelRQ',
      'CancelRQV22' => 'App\\models\\hotelAPI\\Basket\\CancelRQV22',
      'ExtendedLogin' => 'App\\models\\hotelAPI\\Basket\\ExtendedLogin',
      'cancelResponse' => 'App\\models\\hotelAPI\\Basket\\cancelResponse',
      'CancelRS' => 'App\\models\\hotelAPI\\Basket\\CancelRS',
      'RentACarBooking' => 'App\\models\\hotelAPI\\Basket\\RentACarBooking',
      'Basket' => 'App\\models\\hotelAPI\\Basket\\Basket',
      'CancellationTerm' => 'App\\models\\hotelAPI\\Basket\\CancellationTerm',
      'Amount' => 'App\\models\\hotelAPI\\Basket\\Amount',
      'Comment' => 'App\\models\\hotelAPI\\Basket\\Comment',
      'Commision' => 'App\\models\\hotelAPI\\Basket\\Commision',
      'HandlingFee' => 'App\\models\\hotelAPI\\Basket\\HandlingFee',
      'ValuationLine' => 'App\\models\\hotelAPI\\Basket\\ValuationLine',
      'CarDetails' => 'App\\models\\hotelAPI\\Basket\\CarDetails',
      'CheckDetails' => 'App\\models\\hotelAPI\\Basket\\CheckDetails',
      'StationDetails' => 'App\\models\\hotelAPI\\Basket\\StationDetails',
      'OpenHours' => 'App\\models\\hotelAPI\\Basket\\OpenHours',
      'Driver' => 'App\\models\\hotelAPI\\Basket\\Driver',
      'ExcursionBooking' => 'App\\models\\hotelAPI\\Basket\\ExcursionBooking',
      'HotelBooking' => 'App\\models\\hotelAPI\\Basket\\HotelBooking',
      'ValuatedOccupation' => 'App\\models\\hotelAPI\\Basket\\ValuatedOccupation',
      'CommentsRS' => 'App\\models\\hotelAPI\\Basket\\CommentsRS',
      'CommentsRSV2' => 'App\\models\\hotelAPI\\Basket\\CommentsRSV2',
      'Conditions' => 'App\\models\\hotelAPI\\Basket\\Conditions',
      'CalculationRules' => 'App\\models\\hotelAPI\\Basket\\CalculationRules',
      'DiscountsExemptions' => 'App\\models\\hotelAPI\\Basket\\DiscountsExemptions',
      'Tax' => 'App\\models\\hotelAPI\\Basket\\Tax',
      'ValuatedOccupationV16' => 'App\\models\\hotelAPI\\Basket\\ValuatedOccupationV16',
      'PaxListItem' => 'App\\models\\hotelAPI\\Basket\\PaxListItem',
      'PaxListItemService' => 'App\\models\\hotelAPI\\Basket\\PaxListItemService',
      'ValuatedOccupationV20' => 'App\\models\\hotelAPI\\Basket\\ValuatedOccupationV20',
      'Rates' => 'App\\models\\hotelAPI\\Basket\\Rates',
      'ValuatedOccupationV12' => 'App\\models\\hotelAPI\\Basket\\ValuatedOccupationV12',
      'TransferBooking' => 'App\\models\\hotelAPI\\Basket\\TransferBooking',
      'FlightInfo' => 'App\\models\\hotelAPI\\Basket\\FlightInfo',
      'FlightNumber' => 'App\\models\\hotelAPI\\Basket\\FlightNumber',
      'GetOccupationRS' => 'App\\models\\hotelAPI\\Basket\\GetOccupationRS',
      'VehicleInfo' => 'App\\models\\hotelAPI\\Basket\\VehicleInfo',
      'GetBasketRS' => 'App\\models\\hotelAPI\\Basket\\GetBasketRS',
      'ConfirmRS' => 'App\\models\\hotelAPI\\Basket\\ConfirmRS',
      'GetBasketExtendedRS' => 'App\\models\\hotelAPI\\Basket\\GetBasketExtendedRS',
      'CancelServiceRS' => 'App\\models\\hotelAPI\\Basket\\CancelServiceRS',
      'ValuateServiceCancellationRS' => 'App\\models\\hotelAPI\\Basket\\ValuateServiceCancellationRS',
      'ValuateCancellationRS' => 'App\\models\\hotelAPI\\Basket\\ValuateCancellationRS',
      'cancelService' => 'App\\models\\hotelAPI\\Basket\\cancelService',
      'CancelServiceRQ' => 'App\\models\\hotelAPI\\Basket\\CancelServiceRQ',
      'CancelServiceRQV22' => 'App\\models\\hotelAPI\\Basket\\CancelServiceRQV22',
      'cancelServiceResponse' => 'App\\models\\hotelAPI\\Basket\\cancelServiceResponse',
      'cancelServiceV2' => 'App\\models\\hotelAPI\\Basket\\cancelServiceV2',
      'cancelServiceV2Response' => 'App\\models\\hotelAPI\\Basket\\cancelServiceV2Response',
      'CancelServiceRSV17' => 'App\\models\\hotelAPI\\Basket\\CancelServiceRSV17',
      'HotelBookingExtendedV17' => 'App\\models\\hotelAPI\\Basket\\HotelBookingExtendedV17',
      'GetBasketExtendsRSV17' => 'App\\models\\hotelAPI\\Basket\\GetBasketExtendsRSV17',
      'ValuateServiceCancellationRSV17' => 'App\\models\\hotelAPI\\Basket\\ValuateServiceCancellationRSV17',
      'CancelRSV17' => 'App\\models\\hotelAPI\\Basket\\CancelRSV17',
      'ConfirmRSV17' => 'App\\models\\hotelAPI\\Basket\\ConfirmRSV17',
      'ValuateCancellationRSV17' => 'App\\models\\hotelAPI\\Basket\\ValuateCancellationRSV17',
      'cancelServiceV20' => 'App\\models\\hotelAPI\\Basket\\cancelServiceV20',
      'cancelServiceV20Response' => 'App\\models\\hotelAPI\\Basket\\cancelServiceV20Response',
      'CancelServiceRSV20' => 'App\\models\\hotelAPI\\Basket\\CancelServiceRSV20',
      'HotelBookingExtendedV20' => 'App\\models\\hotelAPI\\Basket\\HotelBookingExtendedV20',
      'GetBasketExtendsRSV20' => 'App\\models\\hotelAPI\\Basket\\GetBasketExtendsRSV20',
      'CancelRSV20' => 'App\\models\\hotelAPI\\Basket\\CancelRSV20',
      'CancelRSV22' => 'App\\models\\hotelAPI\\Basket\\CancelRSV22',
      'ConfirmRSV20' => 'App\\models\\hotelAPI\\Basket\\ConfirmRSV20',
      'ConfirmBasketRSV22' => 'App\\models\\hotelAPI\\Basket\\ConfirmBasketRSV22',
      'ValuateCancellationRSV20' => 'App\\models\\hotelAPI\\Basket\\ValuateCancellationRSV20',
      'ValuateCancellationRSV22' => 'App\\models\\hotelAPI\\Basket\\ValuateCancellationRSV22',
      'ValuateServiceCancellationRSV20' => 'App\\models\\hotelAPI\\Basket\\ValuateServiceCancellationRSV20',
      'ValuateServiceCancellationRSV22' => 'App\\models\\hotelAPI\\Basket\\ValuateServiceCancellationRSV22',
      'CancelServiceRSV22' => 'App\\models\\hotelAPI\\Basket\\CancelServiceRSV22',
      'cancelServiceV22' => 'App\\models\\hotelAPI\\Basket\\cancelServiceV22',
      'cancelServiceV22Response' => 'App\\models\\hotelAPI\\Basket\\cancelServiceV22Response',
      'cancelV2' => 'App\\models\\hotelAPI\\Basket\\cancelV2',
      'cancelV2Response' => 'App\\models\\hotelAPI\\Basket\\cancelV2Response',
      'cancelV20' => 'App\\models\\hotelAPI\\Basket\\cancelV20',
      'cancelV20Response' => 'App\\models\\hotelAPI\\Basket\\cancelV20Response',
      'cancelV22' => 'App\\models\\hotelAPI\\Basket\\cancelV22',
      'cancelV22Response' => 'App\\models\\hotelAPI\\Basket\\cancelV22Response',
      'confirm' => 'App\\models\\hotelAPI\\Basket\\confirm',
      'ConfirmRQ' => 'App\\models\\hotelAPI\\Basket\\ConfirmRQ',
      'ConfirmRQAR' => 'App\\models\\hotelAPI\\Basket\\ConfirmRQAR',
      'ConfirmRQExtends' => 'App\\models\\hotelAPI\\Basket\\ConfirmRQExtends',
      'ConfirmRQExtendsV22' => 'App\\models\\hotelAPI\\Basket\\ConfirmRQExtendsV22',
      'PaxListServiceRQ' => 'App\\models\\hotelAPI\\Basket\\PaxListServiceRQ',
      'PaxRQ' => 'App\\models\\hotelAPI\\Basket\\PaxRQ',
      'ConfirmRQExtendsV2' => 'App\\models\\hotelAPI\\Basket\\ConfirmRQExtendsV2',
      'confirmResponse' => 'App\\models\\hotelAPI\\Basket\\confirmResponse',
      'confirmAgencyReference' => 'App\\models\\hotelAPI\\Basket\\confirmAgencyReference',
      'confirmAgencyReferenceResponse' => 'App\\models\\hotelAPI\\Basket\\confirmAgencyReferenceResponse',
      'confirmAgencyReferenceV2' => 'App\\models\\hotelAPI\\Basket\\confirmAgencyReferenceV2',
      'confirmAgencyReferenceV2Response' => 'App\\models\\hotelAPI\\Basket\\confirmAgencyReferenceV2Response',
      'confirmAgencyReferenceV20' => 'App\\models\\hotelAPI\\Basket\\confirmAgencyReferenceV20',
      'confirmAgencyReferenceV20Response' => 'App\\models\\hotelAPI\\Basket\\confirmAgencyReferenceV20Response',
      'confirmBasketV22' => 'App\\models\\hotelAPI\\Basket\\confirmBasketV22',
      'confirmBasketV22Response' => 'App\\models\\hotelAPI\\Basket\\confirmBasketV22Response',
      'confirmExtends' => 'App\\models\\hotelAPI\\Basket\\confirmExtends',
      'confirmExtendsResponse' => 'App\\models\\hotelAPI\\Basket\\confirmExtendsResponse',
      'confirmExtendsV2' => 'App\\models\\hotelAPI\\Basket\\confirmExtendsV2',
      'confirmExtendsV2Response' => 'App\\models\\hotelAPI\\Basket\\confirmExtendsV2Response',
      'confirmExtendsV20' => 'App\\models\\hotelAPI\\Basket\\confirmExtendsV20',
      'confirmExtendsV20Response' => 'App\\models\\hotelAPI\\Basket\\confirmExtendsV20Response',
      'confirmExtendsV3' => 'App\\models\\hotelAPI\\Basket\\confirmExtendsV3',
      'confirmExtendsV3Response' => 'App\\models\\hotelAPI\\Basket\\confirmExtendsV3Response',
      'getBasket' => 'App\\models\\hotelAPI\\Basket\\getBasket',
      'GetBasketRQ' => 'App\\models\\hotelAPI\\Basket\\GetBasketRQ',
      'getBasketResponse' => 'App\\models\\hotelAPI\\Basket\\getBasketResponse',
      'getBasketExtended' => 'App\\models\\hotelAPI\\Basket\\getBasketExtended',
      'getBasketExtendedResponse' => 'App\\models\\hotelAPI\\Basket\\getBasketExtendedResponse',
      'getBasketExtendedV2' => 'App\\models\\hotelAPI\\Basket\\getBasketExtendedV2',
      'getBasketExtendedV2Response' => 'App\\models\\hotelAPI\\Basket\\getBasketExtendedV2Response',
      'GetBasketExtendedRSV12' => 'App\\models\\hotelAPI\\Basket\\GetBasketExtendedRSV12',
      'HotelBookingExtendedV12' => 'App\\models\\hotelAPI\\Basket\\HotelBookingExtendedV12',
      'getBasketExtendedV20' => 'App\\models\\hotelAPI\\Basket\\getBasketExtendedV20',
      'getBasketExtendedV20Response' => 'App\\models\\hotelAPI\\Basket\\getBasketExtendedV20Response',
      'getBasketExtendedV3' => 'App\\models\\hotelAPI\\Basket\\getBasketExtendedV3',
      'getBasketExtendedV3Response' => 'App\\models\\hotelAPI\\Basket\\getBasketExtendedV3Response',
      'getBaskets' => 'App\\models\\hotelAPI\\Basket\\getBaskets',
      'GetBasketsRQ' => 'App\\models\\hotelAPI\\Basket\\GetBasketsRQ',
      'GetBasketsRQV16' => 'App\\models\\hotelAPI\\Basket\\GetBasketsRQV16',
      'GetBasketsRQV22' => 'App\\models\\hotelAPI\\Basket\\GetBasketsRQV22',
      'getBasketsResponse' => 'App\\models\\hotelAPI\\Basket\\getBasketsResponse',
      'GetBasketsRS' => 'App\\models\\hotelAPI\\Basket\\GetBasketsRS',
      'GetBasketsResult' => 'App\\models\\hotelAPI\\Basket\\GetBasketsResult',
      'GetBasketsRSV22' => 'App\\models\\hotelAPI\\Basket\\GetBasketsRSV22',
      'getBasketsV15' => 'App\\models\\hotelAPI\\Basket\\getBasketsV15',
      'getBasketsV15Response' => 'App\\models\\hotelAPI\\Basket\\getBasketsV15Response',
      'getBasketsV16' => 'App\\models\\hotelAPI\\Basket\\getBasketsV16',
      'getBasketsV16Response' => 'App\\models\\hotelAPI\\Basket\\getBasketsV16Response',
      'getBasketsV22' => 'App\\models\\hotelAPI\\Basket\\getBasketsV22',
      'getBasketsV22Response' => 'App\\models\\hotelAPI\\Basket\\getBasketsV22Response',
      'getDoc' => 'App\\models\\hotelAPI\\Basket\\getDoc',
      'GetDocRQ' => 'App\\models\\hotelAPI\\Basket\\GetDocRQ',
      'getDocResponse' => 'App\\models\\hotelAPI\\Basket\\getDocResponse',
      'GetDocRS' => 'App\\models\\hotelAPI\\Basket\\GetDocRS',
      'valuateCancellation' => 'App\\models\\hotelAPI\\Basket\\valuateCancellation',
      'ValuateCancellationRQ' => 'App\\models\\hotelAPI\\Basket\\ValuateCancellationRQ',
      'ValuateCancellationRQV22' => 'App\\models\\hotelAPI\\Basket\\ValuateCancellationRQV22',
      'valuateCancellationResponse' => 'App\\models\\hotelAPI\\Basket\\valuateCancellationResponse',
      'valuateCancellationV2' => 'App\\models\\hotelAPI\\Basket\\valuateCancellationV2',
      'valuateCancellationV2Response' => 'App\\models\\hotelAPI\\Basket\\valuateCancellationV2Response',
      'valuateCancellationV20' => 'App\\models\\hotelAPI\\Basket\\valuateCancellationV20',
      'valuateCancellationV20Response' => 'App\\models\\hotelAPI\\Basket\\valuateCancellationV20Response',
      'valuateCancellationV22' => 'App\\models\\hotelAPI\\Basket\\valuateCancellationV22',
      'valuateCancellationV22Response' => 'App\\models\\hotelAPI\\Basket\\valuateCancellationV22Response',
      'valuateServiceCancellation' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellation',
      'ValuateServiceCancellationRQ' => 'App\\models\\hotelAPI\\Basket\\ValuateServiceCancellationRQ',
      'ValuateServiceCancellationRQV22' => 'App\\models\\hotelAPI\\Basket\\ValuateServiceCancellationRQV22',
      'valuateServiceCancellationResponse' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellationResponse',
      'valuateServiceCancellationV2' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellationV2',
      'valuateServiceCancellationV2Response' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellationV2Response',
      'valuateServiceCancellationV20' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellationV20',
      'valuateServiceCancellationV20Response' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellationV20Response',
      'valuateServiceCancellationV22' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellationV22',
      'valuateServiceCancellationV22Response' => 'App\\models\\hotelAPI\\Basket\\valuateServiceCancellationV22Response',
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
        $wsdl = config('services.jumbo.wsdl') .'basketHandler?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param cancel $parameters
     * @return cancelResponse
     */
    public function cancel(cancel $parameters)
    {
      return $this->__soapCall('cancel', array($parameters));
    }

    /**
     * @param cancelService $parameters
     * @return cancelServiceResponse
     */
    public function cancelService(cancelService $parameters)
    {
      return $this->__soapCall('cancelService', array($parameters));
    }

    /**
     * @param cancelServiceV2 $parameters
     * @return cancelServiceV2Response
     */
    public function cancelServiceV2(cancelServiceV2 $parameters)
    {
      return $this->__soapCall('cancelServiceV2', array($parameters));
    }

    /**
     * @param cancelServiceV20 $parameters
     * @return cancelServiceV20Response
     */
    public function cancelServiceV20(cancelServiceV20 $parameters)
    {
      return $this->__soapCall('cancelServiceV20', array($parameters));
    }

    /**
     * @param cancelServiceV22 $parameters
     * @return cancelServiceV22Response
     */
    public function cancelServiceV22(cancelServiceV22 $parameters)
    {
      return $this->__soapCall('cancelServiceV22', array($parameters));
    }

    /**
     * @param cancelV2 $parameters
     * @return cancelV2Response
     */
    public function cancelV2(cancelV2 $parameters)
    {
      return $this->__soapCall('cancelV2', array($parameters));
    }

    /**
     * @param cancelV20 $parameters
     * @return cancelV20Response
     */
    public function cancelV20(cancelV20 $parameters)
    {
      return $this->__soapCall('cancelV20', array($parameters));
    }

    /**
     * @param cancelV22 $parameters
     * @return cancelV22Response
     */
    public function cancelV22(cancelV22 $parameters)
    {
      return $this->__soapCall('cancelV22', array($parameters));
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
     * @param confirmAgencyReference $parameters
     * @return confirmAgencyReferenceResponse
     */
    public function confirmAgencyReference(confirmAgencyReference $parameters)
    {
      return $this->__soapCall('confirmAgencyReference', array($parameters));
    }

    /**
     * @param confirmAgencyReferenceV2 $parameters
     * @return confirmAgencyReferenceV2Response
     */
    public function confirmAgencyReferenceV2(confirmAgencyReferenceV2 $parameters)
    {
      return $this->__soapCall('confirmAgencyReferenceV2', array($parameters));
    }

    /**
     * @param confirmAgencyReferenceV20 $parameters
     * @return confirmAgencyReferenceV20Response
     */
    public function confirmAgencyReferenceV20(confirmAgencyReferenceV20 $parameters)
    {
      return $this->__soapCall('confirmAgencyReferenceV20', array($parameters));
    }

    /**
     * @param confirmBasketV22 $parameters
     * @return confirmBasketV22Response
     */
    public function confirmBasketV22(confirmBasketV22 $parameters)
    {
      return $this->__soapCall('confirmBasketV22', array($parameters));
    }

    /**
     * @param confirmExtends $parameters
     * @return confirmExtendsResponse
     */
    public function confirmExtends(confirmExtends $parameters)
    {
      return $this->__soapCall('confirmExtends', array($parameters));
    }

    /**
     * @param confirmExtendsV2 $parameters
     * @return confirmExtendsV2Response
     */
    public function confirmExtendsV2(confirmExtendsV2 $parameters)
    {
      return $this->__soapCall('confirmExtendsV2', array($parameters));
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
     * @param confirmExtendsV3 $parameters
     * @return confirmExtendsV3Response
     */
    public function confirmExtendsV3(confirmExtendsV3 $parameters)
    {
      return $this->__soapCall('confirmExtendsV3', array($parameters));
    }

    /**
     * @param getBasket $parameters
     * @return getBasketResponse
     */
    public function getBasket(getBasket $parameters)
    {
      return $this->__soapCall('getBasket', array($parameters));
    }

    /**
     * @param getBasketExtended $parameters
     * @return getBasketExtendedResponse
     */
    public function getBasketExtended(getBasketExtended $parameters)
    {
      return $this->__soapCall('getBasketExtended', array($parameters));
    }

    /**
     * @param getBasketExtendedV2 $parameters
     * @return getBasketExtendedV2Response
     */
    public function getBasketExtendedV2(getBasketExtendedV2 $parameters)
    {
      return $this->__soapCall('getBasketExtendedV2', array($parameters));
    }

    /**
     * @param getBasketExtendedV20 $parameters
     * @return getBasketExtendedV20Response
     */
    public function getBasketExtendedV20(getBasketExtendedV20 $parameters)
    {
      return $this->__soapCall('getBasketExtendedV20', array($parameters));
    }

    /**
     * @param getBasketExtendedV3 $parameters
     * @return getBasketExtendedV3Response
     */
    public function getBasketExtendedV3(getBasketExtendedV3 $parameters)
    {
      return $this->__soapCall('getBasketExtendedV3', array($parameters));
    }

    /**
     * @param getBaskets $parameters
     * @return getBasketsResponse
     */
    public function getBaskets(getBaskets $parameters)
    {
      return $this->__soapCall('getBaskets', array($parameters));
    }

    /**
     * @param getBasketsV15 $parameters
     * @return getBasketsV15Response
     */
    public function getBasketsV15(getBasketsV15 $parameters)
    {
      return $this->__soapCall('getBasketsV15', array($parameters));
    }

    /**
     * @param getBasketsV16 $parameters
     * @return getBasketsV16Response
     */
    public function getBasketsV16(getBasketsV16 $parameters)
    {
      return $this->__soapCall('getBasketsV16', array($parameters));
    }

    /**
     * @param getBasketsV22 $parameters
     * @return getBasketsV22Response
     */
    public function getBasketsV22(getBasketsV22 $parameters)
    {
      return $this->__soapCall('getBasketsV22', array($parameters));
    }

    /**
     * @param getDoc $parameters
     * @return getDocResponse
     */
    public function getDoc(getDoc $parameters)
    {
      return $this->__soapCall('getDoc', array($parameters));
    }

    /**
     * @param valuateCancellation $parameters
     * @return valuateCancellationResponse
     */
    public function valuateCancellation(valuateCancellation $parameters)
    {
      return $this->__soapCall('valuateCancellation', array($parameters));
    }

    /**
     * @param valuateCancellationV2 $parameters
     * @return valuateCancellationV2Response
     */
    public function valuateCancellationV2(valuateCancellationV2 $parameters)
    {
      return $this->__soapCall('valuateCancellationV2', array($parameters));
    }

    /**
     * @param valuateCancellationV20 $parameters
     * @return valuateCancellationV20Response
     */
    public function valuateCancellationV20(valuateCancellationV20 $parameters)
    {
      return $this->__soapCall('valuateCancellationV20', array($parameters));
    }

    /**
     * @param valuateCancellationV22 $parameters
     * @return valuateCancellationV22Response
     */
    public function valuateCancellationV22(valuateCancellationV22 $parameters)
    {
      return $this->__soapCall('valuateCancellationV22', array($parameters));
    }

    /**
     * @param valuateServiceCancellation $parameters
     * @return valuateServiceCancellationResponse
     */
    public function valuateServiceCancellation(valuateServiceCancellation $parameters)
    {
      return $this->__soapCall('valuateServiceCancellation', array($parameters));
    }

    /**
     * @param valuateServiceCancellationV2 $parameters
     * @return valuateServiceCancellationV2Response
     */
    public function valuateServiceCancellationV2(valuateServiceCancellationV2 $parameters)
    {
      return $this->__soapCall('valuateServiceCancellationV2', array($parameters));
    }

    /**
     * @param valuateServiceCancellationV20 $parameters
     * @return valuateServiceCancellationV20Response
     */
    public function valuateServiceCancellationV20(valuateServiceCancellationV20 $parameters)
    {
      return $this->__soapCall('valuateServiceCancellationV20', array($parameters));
    }

    /**
     * @param valuateServiceCancellationV22 $parameters
     * @return valuateServiceCancellationV22Response
     */
    public function valuateServiceCancellationV22(valuateServiceCancellationV22 $parameters)
    {
      return $this->__soapCall('valuateServiceCancellationV22', array($parameters));
    }

}
