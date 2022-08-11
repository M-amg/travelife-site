<?php

namespace App\models\ATSFlight;

class SeatRequestData
{

    /**
     * @var int $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var string $Row
     */
    protected $Row = null;

    /**
     * @var string $Seat
     */
    protected $Seat = null;

    /**
     * @var int $SegmentSelection
     */
    protected $SegmentSelection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param int $PassengerSelection
     * @return \App\models\ATSFlight\SeatRequestData
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return string
     */
    public function getRow()
    {
      return $this->Row;
    }

    /**
     * @param string $Row
     * @return \App\models\ATSFlight\SeatRequestData
     */
    public function setRow($Row)
    {
      $this->Row = $Row;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeat()
    {
      return $this->Seat;
    }

    /**
     * @param string $Seat
     * @return \App\models\ATSFlight\SeatRequestData
     */
    public function setSeat($Seat)
    {
      $this->Seat = $Seat;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentSelection()
    {
      return $this->SegmentSelection;
    }

    /**
     * @param int $SegmentSelection
     * @return \App\models\ATSFlight\SeatRequestData
     */
    public function setSegmentSelection($SegmentSelection)
    {
      $this->SegmentSelection = $SegmentSelection;
      return $this;
    }

}
