<?php

namespace App\models\hotelAPI\Commons;

class GetServicesRS
{

    /**
     * @var Service[] $services
     */
    protected $services = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Service[]
     */
    public function getServices()
    {
      return $this->services;
    }

    /**
     * @param Service[] $services
     * @return \App\models\hotelAPI\Commons\GetServicesRS
     */
    public function setServices(array $services = null)
    {
      $this->services = $services;
      return $this;
    }

}
