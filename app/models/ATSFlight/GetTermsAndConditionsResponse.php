<?php

namespace App\models\ATSFlight;

class GetTermsAndConditionsResponse
{

    /**
     * @var TermsAndConditionsResponseData $GetTermsAndConditionsResult
     */
    protected $GetTermsAndConditionsResult = null;

    /**
     * @param TermsAndConditionsResponseData $GetTermsAndConditionsResult
     */
    public function __construct($GetTermsAndConditionsResult)
    {
      $this->GetTermsAndConditionsResult = $GetTermsAndConditionsResult;
    }

    /**
     * @return TermsAndConditionsResponseData
     */
    public function getGetTermsAndConditionsResult()
    {
      return $this->GetTermsAndConditionsResult;
    }

    /**
     * @param TermsAndConditionsResponseData $GetTermsAndConditionsResult
     * @return \App\models\ATSFlight\GetTermsAndConditionsResponse
     */
    public function setGetTermsAndConditionsResult($GetTermsAndConditionsResult)
    {
      $this->GetTermsAndConditionsResult = $GetTermsAndConditionsResult;
      return $this;
    }

}
