<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV15Response
{

    /**
     * @var AvailabilityMultiRSV15 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRSV15
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRSV15 $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV15Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
