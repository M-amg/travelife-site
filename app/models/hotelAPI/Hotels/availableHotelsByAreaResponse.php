<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByAreaResponse
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
     * @return \App\models\hotelAPI\Hotels\availableHotelsByAreaResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
