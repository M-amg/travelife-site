<?php

namespace App\models\ATSFlight;

class FareRequestData
{

    /**
     * @var ArrayOfFareRequestCarrier $Carriers
     */
    protected $Carriers = null;

    /**
     * @var FareRequestConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var FareRequestFare $Fare
     */
    protected $Fare = null;

    /**
     * @var ArrayOfFareRequestLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfFareRequestPassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var FareRequestPricing $Pricing
     */
    protected $Pricing = null;

    /**
     * @var int $RequestID
     */
    protected $RequestID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFareRequestCarrier
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfFareRequestCarrier $Carriers
     * @return \App\models\ATSFlight\FareRequestData
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return FareRequestConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param FareRequestConfiguration $Configuration
     * @return \App\models\ATSFlight\FareRequestData
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return FareRequestFare
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param FareRequestFare $Fare
     * @return \App\models\ATSFlight\FareRequestData
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
      return $this;
    }

    /**
     * @return ArrayOfFareRequestLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfFareRequestLeg $Legs
     * @return \App\models\ATSFlight\FareRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfFareRequestPassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfFareRequestPassenger $Passengers
     * @return \App\models\ATSFlight\FareRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return FareRequestPricing
     */
    public function getPricing()
    {
      return $this->Pricing;
    }

    /**
     * @param FareRequestPricing $Pricing
     * @return \App\models\ATSFlight\FareRequestData
     */
    public function setPricing($Pricing)
    {
      $this->Pricing = $Pricing;
      return $this;
    }

    /**
     * @return int
     */
    public function getRequestID()
    {
      return $this->RequestID;
    }

    /**
     * @param int $RequestID
     * @return \App\models\ATSFlight\FareRequestData
     */
    public function setRequestID($RequestID)
    {
      $this->RequestID = $RequestID;
      return $this;
    }

}
