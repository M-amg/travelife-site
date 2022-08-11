<?php

namespace App\models\ATSFlight;

class CacheInfoData
{

    /**
     * @var duration $CacheAge
     */
    protected $CacheAge = null;

    /**
     * @var boolean $Estimated
     */
    protected $Estimated = null;

    /**
     * @var string $GUID
     */
    protected $GUID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return duration
     */
    public function getCacheAge()
    {
      return $this->CacheAge;
    }

    /**
     * @param duration $CacheAge
     * @return \App\models\ATSFlight\CacheInfoData
     */
    public function setCacheAge($CacheAge)
    {
      $this->CacheAge = $CacheAge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEstimated()
    {
      return $this->Estimated;
    }

    /**
     * @param boolean $Estimated
     * @return \App\models\ATSFlight\CacheInfoData
     */
    public function setEstimated($Estimated)
    {
      $this->Estimated = $Estimated;
      return $this;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
      return $this->GUID;
    }

    /**
     * @param string $GUID
     * @return \App\models\ATSFlight\CacheInfoData
     */
    public function setGUID($GUID)
    {
      $this->GUID = $GUID;
      return $this;
    }

}
