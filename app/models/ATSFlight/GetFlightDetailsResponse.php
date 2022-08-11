<?php

namespace App\models\ATSFlight;

class GetFlightDetailsResponse
{

    /**
     * @var DetailsResponseData $GetFlightDetailsResult
     */
    protected $GetFlightDetailsResult = null;

    /**
     * @param DetailsResponseData $GetFlightDetailsResult
     */
    public function __construct($GetFlightDetailsResult)
    {
      $this->GetFlightDetailsResult = $GetFlightDetailsResult;
    }

    /**
     * @return DetailsResponseData
     */
    public function getGetFlightDetailsResult()
    {
      return $this->GetFlightDetailsResult;
    }

    /**
     * @param DetailsResponseData $GetFlightDetailsResult
     * @return \App\models\ATSFlight\GetFlightDetailsResponse
     */
    public function setGetFlightDetailsResult($GetFlightDetailsResult)
    {
      $this->GetFlightDetailsResult = $GetFlightDetailsResult;
      return $this;
    }

}
