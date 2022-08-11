<?php

namespace App\models\ATSFlight;

class RoutingsResponseRouting
{

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var ArrayOfRoutingResponsePeriod $FlightDates
     */
    protected $FlightDates = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param string $Arrival
     * @return \App\models\ATSFlight\RoutingsResponseRouting
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\RoutingsResponseRouting
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param string $Departure
     * @return \App\models\ATSFlight\RoutingsResponseRouting
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponsePeriod
     */
    public function getFlightDates()
    {
      return $this->FlightDates;
    }

    /**
     * @param ArrayOfRoutingResponsePeriod $FlightDates
     * @return \App\models\ATSFlight\RoutingsResponseRouting
     */
    public function setFlightDates($FlightDates)
    {
      $this->FlightDates = $FlightDates;
      return $this;
    }

    /**
     * @return Agent
     */
    public function getWebAgent()
    {
      return $this->WebAgent;
    }

    /**
     * @param Agent $WebAgent
     * @return \App\models\ATSFlight\RoutingsResponseRouting
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
