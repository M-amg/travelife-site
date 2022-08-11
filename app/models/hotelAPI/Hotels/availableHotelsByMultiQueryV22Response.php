<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV22Response
{

    /**
     * @var AvailabilityMultiRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRSV22 $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
