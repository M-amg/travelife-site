<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByAirportWithErratas
{

    /**
     * @var AvailableHotelsByAirportRQ $AvailableHotelsByAirportRQ_1
     */
    protected $AvailableHotelsByAirportRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsByAirportRQ
     */
    public function getAvailableHotelsByAirportRQ_1()
    {
      return $this->AvailableHotelsByAirportRQ_1;
    }

    /**
     * @param AvailableHotelsByAirportRQ $AvailableHotelsByAirportRQ_1
     * @return \App\models\hotelAPI\Hotels\availableHotelsByAirportWithErratas
     */
    public function setAvailableHotelsByAirportRQ_1($AvailableHotelsByAirportRQ_1)
    {
      $this->AvailableHotelsByAirportRQ_1 = $AvailableHotelsByAirportRQ_1;
      return $this;
    }

}
