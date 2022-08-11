<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelsCompatibilityQueryRS
{

    /**
     * @var AvailableHotelCompatibility[] $availableHotels
     */
    protected $availableHotels = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelCompatibility[]
     */
    public function getAvailableHotels()
    {
      return $this->availableHotels;
    }

    /**
     * @param AvailableHotelCompatibility[] $availableHotels
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRS
     */
    public function setAvailableHotels(array $availableHotels = null)
    {
      $this->availableHotels = $availableHotels;
      return $this;
    }

}
