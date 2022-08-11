<?php

namespace App\models\ATSFlight;

class ModuleResponseData
{

    /**
     * @var int $ModuleListenPort
     */
    protected $ModuleListenPort = null;

    /**
     * @var string $ModuleMachineName
     */
    protected $ModuleMachineName = null;

    /**
     * @var string $ModuleTransactionID
     */
    protected $ModuleTransactionID = null;

    /**
     * @var string $ModuleVersion
     */
    protected $ModuleVersion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getModuleListenPort()
    {
      return $this->ModuleListenPort;
    }

    /**
     * @param int $ModuleListenPort
     * @return \App\models\ATSFlight\ModuleResponseData
     */
    public function setModuleListenPort($ModuleListenPort)
    {
      $this->ModuleListenPort = $ModuleListenPort;
      return $this;
    }

    /**
     * @return string
     */
    public function getModuleMachineName()
    {
      return $this->ModuleMachineName;
    }

    /**
     * @param string $ModuleMachineName
     * @return \App\models\ATSFlight\ModuleResponseData
     */
    public function setModuleMachineName($ModuleMachineName)
    {
      $this->ModuleMachineName = $ModuleMachineName;
      return $this;
    }

    /**
     * @return string
     */
    public function getModuleTransactionID()
    {
      return $this->ModuleTransactionID;
    }

    /**
     * @param string $ModuleTransactionID
     * @return \App\models\ATSFlight\ModuleResponseData
     */
    public function setModuleTransactionID($ModuleTransactionID)
    {
      $this->ModuleTransactionID = $ModuleTransactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getModuleVersion()
    {
      return $this->ModuleVersion;
    }

    /**
     * @param string $ModuleVersion
     * @return \App\models\ATSFlight\ModuleResponseData
     */
    public function setModuleVersion($ModuleVersion)
    {
      $this->ModuleVersion = $ModuleVersion;
      return $this;
    }

}
