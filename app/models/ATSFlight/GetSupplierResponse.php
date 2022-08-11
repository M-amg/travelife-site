<?php

namespace App\models\ATSFlight;

class GetSupplierResponse
{

    /**
     * @var SupplierResponseData $GetSupplierResult
     */
    protected $GetSupplierResult = null;

    /**
     * @param SupplierResponseData $GetSupplierResult
     */
    public function __construct($GetSupplierResult)
    {
      $this->GetSupplierResult = $GetSupplierResult;
    }

    /**
     * @return SupplierResponseData
     */
    public function getGetSupplierResult()
    {
      return $this->GetSupplierResult;
    }

    /**
     * @param SupplierResponseData $GetSupplierResult
     * @return \App\models\ATSFlight\GetSupplierResponse
     */
    public function setGetSupplierResult($GetSupplierResult)
    {
      $this->GetSupplierResult = $GetSupplierResult;
      return $this;
    }

}
