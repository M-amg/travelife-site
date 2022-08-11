<?php

namespace App\models\ATSFlight;

class SharedPrice
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var boolean $IsIATA
     */
    protected $IsIATA = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\SharedPrice
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIATA()
    {
      return $this->IsIATA;
    }

    /**
     * @param boolean $IsIATA
     * @return \App\models\ATSFlight\SharedPrice
     */
    public function setIsIATA($IsIATA)
    {
      $this->IsIATA = $IsIATA;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \App\models\ATSFlight\SharedPrice
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
