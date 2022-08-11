<?php

namespace App\models\ATSFlight;

class DisplayResponseCodeValuePair
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\DisplayResponseCodeValuePair
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \App\models\ATSFlight\DisplayResponseCodeValuePair
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
