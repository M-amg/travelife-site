<?php

namespace App\models\hotelAPI\Hotels;

class AirportLocation
{

    /**
     * @var string $airportCode
     */
    protected $airportCode = null;

    /**
     * @var string $airportType
     */
    protected $airportType = null;

    /**
     * @var string $zoneId
     */
    protected $zoneId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAirportCode()
    {
      return $this->airportCode;
    }

    /**
     * @param string $airportCode
     * @return \App\models\hotelAPI\Hotels\AirportLocation
     */
    public function setAirportCode($airportCode)
    {
      $this->airportCode = $airportCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirportType()
    {
      return $this->airportType;
    }

    /**
     * @param string $airportType
     * @return \App\models\hotelAPI\Hotels\AirportLocation
     */
    public function setAirportType($airportType)
    {
      $this->airportType = $airportType;
      return $this;
    }

    /**
     * @return string
     */
    public function getZoneId()
    {
      return $this->zoneId;
    }

    /**
     * @param string $zoneId
     * @return \App\models\hotelAPI\Hotels\AirportLocation
     */
    public function setZoneId($zoneId)
    {
      $this->zoneId = $zoneId;
      return $this;
    }

}
