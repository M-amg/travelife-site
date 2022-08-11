<?php

namespace App\models\hotelAPI\Commons;

class CommonsHandlerService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetEventsByArea' => 'App\\models\\hotelAPI\\Commons\\GetEventsByArea',
      'GetEventsByAreaRQ' => 'App\\models\\hotelAPI\\Commons\\GetEventsByAreaRQ',
      'GetEventsByAreaResponse' => 'App\\models\\hotelAPI\\Commons\\GetEventsByAreaResponse',
      'GetEventsRS' => 'App\\models\\hotelAPI\\Commons\\GetEventsRS',
      'Event' => 'App\\models\\hotelAPI\\Commons\\Event',
      'GetEventsByCity' => 'App\\models\\hotelAPI\\Commons\\GetEventsByCity',
      'GetEventsByCityRQ' => 'App\\models\\hotelAPI\\Commons\\GetEventsByCityRQ',
      'GetEventsByCityResponse' => 'App\\models\\hotelAPI\\Commons\\GetEventsByCityResponse',
      'GetOffers' => 'App\\models\\hotelAPI\\Commons\\GetOffers',
      'GetOffersRQ' => 'App\\models\\hotelAPI\\Commons\\GetOffersRQ',
      'GetOffersResponse' => 'App\\models\\hotelAPI\\Commons\\GetOffersResponse',
      'GetOffersRS' => 'App\\models\\hotelAPI\\Commons\\GetOffersRS',
      'Offer' => 'App\\models\\hotelAPI\\Commons\\Offer',
      'getAirportTypes' => 'App\\models\\hotelAPI\\Commons\\getAirportTypes',
      'GetAirportTypesRQ' => 'App\\models\\hotelAPI\\Commons\\GetAirportTypesRQ',
      'getAirportTypesResponse' => 'App\\models\\hotelAPI\\Commons\\getAirportTypesResponse',
      'GetAirportTypesRS' => 'App\\models\\hotelAPI\\Commons\\GetAirportTypesRS',
      'AirportType' => 'App\\models\\hotelAPI\\Commons\\AirportType',
      'getAirports' => 'App\\models\\hotelAPI\\Commons\\getAirports',
      'GetAirportsRQ' => 'App\\models\\hotelAPI\\Commons\\GetAirportsRQ',
      'getAirportsResponse' => 'App\\models\\hotelAPI\\Commons\\getAirportsResponse',
      'GetAirportsRS' => 'App\\models\\hotelAPI\\Commons\\GetAirportsRS',
      'Airport' => 'App\\models\\hotelAPI\\Commons\\Airport',
      'Zone' => 'App\\models\\hotelAPI\\Commons\\Zone',
      'City' => 'App\\models\\hotelAPI\\Commons\\City',
      'getAreas' => 'App\\models\\hotelAPI\\Commons\\getAreas',
      'GetAreasRQ' => 'App\\models\\hotelAPI\\Commons\\GetAreasRQ',
      'GetAreasRQV12' => 'App\\models\\hotelAPI\\Commons\\GetAreasRQV12',
      'GetAreasRQV22' => 'App\\models\\hotelAPI\\Commons\\GetAreasRQV22',
      'ExtendedLogin' => 'App\\models\\hotelAPI\\Commons\\ExtendedLogin',
      'getAreasResponse' => 'App\\models\\hotelAPI\\Commons\\getAreasResponse',
      'GetAreasRS' => 'App\\models\\hotelAPI\\Commons\\GetAreasRS',
      'Area' => 'App\\models\\hotelAPI\\Commons\\Area',
      'AreaV12' => 'App\\models\\hotelAPI\\Commons\\AreaV12',
      'SectionBase' => 'App\\models\\hotelAPI\\Commons\\SectionBase',
      'Section' => 'App\\models\\hotelAPI\\Commons\\Section',
      'getAreasV12' => 'App\\models\\hotelAPI\\Commons\\getAreasV12',
      'getAreasV12Response' => 'App\\models\\hotelAPI\\Commons\\getAreasV12Response',
      'GetAreasRSV12' => 'App\\models\\hotelAPI\\Commons\\GetAreasRSV12',
      'GetAreasRSV22' => 'App\\models\\hotelAPI\\Commons\\GetAreasRSV22',
      'getAreasV22' => 'App\\models\\hotelAPI\\Commons\\getAreasV22',
      'getAreasV22Response' => 'App\\models\\hotelAPI\\Commons\\getAreasV22Response',
      'getCities' => 'App\\models\\hotelAPI\\Commons\\getCities',
      'GetCitiesRQ' => 'App\\models\\hotelAPI\\Commons\\GetCitiesRQ',
      'GetCitiesRQV22' => 'App\\models\\hotelAPI\\Commons\\GetCitiesRQV22',
      'getCitiesResponse' => 'App\\models\\hotelAPI\\Commons\\getCitiesResponse',
      'GetCitiesRS' => 'App\\models\\hotelAPI\\Commons\\GetCitiesRS',
      'Item' => 'App\\models\\hotelAPI\\Commons\\Item',
      'GetCitiesRSV22' => 'App\\models\\hotelAPI\\Commons\\GetCitiesRSV22',
      'getCitiesByArea' => 'App\\models\\hotelAPI\\Commons\\getCitiesByArea',
      'GetCitiesByAreaRQ' => 'App\\models\\hotelAPI\\Commons\\GetCitiesByAreaRQ',
      'GetCitiesByAreaRQV22' => 'App\\models\\hotelAPI\\Commons\\GetCitiesByAreaRQV22',
      'getCitiesByAreaResponse' => 'App\\models\\hotelAPI\\Commons\\getCitiesByAreaResponse',
      'getCitiesByAreaV22' => 'App\\models\\hotelAPI\\Commons\\getCitiesByAreaV22',
      'getCitiesByAreaV22Response' => 'App\\models\\hotelAPI\\Commons\\getCitiesByAreaV22Response',
      'getCitiesV22' => 'App\\models\\hotelAPI\\Commons\\getCitiesV22',
      'getCitiesV22Response' => 'App\\models\\hotelAPI\\Commons\\getCitiesV22Response',
      'getCitiesWithAvailability' => 'App\\models\\hotelAPI\\Commons\\getCitiesWithAvailability',
      'GetCitiesWithAvailabilityRQ' => 'App\\models\\hotelAPI\\Commons\\GetCitiesWithAvailabilityRQ',
      'GetCitiesWithAvailabilityRQV22' => 'App\\models\\hotelAPI\\Commons\\GetCitiesWithAvailabilityRQV22',
      'getCitiesWithAvailabilityResponse' => 'App\\models\\hotelAPI\\Commons\\getCitiesWithAvailabilityResponse',
      'GetCitiesWithAvailabilityRS' => 'App\\models\\hotelAPI\\Commons\\GetCitiesWithAvailabilityRS',
      'CityHotelsByAgency' => 'App\\models\\hotelAPI\\Commons\\CityHotelsByAgency',
      'GetCitiesWithAvailabilityRSV22' => 'App\\models\\hotelAPI\\Commons\\GetCitiesWithAvailabilityRSV22',
      'getCitiesWithAvailabilityV22' => 'App\\models\\hotelAPI\\Commons\\getCitiesWithAvailabilityV22',
      'getCitiesWithAvailabilityV22Response' => 'App\\models\\hotelAPI\\Commons\\getCitiesWithAvailabilityV22Response',
      'getCountries' => 'App\\models\\hotelAPI\\Commons\\getCountries',
      'GetCountriesRQ' => 'App\\models\\hotelAPI\\Commons\\GetCountriesRQ',
      'GetCountriesRQV22' => 'App\\models\\hotelAPI\\Commons\\GetCountriesRQV22',
      'getCountriesResponse' => 'App\\models\\hotelAPI\\Commons\\getCountriesResponse',
      'GetCountriesRS' => 'App\\models\\hotelAPI\\Commons\\GetCountriesRS',
      'GetCountriesRSV22' => 'App\\models\\hotelAPI\\Commons\\GetCountriesRSV22',
      'getCountriesV22' => 'App\\models\\hotelAPI\\Commons\\getCountriesV22',
      'getCountriesV22Response' => 'App\\models\\hotelAPI\\Commons\\getCountriesV22Response',
      'getDistricts' => 'App\\models\\hotelAPI\\Commons\\getDistricts',
      'GetDistrictsRQ' => 'App\\models\\hotelAPI\\Commons\\GetDistrictsRQ',
      'GetDistrictsRQV22' => 'App\\models\\hotelAPI\\Commons\\GetDistrictsRQV22',
      'getDistrictsResponse' => 'App\\models\\hotelAPI\\Commons\\getDistrictsResponse',
      'GetDistrictsRS' => 'App\\models\\hotelAPI\\Commons\\GetDistrictsRS',
      'District' => 'App\\models\\hotelAPI\\Commons\\District',
      'GetDistrictsRSV22' => 'App\\models\\hotelAPI\\Commons\\GetDistrictsRSV22',
      'getDistrictsV22' => 'App\\models\\hotelAPI\\Commons\\getDistrictsV22',
      'getDistrictsV22Response' => 'App\\models\\hotelAPI\\Commons\\getDistrictsV22Response',
      'getErrataTypes' => 'App\\models\\hotelAPI\\Commons\\getErrataTypes',
      'GetErrataTypesRQ' => 'App\\models\\hotelAPI\\Commons\\GetErrataTypesRQ',
      'GetErrataTypesRQV22' => 'App\\models\\hotelAPI\\Commons\\GetErrataTypesRQV22',
      'getErrataTypesResponse' => 'App\\models\\hotelAPI\\Commons\\getErrataTypesResponse',
      'GetErrataTypesRS' => 'App\\models\\hotelAPI\\Commons\\GetErrataTypesRS',
      'ErrataTypeRS' => 'App\\models\\hotelAPI\\Commons\\ErrataTypeRS',
      'GetErrataTypesRSV22' => 'App\\models\\hotelAPI\\Commons\\GetErrataTypesRSV22',
      'getErrataTypesV22' => 'App\\models\\hotelAPI\\Commons\\getErrataTypesV22',
      'getErrataTypesV22Response' => 'App\\models\\hotelAPI\\Commons\\getErrataTypesV22Response',
      'getGeographicalMap' => 'App\\models\\hotelAPI\\Commons\\getGeographicalMap',
      'GetGeographicalMapRQ' => 'App\\models\\hotelAPI\\Commons\\GetGeographicalMapRQ',
      'GetGeographicalMapRQV22' => 'App\\models\\hotelAPI\\Commons\\GetGeographicalMapRQV22',
      'getGeographicalMapResponse' => 'App\\models\\hotelAPI\\Commons\\getGeographicalMapResponse',
      'GetGeographicalMapRS' => 'App\\models\\hotelAPI\\Commons\\GetGeographicalMapRS',
      'Continent' => 'App\\models\\hotelAPI\\Commons\\Continent',
      'Country' => 'App\\models\\hotelAPI\\Commons\\Country',
      'State' => 'App\\models\\hotelAPI\\Commons\\State',
      'GetGeographicalMapRSV22' => 'App\\models\\hotelAPI\\Commons\\GetGeographicalMapRSV22',
      'getGeographicalMapV22' => 'App\\models\\hotelAPI\\Commons\\getGeographicalMapV22',
      'getGeographicalMapV22Response' => 'App\\models\\hotelAPI\\Commons\\getGeographicalMapV22Response',
      'getProduct' => 'App\\models\\hotelAPI\\Commons\\getProduct',
      'GetProductRQ' => 'App\\models\\hotelAPI\\Commons\\GetProductRQ',
      'getProductResponse' => 'App\\models\\hotelAPI\\Commons\\getProductResponse',
      'GetProductRS' => 'App\\models\\hotelAPI\\Commons\\GetProductRS',
      'Product' => 'App\\models\\hotelAPI\\Commons\\Product',
      'getRatesV22' => 'App\\models\\hotelAPI\\Commons\\getRatesV22',
      'RatesRQV22' => 'App\\models\\hotelAPI\\Commons\\RatesRQV22',
      'getRatesV22Response' => 'App\\models\\hotelAPI\\Commons\\getRatesV22Response',
      'RatesRSV22' => 'App\\models\\hotelAPI\\Commons\\RatesRSV22',
      'RateRS' => 'App\\models\\hotelAPI\\Commons\\RateRS',
      'getSections' => 'App\\models\\hotelAPI\\Commons\\getSections',
      'GetSectionsRQ' => 'App\\models\\hotelAPI\\Commons\\GetSectionsRQ',
      'getSectionsResponse' => 'App\\models\\hotelAPI\\Commons\\getSectionsResponse',
      'GetSectionsRS' => 'App\\models\\hotelAPI\\Commons\\GetSectionsRS',
      'getServices' => 'App\\models\\hotelAPI\\Commons\\getServices',
      'GetServicesRQ' => 'App\\models\\hotelAPI\\Commons\\GetServicesRQ',
      'getServicesResponse' => 'App\\models\\hotelAPI\\Commons\\getServicesResponse',
      'GetServicesRS' => 'App\\models\\hotelAPI\\Commons\\GetServicesRS',
      'Service' => 'App\\models\\hotelAPI\\Commons\\Service',
      'getVehiclesTypes' => 'App\\models\\hotelAPI\\Commons\\getVehiclesTypes',
      'GetVehiclesRQ' => 'App\\models\\hotelAPI\\Commons\\GetVehiclesRQ',
      'getVehiclesTypesResponse' => 'App\\models\\hotelAPI\\Commons\\getVehiclesTypesResponse',
      'GetVehiclesRS' => 'App\\models\\hotelAPI\\Commons\\GetVehiclesRS',
      'VehiclesTypes' => 'App\\models\\hotelAPI\\Commons\\VehiclesTypes',
      'getZones' => 'App\\models\\hotelAPI\\Commons\\getZones',
      'GetZonesRQ' => 'App\\models\\hotelAPI\\Commons\\GetZonesRQ',
      'getZonesResponse' => 'App\\models\\hotelAPI\\Commons\\getZonesResponse',
      'GetZonesRS' => 'App\\models\\hotelAPI\\Commons\\GetZonesRS',
      'ping' => 'App\\models\\hotelAPI\\Commons\\ping',
      'PingRQ' => 'App\\models\\hotelAPI\\Commons\\PingRQ',
      'PingRQV21' => 'App\\models\\hotelAPI\\Commons\\PingRQV21',
      'pingResponse' => 'App\\models\\hotelAPI\\Commons\\pingResponse',
      'PingRS' => 'App\\models\\hotelAPI\\Commons\\PingRS',
      'PingRSV21' => 'App\\models\\hotelAPI\\Commons\\PingRSV21',
      'pingDispo' => 'App\\models\\hotelAPI\\Commons\\pingDispo',
      'AvailableHotelsCompatibilityQueryRQ' => 'App\\models\\hotelAPI\\Commons\\AvailableHotelsCompatibilityQueryRQ',
      'pingDispoResponse' => 'App\\models\\hotelAPI\\Commons\\pingDispoResponse',
      'pingV21' => 'App\\models\\hotelAPI\\Commons\\pingV21',
      'pingV21Response' => 'App\\models\\hotelAPI\\Commons\\pingV21Response',
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
        $wsdl = 'https://test.xtravelsystem.com/public/v1_0rc1/commonsHandler?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetEventsByArea $parameters
     * @return GetEventsByAreaResponse
     */
    public function GetEventsByArea(GetEventsByArea $parameters)
    {
      return $this->__soapCall('GetEventsByArea', array($parameters));
    }

    /**
     * @param GetEventsByCity $parameters
     * @return GetEventsByCityResponse
     */
    public function GetEventsByCity(GetEventsByCity $parameters)
    {
      return $this->__soapCall('GetEventsByCity', array($parameters));
    }

    /**
     * @param GetOffers $parameters
     * @return GetOffersResponse
     */
    public function GetOffers(GetOffers $parameters)
    {
      return $this->__soapCall('GetOffers', array($parameters));
    }

    /**
     * @param getAirportTypes $parameters
     * @return getAirportTypesResponse
     */
    public function getAirportTypes(getAirportTypes $parameters)
    {
      return $this->__soapCall('getAirportTypes', array($parameters));
    }

    /**
     * @param getAirports $parameters
     * @return getAirportsResponse
     */
    public function getAirports(getAirports $parameters)
    {
      return $this->__soapCall('getAirports', array($parameters));
    }

    /**
     * @param getAreas $parameters
     * @return getAreasResponse
     */
    public function getAreas(getAreas $parameters)
    {
      return $this->__soapCall('getAreas', array($parameters));
    }

    /**
     * @param getAreasV12 $parameters
     * @return getAreasV12Response
     */
    public function getAreasV12(getAreasV12 $parameters)
    {
      return $this->__soapCall('getAreasV12', array($parameters));
    }

    /**
     * @param getAreasV22 $parameters
     * @return getAreasV22Response
     */
    public function getAreasV22(getAreasV22 $parameters)
    {
      return $this->__soapCall('getAreasV22', array($parameters));
    }

    /**
     * @param getCities $parameters
     * @return getCitiesResponse
     */
    public function getCities(getCities $parameters)
    {
      return $this->__soapCall('getCities', array($parameters));
    }

    /**
     * @param getCitiesByArea $parameters
     * @return getCitiesByAreaResponse
     */
    public function getCitiesByArea(getCitiesByArea $parameters)
    {
      return $this->__soapCall('getCitiesByArea', array($parameters));
    }

    /**
     * @param getCitiesByAreaV22 $parameters
     * @return getCitiesByAreaV22Response
     */
    public function getCitiesByAreaV22(getCitiesByAreaV22 $parameters)
    {
      return $this->__soapCall('getCitiesByAreaV22', array($parameters));
    }

    /**
     * @param getCitiesV22 $parameters
     * @return getCitiesV22Response
     */
    public function getCitiesV22(getCitiesV22 $parameters)
    {
      return $this->__soapCall('getCitiesV22', array($parameters));
    }

    /**
     * @param getCitiesWithAvailability $parameters
     * @return getCitiesWithAvailabilityResponse
     */
    public function getCitiesWithAvailability(getCitiesWithAvailability $parameters)
    {
      return $this->__soapCall('getCitiesWithAvailability', array($parameters));
    }

    /**
     * @param getCitiesWithAvailabilityV22 $parameters
     * @return getCitiesWithAvailabilityV22Response
     */
    public function getCitiesWithAvailabilityV22(getCitiesWithAvailabilityV22 $parameters)
    {
      return $this->__soapCall('getCitiesWithAvailabilityV22', array($parameters));
    }

    /**
     * @param getCountries $parameters
     * @return getCountriesResponse
     */
    public function getCountries(getCountries $parameters)
    {
      return $this->__soapCall('getCountries', array($parameters));
    }

    /**
     * @param getCountriesV22 $parameters
     * @return getCountriesV22Response
     */
    public function getCountriesV22(getCountriesV22 $parameters)
    {
      return $this->__soapCall('getCountriesV22', array($parameters));
    }

    /**
     * @param getDistricts $parameters
     * @return getDistrictsResponse
     */
    public function getDistricts(getDistricts $parameters)
    {
      return $this->__soapCall('getDistricts', array($parameters));
    }

    /**
     * @param getDistrictsV22 $parameters
     * @return getDistrictsV22Response
     */
    public function getDistrictsV22(getDistrictsV22 $parameters)
    {
      return $this->__soapCall('getDistrictsV22', array($parameters));
    }

    /**
     * @param getErrataTypes $parameters
     * @return getErrataTypesResponse
     */
    public function getErrataTypes(getErrataTypes $parameters)
    {
      return $this->__soapCall('getErrataTypes', array($parameters));
    }

    /**
     * @param getErrataTypesV22 $parameters
     * @return getErrataTypesV22Response
     */
    public function getErrataTypesV22(getErrataTypesV22 $parameters)
    {
      return $this->__soapCall('getErrataTypesV22', array($parameters));
    }

    /**
     * @param getGeographicalMap $parameters
     * @return getGeographicalMapResponse
     */
    public function getGeographicalMap(getGeographicalMap $parameters)
    {
      return $this->__soapCall('getGeographicalMap', array($parameters));
    }

    /**
     * @param getGeographicalMapV22 $parameters
     * @return getGeographicalMapV22Response
     */
    public function getGeographicalMapV22(getGeographicalMapV22 $parameters)
    {
      return $this->__soapCall('getGeographicalMapV22', array($parameters));
    }

    /**
     * @param getProduct $parameters
     * @return getProductResponse
     */
    public function getProduct(getProduct $parameters)
    {
      return $this->__soapCall('getProduct', array($parameters));
    }

    /**
     * @param getRatesV22 $parameters
     * @return getRatesV22Response
     */
    public function getRatesV22(getRatesV22 $parameters)
    {
      return $this->__soapCall('getRatesV22', array($parameters));
    }

    /**
     * @param getSections $parameters
     * @return getSectionsResponse
     */
    public function getSections(getSections $parameters)
    {
      return $this->__soapCall('getSections', array($parameters));
    }

    /**
     * @param getServices $parameters
     * @return getServicesResponse
     */
    public function getServices(getServices $parameters)
    {
      return $this->__soapCall('getServices', array($parameters));
    }

    /**
     * @param getVehiclesTypes $parameters
     * @return getVehiclesTypesResponse
     */
    public function getVehiclesTypes(getVehiclesTypes $parameters)
    {
      return $this->__soapCall('getVehiclesTypes', array($parameters));
    }

    /**
     * @param getZones $parameters
     * @return getZonesResponse
     */
    public function getZones(getZones $parameters)
    {
      return $this->__soapCall('getZones', array($parameters));
    }

    /**
     * @param ping $parameters
     * @return pingResponse
     */
    public function ping(ping $parameters)
    {
      return $this->__soapCall('ping', array($parameters));
    }

    /**
     * @param pingDispo $parameters
     * @return pingDispoResponse
     */
    public function pingDispo(pingDispo $parameters)
    {
      return $this->__soapCall('pingDispo', array($parameters));
    }

    /**
     * @param pingV21 $parameters
     * @return pingV21Response
     */
    public function pingV21(pingV21 $parameters)
    {
      return $this->__soapCall('pingV21', array($parameters));
    }

}
