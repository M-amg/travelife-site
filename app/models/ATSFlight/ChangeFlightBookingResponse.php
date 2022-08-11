<?php

namespace App\models\ATSFlight;

class ChangeFlightBookingResponse
{

    /**
     * @var BookResponseData $ChangeFlightBookingResult
     */
    protected $ChangeFlightBookingResult = null;

    /**
     * @param BookResponseData $ChangeFlightBookingResult
     */
    public function __construct($ChangeFlightBookingResult)
    {
      $this->ChangeFlightBookingResult = $ChangeFlightBookingResult;
    }

    /**
     * @return BookResponseData
     */
    public function getChangeFlightBookingResult()
    {
      return $this->ChangeFlightBookingResult;
    }

    /**
     * @param BookResponseData $ChangeFlightBookingResult
     * @return \App\models\ATSFlight\ChangeFlightBookingResponse
     */
    public function setChangeFlightBookingResult($ChangeFlightBookingResult)
    {
      $this->ChangeFlightBookingResult = $ChangeFlightBookingResult;
      return $this;
    }

}
