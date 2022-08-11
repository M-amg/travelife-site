<?php

namespace App\models\ATSFlight;

class RoutingResponsePeriod
{

    /**
     * @var DaysOfWeekEnum $FlightDays
     */
    protected $FlightDays = null;

    /**
     * @var \DateTime $PeriodEnd
     */
    protected $PeriodEnd = null;

    /**
     * @var \DateTime $PeriodStart
     */
    protected $PeriodStart = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DaysOfWeekEnum
     */
    public function getFlightDays()
    {
      return $this->FlightDays;
    }

    /**
     * @param DaysOfWeekEnum $FlightDays
     * @return \App\models\ATSFlight\RoutingResponsePeriod
     */
    public function setFlightDays($FlightDays)
    {
      $this->FlightDays = $FlightDays;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodEnd()
    {
      if ($this->PeriodEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PeriodEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PeriodEnd
     * @return \App\models\ATSFlight\RoutingResponsePeriod
     */
    public function setPeriodEnd(\DateTime $PeriodEnd = null)
    {
      if ($PeriodEnd == null) {
       $this->PeriodEnd = null;
      } else {
        $this->PeriodEnd = $PeriodEnd->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodStart()
    {
      if ($this->PeriodStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PeriodStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PeriodStart
     * @return \App\models\ATSFlight\RoutingResponsePeriod
     */
    public function setPeriodStart(\DateTime $PeriodStart = null)
    {
      if ($PeriodStart == null) {
       $this->PeriodStart = null;
      } else {
        $this->PeriodStart = $PeriodStart->format(\DateTime::ATOM);
      }
      return $this;
    }

}
