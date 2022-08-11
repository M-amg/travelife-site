<?php

namespace App\models\ATSFlight;

class EnhancedFeederSearchSetting
{

    /**
     * @var int $EFSMaxMoveDowns
     */
    protected $EFSMaxMoveDowns = null;

    /**
     * @var EnhancedFeederSearchModeEnum $EFSSearchMode
     */
    protected $EFSSearchMode = null;

    /**
     * @var boolean $IsAllowed
     */
    protected $IsAllowed = null;

    /**
     * @var duration $MaxConnectionTime
     */
    protected $MaxConnectionTime = null;

    /**
     * @var duration $MinConnectionTime
     */
    protected $MinConnectionTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getEFSMaxMoveDowns()
    {
      return $this->EFSMaxMoveDowns;
    }

    /**
     * @param int $EFSMaxMoveDowns
     * @return \App\models\ATSFlight\EnhancedFeederSearchSetting
     */
    public function setEFSMaxMoveDowns($EFSMaxMoveDowns)
    {
      $this->EFSMaxMoveDowns = $EFSMaxMoveDowns;
      return $this;
    }

    /**
     * @return EnhancedFeederSearchModeEnum
     */
    public function getEFSSearchMode()
    {
      return $this->EFSSearchMode;
    }

    /**
     * @param EnhancedFeederSearchModeEnum $EFSSearchMode
     * @return \App\models\ATSFlight\EnhancedFeederSearchSetting
     */
    public function setEFSSearchMode($EFSSearchMode)
    {
      $this->EFSSearchMode = $EFSSearchMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllowed()
    {
      return $this->IsAllowed;
    }

    /**
     * @param boolean $IsAllowed
     * @return \App\models\ATSFlight\EnhancedFeederSearchSetting
     */
    public function setIsAllowed($IsAllowed)
    {
      $this->IsAllowed = $IsAllowed;
      return $this;
    }

    /**
     * @return duration
     */
    public function getMaxConnectionTime()
    {
      return $this->MaxConnectionTime;
    }

    /**
     * @param duration $MaxConnectionTime
     * @return \App\models\ATSFlight\EnhancedFeederSearchSetting
     */
    public function setMaxConnectionTime($MaxConnectionTime)
    {
      $this->MaxConnectionTime = $MaxConnectionTime;
      return $this;
    }

    /**
     * @return duration
     */
    public function getMinConnectionTime()
    {
      return $this->MinConnectionTime;
    }

    /**
     * @param duration $MinConnectionTime
     * @return \App\models\ATSFlight\EnhancedFeederSearchSetting
     */
    public function setMinConnectionTime($MinConnectionTime)
    {
      $this->MinConnectionTime = $MinConnectionTime;
      return $this;
    }

}
