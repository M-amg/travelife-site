<?php

namespace App\models\ATSFlight;

class SeatReservationResponse
{

    /**
     * @var SeatResResponseData $SeatReservationResult
     */
    protected $SeatReservationResult = null;

    /**
     * @param SeatResResponseData $SeatReservationResult
     */
    public function __construct($SeatReservationResult)
    {
      $this->SeatReservationResult = $SeatReservationResult;
    }

    /**
     * @return SeatResResponseData
     */
    public function getSeatReservationResult()
    {
      return $this->SeatReservationResult;
    }

    /**
     * @param SeatResResponseData $SeatReservationResult
     * @return \App\models\ATSFlight\SeatReservationResponse
     */
    public function setSeatReservationResult($SeatReservationResult)
    {
      $this->SeatReservationResult = $SeatReservationResult;
      return $this;
    }

}
