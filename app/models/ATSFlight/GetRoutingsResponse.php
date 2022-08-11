<?php

namespace App\models\ATSFlight;

class GetRoutingsResponse
{

    /**
     * @var RoutingsResponseData $GetRoutingsResult
     */
    protected $GetRoutingsResult = null;

    /**
     * @param RoutingsResponseData $GetRoutingsResult
     */
    public function __construct($GetRoutingsResult)
    {
      $this->GetRoutingsResult = $GetRoutingsResult;
    }

    /**
     * @return RoutingsResponseData
     */
    public function getGetRoutingsResult()
    {
      return $this->GetRoutingsResult;
    }

    /**
     * @param RoutingsResponseData $GetRoutingsResult
     * @return \App\models\ATSFlight\GetRoutingsResponse
     */
    public function setGetRoutingsResult($GetRoutingsResult)
    {
      $this->GetRoutingsResult = $GetRoutingsResult;
      return $this;
    }

}
