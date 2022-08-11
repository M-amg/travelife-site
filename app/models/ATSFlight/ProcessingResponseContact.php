<?php

namespace App\models\ATSFlight;

class ProcessingResponseContact
{

    /**
     * @var string $Type
     */
    protected $Type = null;

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
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \App\models\ATSFlight\ProcessingResponseContact
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \App\models\ATSFlight\ProcessingResponseContact
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
