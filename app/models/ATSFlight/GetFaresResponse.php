<?php

namespace App\models\ATSFlight;

class GetFaresResponse
{

    /**
     * @var FareResponseData $GetFaresResult
     */
    protected $GetFaresResult = null;

    /**
     * @param FareResponseData $GetFaresResult
     */
    public function __construct($GetFaresResult)
    {
      $this->GetFaresResult = $GetFaresResult;
    }

    /**
     * @return FareResponseData
     */
    public function getGetFaresResult()
    {
      return $this->GetFaresResult;
    }

    /**
     * @param FareResponseData $GetFaresResult
     * @return \App\models\ATSFlight\GetFaresResponse
     */
    public function setGetFaresResult($GetFaresResult)
    {
      $this->GetFaresResult = $GetFaresResult;
      return $this;
    }

}
