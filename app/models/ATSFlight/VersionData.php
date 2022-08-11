<?php

namespace App\models\ATSFlight;

class VersionData
{

    /**
     * @var string $ModuleName
     */
    protected $ModuleName = null;

    /**
     * @var Version $ModuleVersion
     */
    protected $ModuleVersion = null;

    
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
     * @return \App\models\ATSFlight\VersionData
     */
    public function setModuleName($ModuleName)
    {
      $this->ModuleName = $ModuleName;
      return $this;
    }

    /**
     * @return Version
     */
    public function getModuleVersion()
    {
      return $this->ModuleVersion;
    }

    /**
     * @param Version $ModuleVersion
     * @return \App\models\ATSFlight\VersionData
     */
    public function setModuleVersion($ModuleVersion)
    {
      $this->ModuleVersion = $ModuleVersion;
      return $this;
    }

}
