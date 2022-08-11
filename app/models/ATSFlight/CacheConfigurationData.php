<?php

namespace App\models\ATSFlight;

class CacheConfigurationData
{

    /**
     * @var boolean $CacheFailRequestMode
     */
    protected $CacheFailRequestMode = null;

    /**
     * @var duration $MaxCacheAge
     */
    protected $MaxCacheAge = null;

    /**
     * @var FareTypeEnum $SourceSystem
     */
    protected $SourceSystem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getCacheFailRequestMode()
    {
      return $this->CacheFailRequestMode;
    }

    /**
     * @param boolean $CacheFailRequestMode
     * @return \App\models\ATSFlight\CacheConfigurationData
     */
    public function setCacheFailRequestMode($CacheFailRequestMode)
    {
      $this->CacheFailRequestMode = $CacheFailRequestMode;
      return $this;
    }

    /**
     * @return duration
     */
    public function getMaxCacheAge()
    {
      return $this->MaxCacheAge;
    }

    /**
     * @param duration $MaxCacheAge
     * @return \App\models\ATSFlight\CacheConfigurationData
     */
    public function setMaxCacheAge($MaxCacheAge)
    {
      $this->MaxCacheAge = $MaxCacheAge;
      return $this;
    }

    /**
     * @return FareTypeEnum
     */
    public function getSourceSystem()
    {
      return $this->SourceSystem;
    }

    /**
     * @param FareTypeEnum $SourceSystem
     * @return \App\models\ATSFlight\CacheConfigurationData
     */
    public function setSourceSystem($SourceSystem)
    {
      $this->SourceSystem = $SourceSystem;
      return $this;
    }

}
