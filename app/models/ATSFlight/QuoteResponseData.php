<?php

namespace App\models\ATSFlight;

class QuoteResponseData
{

    /**
     * @var ArrayOfQuoteResponseFare $Fares
     */
    protected $Fares = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var ArrayOfServicePriceData $ServicePrices
     */
    protected $ServicePrices = null;

    /**
     * @var ArrayOfServiceData $Services
     */
    protected $Services = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfQuoteResponseFare
     */
    public function getFares()
    {
      return $this->Fares;
    }

    /**
     * @param ArrayOfQuoteResponseFare $Fares
     * @return \App\models\ATSFlight\QuoteResponseData
     */
    public function setFares($Fares)
    {
      $this->Fares = $Fares;
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
     * @return \App\models\ATSFlight\QuoteResponseData
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
     * @return \App\models\ATSFlight\QuoteResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return ArrayOfServicePriceData
     */
    public function getServicePrices()
    {
      return $this->ServicePrices;
    }

    /**
     * @param ArrayOfServicePriceData $ServicePrices
     * @return \App\models\ATSFlight\QuoteResponseData
     */
    public function setServicePrices($ServicePrices)
    {
      $this->ServicePrices = $ServicePrices;
      return $this;
    }

    /**
     * @return ArrayOfServiceData
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfServiceData $Services
     * @return \App\models\ATSFlight\QuoteResponseData
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\QuoteResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
