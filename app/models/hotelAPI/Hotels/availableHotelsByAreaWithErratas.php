<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByAreaWithErratas
{

    /**
     * @var AvailableHotelsByAreaRQ $AvailableHotelsByAreaRQ_1
     */
    protected $AvailableHotelsByAreaRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsByAreaRQ
     */
    public function getAvailableHotelsByAreaRQ_1()
    {
      return $this->AvailableHotelsByAreaRQ_1;
    }

    /**
     * @param AvailableHotelsByAreaRQ $AvailableHotelsByAreaRQ_1
     * @return \App\models\hotelAPI\Hotels\availableHotelsByAreaWithErratas
     */
    public function setAvailableHotelsByAreaRQ_1($AvailableHotelsByAreaRQ_1)
    {
      $this->AvailableHotelsByAreaRQ_1 = $AvailableHotelsByAreaRQ_1;
      return $this;
    }

}
