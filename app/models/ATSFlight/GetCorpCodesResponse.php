<?php

namespace App\models\ATSFlight;

class GetCorpCodesResponse
{

    /**
     * @var CorporateResponseData $GetCorpCodesResult
     */
    protected $GetCorpCodesResult = null;

    /**
     * @param CorporateResponseData $GetCorpCodesResult
     */
    public function __construct($GetCorpCodesResult)
    {
      $this->GetCorpCodesResult = $GetCorpCodesResult;
    }

    /**
     * @return CorporateResponseData
     */
    public function getGetCorpCodesResult()
    {
      return $this->GetCorpCodesResult;
    }

    /**
     * @param CorporateResponseData $GetCorpCodesResult
     * @return \App\models\ATSFlight\GetCorpCodesResponse
     */
    public function setGetCorpCodesResult($GetCorpCodesResult)
    {
      $this->GetCorpCodesResult = $GetCorpCodesResult;
      return $this;
    }

}
