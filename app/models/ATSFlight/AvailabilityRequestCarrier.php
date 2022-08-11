<?php

namespace App\models\ATSFlight;

class AvailabilityRequestCarrier
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    
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
     * @return \App\models\ATSFlight\AvailabilityRequestCarrier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param string $FlightNumber
     * @return \App\models\ATSFlight\AvailabilityRequestCarrier
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}
