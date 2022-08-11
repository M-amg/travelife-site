<?php

namespace App\models\ATSFlight;

class RoutingResponseStop
{

    /**
     * @var DirectionEnum $Direction
     */
    protected $Direction = null;

    /**
     * @var ArrayOfRoutingResponseLocation $Locations
     */
    protected $Locations = null;

    /**
     * @var ArrayOfRoutingResponsePassenger $Passengers
     */
    protected $Passengers = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\RoutingResponseStop
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponseLocation
     */
    public function getLocations()
    {
      return $this->Locations;
    }

    /**
     * @param ArrayOfRoutingResponseLocation $Locations
     * @return \App\models\ATSFlight\RoutingResponseStop
     */
    public function setLocations($Locations)
    {
      $this->Locations = $Locations;
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
     * @return \App\models\ATSFlight\RoutingResponseStop
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

}
