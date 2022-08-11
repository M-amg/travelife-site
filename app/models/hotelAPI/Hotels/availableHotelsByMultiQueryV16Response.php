<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV16Response
{

    /**
     * @var AvailabilityMultiRSV16 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRSV16
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRSV16 $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV16Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
