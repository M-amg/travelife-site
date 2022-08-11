<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByCityWithErratasResponse
{

    /**
     * @var AvailabilityWithErratasRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityWithErratasRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityWithErratasRS $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByCityWithErratasResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
