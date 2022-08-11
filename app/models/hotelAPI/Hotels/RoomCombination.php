<?php

namespace App\models\hotelAPI\Hotels;

class RoomCombination
{

    /**
     * @var Room[] $rooms
     */
    protected $rooms = null;

    /**
     * @var Price[] $prices
     */
    protected $prices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Room[]
     */
    public function getRooms()
    {
      return $this->rooms;
    }

    /**
     * @param Room[] $rooms
     * @return \App\models\hotelAPI\Hotels\RoomCombination
     */
    public function setRooms(array $rooms = null)
    {
      $this->rooms = $rooms;
      return $this;
    }

    /**
     * @return Price[]
     */
    public function getPrices()
    {
      return $this->prices;
    }

    /**
     * @param Price[] $prices
     * @return \App\models\hotelAPI\Hotels\RoomCombination
     */
    public function setPrices(array $prices = null)
    {
      $this->prices = $prices;
      return $this;
    }

}
