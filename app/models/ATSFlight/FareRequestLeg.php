<?php

namespace App\models\ATSFlight;

class FareRequestLeg
{

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var int $ArrivalSearchRadius
     */
    protected $ArrivalSearchRadius = null;

    /**
     * @var duration $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var ArrayOfstring $Arrivals
     */
    protected $Arrivals = null;

    /**
     * @var ClassTypeEnum $Class
     */
    protected $Class = null;

    /**
     * @var ArrayOfFareRequestConnection $Connections
     */
    protected $Connections = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $DepartureSearchRadius
     */
    protected $DepartureSearchRadius = null;

    /**
     * @var duration $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var ArrayOfstring $Departures
     */
    protected $Departures = null;

    /**
     * @var boolean $DisableArrivalCodeTranslation
     */
    protected $DisableArrivalCodeTranslation = null;

    /**
     * @var boolean $DisableDepartureCodeTranslation
     */
    protected $DisableDepartureCodeTranslation = null;

    /**
     * @var boolean $ExcludeFlightNumbers
     */
    protected $ExcludeFlightNumbers = null;

    /**
     * @var ArrayOfstring $FlightNumbers
     */
    protected $FlightNumbers = null;

    /**
     * @var FareRequestStay $Stay
     */
    protected $Stay = null;

    /**
     * @var int $TimeWindow
     */
    protected $TimeWindow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
      if ($this->ArrivalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setArrivalDate(\DateTime $ArrivalDate = null)
    {
      if ($ArrivalDate == null) {
       $this->ArrivalDate = null;
      } else {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getArrivalSearchRadius()
    {
      return $this->ArrivalSearchRadius;
    }

    /**
     * @param int $ArrivalSearchRadius
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setArrivalSearchRadius($ArrivalSearchRadius)
    {
      $this->ArrivalSearchRadius = $ArrivalSearchRadius;
      return $this;
    }

    /**
     * @return duration
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param duration $ArrivalTime
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getArrivals()
    {
      return $this->Arrivals;
    }

    /**
     * @param ArrayOfstring $Arrivals
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setArrivals($Arrivals)
    {
      $this->Arrivals = $Arrivals;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param ClassTypeEnum $Class
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return ArrayOfFareRequestConnection
     */
    public function getConnections()
    {
      return $this->Connections;
    }

    /**
     * @param ArrayOfFareRequestConnection $Connections
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setConnections($Connections)
    {
      $this->Connections = $Connections;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
      if ($this->DepartureDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setDepartureDate(\DateTime $DepartureDate = null)
    {
      if ($DepartureDate == null) {
       $this->DepartureDate = null;
      } else {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getDepartureSearchRadius()
    {
      return $this->DepartureSearchRadius;
    }

    /**
     * @param int $DepartureSearchRadius
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setDepartureSearchRadius($DepartureSearchRadius)
    {
      $this->DepartureSearchRadius = $DepartureSearchRadius;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param duration $DepartureTime
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDepartures()
    {
      return $this->Departures;
    }

    /**
     * @param ArrayOfstring $Departures
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setDepartures($Departures)
    {
      $this->Departures = $Departures;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableArrivalCodeTranslation()
    {
      return $this->DisableArrivalCodeTranslation;
    }

    /**
     * @param boolean $DisableArrivalCodeTranslation
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setDisableArrivalCodeTranslation($DisableArrivalCodeTranslation)
    {
      $this->DisableArrivalCodeTranslation = $DisableArrivalCodeTranslation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableDepartureCodeTranslation()
    {
      return $this->DisableDepartureCodeTranslation;
    }

    /**
     * @param boolean $DisableDepartureCodeTranslation
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setDisableDepartureCodeTranslation($DisableDepartureCodeTranslation)
    {
      $this->DisableDepartureCodeTranslation = $DisableDepartureCodeTranslation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeFlightNumbers()
    {
      return $this->ExcludeFlightNumbers;
    }

    /**
     * @param boolean $ExcludeFlightNumbers
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setExcludeFlightNumbers($ExcludeFlightNumbers)
    {
      $this->ExcludeFlightNumbers = $ExcludeFlightNumbers;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFlightNumbers()
    {
      return $this->FlightNumbers;
    }

    /**
     * @param ArrayOfstring $FlightNumbers
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setFlightNumbers($FlightNumbers)
    {
      $this->FlightNumbers = $FlightNumbers;
      return $this;
    }

    /**
     * @return FareRequestStay
     */
    public function getStay()
    {
      return $this->Stay;
    }

    /**
     * @param FareRequestStay $Stay
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setStay($Stay)
    {
      $this->Stay = $Stay;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeWindow()
    {
      return $this->TimeWindow;
    }

    /**
     * @param int $TimeWindow
     * @return \App\models\ATSFlight\FareRequestLeg
     */
    public function setTimeWindow($TimeWindow)
    {
      $this->TimeWindow = $TimeWindow;
      return $this;
    }

}
