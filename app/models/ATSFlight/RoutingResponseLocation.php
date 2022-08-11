<?php

namespace App\models\ATSFlight;

class RoutingResponseLocation
{

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var LocationTypeEnum $LocationType
     */
    protected $LocationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \App\models\ATSFlight\RoutingResponseLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return LocationTypeEnum
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param LocationTypeEnum $LocationType
     * @return \App\models\ATSFlight\RoutingResponseLocation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

}
