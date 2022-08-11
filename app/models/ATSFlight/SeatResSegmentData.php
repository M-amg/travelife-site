<?php

namespace App\models\ATSFlight;

class SeatResSegmentData
{

    /**
     * @var string $OriginalSegmentNumber
     */
    protected $OriginalSegmentNumber = null;

    /**
     * @var ArrayOfSeatResSeatData $Seats
     */
    protected $Seats = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOriginalSegmentNumber()
    {
      return $this->OriginalSegmentNumber;
    }

    /**
     * @param string $OriginalSegmentNumber
     * @return \App\models\ATSFlight\SeatResSegmentData
     */
    public function setOriginalSegmentNumber($OriginalSegmentNumber)
    {
      $this->OriginalSegmentNumber = $OriginalSegmentNumber;
      return $this;
    }

    /**
     * @return ArrayOfSeatResSeatData
     */
    public function getSeats()
    {
      return $this->Seats;
    }

    /**
     * @param ArrayOfSeatResSeatData $Seats
     * @return \App\models\ATSFlight\SeatResSegmentData
     */
    public function setSeats($Seats)
    {
      $this->Seats = $Seats;
      return $this;
    }

}
