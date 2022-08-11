<?php

namespace App\models\ATSFlight;

class CacheDurationDefinition
{

    /**
     * @var CommandEnum $Command
     */
    protected $Command = null;

    /**
     * @var duration $Duration
     */
    protected $Duration = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var boolean $bCacheFAPISource
     */
    protected $bCacheFAPISource = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CommandEnum
     */
    public function getCommand()
    {
      return $this->Command;
    }

    /**
     * @param CommandEnum $Command
     * @return \App\models\ATSFlight\CacheDurationDefinition
     */
    public function setCommand($Command)
    {
      $this->Command = $Command;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param duration $Duration
     * @return \App\models\ATSFlight\CacheDurationDefinition
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
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
     * @return \App\models\ATSFlight\CacheDurationDefinition
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBCacheFAPISource()
    {
      return $this->bCacheFAPISource;
    }

    /**
     * @param boolean $bCacheFAPISource
     * @return \App\models\ATSFlight\CacheDurationDefinition
     */
    public function setBCacheFAPISource($bCacheFAPISource)
    {
      $this->bCacheFAPISource = $bCacheFAPISource;
      return $this;
    }

}
