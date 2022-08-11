<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByMultiQueryV14
{

    /**
     * @var AvailableHotelsByMultiQueryRQ $AvailableHotelsByMultiQueryRQ_1
     */
    protected $AvailableHotelsByMultiQueryRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsByMultiQueryRQ
     */
    public function getAvailableHotelsByMultiQueryRQ_1()
    {
      return $this->AvailableHotelsByMultiQueryRQ_1;
    }

    /**
     * @param AvailableHotelsByMultiQueryRQ $AvailableHotelsByMultiQueryRQ_1
     * @return \App\models\hotelAPI\Hotels\availableHotelsByMultiQueryV14
     */
    public function setAvailableHotelsByMultiQueryRQ_1($AvailableHotelsByMultiQueryRQ_1)
    {
      $this->AvailableHotelsByMultiQueryRQ_1 = $AvailableHotelsByMultiQueryRQ_1;
      return $this;
    }

}
