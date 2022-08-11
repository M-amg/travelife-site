<?php

namespace App\models\ATSFlight;

class ModifyResponseFF
{

    /**
     * @var string $AirlineCode
     */
    protected $AirlineCode = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAirlineCode()
    {
      return $this->AirlineCode;
    }

    /**
     * @param string $AirlineCode
     * @return \App\models\ATSFlight\ModifyResponseFF
     */
    public function setAirlineCode($AirlineCode)
    {
      $this->AirlineCode = $AirlineCode;
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
     * @return \App\models\ATSFlight\ModifyResponseFF
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\models\ATSFlight\ModifyResponseFF
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \App\models\ATSFlight\ModifyResponseFF
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
