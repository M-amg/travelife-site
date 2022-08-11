<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryResponse
{

    /**
     * @var AvailabilityMultiRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRS $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
