<?php

namespace App\models\ATSFlight;

class GetFareDisplayResponse
{

    /**
     * @var DisplayResponseData $GetFareDisplayResult
     */
    protected $GetFareDisplayResult = null;

    /**
     * @param DisplayResponseData $GetFareDisplayResult
     */
    public function __construct($GetFareDisplayResult)
    {
      $this->GetFareDisplayResult = $GetFareDisplayResult;
    }

    /**
     * @return DisplayResponseData
     */
    public function getGetFareDisplayResult()
    {
      return $this->GetFareDisplayResult;
    }

    /**
     * @param DisplayResponseData $GetFareDisplayResult
     * @return \App\models\ATSFlight\GetFareDisplayResponse
     */
    public function setGetFareDisplayResult($GetFareDisplayResult)
    {
      $this->GetFareDisplayResult = $GetFareDisplayResult;
      return $this;
    }

}
