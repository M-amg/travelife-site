<?php

namespace App\models\ATSFlight;

class ModifyResponsevfMacro
{

    /**
     * @var MacroActionCodeEnum $ActionCode
     */
    protected $ActionCode = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\ModifyResponsevfMacro
     */
    public function setActionCode($ActionCode)
    {
      $this->ActionCode = $ActionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ModifyResponsevfMacro
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\ModifyResponsevfMacro
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \App\models\ATSFlight\ModifyResponsevfMacro
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
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
     * @return \App\models\ATSFlight\ModifyResponsevfMacro
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
