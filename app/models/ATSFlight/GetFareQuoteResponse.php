<?php

namespace App\models\ATSFlight;

class GetFareQuoteResponse
{

    /**
     * @var QuoteResponseData $GetFareQuoteResult
     */
    protected $GetFareQuoteResult = null;

    /**
     * @param QuoteResponseData $GetFareQuoteResult
     */
    public function __construct($GetFareQuoteResult)
    {
      $this->GetFareQuoteResult = $GetFareQuoteResult;
    }

    /**
     * @return QuoteResponseData
     */
    public function getGetFareQuoteResult()
    {
      return $this->GetFareQuoteResult;
    }

    /**
     * @param QuoteResponseData $GetFareQuoteResult
     * @return \App\models\ATSFlight\GetFareQuoteResponse
     */
    public function setGetFareQuoteResult($GetFareQuoteResult)
    {
      $this->GetFareQuoteResult = $GetFareQuoteResult;
      return $this;
    }

}
