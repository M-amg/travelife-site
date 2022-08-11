<?php

namespace App\models\ATSFlight;

class ModifyRequestvFMacro
{

    /**
     * @var MacroActionCodeEnum $ActionCode
     */
    protected $ActionCode = null;

    /**
     * @var string $Command
     */
    protected $Command = null;

    /**
     * @var string $Header
     */
    protected $Header = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param MacroActionCodeEnum $ActionCode
     */
    public function __construct($ActionCode)
    {
      $this->ActionCode = $ActionCode;
    }

    /**
     * @return MacroActionCodeEnum
     */
    public function getActionCode()
    {
      return $this->ActionCode;
    }

    /**
     * @param MacroActionCodeEnum $ActionCode
     * @return \App\models\ATSFlight\ModifyRequestvFMacro
     */
    public function setActionCode($ActionCode)
    {
      $this->ActionCode = $ActionCode;
      return $this;
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
     * @return \App\models\ATSFlight\ModifyRequestvFMacro
     */
    public function setCommand($Command)
    {
      $this->Command = $Command;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param string $Header
     * @return \App\models\ATSFlight\ModifyRequestvFMacro
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \App\models\ATSFlight\ModifyRequestvFMacro
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
