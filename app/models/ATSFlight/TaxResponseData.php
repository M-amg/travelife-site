<?php

namespace App\models\ATSFlight;

class TaxResponseData
{

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfTaxResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\TaxResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfTaxResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfTaxResponsePassenger $Passengers
     * @return \App\models\ATSFlight\TaxResponseData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
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
     * @return \App\models\ATSFlight\TaxResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
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
     * @return \App\models\ATSFlight\TaxResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
