<?php

namespace App\models\ATSFlight;

class DetailsResponseData
{

    /**
     * @var ArrayOfDetailsResponseLeg $Legs
     */
    protected $Legs = null;

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
     * @var duration $TotalTravelTime
     */
    protected $TotalTravelTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDetailsResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfDetailsResponseLeg $Legs
     * @return \App\models\ATSFlight\DetailsResponseData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
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
     * @return \App\models\ATSFlight\DetailsResponseData
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
     * @return \App\models\ATSFlight\DetailsResponseData
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
     * @return \App\models\ATSFlight\DetailsResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTotalTravelTime()
    {
      return $this->TotalTravelTime;
    }

    /**
     * @param duration $TotalTravelTime
     * @return \App\models\ATSFlight\DetailsResponseData
     */
    public function setTotalTravelTime($TotalTravelTime)
    {
      $this->TotalTravelTime = $TotalTravelTime;
      return $this;
    }

}
