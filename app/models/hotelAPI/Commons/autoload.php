<?php


 function autoload_1bc37997af9c3d9292b1391a6c03ea2b($class)
{
    $classes = array(
        'App\models\hotelAPI\Commons\CommonsHandlerService' => __DIR__ .'/CommonsHandlerService.php',
        'App\models\hotelAPI\Commons\GetEventsByArea' => __DIR__ .'/GetEventsByArea.php',
        'App\models\hotelAPI\Commons\GetEventsByAreaRQ' => __DIR__ .'/GetEventsByAreaRQ.php',
        'App\models\hotelAPI\Commons\GetEventsByAreaResponse' => __DIR__ .'/GetEventsByAreaResponse.php',
        'App\models\hotelAPI\Commons\GetEventsRS' => __DIR__ .'/GetEventsRS.php',
        'App\models\hotelAPI\Commons\Event' => __DIR__ .'/Event.php',
        'App\models\hotelAPI\Commons\GetEventsByCity' => __DIR__ .'/GetEventsByCity.php',
        'App\models\hotelAPI\Commons\GetEventsByCityRQ' => __DIR__ .'/GetEventsByCityRQ.php',
        'App\models\hotelAPI\Commons\GetEventsByCityResponse' => __DIR__ .'/GetEventsByCityResponse.php',
        'App\models\hotelAPI\Commons\GetOffers' => __DIR__ .'/GetOffers.php',
        'App\models\hotelAPI\Commons\GetOffersRQ' => __DIR__ .'/GetOffersRQ.php',
        'App\models\hotelAPI\Commons\GetOffersResponse' => __DIR__ .'/GetOffersResponse.php',
        'App\models\hotelAPI\Commons\GetOffersRS' => __DIR__ .'/GetOffersRS.php',
        'App\models\hotelAPI\Commons\Offer' => __DIR__ .'/Offer.php',
        'App\models\hotelAPI\Commons\getAirportTypes' => __DIR__ .'/getAirportTypes.php',
        'App\models\hotelAPI\Commons\GetAirportTypesRQ' => __DIR__ .'/GetAirportTypesRQ.php',
        'App\models\hotelAPI\Commons\getAirportTypesResponse' => __DIR__ .'/getAirportTypesResponse.php',
        'App\models\hotelAPI\Commons\GetAirportTypesRS' => __DIR__ .'/GetAirportTypesRS.php',
        'App\models\hotelAPI\Commons\AirportType' => __DIR__ .'/AirportType.php',
        'App\models\hotelAPI\Commons\getAirports' => __DIR__ .'/getAirports.php',
        'App\models\hotelAPI\Commons\GetAirportsRQ' => __DIR__ .'/GetAirportsRQ.php',
        'App\models\hotelAPI\Commons\getAirportsResponse' => __DIR__ .'/getAirportsResponse.php',
        'App\models\hotelAPI\Commons\GetAirportsRS' => __DIR__ .'/GetAirportsRS.php',
        'App\models\hotelAPI\Commons\Airport' => __DIR__ .'/Airport.php',
        'App\models\hotelAPI\Commons\Zone' => __DIR__ .'/Zone.php',
        'App\models\hotelAPI\Commons\City' => __DIR__ .'/City.php',
        'App\models\hotelAPI\Commons\getAreas' => __DIR__ .'/getAreas.php',
        'App\models\hotelAPI\Commons\GetAreasRQ' => __DIR__ .'/GetAreasRQ.php',
        'App\models\hotelAPI\Commons\GetAreasRQV12' => __DIR__ .'/GetAreasRQV12.php',
        'App\models\hotelAPI\Commons\GetAreasRQV22' => __DIR__ .'/GetAreasRQV22.php',
        'App\models\hotelAPI\Commons\ExtendedLogin' => __DIR__ .'/ExtendedLogin.php',
        'App\models\hotelAPI\Commons\getAreasResponse' => __DIR__ .'/getAreasResponse.php',
        'App\models\hotelAPI\Commons\GetAreasRS' => __DIR__ .'/GetAreasRS.php',
        'App\models\hotelAPI\Commons\Area' => __DIR__ .'/Area.php',
        'App\models\hotelAPI\Commons\AreaV12' => __DIR__ .'/AreaV12.php',
        'App\models\hotelAPI\Commons\SectionBase' => __DIR__ .'/SectionBase.php',
        'App\models\hotelAPI\Commons\Section' => __DIR__ .'/Section.php',
        'App\models\hotelAPI\Commons\getAreasV12' => __DIR__ .'/getAreasV12.php',
        'App\models\hotelAPI\Commons\getAreasV12Response' => __DIR__ .'/getAreasV12Response.php',
        'App\models\hotelAPI\Commons\GetAreasRSV12' => __DIR__ .'/GetAreasRSV12.php',
        'App\models\hotelAPI\Commons\GetAreasRSV22' => __DIR__ .'/GetAreasRSV22.php',
        'App\models\hotelAPI\Commons\getAreasV22' => __DIR__ .'/getAreasV22.php',
        'App\models\hotelAPI\Commons\getAreasV22Response' => __DIR__ .'/getAreasV22Response.php',
        'App\models\hotelAPI\Commons\getCities' => __DIR__ .'/getCities.php',
        'App\models\hotelAPI\Commons\GetCitiesRQ' => __DIR__ .'/GetCitiesRQ.php',
        'App\models\hotelAPI\Commons\GetCitiesRQV22' => __DIR__ .'/GetCitiesRQV22.php',
        'App\models\hotelAPI\Commons\getCitiesResponse' => __DIR__ .'/getCitiesResponse.php',
        'App\models\hotelAPI\Commons\GetCitiesRS' => __DIR__ .'/GetCitiesRS.php',
        'App\models\hotelAPI\Commons\Item' => __DIR__ .'/Item.php',
        'App\models\hotelAPI\Commons\GetCitiesRSV22' => __DIR__ .'/GetCitiesRSV22.php',
        'App\models\hotelAPI\Commons\getCitiesByArea' => __DIR__ .'/getCitiesByArea.php',
        'App\models\hotelAPI\Commons\GetCitiesByAreaRQ' => __DIR__ .'/GetCitiesByAreaRQ.php',
        'App\models\hotelAPI\Commons\GetCitiesByAreaRQV22' => __DIR__ .'/GetCitiesByAreaRQV22.php',
        'App\models\hotelAPI\Commons\getCitiesByAreaResponse' => __DIR__ .'/getCitiesByAreaResponse.php',
        'App\models\hotelAPI\Commons\getCitiesByAreaV22' => __DIR__ .'/getCitiesByAreaV22.php',
        'App\models\hotelAPI\Commons\getCitiesByAreaV22Response' => __DIR__ .'/getCitiesByAreaV22Response.php',
        'App\models\hotelAPI\Commons\getCitiesV22' => __DIR__ .'/getCitiesV22.php',
        'App\models\hotelAPI\Commons\getCitiesV22Response' => __DIR__ .'/getCitiesV22Response.php',
        'App\models\hotelAPI\Commons\getCitiesWithAvailability' => __DIR__ .'/getCitiesWithAvailability.php',
        'App\models\hotelAPI\Commons\GetCitiesWithAvailabilityRQ' => __DIR__ .'/GetCitiesWithAvailabilityRQ.php',
        'App\models\hotelAPI\Commons\GetCitiesWithAvailabilityRQV22' => __DIR__ .'/GetCitiesWithAvailabilityRQV22.php',
        'App\models\hotelAPI\Commons\getCitiesWithAvailabilityResponse' => __DIR__ .'/getCitiesWithAvailabilityResponse.php',
        'App\models\hotelAPI\Commons\GetCitiesWithAvailabilityRS' => __DIR__ .'/GetCitiesWithAvailabilityRS.php',
        'App\models\hotelAPI\Commons\CityHotelsByAgency' => __DIR__ .'/CityHotelsByAgency.php',
        'App\models\hotelAPI\Commons\GetCitiesWithAvailabilityRSV22' => __DIR__ .'/GetCitiesWithAvailabilityRSV22.php',
        'App\models\hotelAPI\Commons\getCitiesWithAvailabilityV22' => __DIR__ .'/getCitiesWithAvailabilityV22.php',
        'App\models\hotelAPI\Commons\getCitiesWithAvailabilityV22Response' => __DIR__ .'/getCitiesWithAvailabilityV22Response.php',
        'App\models\hotelAPI\Commons\getCountries' => __DIR__ .'/getCountries.php',
        'App\models\hotelAPI\Commons\GetCountriesRQ' => __DIR__ .'/GetCountriesRQ.php',
        'App\models\hotelAPI\Commons\GetCountriesRQV22' => __DIR__ .'/GetCountriesRQV22.php',
        'App\models\hotelAPI\Commons\getCountriesResponse' => __DIR__ .'/getCountriesResponse.php',
        'App\models\hotelAPI\Commons\GetCountriesRS' => __DIR__ .'/GetCountriesRS.php',
        'App\models\hotelAPI\Commons\GetCountriesRSV22' => __DIR__ .'/GetCountriesRSV22.php',
        'App\models\hotelAPI\Commons\getCountriesV22' => __DIR__ .'/getCountriesV22.php',
        'App\models\hotelAPI\Commons\getCountriesV22Response' => __DIR__ .'/getCountriesV22Response.php',
        'App\models\hotelAPI\Commons\getDistricts' => __DIR__ .'/getDistricts.php',
        'App\models\hotelAPI\Commons\GetDistrictsRQ' => __DIR__ .'/GetDistrictsRQ.php',
        'App\models\hotelAPI\Commons\GetDistrictsRQV22' => __DIR__ .'/GetDistrictsRQV22.php',
        'App\models\hotelAPI\Commons\getDistrictsResponse' => __DIR__ .'/getDistrictsResponse.php',
        'App\models\hotelAPI\Commons\GetDistrictsRS' => __DIR__ .'/GetDistrictsRS.php',
        'App\models\hotelAPI\Commons\District' => __DIR__ .'/District.php',
        'App\models\hotelAPI\Commons\GetDistrictsRSV22' => __DIR__ .'/GetDistrictsRSV22.php',
        'App\models\hotelAPI\Commons\getDistrictsV22' => __DIR__ .'/getDistrictsV22.php',
        'App\models\hotelAPI\Commons\getDistrictsV22Response' => __DIR__ .'/getDistrictsV22Response.php',
        'App\models\hotelAPI\Commons\getErrataTypes' => __DIR__ .'/getErrataTypes.php',
        'App\models\hotelAPI\Commons\GetErrataTypesRQ' => __DIR__ .'/GetErrataTypesRQ.php',
        'App\models\hotelAPI\Commons\GetErrataTypesRQV22' => __DIR__ .'/GetErrataTypesRQV22.php',
        'App\models\hotelAPI\Commons\getErrataTypesResponse' => __DIR__ .'/getErrataTypesResponse.php',
        'App\models\hotelAPI\Commons\GetErrataTypesRS' => __DIR__ .'/GetErrataTypesRS.php',
        'App\models\hotelAPI\Commons\ErrataTypeRS' => __DIR__ .'/ErrataTypeRS.php',
        'App\models\hotelAPI\Commons\GetErrataTypesRSV22' => __DIR__ .'/GetErrataTypesRSV22.php',
        'App\models\hotelAPI\Commons\getErrataTypesV22' => __DIR__ .'/getErrataTypesV22.php',
        'App\models\hotelAPI\Commons\getErrataTypesV22Response' => __DIR__ .'/getErrataTypesV22Response.php',
        'App\models\hotelAPI\Commons\getGeographicalMap' => __DIR__ .'/getGeographicalMap.php',
        'App\models\hotelAPI\Commons\GetGeographicalMapRQ' => __DIR__ .'/GetGeographicalMapRQ.php',
        'App\models\hotelAPI\Commons\GetGeographicalMapRQV22' => __DIR__ .'/GetGeographicalMapRQV22.php',
        'App\models\hotelAPI\Commons\getGeographicalMapResponse' => __DIR__ .'/getGeographicalMapResponse.php',
        'App\models\hotelAPI\Commons\GetGeographicalMapRS' => __DIR__ .'/GetGeographicalMapRS.php',
        'App\models\hotelAPI\Commons\Continent' => __DIR__ .'/Continent.php',
        'App\models\hotelAPI\Commons\Country' => __DIR__ .'/Country.php',
        'App\models\hotelAPI\Commons\State' => __DIR__ .'/State.php',
        'App\models\hotelAPI\Commons\GetGeographicalMapRSV22' => __DIR__ .'/GetGeographicalMapRSV22.php',
        'App\models\hotelAPI\Commons\getGeographicalMapV22' => __DIR__ .'/getGeographicalMapV22.php',
        'App\models\hotelAPI\Commons\getGeographicalMapV22Response' => __DIR__ .'/getGeographicalMapV22Response.php',
        'App\models\hotelAPI\Commons\getProduct' => __DIR__ .'/getProduct.php',
        'App\models\hotelAPI\Commons\GetProductRQ' => __DIR__ .'/GetProductRQ.php',
        'App\models\hotelAPI\Commons\getProductResponse' => __DIR__ .'/getProductResponse.php',
        'App\models\hotelAPI\Commons\GetProductRS' => __DIR__ .'/GetProductRS.php',
        'App\models\hotelAPI\Commons\Product' => __DIR__ .'/Product.php',
        'App\models\hotelAPI\Commons\getRatesV22' => __DIR__ .'/getRatesV22.php',
        'App\models\hotelAPI\Commons\RatesRQV22' => __DIR__ .'/RatesRQV22.php',
        'App\models\hotelAPI\Commons\getRatesV22Response' => __DIR__ .'/getRatesV22Response.php',
        'App\models\hotelAPI\Commons\RatesRSV22' => __DIR__ .'/RatesRSV22.php',
        'App\models\hotelAPI\Commons\RateRS' => __DIR__ .'/RateRS.php',
        'App\models\hotelAPI\Commons\getSections' => __DIR__ .'/getSections.php',
        'App\models\hotelAPI\Commons\GetSectionsRQ' => __DIR__ .'/GetSectionsRQ.php',
        'App\models\hotelAPI\Commons\getSectionsResponse' => __DIR__ .'/getSectionsResponse.php',
        'App\models\hotelAPI\Commons\GetSectionsRS' => __DIR__ .'/GetSectionsRS.php',
        'App\models\hotelAPI\Commons\getServices' => __DIR__ .'/getServices.php',
        'App\models\hotelAPI\Commons\GetServicesRQ' => __DIR__ .'/GetServicesRQ.php',
        'App\models\hotelAPI\Commons\getServicesResponse' => __DIR__ .'/getServicesResponse.php',
        'App\models\hotelAPI\Commons\GetServicesRS' => __DIR__ .'/GetServicesRS.php',
        'App\models\hotelAPI\Commons\Service' => __DIR__ .'/Service.php',
        'App\models\hotelAPI\Commons\getVehiclesTypes' => __DIR__ .'/getVehiclesTypes.php',
        'App\models\hotelAPI\Commons\GetVehiclesRQ' => __DIR__ .'/GetVehiclesRQ.php',
        'App\models\hotelAPI\Commons\getVehiclesTypesResponse' => __DIR__ .'/getVehiclesTypesResponse.php',
        'App\models\hotelAPI\Commons\GetVehiclesRS' => __DIR__ .'/GetVehiclesRS.php',
        'App\models\hotelAPI\Commons\VehiclesTypes' => __DIR__ .'/VehiclesTypes.php',
        'App\models\hotelAPI\Commons\getZones' => __DIR__ .'/getZones.php',
        'App\models\hotelAPI\Commons\GetZonesRQ' => __DIR__ .'/GetZonesRQ.php',
        'App\models\hotelAPI\Commons\getZonesResponse' => __DIR__ .'/getZonesResponse.php',
        'App\models\hotelAPI\Commons\GetZonesRS' => __DIR__ .'/GetZonesRS.php',
        'App\models\hotelAPI\Commons\ping' => __DIR__ .'/ping.php',
        'App\models\hotelAPI\Commons\PingRQ' => __DIR__ .'/PingRQ.php',
        'App\models\hotelAPI\Commons\PingRQV21' => __DIR__ .'/PingRQV21.php',
        'App\models\hotelAPI\Commons\pingResponse' => __DIR__ .'/pingResponse.php',
        'App\models\hotelAPI\Commons\PingRS' => __DIR__ .'/PingRS.php',
        'App\models\hotelAPI\Commons\PingRSV21' => __DIR__ .'/PingRSV21.php',
        'App\models\hotelAPI\Commons\pingDispo' => __DIR__ .'/pingDispo.php',
        'App\models\hotelAPI\Commons\AvailableHotelsCompatibilityQueryRQ' => __DIR__ .'/AvailableHotelsCompatibilityQueryRQ.php',
        'App\models\hotelAPI\Commons\pingDispoResponse' => __DIR__ .'/pingDispoResponse.php',
        'App\models\hotelAPI\Commons\pingV21' => __DIR__ .'/pingV21.php',
        'App\models\hotelAPI\Commons\pingV21Response' => __DIR__ .'/pingV21Response.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1bc37997af9c3d9292b1391a6c03ea2b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
