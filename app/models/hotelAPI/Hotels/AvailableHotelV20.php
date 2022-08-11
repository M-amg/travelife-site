<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelV20
{

    /**
     * @var EstablishmentV20 $establishment
     */
    protected $establishment = null;

    /**
     * @var boolean $moreCombinations
     */
    protected $moreCombinations = null;

    /**
     * @var RoomCombinationRSV20[] $roomCombinations
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
     * @return EstablishmentV20
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param EstablishmentV20 $establishment
     * @return \App\models\hotelAPI\Hotels\AvailableHotelV20
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelV20
     */
    public function setMoreCombinations($moreCombinations)
    {
      $this->moreCombinations = $moreCombinations;
      return $this;
    }

    /**
     * @return RoomCombinationRSV20[]
     */
    public function getRoomCombinations()
    {
      return $this->roomCombinations;
    }

    /**
     * @param RoomCombinationRSV20[] $roomCombinations
     * @return \App\models\hotelAPI\Hotels\AvailableHotelV20
     */
    public function setRoomCombinations(array $roomCombinations = null)
    {
      $this->roomCombinations = $roomCombinations;
      return $this;
    }

}
