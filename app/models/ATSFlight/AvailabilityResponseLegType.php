<?php

namespace App\models\ATSFlight;

class AvailabilityResponseLegType
{

    /**
     * @var string $Airline
     */
    protected $Airline = null;

    /**
     * @var ArrayOfAvailabilityResponseAlternativeType $AlternativeType
     */
    protected $AlternativeType = null;

    /**
     * @var string $Direction
     */
    protected $Direction = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAirline()
    {
      return $this->Airline;
    }

    /**
     * @param string $Airline
     * @return \App\models\ATSFlight\AvailabilityResponseLegType
     */
    public function setAirline($Airline)
    {
      $this->Airline = $Airline;
      return $this;
    }

    /**
     * @return ArrayOfAvailabilityResponseAlternativeType
     */
    public function getAlternativeType()
    {
      return $this->AlternativeType;
    }

    /**
     * @param ArrayOfAvailabilityResponseAlternativeType $AlternativeType
     * @return \App\models\ATSFlight\AvailabilityResponseLegType
     */
    public function setAlternativeType($AlternativeType)
    {
      $this->AlternativeType = $AlternativeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param string $Direction
     * @return \App\models\ATSFlight\AvailabilityResponseLegType
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
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
     * @return \App\models\ATSFlight\AvailabilityResponseLegType
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

}
