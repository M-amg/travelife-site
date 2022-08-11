<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV12Response
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
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV12Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
