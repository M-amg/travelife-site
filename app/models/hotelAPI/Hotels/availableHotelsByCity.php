<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByCity
{

    /**
     * @var AvailableHotelsByCityRQ $AvailableHotelsByCityRQ_1
     */
    protected $AvailableHotelsByCityRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsByCityRQ
     */
    public function getAvailableHotelsByCityRQ_1()
    {
      return $this->AvailableHotelsByCityRQ_1;
    }

    /**
     * @param AvailableHotelsByCityRQ $AvailableHotelsByCityRQ_1
     * @return \App\models\hotelAPI\Hotels\availableHotelsByCity
     */
    public function setAvailableHotelsByCityRQ_1($AvailableHotelsByCityRQ_1)
    {
      $this->AvailableHotelsByCityRQ_1 = $AvailableHotelsByCityRQ_1;
      return $this;
    }

}
