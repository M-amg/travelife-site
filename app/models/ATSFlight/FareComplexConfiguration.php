<?php

namespace App\models\ATSFlight;

class FareComplexConfiguration extends FareRequestConfiguration
{

    /**
     * @var int $ConfigurationID
     */
    protected $ConfigurationID = null;

    /**
     * @var string $ConfigurationName
     */
    protected $ConfigurationName = null;

    /**
     * @param int $ConfigurationID
     */
    public function __construct($ConfigurationID)
    {
      parent::__construct();
      $this->ConfigurationID = $ConfigurationID;
    }

    /**
     * @return int
     */
    public function getConfigurationID()
    {
      return $this->ConfigurationID;
    }

    /**
     * @param int $ConfigurationID
     * @return \App\models\ATSFlight\FareComplexConfiguration
     */
    public function setConfigurationID($ConfigurationID)
    {
      $this->ConfigurationID = $ConfigurationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfigurationName()
    {
      return $this->ConfigurationName;
    }

    /**
     * @param string $ConfigurationName
     * @return \App\models\ATSFlight\FareComplexConfiguration
     */
    public function setConfigurationName($ConfigurationName)
    {
      $this->ConfigurationName = $ConfigurationName;
      return $this;
    }

}
