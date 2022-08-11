<?php

namespace App\models\ATSFlight;

class FareResponseUserData
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \App\models\ATSFlight\FareResponseUserData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \App\models\ATSFlight\FareResponseUserData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
