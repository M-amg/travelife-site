<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV14Response
{

    /**
     * @var AvailabilityMultiRSV13 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRSV13
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRSV13 $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV14Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
