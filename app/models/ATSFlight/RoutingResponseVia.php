<?php

namespace App\models\ATSFlight;

class RoutingResponseVia
{

    /**
     * @var DirectionEnum $Direction
     */
    protected $Direction = null;

    /**
     * @var boolean $IsDirectFlight
     */
    protected $IsDirectFlight = null;

    /**
     * @var ArrayOfRoutingResponseLocation $Locations
     */
    protected $Locations = null;

    
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
     * @return \App\models\ATSFlight\RoutingResponseVia
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDirectFlight()
    {
      return $this->IsDirectFlight;
    }

    /**
     * @param boolean $IsDirectFlight
     * @return \App\models\ATSFlight\RoutingResponseVia
     */
    public function setIsDirectFlight($IsDirectFlight)
    {
      $this->IsDirectFlight = $IsDirectFlight;
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
     * @return \App\models\ATSFlight\RoutingResponseVia
     */
    public function setLocations($Locations)
    {
      $this->Locations = $Locations;
      return $this;
    }

}
