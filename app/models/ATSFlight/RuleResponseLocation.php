<?php

namespace App\models\ATSFlight;

class RuleResponseLocation
{

    /**
     * @var string $AirportCode
     */
    protected $AirportCode = null;

    /**
     * @var string $AirportTitle
     */
    protected $AirportTitle = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\RuleResponseLocation
     */
    public function setAirportCode($AirportCode)
    {
      $this->AirportCode = $AirportCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirportTitle()
    {
      return $this->AirportTitle;
    }

    /**
     * @param string $AirportTitle
     * @return \App\models\ATSFlight\RuleResponseLocation
     */
    public function setAirportTitle($AirportTitle)
    {
      $this->AirportTitle = $AirportTitle;
      return $this;
    }

}
