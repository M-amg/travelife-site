<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelWithErratas
{

    /**
     * @var boolean $moreCombinations
     */
    protected $moreCombinations = null;

    /**
     * @var EstablishmentErratas $establishment
     */
    protected $establishment = null;

    /**
     * @var RoomCombination[] $roomCombinations
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
     * @return boolean
     */
    public function getMoreCombinations()
    {
      return $this->moreCombinations;
    }

    /**
     * @param boolean $moreCombinations
     * @return \App\models\hotelAPI\Hotels\AvailableHotelWithErratas
     */
    public function setMoreCombinations($moreCombinations)
    {
      $this->moreCombinations = $moreCombinations;
      return $this;
    }

    /**
     * @return EstablishmentErratas
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param EstablishmentErratas $establishment
     * @return \App\models\hotelAPI\Hotels\AvailableHotelWithErratas
     */
    public function setEstablishment($establishment)
    {
      $this->establishment = $establishment;
      return $this;
    }

    /**
     * @return RoomCombination[]
     */
    public function getRoomCombinations()
    {
      return $this->roomCombinations;
    }

    /**
     * @param RoomCombination[] $roomCombinations
     * @return \App\models\hotelAPI\Hotels\AvailableHotelWithErratas
     */
    public function setRoomCombinations(array $roomCombinations = null)
    {
      $this->roomCombinations = $roomCombinations;
      return $this;
    }

}
