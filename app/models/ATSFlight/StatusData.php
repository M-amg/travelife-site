<?php

namespace App\models\ATSFlight;

class StatusData
{

    /**
     * @var string $ModuleName
     */
    protected $ModuleName = null;

    /**
     * @var StatusEnum $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getModuleName()
    {
      return $this->ModuleName;
    }

    /**
     * @param string $ModuleName
     * @return \App\models\ATSFlight\StatusData
     */
    public function setModuleName($ModuleName)
    {
      $this->ModuleName = $ModuleName;
      return $this;
    }

    /**
     * @return StatusEnum
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StatusEnum $Status
     * @return \App\models\ATSFlight\StatusData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
