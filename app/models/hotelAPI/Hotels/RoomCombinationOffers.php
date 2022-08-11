<?php

namespace App\models\hotelAPI\Hotels;

class RoomCombinationOffers
{

    /**
     * @var Room[] $rooms
     */
    protected $rooms = null;

    /**
     * @var PriceExtends[] $prices
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
     * @return \App\models\hotelAPI\Hotels\RoomCombinationOffers
     */
    public function setRooms(array $rooms = null)
    {
      $this->rooms = $rooms;
      return $this;
    }

    /**
     * @return PriceExtends[]
     */
    public function getPrices()
    {
      return $this->prices;
    }

    /**
     * @param PriceExtends[] $prices
     * @return \App\models\hotelAPI\Hotels\RoomCombinationOffers
     */
    public function setPrices(array $prices = null)
    {
      $this->prices = $prices;
      return $this;
    }

}
