<?php

namespace App\models\ATSFlight;

class PNRResponsePhone
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\PNRResponsePhone
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \App\models\ATSFlight\PNRResponsePhone
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
