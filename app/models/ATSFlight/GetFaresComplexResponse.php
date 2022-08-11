<?php

namespace App\models\ATSFlight;

class GetFaresComplexResponse
{

    /**
     * @var FareComplexResponseData $GetFaresComplexResult
     */
    protected $GetFaresComplexResult = null;

    /**
     * @param FareComplexResponseData $GetFaresComplexResult
     */
    public function __construct($GetFaresComplexResult)
    {
      $this->GetFaresComplexResult = $GetFaresComplexResult;
    }

    /**
     * @return FareComplexResponseData
     */
    public function getGetFaresComplexResult()
    {
      return $this->GetFaresComplexResult;
    }

    /**
     * @param FareComplexResponseData $GetFaresComplexResult
     * @return \App\models\ATSFlight\GetFaresComplexResponse
     */
    public function setGetFaresComplexResult($GetFaresComplexResult)
    {
      $this->GetFaresComplexResult = $GetFaresComplexResult;
      return $this;
    }

}
