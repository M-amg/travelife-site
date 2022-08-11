<?php

namespace App\models\ATSFlight;

class CancelBookingResponse
{

    /**
     * @var CancelResponseData $CancelBookingResult
     */
    protected $CancelBookingResult = null;

    /**
     * @param CancelResponseData $CancelBookingResult
     */
    public function __construct($CancelBookingResult)
    {
      $this->CancelBookingResult = $CancelBookingResult;
    }

    /**
     * @return CancelResponseData
     */
    public function getCancelBookingResult()
    {
      return $this->CancelBookingResult;
    }

    /**
     * @param CancelResponseData $CancelBookingResult
     * @return \App\models\ATSFlight\CancelBookingResponse
     */
    public function setCancelBookingResult($CancelBookingResult)
    {
      $this->CancelBookingResult = $CancelBookingResult;
      return $this;
    }

}
