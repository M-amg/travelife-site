<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotel
{

    /**
     * @var boolean $moreCombinations
     */
    protected $moreCombinations = null;

    /**
     * @var Establishment $establishment
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotel
     */
    public function setMoreCombinations($moreCombinations)
    {
      $this->moreCombinations = $moreCombinations;
      return $this;
    }

    /**
     * @return Establishment
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param Establishment $establishment
     * @return \App\models\hotelAPI\Hotels\AvailableHotel
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotel
     */
    public function setRoomCombinations(array $roomCombinations = null)
    {
      $this->roomCombinations = $roomCombinations;
      return $this;
    }

}
