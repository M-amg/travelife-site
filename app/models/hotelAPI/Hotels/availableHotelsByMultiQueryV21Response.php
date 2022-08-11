<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV21Response
{

    /**
     * @var AvailabilityMultiRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityMultiRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityMultiRSV20 $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV21Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
