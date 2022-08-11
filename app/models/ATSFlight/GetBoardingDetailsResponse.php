<?php

namespace App\models\ATSFlight;

class GetBoardingDetailsResponse
{

    /**
     * @var BoardingResponseData $GetBoardingDetailsResult
     */
    protected $GetBoardingDetailsResult = null;

    /**
     * @param BoardingResponseData $GetBoardingDetailsResult
     */
    public function __construct($GetBoardingDetailsResult)
    {
      $this->GetBoardingDetailsResult = $GetBoardingDetailsResult;
    }

    /**
     * @return BoardingResponseData
     */
    public function getGetBoardingDetailsResult()
    {
      return $this->GetBoardingDetailsResult;
    }

    /**
     * @param BoardingResponseData $GetBoardingDetailsResult
     * @return \App\models\ATSFlight\GetBoardingDetailsResponse
     */
    public function setGetBoardingDetailsResult($GetBoardingDetailsResult)
    {
      $this->GetBoardingDetailsResult = $GetBoardingDetailsResult;
      return $this;
    }

}
