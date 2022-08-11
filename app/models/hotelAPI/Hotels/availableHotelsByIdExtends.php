<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByIdExtends
{

    /**
     * @var AvailableHotelsByIdRQ $AvailableHotelsByIdRQ_1
     */
    protected $AvailableHotelsByIdRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsByIdRQ
     */
    public function getAvailableHotelsByIdRQ_1()
    {
      return $this->AvailableHotelsByIdRQ_1;
    }

    /**
     * @param AvailableHotelsByIdRQ $AvailableHotelsByIdRQ_1
     * @return \App\models\hotelAPI\Hotels\availableHotelsByIdExtends
     */
    public function setAvailableHotelsByIdRQ_1($AvailableHotelsByIdRQ_1)
    {
      $this->AvailableHotelsByIdRQ_1 = $AvailableHotelsByIdRQ_1;
      return $this;
    }

}
