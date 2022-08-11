<?php

namespace App\models\hotelAPI\Hotels;

class RoomCombinationRSV20
{

    /**
     * @var PriceRSV20[] $prices
     */
    protected $prices = null;

    /**
     * @var RoomRSV20[] $rooms
     */
    protected $rooms = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceRSV20[]
     */
    public function getPrices()
    {
      return $this->prices;
    }

    /**
     * @param PriceRSV20[] $prices
     * @return \App\models\hotelAPI\Hotels\RoomCombinationRSV20
     */
    public function setPrices(array $prices = null)
    {
      $this->prices = $prices;
      return $this;
    }

    /**
     * @return RoomRSV20[]
     */
    public function getRooms()
    {
      return $this->rooms;
    }

    /**
     * @param RoomRSV20[] $rooms
     * @return \App\models\hotelAPI\Hotels\RoomCombinationRSV20
     */
    public function setRooms(array $rooms = null)
    {
      $this->rooms = $rooms;
      return $this;
    }

}
