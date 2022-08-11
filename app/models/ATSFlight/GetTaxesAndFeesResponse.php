<?php

namespace App\models\ATSFlight;

class GetTaxesAndFeesResponse
{

    /**
     * @var TaxesAndFeesResponseData $GetTaxesAndFeesResult
     */
    protected $GetTaxesAndFeesResult = null;

    /**
     * @param TaxesAndFeesResponseData $GetTaxesAndFeesResult
     */
    public function __construct($GetTaxesAndFeesResult)
    {
      $this->GetTaxesAndFeesResult = $GetTaxesAndFeesResult;
    }

    /**
     * @return TaxesAndFeesResponseData
     */
    public function getGetTaxesAndFeesResult()
    {
      return $this->GetTaxesAndFeesResult;
    }

    /**
     * @param TaxesAndFeesResponseData $GetTaxesAndFeesResult
     * @return \App\models\ATSFlight\GetTaxesAndFeesResponse
     */
    public function setGetTaxesAndFeesResult($GetTaxesAndFeesResult)
    {
      $this->GetTaxesAndFeesResult = $GetTaxesAndFeesResult;
      return $this;
    }

}
