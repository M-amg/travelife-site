<?php

namespace App\models\ATSFlight;

class EnhancedFeederSearch
{

    /**
     * @var int $EFSearchMaxMoveDowns
     */
    protected $EFSearchMaxMoveDowns = null;

    /**
     * @var EnhancedFeederSearchModeEnum $EFSearchMode
     */
    protected $EFSearchMode = null;

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
    public function getEFSearchMaxMoveDowns()
    {
      return $this->EFSearchMaxMoveDowns;
    }

    /**
     * @param int $EFSearchMaxMoveDowns
     * @return \App\models\ATSFlight\EnhancedFeederSearch
     */
    public function setEFSearchMaxMoveDowns($EFSearchMaxMoveDowns)
    {
      $this->EFSearchMaxMoveDowns = $EFSearchMaxMoveDowns;
      return $this;
    }

    /**
     * @return EnhancedFeederSearchModeEnum
     */
    public function getEFSearchMode()
    {
      return $this->EFSearchMode;
    }

    /**
     * @param EnhancedFeederSearchModeEnum $EFSearchMode
     * @return \App\models\ATSFlight\EnhancedFeederSearch
     */
    public function setEFSearchMode($EFSearchMode)
    {
      $this->EFSearchMode = $EFSearchMode;
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
     * @return \App\models\ATSFlight\EnhancedFeederSearch
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
     * @return \App\models\ATSFlight\EnhancedFeederSearch
     */
    public function setMinConnectionTime($MinConnectionTime)
    {
      $this->MinConnectionTime = $MinConnectionTime;
      return $this;
    }

}
