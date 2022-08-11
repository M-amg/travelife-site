<?php

namespace App\models\ATSFlight;

class ValidateFlightDateResponseData
{

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var SharedPrice $Surcharge
     */
    protected $Surcharge = null;

    
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
     * @return \App\models\ATSFlight\ValidateFlightDateResponseData
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
     * @return \App\models\ATSFlight\ValidateFlightDateResponseData
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
     * @return \App\models\ATSFlight\ValidateFlightDateResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getSurcharge()
    {
      return $this->Surcharge;
    }

    /**
     * @param SharedPrice $Surcharge
     * @return \App\models\ATSFlight\ValidateFlightDateResponseData
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

}
