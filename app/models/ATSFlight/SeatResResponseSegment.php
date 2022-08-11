<?php

namespace App\models\ATSFlight;

class SeatResResponseSegment
{

    /**
     * @var string $OriginalSegmentNumber
     */
    protected $OriginalSegmentNumber = null;

    /**
     * @var ArrayOfSeatResSeatStatus $SeatStatus
     */
    protected $SeatStatus = null;

    
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
     * @return \App\models\ATSFlight\SeatResResponseSegment
     */
    public function setOriginalSegmentNumber($OriginalSegmentNumber)
    {
      $this->OriginalSegmentNumber = $OriginalSegmentNumber;
      return $this;
    }

    /**
     * @return ArrayOfSeatResSeatStatus
     */
    public function getSeatStatus()
    {
      return $this->SeatStatus;
    }

    /**
     * @param ArrayOfSeatResSeatStatus $SeatStatus
     * @return \App\models\ATSFlight\SeatResResponseSegment
     */
    public function setSeatStatus($SeatStatus)
    {
      $this->SeatStatus = $SeatStatus;
      return $this;
    }

}
