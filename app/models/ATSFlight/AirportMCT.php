<?php

namespace App\models\ATSFlight;

class AirportMCT
{

    /**
     * @var string $AirportCode
     */
    protected $AirportCode = null;

    /**
     * @var int $MCT
     */
    protected $MCT = null;

    /**
     * @param int $MCT
     */
    public function __construct($MCT)
    {
      $this->MCT = $MCT;
    }

    /**
     * @return string
     */
    public function getAirportCode()
    {
      return $this->AirportCode;
    }

    /**
     * @param string $AirportCode
     * @return \App\models\ATSFlight\AirportMCT
     */
    public function setAirportCode($AirportCode)
    {
      $this->AirportCode = $AirportCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getMCT()
    {
      return $this->MCT;
    }

    /**
     * @param int $MCT
     * @return \App\models\ATSFlight\AirportMCT
     */
    public function setMCT($MCT)
    {
      $this->MCT = $MCT;
      return $this;
    }

}
