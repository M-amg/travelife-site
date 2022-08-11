<?php

namespace App\models\ATSFlight;

class RoutingResponseSegment
{

    /**
     * @var ArrayOfRoutingResponseLocation $Arrivals
     */
    protected $Arrivals = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var ArrayOfRoutingResponseLocation $Departures
     */
    protected $Departures = null;

    /**
     * @var DirectionEnum $Direction
     */
    protected $Direction = null;

    /**
     * @var int $FlightNumberRangeStart
     */
    protected $FlightNumberRangeStart = null;

    /**
     * @var int $FlightNumberRangeStop
     */
    protected $FlightNumberRangeStop = null;

    /**
     * @var boolean $IsDirectOnly
     */
    protected $IsDirectOnly = null;

    /**
     * @var ArrayOfRoutingResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ArrayOfRoutingResponseTime $Time
     */
    protected $Time = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRoutingResponseLocation
     */
    public function getArrivals()
    {
      return $this->Arrivals;
    }

    /**
     * @param ArrayOfRoutingResponseLocation $Arrivals
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setArrivals($Arrivals)
    {
      $this->Arrivals = $Arrivals;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponseLocation
     */
    public function getDepartures()
    {
      return $this->Departures;
    }

    /**
     * @param ArrayOfRoutingResponseLocation $Departures
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setDepartures($Departures)
    {
      $this->Departures = $Departures;
      return $this;
    }

    /**
     * @return DirectionEnum
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param DirectionEnum $Direction
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return int
     */
    public function getFlightNumberRangeStart()
    {
      return $this->FlightNumberRangeStart;
    }

    /**
     * @param int $FlightNumberRangeStart
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setFlightNumberRangeStart($FlightNumberRangeStart)
    {
      $this->FlightNumberRangeStart = $FlightNumberRangeStart;
      return $this;
    }

    /**
     * @return int
     */
    public function getFlightNumberRangeStop()
    {
      return $this->FlightNumberRangeStop;
    }

    /**
     * @param int $FlightNumberRangeStop
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setFlightNumberRangeStop($FlightNumberRangeStop)
    {
      $this->FlightNumberRangeStop = $FlightNumberRangeStop;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDirectOnly()
    {
      return $this->IsDirectOnly;
    }

    /**
     * @param boolean $IsDirectOnly
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setIsDirectOnly($IsDirectOnly)
    {
      $this->IsDirectOnly = $IsDirectOnly;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfRoutingResponsePassenger $Passengers
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponseTime
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param ArrayOfRoutingResponseTime $Time
     * @return \App\models\ATSFlight\RoutingResponseSegment
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
