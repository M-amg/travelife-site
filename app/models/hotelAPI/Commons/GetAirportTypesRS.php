<?php

namespace App\models\hotelAPI\Commons;

class GetAirportTypesRS
{

    /**
     * @var AirportType[] $airportTypes
     */
    protected $airportTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AirportType[]
     */
    public function getAirportTypes()
    {
      return $this->airportTypes;
    }

    /**
     * @param AirportType[] $airportTypes
     * @return \App\models\hotelAPI\Commons\GetAirportTypesRS
     */
    public function setAirportTypes(array $airportTypes = null)
    {
      $this->airportTypes = $airportTypes;
      return $this;
    }

}
