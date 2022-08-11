<?php

namespace App\models\ATSFlight;

class AvailabilityResponseData
{

    /**
     * @var ArrayOfAvailabilityResponseLegType $LegType
     */
    protected $LegType = null;

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

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAvailabilityResponseLegType
     */
    public function getLegType()
    {
      return $this->LegType;
    }

    /**
     * @param ArrayOfAvailabilityResponseLegType $LegType
     * @return \App\models\ATSFlight\AvailabilityResponseData
     */
    public function setLegType($LegType)
    {
      $this->LegType = $LegType;
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
     * @return \App\models\ATSFlight\AvailabilityResponseData
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
     * @return \App\models\ATSFlight\AvailabilityResponseData
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
     * @return \App\models\ATSFlight\AvailabilityResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
