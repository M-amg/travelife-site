<?php

namespace App\models\ATSFlight;

class RequestLegData
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
     * @var int $TimeWindow
     */
    protected $TimeWindow = null;

    /**
     * @var RequestToleranceData $Tolerance
     */
    protected $Tolerance = null;

    
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
     * @return \App\models\ATSFlight\RequestLegData
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
     * @return \App\models\ATSFlight\RequestLegData
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
     * @return \App\models\ATSFlight\RequestLegData
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
     * @return \App\models\ATSFlight\RequestLegData
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
     * @return \App\models\ATSFlight\RequestLegData
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
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
     * @return \App\models\ATSFlight\RequestLegData
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
     * @return \App\models\ATSFlight\RequestLegData
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
     * @return \App\models\ATSFlight\RequestLegData
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
     * @return \App\models\ATSFlight\RequestLegData
     */
    public function setDepartures($Departures)
    {
      $this->Departures = $Departures;
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
     * @return \App\models\ATSFlight\RequestLegData
     */
    public function setTimeWindow($TimeWindow)
    {
      $this->TimeWindow = $TimeWindow;
      return $this;
    }

    /**
     * @return RequestToleranceData
     */
    public function getTolerance()
    {
      return $this->Tolerance;
    }

    /**
     * @param RequestToleranceData $Tolerance
     * @return \App\models\ATSFlight\RequestLegData
     */
    public function setTolerance($Tolerance)
    {
      $this->Tolerance = $Tolerance;
      return $this;
    }

}
