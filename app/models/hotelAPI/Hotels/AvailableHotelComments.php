<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelComments
{

    /**
     * @var boolean $moreCombinations
     */
    protected $moreCombinations = null;

    /**
     * @var EstablishmentComments $establishment
     */
    protected $establishment = null;

    /**
     * @var RoomCombinationOffers[] $roomCombinations
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelComments
     */
    public function setMoreCombinations($moreCombinations)
    {
      $this->moreCombinations = $moreCombinations;
      return $this;
    }

    /**
     * @return EstablishmentComments
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param EstablishmentComments $establishment
     * @return \App\models\hotelAPI\Hotels\AvailableHotelComments
     */
    public function setEstablishment($establishment)
    {
      $this->establishment = $establishment;
      return $this;
    }

    /**
     * @return RoomCombinationOffers[]
     */
    public function getRoomCombinations()
    {
      return $this->roomCombinations;
    }

    /**
     * @param RoomCombinationOffers[] $roomCombinations
     * @return \App\models\hotelAPI\Hotels\AvailableHotelComments
     */
    public function setRoomCombinations(array $roomCombinations = null)
    {
      $this->roomCombinations = $roomCombinations;
      return $this;
    }

}
