<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV17
{

    /**
     * @var AvailableHotelsByMultiQueryRQV16 $AvailableHotelsByMultiQueryRQV16_1
     */
    protected $AvailableHotelsByMultiQueryRQV16_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsByMultiQueryRQV16
     */
    public function getAvailableHotelsByMultiQueryRQV16_1()
    {
      return $this->AvailableHotelsByMultiQueryRQV16_1;
    }

    /**
     * @param AvailableHotelsByMultiQueryRQV16 $AvailableHotelsByMultiQueryRQV16_1
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV17
     */
    public function setAvailableHotelsByMultiQueryRQV16_1($AvailableHotelsByMultiQueryRQV16_1)
    {
      $this->AvailableHotelsByMultiQueryRQV16_1 = $AvailableHotelsByMultiQueryRQV16_1;
      return $this;
    }

}
