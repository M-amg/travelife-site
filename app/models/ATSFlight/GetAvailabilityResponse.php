<?php

namespace App\models\ATSFlight;

class GetAvailabilityResponse
{

    /**
     * @var AvailabilityResponseData $GetAvailabilityResult
     */
    protected $GetAvailabilityResult = null;

    /**
     * @param AvailabilityResponseData $GetAvailabilityResult
     */
    public function __construct($GetAvailabilityResult)
    {
      $this->GetAvailabilityResult = $GetAvailabilityResult;
    }

    /**
     * @return AvailabilityResponseData
     */
    public function getGetAvailabilityResult()
    {
      return $this->GetAvailabilityResult;
    }

    /**
     * @param AvailabilityResponseData $GetAvailabilityResult
     * @return \App\models\ATSFlight\GetAvailabilityResponse
     */
    public function setGetAvailabilityResult($GetAvailabilityResult)
    {
      $this->GetAvailabilityResult = $GetAvailabilityResult;
      return $this;
    }

}
