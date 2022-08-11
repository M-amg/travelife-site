<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByCityResponse
{

    /**
     * @var AvailabilityRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityRS $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByCityResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
