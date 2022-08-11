<?php

namespace App\models\ATSFlight;

class DisplayRequestData
{

    /**
     * @var ArrayOfDisplayRequestCarrier $Carriers
     */
    protected $Carriers = null;

    /**
     * @var DisplayRequestConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var DisplayRequestFare $Fare
     */
    protected $Fare = null;

    /**
     * @var ArrayOfDisplayRequestLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfDisplayRequestPassenger $Passengers
     */
    protected $Passengers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDisplayRequestCarrier
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfDisplayRequestCarrier $Carriers
     * @return \App\models\ATSFlight\DisplayRequestData
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return DisplayRequestConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param DisplayRequestConfiguration $Configuration
     * @return \App\models\ATSFlight\DisplayRequestData
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return DisplayRequestFare
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param DisplayRequestFare $Fare
     * @return \App\models\ATSFlight\DisplayRequestData
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
      return $this;
    }

    /**
     * @return ArrayOfDisplayRequestLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfDisplayRequestLeg $Legs
     * @return \App\models\ATSFlight\DisplayRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfDisplayRequestPassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfDisplayRequestPassenger $Passengers
     * @return \App\models\ATSFlight\DisplayRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

}
