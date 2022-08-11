<?php

namespace App\models\ATSFlight;

class CommandIPData
{

    /**
     * @var string $Command
     */
    protected $Command = null;

    /**
     * @var string $IPAddress
     */
    protected $IPAddress = null;

    /**
     * @var int $Port
     */
    protected $Port = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCommand()
    {
      return $this->Command;
    }

    /**
     * @param string $Command
     * @return \App\models\ATSFlight\CommandIPData
     */
    public function setCommand($Command)
    {
      $this->Command = $Command;
      return $this;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
      return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return \App\models\ATSFlight\CommandIPData
     */
    public function setIPAddress($IPAddress)
    {
      $this->IPAddress = $IPAddress;
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
     * @return \App\models\ATSFlight\CommandIPData
     */
    public function setPort($Port)
    {
      $this->Port = $Port;
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
     * @return \App\models\ATSFlight\CommandIPData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
