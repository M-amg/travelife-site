<?php

namespace App\models\ATSFlight;

class ResponseFlightData
{

    /**
     * @var string $CharterSource
     */
    protected $CharterSource = null;

    /**
     * @var ArrayOfLegData $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfResponsePassengerData $Passengers
     */
    protected $Passengers = null;

    /**
     * @var string $TourOperator
     */
    protected $TourOperator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCharterSource()
    {
      return $this->CharterSource;
    }

    /**
     * @param string $CharterSource
     * @return \App\models\ATSFlight\ResponseFlightData
     */
    public function setCharterSource($CharterSource)
    {
      $this->CharterSource = $CharterSource;
      return $this;
    }

    /**
     * @return ArrayOfLegData
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfLegData $Legs
     * @return \App\models\ATSFlight\ResponseFlightData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfResponsePassengerData
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfResponsePassengerData $Passengers
     * @return \App\models\ATSFlight\ResponseFlightData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourOperator()
    {
      return $this->TourOperator;
    }

    /**
     * @param string $TourOperator
     * @return \App\models\ATSFlight\ResponseFlightData
     */
    public function setTourOperator($TourOperator)
    {
      $this->TourOperator = $TourOperator;
      return $this;
    }

}
