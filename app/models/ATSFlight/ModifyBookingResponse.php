<?php

namespace App\models\ATSFlight;

class ModifyBookingResponse
{

    /**
     * @var ModifyBookingResponseData $ModifyBookingResult
     */
    protected $ModifyBookingResult = null;

    /**
     * @param ModifyBookingResponseData $ModifyBookingResult
     */
    public function __construct($ModifyBookingResult)
    {
      $this->ModifyBookingResult = $ModifyBookingResult;
    }

    /**
     * @return ModifyBookingResponseData
     */
    public function getModifyBookingResult()
    {
      return $this->ModifyBookingResult;
    }

    /**
     * @param ModifyBookingResponseData $ModifyBookingResult
     * @return \App\models\ATSFlight\ModifyBookingResponse
     */
    public function setModifyBookingResult($ModifyBookingResult)
    {
      $this->ModifyBookingResult = $ModifyBookingResult;
      return $this;
    }

}
