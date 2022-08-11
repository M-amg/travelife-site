<?php

namespace App\models\ATSFlight;

class ModifyRequestFF
{

    /**
     * @var string $AirlineCode
     */
    protected $AirlineCode = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var ArrayOfint $Segments
     */
    protected $Segments = null;

    
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
     * @return \App\models\ATSFlight\ModifyRequestFF
     */
    public function setAirlineCode($AirlineCode)
    {
      $this->AirlineCode = $AirlineCode;
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
     * @return \App\models\ATSFlight\ModifyRequestFF
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfint $Segments
     * @return \App\models\ATSFlight\ModifyRequestFF
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
