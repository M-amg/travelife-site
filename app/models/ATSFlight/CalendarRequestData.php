<?php

namespace App\models\ATSFlight;

class CalendarRequestData
{

    /**
     * @var ArrayOfRequestCarrierData $Carriers
     */
    protected $Carriers = null;

    /**
     * @var CalendarRequestConfigData $Configuration
     */
    protected $Configuration = null;

    /**
     * @var RequestFareData $Fare
     */
    protected $Fare = null;

    /**
     * @var ArrayOfRequestLegData $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfRequestPassengerData $Passengers
     */
    protected $Passengers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRequestCarrierData
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfRequestCarrierData $Carriers
     * @return \App\models\ATSFlight\CalendarRequestData
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return CalendarRequestConfigData
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param CalendarRequestConfigData $Configuration
     * @return \App\models\ATSFlight\CalendarRequestData
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return RequestFareData
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param RequestFareData $Fare
     * @return \App\models\ATSFlight\CalendarRequestData
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
      return $this;
    }

    /**
     * @return ArrayOfRequestLegData
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfRequestLegData $Legs
     * @return \App\models\ATSFlight\CalendarRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfRequestPassengerData
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfRequestPassengerData $Passengers
     * @return \App\models\ATSFlight\CalendarRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

}
