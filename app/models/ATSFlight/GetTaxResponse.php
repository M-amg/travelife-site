<?php

namespace App\models\ATSFlight;

class GetTaxResponse
{

    /**
     * @var TaxResponseData $GetTaxResult
     */
    protected $GetTaxResult = null;

    /**
     * @param TaxResponseData $GetTaxResult
     */
    public function __construct($GetTaxResult)
    {
      $this->GetTaxResult = $GetTaxResult;
    }

    /**
     * @return TaxResponseData
     */
    public function getGetTaxResult()
    {
      return $this->GetTaxResult;
    }

    /**
     * @param TaxResponseData $GetTaxResult
     * @return \App\models\ATSFlight\GetTaxResponse
     */
    public function setGetTaxResult($GetTaxResult)
    {
      $this->GetTaxResult = $GetTaxResult;
      return $this;
    }

}
