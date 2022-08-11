<?php

namespace App\models\ATSFlight;

class CorporateResponseData
{

    /**
     * @var ArrayOfCorporateCarrierData $CorporateCodes
     */
    protected $CorporateCodes = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCorporateCarrierData
     */
    public function getCorporateCodes()
    {
      return $this->CorporateCodes;
    }

    /**
     * @param ArrayOfCorporateCarrierData $CorporateCodes
     * @return \App\models\ATSFlight\CorporateResponseData
     */
    public function setCorporateCodes($CorporateCodes)
    {
      $this->CorporateCodes = $CorporateCodes;
      return $this;
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\CorporateResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\CorporateResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

}
