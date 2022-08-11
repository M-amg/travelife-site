<?php

namespace App\models\hotelAPI\Hotels;

class RoomCombinationSaleOffers
{

    /**
     * @var Room[] $rooms
     */
    protected $rooms = null;

    /**
     * @var PriceSaleExtends[] $prices
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
     * @return \App\models\hotelAPI\Hotels\RoomCombinationSaleOffers
     */
    public function setRooms(array $rooms = null)
    {
      $this->rooms = $rooms;
      return $this;
    }

    /**
     * @return PriceSaleExtends[]
     */
    public function getPrices()
    {
      return $this->prices;
    }

    /**
     * @param PriceSaleExtends[] $prices
     * @return \App\models\hotelAPI\Hotels\RoomCombinationSaleOffers
     */
    public function setPrices(array $prices = null)
    {
      $this->prices = $prices;
      return $this;
    }

}
