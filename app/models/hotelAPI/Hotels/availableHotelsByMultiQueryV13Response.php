<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV13Response
{

    /**
     * @var AvailabilityMultiRSV12 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRSV12
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRSV12 $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV13Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
