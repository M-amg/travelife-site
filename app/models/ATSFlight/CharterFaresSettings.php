<?php

namespace App\models\ATSFlight;

class CharterFaresSettings
{

    /**
     * @var ArrayOfstring $Hosts
     */
    protected $Hosts = null;

    /**
     * @var string $IP
     */
    protected $IP = null;

    /**
     * @var int $MaxNumberAvailChecks
     */
    protected $MaxNumberAvailChecks = null;

    /**
     * @var int $MaxNumberOfAvailableFares
     */
    protected $MaxNumberOfAvailableFares = null;

    /**
     * @var int $MaxNumberOfCharterFares
     */
    protected $MaxNumberOfCharterFares = null;

    /**
     * @var int $MaxNumberOfConcurrentAvails
     */
    protected $MaxNumberOfConcurrentAvails = null;

    /**
     * @var int $Port
     */
    protected $Port = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getHosts()
    {
      return $this->Hosts;
    }

    /**
     * @param ArrayOfstring $Hosts
     * @return \App\models\ATSFlight\CharterFaresSettings
     */
    public function setHosts($Hosts)
    {
      $this->Hosts = $Hosts;
      return $this;
    }

    /**
     * @return string
     */
    public function getIP()
    {
      return $this->IP;
    }

    /**
     * @param string $IP
     * @return \App\models\ATSFlight\CharterFaresSettings
     */
    public function setIP($IP)
    {
      $this->IP = $IP;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberAvailChecks()
    {
      return $this->MaxNumberAvailChecks;
    }

    /**
     * @param int $MaxNumberAvailChecks
     * @return \App\models\ATSFlight\CharterFaresSettings
     */
    public function setMaxNumberAvailChecks($MaxNumberAvailChecks)
    {
      $this->MaxNumberAvailChecks = $MaxNumberAvailChecks;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfAvailableFares()
    {
      return $this->MaxNumberOfAvailableFares;
    }

    /**
     * @param int $MaxNumberOfAvailableFares
     * @return \App\models\ATSFlight\CharterFaresSettings
     */
    public function setMaxNumberOfAvailableFares($MaxNumberOfAvailableFares)
    {
      $this->MaxNumberOfAvailableFares = $MaxNumberOfAvailableFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfCharterFares()
    {
      return $this->MaxNumberOfCharterFares;
    }

    /**
     * @param int $MaxNumberOfCharterFares
     * @return \App\models\ATSFlight\CharterFaresSettings
     */
    public function setMaxNumberOfCharterFares($MaxNumberOfCharterFares)
    {
      $this->MaxNumberOfCharterFares = $MaxNumberOfCharterFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfConcurrentAvails()
    {
      return $this->MaxNumberOfConcurrentAvails;
    }

    /**
     * @param int $MaxNumberOfConcurrentAvails
     * @return \App\models\ATSFlight\CharterFaresSettings
     */
    public function setMaxNumberOfConcurrentAvails($MaxNumberOfConcurrentAvails)
    {
      $this->MaxNumberOfConcurrentAvails = $MaxNumberOfConcurrentAvails;
      return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
      return $this->Port;
    }

    /**
     * @param int $Port
     * @return \App\models\ATSFlight\CharterFaresSettings
     */
    public function setPort($Port)
    {
      $this->Port = $Port;
      return $this;
    }

}
