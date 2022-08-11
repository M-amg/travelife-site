<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV17Response
{

    /**
     * @var AvailabilityMultiRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRSV17 $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV17Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
