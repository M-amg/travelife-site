<?php

namespace App\models\ATSFlight;

class DisplayRequestLeg
{

    /**
     * @var int $ArrivalSearchRadius
     */
    protected $ArrivalSearchRadius = null;

    /**
     * @var ArrayOfstring $Arrivals
     */
    protected $Arrivals = null;

    /**
     * @var ClassTypeEnum $Class
     */
    protected $Class = null;

    /**
     * @var ArrayOfDisplayRequestConnection $Connections
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
     * @var DisplayRequestStay $Stay
     */
    protected $Stay = null;

    /**
     * @param \DateTime $DepartureDate
     */
    public function __construct(\DateTime $DepartureDate)
    {
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
     */
    public function setArrivalSearchRadius($ArrivalSearchRadius)
    {
      $this->ArrivalSearchRadius = $ArrivalSearchRadius;
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return ArrayOfDisplayRequestConnection
     */
    public function getConnections()
    {
      return $this->Connections;
    }

    /**
     * @param ArrayOfDisplayRequestConnection $Connections
     * @return \App\models\ATSFlight\DisplayRequestLeg
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
     */
    public function setDepartureSearchRadius($DepartureSearchRadius)
    {
      $this->DepartureSearchRadius = $DepartureSearchRadius;
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
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
     * @return \App\models\ATSFlight\DisplayRequestLeg
     */
    public function setDisableDepartureCodeTranslation($DisableDepartureCodeTranslation)
    {
      $this->DisableDepartureCodeTranslation = $DisableDepartureCodeTranslation;
      return $this;
    }

    /**
     * @return DisplayRequestStay
     */
    public function getStay()
    {
      return $this->Stay;
    }

    /**
     * @param DisplayRequestStay $Stay
     * @return \App\models\ATSFlight\DisplayRequestLeg
     */
    public function setStay($Stay)
    {
      $this->Stay = $Stay;
      return $this;
    }

}
