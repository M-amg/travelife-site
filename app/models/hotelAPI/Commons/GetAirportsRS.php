<?php

namespace App\models\hotelAPI\Commons;

class GetAirportsRS
{

    /**
     * @var Airport[] $airports
     */
    protected $airports = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Airport[]
     */
    public function getAirports()
    {
      return $this->airports;
    }

    /**
     * @param Airport[] $airports
     * @return \App\models\hotelAPI\Commons\GetAirportsRS
     */
    public function setAirports(array $airports = null)
    {
      $this->airports = $airports;
      return $this;
    }

}
