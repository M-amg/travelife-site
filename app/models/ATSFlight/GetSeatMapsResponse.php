<?php

namespace App\models\ATSFlight;

class GetSeatMapsResponse
{

    /**
     * @var SeatMapResponseData $GetSeatMapsResult
     */
    protected $GetSeatMapsResult = null;

    /**
     * @param SeatMapResponseData $GetSeatMapsResult
     */
    public function __construct($GetSeatMapsResult)
    {
      $this->GetSeatMapsResult = $GetSeatMapsResult;
    }

    /**
     * @return SeatMapResponseData
     */
    public function getGetSeatMapsResult()
    {
      return $this->GetSeatMapsResult;
    }

    /**
     * @param SeatMapResponseData $GetSeatMapsResult
     * @return \App\models\ATSFlight\GetSeatMapsResponse
     */
    public function setGetSeatMapsResult($GetSeatMapsResult)
    {
      $this->GetSeatMapsResult = $GetSeatMapsResult;
      return $this;
    }

}
