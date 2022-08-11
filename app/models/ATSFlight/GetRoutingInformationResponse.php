<?php

namespace App\models\ATSFlight;

class GetRoutingInformationResponse
{

    /**
     * @var RoutingResponseData $GetRoutingInformationResult
     */
    protected $GetRoutingInformationResult = null;

    /**
     * @param RoutingResponseData $GetRoutingInformationResult
     */
    public function __construct($GetRoutingInformationResult)
    {
      $this->GetRoutingInformationResult = $GetRoutingInformationResult;
    }

    /**
     * @return RoutingResponseData
     */
    public function getGetRoutingInformationResult()
    {
      return $this->GetRoutingInformationResult;
    }

    /**
     * @param RoutingResponseData $GetRoutingInformationResult
     * @return \App\models\ATSFlight\GetRoutingInformationResponse
     */
    public function setGetRoutingInformationResult($GetRoutingInformationResult)
    {
      $this->GetRoutingInformationResult = $GetRoutingInformationResult;
      return $this;
    }

}
