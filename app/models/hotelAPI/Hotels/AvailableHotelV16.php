<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelV16
{

    /**
     * @var EstablishmentV16 $establishment
     */
    protected $establishment = null;

    /**
     * @var boolean $moreCombinations
     */
    protected $moreCombinations = null;

    /**
     * @var RoomCombinationSaleOffers[] $roomCombinations
     */
    protected $roomCombinations = null;

    /**
     * @param boolean $moreCombinations
     */
    public function __construct($moreCombinations)
    {
      $this->moreCombinations = $moreCombinations;
    }

    /**
     * @return EstablishmentV16
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param EstablishmentV16 $establishment
     * @return \App\models\hotelAPI\Hotels\AvailableHotelV16
     */
    public function setEstablishment($establishment)
    {
      $this->establishment = $establishment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreCombinations()
    {
      return $this->moreCombinations;
    }

    /**
     * @param boolean $moreCombinations
     * @return \App\models\hotelAPI\Hotels\AvailableHotelV16
     */
    public function setMoreCombinations($moreCombinations)
    {
      $this->moreCombinations = $moreCombinations;
      return $this;
    }

    /**
     * @return RoomCombinationSaleOffers[]
     */
    public function getRoomCombinations()
    {
      return $this->roomCombinations;
    }

    /**
     * @param RoomCombinationSaleOffers[] $roomCombinations
     * @return \App\models\hotelAPI\Hotels\AvailableHotelV16
     */
    public function setRoomCombinations(array $roomCombinations = null)
    {
      $this->roomCombinations = $roomCombinations;
      return $this;
    }

}
